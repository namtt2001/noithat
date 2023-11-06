<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        return view('page.home');
    }
    public function detail($slug){
        $product = Product::where('slug',$slug)->first;
        return view('page.detail',compact('product'));
    }
}
