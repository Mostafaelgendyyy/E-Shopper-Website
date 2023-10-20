<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\shoppingcart;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Support\Facades\DB;

class ShoopingCartController extends Controller
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
        //
        $newinCart = new shoppingcart([
            'userid'=>$request->get('userid'),
            'productid'=>$request->get('productid'),
            'quantity'=>$request->get('quantity')
        ]);
        $newinCart->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function show($id=null)
    {
        //
        return $id? shoppingcart::find($id) : shoppingcart::all();
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
        $incart = shoppingcart::find($id);
        $incart->userid = $request->get('userid');
        $incart->productid = $request->get('productid');
        $incart->quantity = $request->get('quantity');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return string
     */
    public function updateQuantity(Request $request, $id)
    {
        //
        $incart = shoppingcart::find($id);
        $quan= product::select('quantity')->where(['id',$incart['productid']])->get();
        foreach ($quan as $key=>$value)
        {
            if($value['quantity'] >= $request->get('quantity') and $request->get('quantity')>0){
                $incart->quantity = $request->get('quantity');
            }
            else{
                return'cannot update quantity';
            }
        }
    }

    public function increaseQuantity($id)
    {
        //
        $quantity= shoppingcart::select('quantity')->find($id);
        $incart = shoppingcart::find($id);
        $quan= product::select('quantity')->where(['id',$incart['productid']])->get();
        foreach ($quan as $key => $value)
        {
            if ($value['quantity'] >= $quantity['quantity']+1)
            {
                shoppingcart::where('id', $id)->update(['quantity'=>$quantity['quantity']+1]);
                return;
            }
            else{
                return;
            }
        }
    }

    public function decreaseQuantity($id)
    {
        //
        $quantity= shoppingcart::select('quantity')->find($id);
        $incart = shoppingcart::find($id);
        $quan= product::select('quantity')->where(['id',$incart['productid']])->get();
        foreach ($quan as $key => $value)
        {
            if ($quantity['quantity']-1 >= 0)
            {
                shoppingcart::where('id', $id)->update(['quantity'=>$quantity['quantity']-1]);
                return;
            }
            else{
                return;
            }
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $product= shoppingcart::find($id);
        $product->delete();
        ////////////////////// RETURN TO ROUTING Page access DONE
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroybyRequest(Request $request)
    {
        $product= shoppingcart::where([
            ['userid'=>$request->get('userid')],
            ['productid'=>$request->get('productid')]
        ])->get();
        foreach ($product as $key=> $value){
            $value->delete();
        }
        ////////////////////// RETURN TO ROUTING Page access DONE
    }

    public function calculateTotalforTransaction($id)
    {
        $data = shoppingcart::where(['userid',$id])->get();
        $sum=0;
        foreach($data as $key=>$value)
        {
            foreach($value as $k=>$v)
            {
                $price = product::find($v['productid']);
                $sum += $v['quantity'] * $price->price;
            }
        }
        return $sum;
    }

    public function cartList()
    {
        $cartItems = CartFacade::getContent();
        // dd($cartItems);
        $categories = DB::table('categories')->get();
        return view('cart', compact('cartItems','categories'));
    }


    public function addToCart(Request $request)
    {
        $quantity = product::find($request->id);
        if ($quantity->quantity >= $request->quantity)
        {
            CartFacade::add([
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'image' => $request->image,
                )
            ]);
            session()->flash('success', 'Product is Added to Cart Successfully !');
        }
        else{
            session()->flash('Failed', 'The available quantity is not sufficient for your shopping!');
        }

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {

        $quantity = product::find($request->id);
        if ($quantity->quantity >= $request->quantity)
        {
            CartFacade::update(
                $request->id,
                [
                    'quantity' => [
                        'relative' => false,
                        'value' => $request->quantity
                    ],
                ]
            );
            session()->flash('success', 'Product is Added to Cart Successfully!');
        }
        else{
            session()->flash('Failed', 'The available quantity is not sufficient for your shopping!');
        }

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        CartFacade::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        CartFacade::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }

}