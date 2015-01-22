<?php

class Catalog extends \Eloquent {
	protected $fillable = [];
        
        public function group(){
            return $this->hasMany('Group','id','groups_id');
        }
}