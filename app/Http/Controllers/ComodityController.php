<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComodityController extends Controller
{

    public function index()
    {
        $products = DB::table("products")->get();
        return view("product.index", compact('products'));

    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $data =$request->only('name','sectors','price','amount','datecreated','description');
        DB::table('products')->insert($data);
        return redirect()->route('products.index');
    }

    public function show($id)
    {
        $product = DB::table("products")->where("id", $id)->first();
        return view("product.detail", compact('product'));
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        DB::table('products')->where("id", $id)->delete();
        return redirect()->route('products.index');
    }
}
