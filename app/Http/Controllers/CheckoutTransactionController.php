<?php

namespace App\Http\Controllers;

use App\Models\checkouttransaction;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutTransactionController extends Controller
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        //
        $transaction= new checkouttransaction([
            'firstname'=> $request->input('firstname'),
            'lastname'=> $request->input('lastname'),
            'email'=>$request->input('email'),
            'phonenumber'=> $request->input('phonenumber'),
            'address'=> $request->input('address'),
            'country'=> $request->input('country'),
            'city'=> $request->input('city'),
            'state'=> $request->input('state'),
            'zip'=> $request->input('zip'),
            'total'=> $request->input('total')
        ]);
        $request->session()->flush();
        $transaction->save();
        return redirect("/home");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function show($id=null)
    {
        //
        return $id? checkouttransaction::find($id) : checkouttransaction::all();
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
        $transaction= checkouttransaction::find($id);
        $transaction->userid= $request->get('userid');
        $transaction->address= $request->get('address');
        $transaction->phonenumber= $request->get('phonenumber');
        $transaction->total= $request->get('total');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product= checkouttransaction::find($id);
        $product->delete();
        ////////////////////// RETURN TO ROUTING Page access DONE
    }

    public function checkout()
    {
        $cartItems = CartFacade::getContent();
        $categories = DB::table('categories')->get();
        return view('checkout', compact('cartItems','categories'));
    }
}
