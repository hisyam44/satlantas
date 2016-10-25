<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use JWTAuth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth = JWTAuth::parseToken();
        $user = $auth->authenticate();
        return response()->json(['success' => 'true','user' => $user],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function signUp(Request $request){
        $user = User::where('email',$request->email)->orWhere('phone',$request->phone)->first();
        if($user){
            return response()->json(['success' => 'false', 'error' => 'User Already Exist'],500);
        }
        if($request->password !== $request->confirm_password){
            return response()->json(['success' => 'false', 'error' => 'Password Doesnt Same'],500);
        }
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = bcrypt($request->password);
        $success = $user->save();
        if(!$success){
            return response()->json(['success' => 'false', 'error' => 'Internal Service Error'],500);
        }
        return response()->json(['success' => 'true'],200);
    }

    public function login(Request $request){
        $user = User::where('email',$request->email)->first();
        if(empty($user)){
            return response()->json(['success' => 'false','error' => 'user not found'],404);
        }
        $credentials = $request->only('email','password');
        $token = JWTAuth::attempt($credentials);
        if(!$token){
            return response()->json(['success' => 'false','error' => 'error while try to get token'],500);
        }
        return response()->json(['success' => 'true','token' => $token],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
