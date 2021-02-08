<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin_Model\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('admin.admin_views.register');
    }

    public function store(Request $request){

        //validation
        $this->validate($request, [
            'first_name'=> 'required|max:255',
            'last_name'=> 'required|max:255',
            'email'=> 'required|email|unique:admin_models|max:255',
            'phone'=> 'required|numeric',
            'password'=> 'required|confirmed',
            'address'=> 'required|max:255',
            'country'=> 'required|max:255',
            'city'=> 'required|max:255',
            'zip_code'=> 'required|numeric',
            'image'=> 'required|max:255',
        ]);

        AdminModel::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->first_name),
            'address' => $request->address,
            'country' => $request->country,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'image' => $request->image,
        ]);

        return redirect()->route('register')->with('status', 'New Co Admin Register SuccessFully!');
    }
}
