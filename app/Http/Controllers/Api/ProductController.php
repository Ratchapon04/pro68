<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::all(), 200);
    }

    public function show($id)
    {
        $p = Product::find($id);
        if(!$p) return response()->json(['message'=>'Not Found'],404);
        return response()->json($p,200);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string|max:150',
            'brand'=>'required|string|max:100',
            'size'=>'required|numeric',
            'price'=>'required|numeric',
            'stock'=>'required|integer',
            'description'=>'nullable|string',
        ]);
        $p = Product::create($data);
        return response()->json(['message'=>'Created','data'=>$p],201);
    }

    public function update(Request $request, $id)
    {
        $p = Product::find($id);
        if(!$p) return response()->json(['message'=>'Not Found'],404);

        $p->update($request->all());
        return response()->json(['message'=>'Updated','data'=>$p],200);
    }

    public function destroy($id)
    {
        $p = Product::find($id);
        if(!$p) return response()->json(['message'=>'Not Found'],404);
        $p->delete();
        return response()->json(['message'=>'Deleted'],200);
    }
}
