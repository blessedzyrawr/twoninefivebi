<?php namespace HusayMedia\Pulitico\Components;
use HusayMedia\Pulitico\Models\Position as PositionModel;
use HusayMedia\Pulitico\Models\Politician as PoliticianModel;
use HusayMedia\Pulitico\Models\Location as LocationModel;
use HusayMedia\Pulitico\Models\Title as TitleModel;
use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Response;
use DB;
use Paginator;
class Directory extends ComponentBase
{
    /**
     * A collection of regions to display
     * @var Collection
     */
    public $pagination_items = 15;
    public $regions;
    public $branches;

    public $topLevelTitles;
    public $topLevelLocations;

    public $filterSlug;
    public $filterId;


    public function componentDetails()
    {
        return [
            'name'        => 'husaymedia.pulitico::lang.settings.directory_name',
            'description' => 'husaymedia.pulitico::lang.settings.directory_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'politician_profile_page' => [
                'title'       => 'husaymedia.pulitico::lang.settings.dir_politician_profile_page',
                'description' => 'husaymedia.pulitico::lang.settings.dir_politician_profile_page_description',
                'default'     => 'politician',
                'type'        =>  'string'
            ],
            'filter_slug' => [
                'title'       => 'husaymedia.pulitico::lang.settings.dir_filter_slug',
                'description' => 'husaymedia.pulitico::lang.settings.dir_filter_slug_description',
                'default'     => '{{ :filter_slug }}',
                'type'        => 'string'
            ],
            'filter_id' => [
                'title'       => 'husaymedia.pulitico::lang.settings.dir_filter_id',
                'description' => 'husaymedia.pulitico::lang.settings.dir_filter_id_description',
                'default'     => '{{ :filter_id }}',
                'type'        => 'string'
            ]
        ];
    }

    public function getPoliticianProfilePageOptions()
    {
        //return
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }


    public function onRun()
    {

        $this->addCss('/plugins/husaymedia/pulitico/assets/js/jQuery.bonsai/jquery.bonsai.css');
        $this->addJs('/plugins/husaymedia/pulitico/assets/js/jQuery.bonsai/jquery.bonsai.js');
        $this->addJs('/plugins/husaymedia/pulitico/assets/js/directoryScripts.js');

        $this->regions = $this->page['regions'] = $this->getRegions();
        $this->branches = $this->page['branches'] = $this->getBranches();

        $this->topLevelTitles = $this->page['topLevelTitles'] = $this->getTopLevelTitles();
        $this->topLevelLocations = $this->page['topLevelLocations'] = $this->getTopLevelLocations();

        /*
        $this->tester = $this->page['tester'] =
         PoliticianModel::with(array('positions' => function($query)
{
    $query->where('title_id', '=', 299);
}))->get();
*/


        $this->filterId = $this->param('filter_id');
        $this->filterSlug = $this->param('filter_slug');


        if($this->filterSlug!=''){
            $this->onFilter();
        }

        //$this->page['filterSlug'] = $this->property('politician_profile_page');


    }

    public function getChildren($parent_id){
        return LocationModel::selectRaw('CONCAT("child-", id) as identifier, name')->where('parent_id','=',$parent_id)->get()->lists('name', 'identifier');
    }


    public function getRegions(){
        return LocationModel::select('id','name')->where('type','=','region')->where('name','!=','Anywhere')->orderBy('name', 'asc')->get()->lists('name', 'id');
    }

    public function getTopLevelLocations(){
        return LocationModel::select('id','name','slug')->where('parent_id','=',NULL)->where('name','!=','Anywhere')->orderBy('name', 'asc')->get();
    }

    public function getTopLevelTitles(){
        return TitleModel::select('id','name','slug')->where('parent_id','=',NULL)->get();
    }

    public function getBranches(){
        return TitleModel::select('id','name')->where('parent_id','=',NULL)->get()->lists('name', 'id');
        //return LocationModel::getRegions();
    }

    function onRequestProvince()
    {
      $region_id = post('filterRegion');

         //return \Response::json( array(21 => 'Victoria', 32 => 'Orbis', 34 => 'Zipanggu') );
      return $this->getChildren($region_id);
    }

    function onRequestCities()
    {
      $province_id = post('filterProvince');
      $province_id = ltrim($province_id,"child-");
      //return [21 => 'Ellinia', 32 => 'Henesys', 34 => 'Sleepywood'];
      return $this->getChildren($province_id);
    }


    public function onRequestChildrenTitles()
    {
      $key = post('key');
      $parent_id = post($key);
      $parent_id = ltrim($parent_id,'child-');
      //return [21 => 'Ellinia', 32 => 'Henesys', 34 => 'Sleepywood'];
      return TitleModel::selectRaw('CONCAT("child-", id) as identifier, name')->where('parent_id','=',$parent_id)->orderBy('name', 'asc')->get()->lists('name', 'identifier');
    }

    public function onSearch(){
        $this->profilePage = $this->property('politician_profile_page');
        $name = post('politicianName');
        $name = str_replace(' ','%',$name);
        $name = "%".$name."%";


        $this->page['filterResults'] = DB::select( DB::raw("SELECT pol.slug, pol.id, pol.firstname, pol.middlename, pol.surname, title, location, status, parent
                    FROM hmp_politician as pol
                    LEFT JOIN (
                        select
                            t.parent_id as parent,t.id as tit_id,t.name as title,
                            l.name as location,l.parent_id as loc_parent, l.id as loc_id,
                            pos.politician_id as pol_id, pos.status as status
                        from hmp_position as pos
                        left join hmp_title as t ON pos.title_id = t.id
                        left join hmp_location as l ON pos.location_id = l.id
                        )
                     AS labels ON pol.id = labels.pol_id
                    WHERE pol.firstname LIKE ? or pol.surname LIKE ?
                    ORDER BY pol.surname asc, pol.firstname asc"),
                    [ $name,$name]

            );

        //$this->page['results'] = $results;
    }

    public function onFilter(){
        $this->profilePage = $this->property('politician_profile_page');
        if($this->filterPage==''){
            $this->page['filterPage'] = $this->filterPage = post('filterPage') ? post('filterPage') : 0;
        }
        $this->page['skip'] = $this->skip = $this->filterPage * $this->pagination_items;


        if($this->filterSlug==''){
            $this->filterSlug = post('filterSlug');
        }
        if($this->filterId==''){
            $this->filterId = post('filterId');
        }


            $label = LocationModel::select('id','name')->where('slug','=',$this->filterSlug)->where('id','=',$this->filterId)->get()->first();
            if(!$label){
                $this->type = 'title';
                $title = TitleModel::select('id','name')->where('slug','=',$this->filterSlug)->where('id','=',$this->filterId)->get()->first();
                $this->page['title'] = $title->name;
            }else{
                $this->type = 'region';
                $this->page['title'] = $label->name;
            }



        if($this->type=='region'){
            //$this->location = LocationModel::select('id','name')->where('slug','=',$this->filterSlug)->where('id','=',$this->filterId)->get()->first();
            /*
             $this->page['results'] = PoliticianModel::select('id','firstname','surname','middlename','slug')->whereHas('positions', function($q){ $q->where('location_id', '=', $this->filterId); })->orderBy('surname', 'asc')->orderBy('firstname', 'asc')->paginate($this->pagination_items);
            */
            $this->page['filterResults'] = DB::select( DB::raw("SELECT pol.slug, pol.id, pol.firstname, pol.middlename, pol.surname, title, location, status, parent
                    FROM hmp_politician as pol
                    LEFT JOIN (
                        select
                            t.parent_id as parent,t.id as tit_id,t.name as title,
                            l.name as location,l.parent_id as loc_parent, l.id as loc_id,
                            pos.politician_id as pol_id, pos.status as status
                        from hmp_position as pos
                        left join hmp_title as t ON pos.title_id = t.id
                        left join hmp_location as l ON pos.location_id = l.id
                        )
                     AS labels ON pol.id = labels.pol_id
                    WHERE labels.loc_parent = :parent or labels.loc_id = :id
                    ORDER BY pol.surname asc, pol.firstname asc"),
                    array(
                        'parent' => $this->filterId,
                        'id' => $this->filterId,
                    )
            );
        }

        if($this->type=='title'){
            /*
            $this->page['filterResults'] =
                PoliticianModel::select('firstname','surname','slug','id')->with(array('positions' => function($query)
                {
                    $query->where('title_id', '=', $this->filterId);
                }))->get();
            */
            $this->page['filterResults'] = DB::select( DB::raw("SELECT pol.slug, pol.id, pol.firstname, pol.middlename, pol.surname, title, location, status, parent
                    FROM hmp_politician as pol
                    LEFT JOIN (
                        select
                            t.parent_id as parent,t.id as tit_id,t.name as title,
                            l.name as location,l.parent_id as loc_parent, l.id as loc_id,
                            pos.politician_id as pol_id, pos.status as status
                        from hmp_position as pos
                        left join hmp_title as t ON pos.title_id = t.id
                        left join hmp_location as l ON pos.location_id = l.id
                        )
                     AS labels ON pol.id = labels.pol_id
                    WHERE labels.parent = :parent or labels.tit_id = :id
                    ORDER BY pol.surname asc, pol.firstname asc"),
                    array(
                        'parent' => $this->filterId,
                        'id' => $this->filterId,
                    )
            );
        }

    }


}
