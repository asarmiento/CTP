<?php

class Budget extends \Eloquent {
	protected $fillable = [];
        
        public function school(){
            return $this->hasMany('School','id','schools_id');
        }
}