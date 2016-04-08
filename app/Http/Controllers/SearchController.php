<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Http\Requests;
use App\Http\Controllers\Controller;
use Searchy;
use DB;
// use Requests;
class SearchController extends Controller
{
    public function show_search_page()
    {
        # code...
        return view("search");
    }
    public function search(Request $request)
    {
        $s= $request->start;
        $e= $request->end;

        if ($request->target=="asset") {
            # code...
            if ($request->location=="all") {
                # code...
                
                $location= array("Innovation Campus","Upland","Marion","Commerce","Pennsylvania");
                $a= DB::table('assets')->whereIn('location',$location)->whereBetween('created_at',[$s,$e])->get();
                // return view('search')->with('results',$a)->with('f',$type);
            }
            else {
                $location= $request->location;
                $a=DB::table('assets')->where('location',$location)->whereBetween('created_at',[$s,$e])->get();
            }
            $type="asset";
            return view('search')->with('results',$a)->with('type',$type)->with('m','shown');
            
        }
        if ($request->target=="maint") {
            # code...
            $a=DB::table('assets')->whereBetween('created_at',[$s,$e])->get();
            $type="maint";
            return view('search')->with('results',$a)->with('type',$type)->with('m','shown');
        }
        if ($request->target="trans") {
            # code...
            $a=DB::table('assets')->whereBetween('created_at',[$s,$e])->get();
            $cost=0;
            foreach ($a as $b) {
                # code...
                $cost+= intval($b->costs);
            }
            $type="trans";
            return view('search')->with('results',$a)->with('type',$type)->with('m','shown')->with('cost',$cost);
        }
        
    }

    public function download($value='')
    {
        # code...
    }
}
