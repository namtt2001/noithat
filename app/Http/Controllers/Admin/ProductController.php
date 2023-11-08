<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ImgProduct;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index',compact('product'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $fileName= $request->photo->getClientOriginalName();
        $request->photo->storeAs('public/images',$fileName);
        $request->merge(['image'=>$fileName]);

        try {
            $product = Product::create($request->all());

            if($product && $request->hash_fil('photos')){
                foreach ($request ->photos as $key =>$value) {
                    $fileName = $value->getClientOriginalName();
                    $value->storeAs('public/images',$fileName);
                    ImgProduct::create([
                        'product_id'=>$product->id,
                        'image'=>$fileName
                    ]);
                }


            }
        } catch (\Throwable $th) {
            //throw $th;
        }





        }






    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
