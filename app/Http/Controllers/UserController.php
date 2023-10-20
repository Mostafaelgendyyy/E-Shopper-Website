<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user= new User([
            'name' =>$request->get('name'),
            'email' =>$request->get('email'),
            'password' =>bcrypt($request->get('password')),
            'phonenumber'=> $request->get('phonenumber'),
            'address'=> $request->get('address')
        ]);
        $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function show($id = null)
    {
        return $id? User::find($id) : User::all();
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
    //        $this->validate($request,
    //            ['name' => 'required',
    //                'email' => 'required',
    //                'password' => 'required',
    //                'role' => 'required'
    //            ]);
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->address=$request->get('address');
        $user->phonenumber=$request->get('phonenumber');
        $user->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function changePassword(Request $request,$id){
        $user = User::find($id);
        $user->password = bcrypt($request->get('password'));
        $user->save();
    }
    public function destroy($id)
    {
        $user= User::find($id);
        $user->delete();
        ////////////////////// RETURN TO ROUTING Page access DONE
    }
    public function home()
    {
        return view('home');
    }
}
