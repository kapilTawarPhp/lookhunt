<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Hunt;

class HomeController extends Controller
{
    public function index(Request $request){

    	if (Auth::check()) 
		{

    		$hunts = new Hunt;
    		$user = Auth::user();

    		if (isset($request->filters)) {
            	$filters = $request->filters;
            	$filters = json_decode($filters);
	            
	        } else {
	            $filters = [];
	        }

	        $hunts = $hunts->get();

        	return view('home',compact('user','hunts','filters'));
	    }
		return view('welcome'); //dont use redirect here.
    }
}
