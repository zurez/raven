<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Asset;
use App\models\Maintenance;
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
    public function edit($id)
    {
      // return "ff";
      $asset=Asset::find($id);
      if ($asset!=null) {
        # code...
        return view('ui.edit_asset')->with('asset',$asset)->with('title',"Edit Asset");
      }
      return "Asset with this id not found";

    }
    public function save_edit(Request $request)
    {
        $id= $request->id;
        if ($id==null) {
          # code...
          return "Bad Request";
        }
        $asset=Asset::find($id);
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
        $asset->save();
        return redirect()->action('AssetController@view_asset',$id);
    }
    public function view_asset($id)
    {
      $asset=Asset::find($id);
       return view("ui.single_asset")->with('title',$asset->name)->with('asset',$asset);
    }
    public function all_asset()
    {

        $assets = Asset::all();
        return view('ui.all_asset')->with('title','All Assets')->with('asset',$assets);
    }
    public function delete_asset($id)
    {
        Asset::destroy($id);
        return back();
    }
    public function show_maintenance($id)
    {  
        try {
            $main_array= Maintenance::where('asset_id',$id)->get();
            return view('ui.all_maintenance')->with('maintain',$main_array)->with('title','All Maintenance')->with('asset_id',$id);
        } catch (\Exception $e) {
            
        }
    }
    public function all_maintenance()
    {
        # 
        $id="null";
          try {
            $main_array= Maintenance::all();
            return view('ui.all_maintenance')->with('maintain',$main_array)->with('title','All Maintenance')->with('asset_id',$id);
        } catch (\Exception $e) {
            
        }
    }
    public function show_add_maintenance($asset_id)
    {
        return view('ui.add_maintenance')->with('asset_id',$asset_id)->with('title','Add New Maintenance');
    }
    public function add_maintenance(Request $request)
    {
             $this->validate($request, [
            'maintenance_name' => 'required',
            'assigned_to' => 'required|min:1',
            'assigned_date'=>'required',
            'warranty_begin' => 'required',
            'warranty_ends'=>'required',
            'contact'=>'required'
       
        ]);
             try{
            $main= new Maintenance;
            $main->asset_id=$request->asset_id;
            $main->asset_tag_id= $request->asset_tag_id;
            $main->maintenance_name=$request->maintenance_name;
            $main->assigned_to= $request->assigned_to;
            $main->assigned_date=$request->assigned_date;
            $main->warranty_begin= $request->warranty_begin;
            $main->warranty_ends=$request->warranty_ends;
            $main->contact=$request->contact;
            $main->save();
            return redirect()->action('AssetController@show_maintenance',$main->asset_id);
        }catch(\Exception $e){
            return "Not Saved";
        }
    }
}
