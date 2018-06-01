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

    function openLink($id){
    	$news=News::find($id);
    	$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $news->url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$res = curl_exec($ch);
		curl_close($ch);
		return view('detailnews')->withNews($res);
	}
}
