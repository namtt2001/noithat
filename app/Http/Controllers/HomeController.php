<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ImgProduct;



class HomeController extends Controller
{
    public function index(){
        $featuredProducts = Product::where('stock',1)->take(4)->get();
        $newProducts=Product::orderBy('created_at','ASC')->take(4)->get();

       return view('page.home',compact('featuredProducts','newProducts'));
    }
    public function detail($slug){
        $detail =Product::where('slug',$slug)->first();
        $related = Product::where('parent_id',$detail->parent_id)->where('id','!=',$detail->id)->get();
        return view('page.detail',compact('detail','related'));
    }
    public function list($id){
        $featuredProducts = Product::where('stock',1)->take(4)->get();
        $category = Category::where('id',$id)->first();
        $product = Product::where('parent_id',$category->id)->get();
      return view('page.list_category',compact('product','featuredProducts'));
    }
    





}
