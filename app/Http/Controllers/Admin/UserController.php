<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function activeUser(){
        return view('admin.admin_views.activeUser');
    }

    public function deactiveUser(){
        return view('admin.admin_views.deactiveUser');
    }
}
