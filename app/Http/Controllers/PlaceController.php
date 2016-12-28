<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Place;
class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Place::orderBy('created_at','desc')->get();
        $data['places'] = $places;
        return view('web.place',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.place_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $place = new Place();
        $place->name = $request->name;
        $place->address = $request->address;
        $place->description = $request->description;
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $extension = $photo->getClientOriginalExtension();
            $name = rand(111111111,99999999).'.'.$extension;
            $photo->move('uploads',$name);
            $url = url('/').'/uploads/'.$name;
            $place->photo = $url;
        }else{
            $place->photo = "default.jpg";
        }
        $success = $place->save();
        if(!$success){
            return response()->json(['error' => "error while creating"]);
        }
        return redirect('/place');
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
        $place = Place::findOrFail($id);
        $data['place'] = $place;
        return view('web.place_edit',$data);
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
        $place = Place::find($id);
        $place->name = $request->name;
        $place->address = $request->address;
        $place->description = $request->description;
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $extension = $photo->getClientOriginalExtension();
            $name = rand(111111111,99999999).'.'.$extension;
            $photo->move('uploads',$name);
            $url = url('/').'/uploads/'.$name;
            $place->photo = $url;
        }else{
            $place->photo = "default.jpg";
        }
        $success = $place->save();
        if(!$success){
            return response()->json(['error' => "error while updating"]);
        }
        return redirect('/place');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $place = Place::find($id);
        if($place == null){
            return redirect('/place');
        }
        $success = $place->delete();
        if(!$success){
            return response()->json(['error' => 'error while deleting']);
        }
        return redirect('/place');
    }
}
