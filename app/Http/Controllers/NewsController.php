<?php

namespace togoany\Http\Controllers;

use Illuminate\Http\Request;
use togoany\News;
class NewsController extends Controller
{
    function listNews(){
    	$news = News::all();
    	return view('main')->withNews($news);
    }
}
