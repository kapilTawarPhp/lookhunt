<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;

class RegistrationController extends Controller
{

	public function index()
    {
    	dd('dddd');
    }
    public function store(Request $request)
    {
        if($request->ajax()){
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|unique:users',
                'password' => 'required'
            ]);
            if ($validator->fails()) {
                return response()->json(['status'=>'fail','message'=>$validator->errors()->first()]);
            }else{
                $password = Hash::make($request->password);
                $data['email'] = trim($request->email);
                $data['password'] = $password;
                $user = User::create($data);
                auth()->login($user);
                return response()->json(['status'=>'success','message'=>'User created successfully.']);
            }
        }
    }
    public function logout() {
        dd('adfafjakhf');
        Auth::logout();
        return redirect('/login');
    }
}