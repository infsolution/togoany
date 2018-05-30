<?php

namespace togoany;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $timestamps = true;
   	protected $fillable = array('title', 'url','url_image','content','publication','autor');

   	function site(){
   		return belongsTo('Site');
   	}
}
