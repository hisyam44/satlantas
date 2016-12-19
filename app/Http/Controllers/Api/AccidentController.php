<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use JWTAuth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Accident;

class AccidentController extends Controller
{
    public function index($type){
    	$auth = JWTAuth::parseToken();
        $user = $auth->authenticate();
        if($type == 'accident'){
            $accidents = Accident::orderBy('created_at','desc')->where('type','kecelakaan')->with('user')->take(5)->get();
        }elseif($type == 'kemacetan'){
            $accidents = Accident::orderBy('created_at','desc')->where('type','kemacetan')->with('user')->take(5)->get();
        }else{
            $accidents = Accident::orderBy('created_at','desc')->where('type','bencana alam')->with('user')->take(5)->get();
        }
        return response()->json($accidents,200);
    }
    public function store(Request $request){
        //return response()->json($request);
    	$auth = JWTAuth::parseToken();
        $user = $auth->authenticate();
        $accident = new Accident;
        $accident->user_id = $user->id;
        $accident->title = $request->title;
        $accident->type = $request->type;
        $accident->latitude = $request->latitude;
        $accident->longitude = $request->longitude;
        $accident->description = $request->description;
        $accident->excerpt = substr($request->description,0,150)." ...";
        $success = $accident->save();
        if(!$success){
            return response()->json(['success' => 'false', 'error' => 'Error while trying to post a new Accident'],500);    
        }
       foreach ($request->photo as $photo) {
            $new_photo = new \App\Photo;
            $new_photo->photo = $photo;
            $accident->photos()->save($new_photo);
        }
        return response()->json(['success' => 'true'],200);
    }
    public function update(Request $request){
        $accidents = Accident::where('created_at','>',$request->date)->where('type','kecelakaan')->get();
        $kemacetan = Accident::where('created_at','>',$request->date)->where('type','kemacetan')->get();
        $bencana = Accident::where('created_at','>',$request->date)->where('type','bencana alam')->get();
        return response()->json(['success' => 'true', 'accidents' => count($accidents), 'kemacetan' => count($kemacetan), 'bencana' => count($bencana)]);
    }
    public function limit($type,$limit){
        if($type == 'accident'){
            $accidents = Accident::orderBy('created_at','desc')->where('type','kecelakaan')->with('user')->take($limit)->get();   
        }elseif($type == 'kemacetan'){
            $accidents = Accident::orderBy('created_at','desc')->where('type','kemacetan')->with('user')->take($limit)->get();
        }else{
            $accidents = Accident::orderBy('created_at','desc')->where('type','bencana alam')->with('user')->take($limit)->get();
        }
        return response()->json($accidents);
    }
    public function getLastDateUpdate(){
        $accident = Accident::orderBy('created_at','desc')->first();
        $date = $accident->created_at;
        return response()->json($date);
    }
    public function photo($id){
        $accident = Accident::find($id);
        if($accident == null){
            return response()->json(['success' => 'false','error'=>'Accident Not Found'],404);
        }
        $photos = $accident->photos;
        return response()->json(['success' =>'true','photos'=>$photos],200);
    }
    public function getDate(){
        $date = \Carbon\Carbon::now();
        return response()->json($date);
    }
    public function getMenuList(){
        $menus = \App\Menu::all();
        return response()->json($menus);
    }
}
