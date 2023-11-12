<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function index(){
       $featuredProducts = Product::where('stock',1)->take(4)->get();
         $newProducts=Product::orderBy('created_at','ASC')->take(3)->get();
       return view('page.home',compact('featuredProducts','newProducts'));
    }
    public function detail($slug){
        $product =Product::where('slug',$slug)->first();
        return view('page.detail',compact('product'));
    }

}
