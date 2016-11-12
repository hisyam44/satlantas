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
        $accidents = Accident::orderBy('created_at','desc')->with('user')->get();
        return response()->json($accidents);
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
        if($success){
        	return response()->json(['user' => $user,'request' => $accident]);
        	
        }
    }
}
