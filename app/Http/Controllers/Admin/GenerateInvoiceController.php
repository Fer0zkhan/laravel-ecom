<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenerateInvoiceController extends Controller
{
    public function invoice() {
        return view('admin.admin_views.generateInvoice');
    }
}
