<?php namespace togoany\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use togoany\Site;
class SiteController extends Controller{
	function searchSite(){
		//$sites = DB::select('select * from sites');
		$sites = Site::all();
		return view('sisteslist')->with('sites',$sites);
	}

	function add($name, $url){
		$site = new Site();
		$site->name = $name;
		$site->url = $url;
		if($site->save()){
			return redirect()->action('SiteController@searchSite')->withInput(Request::only('name'));
		}
		return "Fail";
	}

}