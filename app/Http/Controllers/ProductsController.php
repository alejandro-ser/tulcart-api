<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCart;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return response()->json($products, 200);
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
        $product = new Product();
        $product->name = $request->input('name');
        $product->sku =$request->input('sku');
        $product->description =$request->input('description');
        $product->save();

        return response()->json($product, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id)->first();
        return response()->json($product, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id)->first();
        return response()->json($product, 200);
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
        $name = $request->input('name');
        $sku = $request->input('sku');
        $description = $request->input('description');
        $id = $request->input('id');
        Product::where('id', $id)
            ->update([ 'name'=>$name, "sku"=>$sku, "description"=>$description ]);

        return '{"msg":"Actualizado"}';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product =  Product::destroy($id);
        return '{"id":"'.$id.'","msg":"Eliminado" }';
    }

    public function addToCart(Request $request)
    {
        $productCart = new ProductCart();
        $productCart->product_id = $request->input('product_id');
        $productCart->cart_id =$request->input('cart_id');
        $productCart->quantity =$request->input('quantity');
        $productCart->save();

        return response()->json($productCart, 200);
    }
}
