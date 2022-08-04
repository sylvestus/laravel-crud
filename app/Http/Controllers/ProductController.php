<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       
        return view('homePage',['products'=>Product::with('user')->get()
        // ->paginate(6)
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formset=$request->validate([
            'name'=>'string||required',
            'description'=>'string||required',
            'price'=>'required',
        ]);
        $formset['updated_at']=now();
        if(auth()->id()){
        $formset['user_id']=auth()->id();
        }
        else{
            $formset['user_id']=1;
        };
        Product::create($formset);

        return redirect('homepage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('singleProduct',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('editForm',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $formset=$request->validate([
            'name'=>'string||required',
            'description'=>'string||required',
            'price'=>'required',
        ]);
        $formset['updated_at']=now();
        if(auth()->id()){
        $formset['user_id']=auth()->id();
        }else{
            $formset['user_id']=1;
        };
        $product->update($formset);

        return redirect('home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('home');
    }
}
