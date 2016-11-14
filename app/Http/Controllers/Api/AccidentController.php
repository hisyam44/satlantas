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
    public function index(){
    	$auth = JWTAuth::parseToken();
        $user = $auth->authenticate();
        $accidents = Accident::orderBy('created_at','desc')->with('user')->take(5)->get();
        return response()->json($accidents,200);
    }
    public function store(Request $request){
    	$auth = JWTAuth::parseToken();
        $user = $auth->authenticate();
        $accident = new Accident;
        $accident->title = $request->title;
        $accident->type = $request->type;
        $accident->latitude = $request->latitude;
        $accident->longitude = $request->longitude;
        $accident->description = $request->description;
        $accident->excerpt = substr($request->description,0,150)." ...";
        $accident->photo = $request->photo;
        $success = $user->accidents()->save($accident);
        if(!$success){
        	return response()->json(['success' => 'false', 'error' => 'Error while trying to post a new Accident'],500);	
        }
        return response()->json(['success' => 'true'],200);
    }
    public function update(Request $request){
        $accidents = Accident::where('created_at','>',$request->date)->get();
        return response()->json(['success' => 'true', 'accidents' => count($accidents)]);
    }
    public function limit($limit){
        $accidents = Accident::orderBy('created_at','desc')->take($limit)->get();
        return response()->json($accidents);
    }
}
