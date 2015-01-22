<?php

class TestController extends \BaseController {

    public function index() {
        
	      $test = Catalog::find(1);

        echo json_encode($test->group);
    }

}