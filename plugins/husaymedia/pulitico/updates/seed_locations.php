<?php namespace HusayMedia\Pulitico\Updates;
use Str;
use Seeder;
use HusayMedia\Pulitico\Models\Location;
use Goutte\Client;


class SeedLocationsTable extends Seeder
{
    //$logs = array();
        protected $regions = [];
        protected $nodes = array();
        protected $debug = 0;
        protected $test = "i am test";

        protected $province  = "";
        protected $province_object  = "";
        protected $index  = 0;
    public function run()
    {

        $anywhere = Location::create([
                            'name'      => "Anywhere",
                            'slug'      => Str::slug('anywhere'),
                            'type'      => 'region'
                        ]);


        $client = new Client();
        $crawler = $client->request('GET', 'http://localhost/municipalities.html');

        $crawler->filter('div > p')->each(function ($node,$i) {


            if($node->filter('strong > font')->count()>0){
                $p_node = $node->filter('strong > font')->first()->text();
                if($p_node == "Capital"){
                    $region_node = $node->filter('font')->eq(2);
                    $region = $node->filter('font')->eq(2)->text();
                    if(str_contains($region, 'Region:')){
                        $region =  substr($region,strpos($region,':')+2, strpos($region,'Population') - (strpos($region,':')+2));
                    }else{
                        $region = $node->filter('font')->eq(3)->text();
                        $region_node = $node->filter('font')->eq(3);
                        $region =  substr($region,strpos($region,':')+2, strpos($region,'Population') - (strpos($region,':')+2));
                    }

                    //traceLog('Found Region: '.$region);
                    $region = trim($region);

                    switch($region){
                        case 1: $region = "I- Ilocos Region"; break;
                        case "2": $region = "II - Cagayan Valley"; break;
                        case "3": $region = "III - Central Luzon"; break;
                        case "4 - A": $region = "IVA - CALABARZON"; break;
                        case "4 - B": $region = "IVB - MIMAROPA"; break;
                        case "5": $region = "V - Bicol Region"; break;
                        case 6: $region = "VI - Western Visayas"; break;
                        case "7": $region = "VII - Central Visayas"; break;
                        case 8: $region = "VIII - Eastern Visayas"; break;
                        case "9": $region = "IX - Zamboanga Peninsula"; break;
                        case 10: $region = "X - Northern Mindanao"; break;
                        case "11": $region = "XI - Davao Region"; break;
                        case "12": $region = "XII - SOCCSKSARGEN"; break;
                        case "13": $region = "XIII - Caraga"; break;
                    }

                    $region_object = Location::where('name', '=', $region)->where('type', '=', 'region')->get()->first();

                    if( !$region_object ){
                        $region_object = Location::create([
                            'name'      => $region,
                            'slug'      => Str::slug($region),
                            'type'      => 'region'
                        ]);
                        //$logs = array_add($logs,$index,"added region ".$region_object->name.", id: ".$region_object->id);
                        //$index = $index+1;
                    }

                    $this->province_object = Location::create([
                        'parent_id' => $region_object->id,
                        'name'      => trim($this->province),
                        'slug'      => Str::slug(trim($this->province)),
                        'type'      => 'province'
                    ]);

                    //$logs = array_add($logs,$index,"added province ".$province_object->name.", id: ".$province_object->id." parent: ".$region_object->id);
                    //$index = $index+1;

                    $current_node = $node;
                    $this->found_city_header = FALSE;

                    $region_node->filter('font')->nextAll()->each(function ($inner_node, $i) {

                        if( $inner_node->text()=="Cities" || strpos($inner_node->text(), "Municipalities")!==FALSE ){
                           $this->found_city_header = TRUE;
                        }else if($this->found_city_header == TRUE){
                            $cities = $inner_node->html();
                            $cities = explode("<br>", $cities);
                            if(count($cities)>1){
                                foreach($cities as $city){
                                    if(strlen($city)>3){	//simple validation for proper city names

                                        $city_object = Location::create([
                                            'parent_id' => $this->province_object->id,
                                            'name'      => trim($city),
                                            'slug'      => Str::slug(trim($city)),
                                            'type'      => 'municipality'
                                        ]);

                                        //$logs = array_add($logs,$index,"added city (inside capital node) ".$city.", parent: ".$province_object->name );
                                        //$index = $index+1;

                                    }
                                }

                                $this->found_city_header = FALSE;
                            }

                        }

                    });




                }else if($p_node == "Municipalities" ){
                    $cities = $node->filter('font')->last()->html();
                    $cities = explode("<br>", $cities);
                    foreach($cities as $city){
                        $city_object = Location::create([
                           'parent_id' => $this->province_object->id,
                           'name'      => trim($city),
                           'slug'      => Str::slug(trim($city)),
                           'type'      => 'municipality'
                         ]);

                        //$logs = array_add($logs,$index,"added city (inside municipality node) ".$city.", parent: ".$province_object->name );
                        //$index = $index+1;
                    }
                }else{
                    $this->province = $p_node;
                }


            }

        });
    }
}