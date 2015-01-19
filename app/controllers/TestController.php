<?php
use HireMe\Components\FieldBuilder;
use HireMe\Entities\Catalog;
use HireMe\Managers\CatalogsManagers;
use HireMe\Repositories\CatalogRepo;
class TestController extends \BaseController {

    public function show() {
        
	      $test = Catalog::all();

        echo json_encode($test);
    }

}