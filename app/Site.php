<?php

namespace togoany;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    public $timestamps = true;
    protected $fillable = array('name', 'url');

   function news(){
   	return $this->hasMany('News');
   }
}
