<?php namespace HusayMedia\Pulitico\Updates;

use Seeder;
use Str;
use HusayMedia\Pulitico\Models\Title;
use HusayMedia\Pulitico\Models\Position;
use HusayMedia\Pulitico\Models\Politician;
use HusayMedia\Pulitico\Models\Location;
use Log;
class SeedPoliticiansTable extends Seeder
{
				/**
				* DB table name
				*
				* @var string
				*/
			protected $table;
			/**
				* CSV filename
				*
				* @var string
				*/
			protected $filenames = array('executive.csv','legislative.csv','local.csv');
			/**
				* An SQL INSERT query will execute every time this number of rows
				* are read from the CSV. Without this, large INSERTS will silently
				* fail.
				*
				* @var integer
				*/
			protected $insert_chunk_size = 50;
			/**
				* CSV delimiter (defaults to ,)
				*
				* @var string
				*/
			protected $deliminator = ',';
    public function run()
    {

								$dummy_location = Location::where('name', '=', "Anywhere")->get()->first();
								foreach ($this->filenames as $file) {
												$filename = "/".trim(app_path(),'/app')."/plugins/husaymedia/pulitico/updates/".$file;
												traceLog('Tried Accessing '.$filename);


												if ( !file_exists($filename) || !is_readable($filename) ) continue;

												$header = NULL;
												$row_count = 0;
												$data = array();
												$location_id = $dummy_location->id;


												if ( ($handle = fopen($filename, 'r')) !== FALSE )
												{
																$title_super_parent = "";
																$office = FALSE;
																switch($file){
																				case "executive.csv": $title_super_parent = "Executive Branch"; break;
																				case "legislative.csv": $title_super_parent = "Legislative Branch"; break;
																				case "local.csv": $title_super_parent = "Local Government Units"; break;
																}
																$title_super_parent = Title::create([
																				'name'      => trim($title_super_parent),
																				'slug'      => Str::slug($title_super_parent)
																]);

																while ( ($row = fgetcsv($handle, 0, $this->deliminator)) !== FALSE )
																{

																				if ( !$header )
																				{
																								$header = $row;
																								$header[0] = $this->strip_utf8_bom($header[0]);
																				}
																				else
																				{
																								$i = 0;
																								$row_values = [];
																								foreach ($header as $key) {
																												if($key=="firstname" || $key=="middlename" || $key=="surname"){
																																$politician[$key] =  trim($row[$i]);
																												}

																												//$row_values[$key] = $row[$i];
																												if($key=="office" && strlen(trim($row[$i]))>0){
																														$office = Title::where('name', '=', trim($row[$i]))->get()->first();
																														if( !$office ){
																																		$office = Title::create([
																																						'name'      => trim($row[$i]),
																																						'slug'      => Str::slug($row[$i]),
																																						'parent_id'      => $title_super_parent->id
																																		]);
																														}
																												}
																												if($key=="title"){
																														if( !$office ){
																																$title = Title::where('name', '=', trim($row[$i]))->get()->first();
																																if( !$title ){
																																				$title = Title::create([
																																								'name'      => trim($row[$i]),
																																								'slug'      => Str::slug($row[$i]),
																																								'parent_id' => $title_super_parent->id
																																				]);
																																}
																														}else{
																																$title = Title::where('name', '=', trim($row[$i]))->where('parent_id', '=', $office->id)->get()->first();
																																if( !$title ){
																																				$title = Title::create([
																																								'name'      => trim($row[$i]),
																																								'slug'      => Str::slug($row[$i]),
																																								'parent_id'      => $office->id
																																				]);
																																}
																														}
																												}




																												if($key=="region" && !empty($row[$i])){
																														$region = Location::where('name', '=', trim($row[$i]))->where('type', '=', 'region')->get()->first();
																														$location_id = ( !$region ) ? $location_id : $region->id;

																												}
																												if($key=="province" && !empty($row[$i])){
																														$province = Location::where('name', '=', trim($row[$i]))->where('type', 'LIKE', 'province')->get()->first();
																														$location_id = ( !$province ) ? $location_id : $province->id;
																												}
																												if($key=="city" && !empty($row[$i])){
																														$city = Location::where('name', '=', trim($row[$i]))->where('type', 'LIKE', 'municipality')->get()->first();
																														$location_id = ( !$city ) ? $location_id : $city->id;
																												}

																												if($key=="city"){

																																$politician_object = Politician::create([
																																				'firstname' => $politician['firstname'],
																																				'middlename' => $politician['middlename'],
																																				'surname' => $politician['surname'],
																																				'slug' => Str::slug($politician['firstname']." ".$politician['middlename']." ".$politician['surname'])
																																]);
																																$position_object = Position::create([
																																							'title_id'      => $title->id,
																																							'location_id'			=> $location_id,
																																							'politician'			=> $politician_object->id,
																																							'status'								=> 'current'
																																]);

																												}
																												$i++;

																								}



																								//$data[$row_count] = $row_values;
																								// Chunk size reached, insert
																								/*
																								if ( ++$row_count == $this->insert_chunk_size )
																								{
																									$this->run_insert($data);
																									$row_count = 0;
																									//clear the data array explicitly when it was inserted so that nothing is left, otherwise a leftover scenario can cause duplicate inserts
																									$data = array();
																								}
																								*/
																				}



																}
																//if ( count($data)  ) $this->run_insert($data);
																				fclose($handle);

												}
								}
    }


    private function run_insert( array $seedData )
    {
								try {
								  DB::table($this->table)->insert($seedData);
								} catch (\Exception $e) {
												Log::error("CSV insert failed: " . $e->getMessage() . " - CSV " . $this->filename);
								}
    }

   /**
    * Strip UTF-8 BOM characters from the start of a string
    *
    * @param  string $text
    *
    * @return string       String with BOM stripped
    */
   private function strip_utf8_bom( $text )
   {
    $bom = pack('H*','EFBBBF');
    $text = preg_replace("/^$bom/", '', $text);
    return $text;
   }
}