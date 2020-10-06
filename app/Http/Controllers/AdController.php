<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function storeAd(Request $request){
    	$ad_type = $request->type;
    	$body = $request->body;
    	
    	switch($ad_type){
    		case 'ad1':
    		  $ad_type = 'ad1';
    	}

        $ad = Ad::where('type',$ad_type)->get();

    	if($ad->count() == 0){
          $ad = Ad::create([
            'type'=>$ad_type,
            'body'=>$body
          ]);
          $msg = 'First Ad created successfully';
    	}

    	if($ad->count() == 1){
    		$ad = Ad::where('type',$ad_type)->first();
    		if($ad->body != $body){
    			$ad->update([
    			'body'=>$body
    		 ]);
    		  $msg ='First Ad updated successfully';
    		}else{
    			$msg ='Nothing to Update,The Ad you are Trying to update looks the same as previous';
    		}
    		
    	}

    	return redirect()->back()->with('status',$msg);
    }
}
