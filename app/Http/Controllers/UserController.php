<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\models\log;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth; 
class UserController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('user.show_all');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation'=>'required',
            'role'=>'required'
        ]);

        try{
            // User::create($request->all());
            $user= new User;
            $user->name=$request->name;
            $user->username=$request->username;
            $user->password=bcrypt($request->password);
            $user->role=$request->role;
            $user->save();
            $log= new log;
            // return Auth::user();
            $log->u_name=Auth::user()->name;
            $log->action="created user";
            $log->target=$request->username;
            $log->save();
            return view('action')->with('message',"User created successfully");

        }catch(\Exception $e){
            return $e;
       return view('action')->with('message',"User Not Created");
        }
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
    public function actions()
    {
        # code...
        return view('user.menu');
    }
}
