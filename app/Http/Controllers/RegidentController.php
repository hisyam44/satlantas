<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Regident;

class RegidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regidents = Regident::orderBy('created_at','desc')->get();
        $data['regidents'] = $regidents;
        return view('web.regident',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.regident_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regident = new Regident();
        $regident->title = $request->title;
        $regident->link = $request->title;
        $regident->description = $request->description;
        $success = $regident->save();
        if(!$success){
            return response()->json(['error' => 'error while creating']);
        }
        return redirect('/regident');
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
        $regident = Regident::findOrFail($id);
        $data['regident'] = $regident;
        return view('web.regident_edit',$data);
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
        $regident = Regident::findOrFail($id);
        $regident->title = $request->title;
        $regident->link = $request->link;
        $regident->description = $request->description;
        $success = $regident->save();
        if(!$success){
            return response()->json(['error' => 'error while updating']);
        }
        return redirect('/regident');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $regident = Regident::find($id);
        if($regident == null){
            return redirect('/regident');
        }
        $success = $regident->delete();
        if(!$success){
            return response()->json(['error' => 'error while deleting']);
        }
        return redirect('/regident');
    }
}
