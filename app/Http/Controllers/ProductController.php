<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\countOf;

class ProductController extends Controller
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
        $product = new product([
            //'userid'=>$request->get('userid'),
            'name'=>$request->get('name'),
            'description'=>$request->get('description'),
            'price'=>$request->get('price'),
            'quantity'=>$request->get('quantity'),
            'categoryid'=>$request->get('categoryid')
        ]);
        $data = DB::table('categories')->where('id','=',$request->get('categoryid'))->get();
        $c_Controller= new CategoryController();
        $req= new Request();
        foreach ($data as $k => $v)
        {
            $req->merge(['quantity' => ($v->quantity+1)]);
        }
        $c_Controller->updateQuantity($req,$request->get('categoryid'));
        $product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function show($id = null)
    {
        return $id? product::find($id) : product::all();
    }

    public function searchbyCategory($name)
    {
        $category = Category::where(['name',$name])->get();
        $id=0;
        foreach($category as  $key => $value)
        {
            $id =$value['id'];
        }
        $products = product::where(['categoryid',$id])->get();
        return $products;
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
        $product = product::find($id);
        $product->name= $request->get('name');
        $product->description= $request->get('description');
        $product->price= $request->get('price');
        $product->quantity= $request->get('quantity');
        $product->categoryid= $request->get('categoryid');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product= product::find($id);
        foreach($product as $key=>$value){
            $data = DB::table('categories')->where('id','=',$value['categoryid'])->get();
            $c_Controller= new CategoryController();
            $req= new Request();
            foreach ($data as $k => $v)
            {
                $req->merge(['quantity' => ($v['quantity']+1)]);
            }
            $c_Controller->updateQuantity($req,$value('categoryid'));
        }

        $product->delete();
        ////////////////////// RETURN TO ROUTING Page access DONE
    }

    public function productsnumber ($id)
    {
        $data = DB::table('products')->where('categoryid','=',$id)->get();
        return count($data);
    }

    public function searchlike($prName)
    {
        $products = product::where('name','LIKE',"%{$prName}%")->get();
        return $products;
    }

    public function productList()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }
}
