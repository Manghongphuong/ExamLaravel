<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Blogs;

class ClientController extends Controller
{
    //home
    public function index(){
        $products = Products::all();
        return view('layout_user.home', compact('products'));
    }
    //shop
    public function shop(){
        return view('layout_user.shop');
    }
    //about
    public function about(){
        return view('layout_user.about');
    }
    //services
    public function services(){
        return view('layout_user.services');
    }
    //blog
    public function blog(){
        return view('layout_user.blog');
    }
    //contact
    public function contact(){
        return view('layout_user.contact');
    }
}
