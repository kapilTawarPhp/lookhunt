<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;

class UserController extends Controller
{
	public function index()
    {
    	dd('dddd');
    }
    public function store(Request $request)
    {
       
    }
    
    public function update(Request $request, $id){
    	// $user = Auth::user();
    	$user_name = $request->name;
    	$new_password = $request->new_password;
    	$old_password = $request->old_password;

    	$user = User::find($id);
    	if ($user_name) {
    		$user->name = $user_name;
    	}
    	if ($new_password) {
    		if (!Hash::check($old_password, $user->password)) {
    			return response()->json(['status'=>'fail','message'=>'Old password mismatch.']);
    		}
    		$user->password = Hash::make($new_password);
    	}
		$user->save();

		if ($user) 
		{
			return response()->json(['status'=>'success','message'=>'User updated successfully.']);
		}
		else 
		{
			return response()->json(['status'=>'fail','message'=>'Something went wrong.']);
		}
    }
}