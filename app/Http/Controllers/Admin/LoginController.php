<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('admin.admin_views.login');
    }
    
    public function store(Request $request) {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!auth()->attempt($request->only('email', 'password'))){
            return back()->with('status', 'Invalid Email and Password!');
        }

        return redirect()->route('dashboard');
    }
}
