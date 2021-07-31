<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hunt;

use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;

class HuntController extends Controller
{
	public function index()
    {
    	dd('dddd');
    }
    public function store(Request $request)
    {
    	$user_id = $request->user_id;
    	// $new_hunt_image = $request->new_hunt_image;
    	$new_hunt_image_link = $request->new_hunt_image_link;
    	$gender = $request->gender;
    	$weather = $request->weather;
    	$style = $request->style;
        $size = $request->size;
        $colour = $request->colour;
        $price = $request->price;
    	$cloth = $request->cloth;
    	$cloth_link = $request->cloth_link;

    	if($request->file('new_hunt_image')) 
		{
    		$file = $request->file('new_hunt_image');
	        $filename = time().'_'.$file->getClientOriginalName();
	        $location = 'hunts_images';
	        $file->move($location,$filename);
	        $file_path = $filename;
    	}
		else 
		{
    		$file_path = $new_hunt_image_link;
    	}

    	$hunt = new Hunt;
		$hunt->user_id = $user_id;
		$hunt->image_link = $file_path;
		$hunt->gender = $gender;
		$hunt->weather = $weather;
		$hunt->style = $style;
        $hunt->size = $size;
        $hunt->colour = $colour;
        $hunt->price = $price;
		$hunt->cloth = $cloth;
		$hunt->cloth_link = $cloth_link;
		$hunt->save();

		if($hunt) 
		{
			return response()->json(['status'=>'success','message'=>'Hunt saved successfully.']);
		} 
		else 
		{
			return response()->json(['status'=>'fail','message'=>'Something went wrong.']);
		}

    }

	public function huntDetails($id)
	{
        $huntDetails  = Hunt::find($id);
		if($huntDetails)
		{
			return response()->json(['status'=>'success','data'=>$huntDetails]);
		}
		else
		{
            return response()->json(['status'=>'fail','data'=>[],'message' =>"Sorry hunt is deleted"]);
		}
	}
    
    public function update(Request $request, $id){
    	// $user = Auth::user();
    	

		// if ($user) {
		// 	return response()->json(['status'=>'success','message'=>'User updated successfully.']);
		// } else {
		// 	return response()->json(['status'=>'fail','message'=>'Something went wrong.']);
		// }
    }
}