<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function new()
    {
        return view('admin.admin_views.newOrder');
    }
    public function pending()
    {
        return view('admin.admin_views.pendingOrder');
    }
    public function complete()
    {
        return view('admin.admin_views.completeOrder');
    }
    public function remove()
    {
        return view('admin.admin_views.removeOrder');
    }
}
