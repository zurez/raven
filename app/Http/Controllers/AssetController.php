<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Asset;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AssetController extends Controller
{
    
    public function store_asset(Request $request)
    {
        $this->validate($request, [
            'site' => 'required',
            'serial_number' => 'required|unique:assets|min:1',
            'condition'=>'required',
            'asset_type' => 'required',
            'manufacturer' => 'required',
            'vendor_number'=>'required',
            'location'=>'required',
            'asset_tag'=>'required',
            
            'model' => 'required',

       
        ]);
       try {
           $asset= new Asset;
           $asset->site=$request->site;
           $asset->serial_number=$request->serial_number;
           $asset->condition=$request->condition;
           $asset->asset_type=$request->asset_type;
           $asset->manufacturer=$request->manufacturer;
           $asset->vendor_number=$request->vendor_number;
           $asset->location=$request->location;
           $asset->asset_tag=$request->asset_tag;
           $asset->additional_info=$request->additional_info;
           $asset->asset_type_desc=$request->asset_description;
           $asset->model=$request->model;
           // $asset->=$request->; 
           $asset->save();
           return back()->with('message','Asset added');
       } catch (\Exception $e) {
           return "Not Saved";
       }
    }
    public function all_asset()
    {

        $assets = Asset::all();
        return view('ui.all_asset')->with('title','All Assets')->with('asset',$assets);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
