<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
}
