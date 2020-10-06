<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function storeAd(Request $request){
    	$ad_type = $request->type;
    	$body = $request->body;
    	$ad_name = "";
    	
    	switch($ad_type){
    		case 'ad1':
    		  $ad_type = 'ad1';
    		  $ad_name = 'First';
    		  break;

    		case 'ad2':
    		   $ad_type = 'ad2';
    		   $ad_name = 'Second';
    		   break;

    		case 'ad3':
    		   $ad_type = 'ad3';
    		   $ad_name = 'Third';
    		   break;

    		case 'ad4':
    		   $ad_type = 'ad4';
    		   $ad_name = 'Fourth';
    		   break;

    		default:
    		    $ad_type = "";
    		    $ad_name = 'Unknown';
    	}

        $ad = Ad::where('type',$ad_type)->get();

    	if($ad->count() == 0){
          $ad = Ad::create([
            'type'=>$ad_type,
            'body'=>$body
          ]);
          $msg = $ad_name.' Ad created successfully';
    	}

    	if($ad->count() == 1){
    		$ad = Ad::where('type',$ad_type)->first();
    		if($ad->body != $body){
    			$ad->update([
    			'body'=>$body
    		 ]);
    		  $msg =$ad_name.' Ad updated successfully';
    		}else{
    			$msg ='Nothing to Update,The Ad('.$ad_name.' Ad) you are Trying to update looks the same as previous';
    		}
    		
    	}

    	return redirect()->back()->with('status',$msg);
    }
}
