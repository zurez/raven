<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\log;
class PageController extends Controller
{
	  public function __construct()
    {
        $this->middleware('auth');
    }
    public function general()
    {
        return view('ui.new_asset.general')->with('title','Add Asset');
    }
    public function dashboard()
    {
    	# code...
    	return redirect()->action('PageController@general');
    }
    public function logs()
    {
        $logs= log::all();
        return view('logs.log')->with('logs',$logs);
    }
}
