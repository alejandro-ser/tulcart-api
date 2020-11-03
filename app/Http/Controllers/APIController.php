<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;

class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = [
            "status" => "ok",
            "message" => "La API funciona!"
        ];

        return response()->json($res, 200);
    }

    public function listProducts()
    {
        $products = Product::all();

        $res = [
            "status" => "ok",
            "message" => "Products list",
            "data" => $products
        ];

        return response()->json($res, 200);
    }

    public function product($id)
    {
        $product = Product::find($id);

        if (isset($product)) {
            $res = [
                "status" => "ok",
                "message" => "Get product",
                "data" => $product
            ];
        } else {
            $res = [
                "status" => "error",
                "message" => "Product not find"
            ];
        }

        return response()->json($res, 200);
    }

    public function listCarts()
    {
        $carts = Cart::all();

        $res = [
            "status" => "ok",
            "message" => "Cart list",
            "data" => $carts
        ];

        return response()->json($res, 200);
    }

    public function cart($id)
    {
        $cart = Cart::find($id);

        if (isset($cart)) {
            $res = [
                "status" => "ok",
                "message" => "Get cart",
                "data" => $cart
            ];
        } else {
            $res = [
                "status" => "error",
                "message" => "Cart not find"
            ];
        }

        return response()->json($res, 200);
    }
}
