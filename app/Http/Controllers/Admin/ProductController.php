<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        return view('admin.admin_views.addProduct');
    }
    public function activeProduct(){
        return view('admin.admin_views.activeProduct');
    }
    public function deactiveProduct(){
        return view('admin.admin_views.deactiveProduct');
    }
}
