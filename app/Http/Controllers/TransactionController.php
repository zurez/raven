<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Asset;
use App\models\Trans;
use App\Http\Requests;
use Auth;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id)
    
    {   $f= Asset::find($id);
    //     return $f;
      
        return view('ui.new_tran.new_tran')->with('title', "Add Transaction")->with('id',$id)->with('asset',$f);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
             $this->validate($request, [

            'type' => 'required',
            // 'serial_number' => 'required|unique:assets|min:1',
            'action'=>'required',
            'notes' => 'required',
            'date'=>'required'
            // 'costs' => 'required|numeric',
            // 'vendor_number'=>'required',
            // 'location'=>'required',
            // 'asset_tag'=>'required',
            
            // 'model' => 'required',

       
        ]);
        if (!$request->has('id')) {
            # code..
            return "Bad Access. Please try again";
        }
        $f= Asset::find($request->id);
        if ($f==null) {
            # code...
            return "Bad ID";
        }
        $trans= new Trans;
        $trans->action=$request->action;
        $trans->asset_id=$request->id;
        $trans->asset_tag=$request->asset_tag;
        $trans->type=$request->type;
        $trans->notes=$request->notes;
        $trans->date= $request->date;
        $trans->costs= $request->costs;
        // $trans->=$request->;



        $trans->save();
        return redirect()->action('TransactionController@show',$request->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tran= Trans::where('asset_id',$id)->get();
        // return $tran
        $asset = Asset::where('id',$id)->first();
        // return $id;
        // return $tran;
        return view("ui.new_tran.single_trans")->with('title',"Transaction")->with('trans',$tran)->with('asset_id',$id)->with('asset',$asset);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trans= Trans::find($id);

        return view('ui.new_tran.edit')->with('trans',$trans);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
            $this->validate($request, [

            'type' => 'required',
            // 'serial_number' => 'required|unique:assets|min:1',
            'action'=>'required',
            'notes' => 'required',
            'date'=>'required'
            // 'costs' => 'required|numeric',
            // 'vendor_number'=>'required',
            // 'location'=>'required',
            // 'asset_tag'=>'required',
            
            // 'model' => 'required',

       
        ]);
        $id= $request->id;
        $trans=Trans::find($id);
        $trans->action=$request->action;
        // $trans->asset_id=$request->id;
        // $trans->asset_tag=$request->asset_tag;
        $trans->type=$request->type;
        $trans->notes=$request->notes;
        $trans->date= $request->date;
        $trans->costs= $request->costs;
        $trans->save();

        $asset_id=Asset::where('asset_tag',$trans->asset_tag)->pluck('id');

        return $this->show($asset_id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trans::destroy($id);
        return $this->show_all();
    }
    public function show_all()
    {
        $trans=Trans::all();
        // $ids= array();
        $cost=0;
        foreach ($trans as $k) {
            # code...
            $cost= $cost+ floatval($k->costs);
        }
        // $asset= Asset::whereIn('id',$ids)->get();
        return view('ui.new_tran.show_all')->with('title',"Transaction History")->with('trans',$trans)->with('cost',$cost);
    }
}
