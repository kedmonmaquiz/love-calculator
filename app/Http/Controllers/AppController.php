<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class AppController extends Controller
{
    public function createOwner(){
      return view('love.create');
    }

    public function storeOwner(Request $request){
    	$name = $request->name;
    	$code = rand(10000,99999);
        
        $owner = Owner::create(['name'=>$name,'code'=>$code]);

        Cookie::queue('cookie_owner_id', $owner->id, 576000);

        return redirect('/love/'.$owner->id.'/'.$owner->code);
    }

    public function ownerDashboard($id,$code){
      if($owner = Owner::where(['code'=>$code,'id'=>$id])->first()){
         return view('love.dashboard',compact('owner'));
      } else{
        abort(404);
      }
      

      
    } 

    public function index($id,$code){
    	if(Cookie::get('cookie_owner_id')==$id){
    		$owner = Owner::where(['code'=>$code,'id'=>$id])->first();
            return view('love.dashboard',compact('owner'));
    	}
    	return view('love.index',compact('id','code'));
    }

    public function storeFriend(Request $request,$id,$code){
        $owner = Owner::where('id',$id)->first();
    	$friend = Friend::create([
          'name'=>$request->name,
          'crush'=>$request->crush,
          'owner_id'=>$id
    	]);

    	return view('love.view',compact('owner'));
    }

    public function showContact(){
    	return view('love.contact');
    }

}
