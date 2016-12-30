<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Phone;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::orderBy('created_at','desc')->get();
        $data['phones'] = $phones;
        return view('web.phone',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.phone_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phone = new Phone();
        $phone->name = $request->name;
        $phone->phone = 'tel:+62'.$request->phone;
        $success = $phone->save();
        if(!$success){
            return response()->json(['error' => 'error while creating']);
        }
        return redirect('/phone');
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
        $phone = Phone::findOrFail($id);
        $data['phone'] = $phone;
        return view('web.phone_edit',$data);
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
        $phone = Phone::findOrFail($id);
        $phone->name = $request->name;
        $phone->phone = 'tel:+62'.$request->phone;
        $success = $phone->save();
        if(!$success){
            return response()->json(['error' => 'error while updating']);
        }
        return redirect('/phone');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phone = Phone::find($id);
        if($phone == null){
            return redirect('/phone');
        }
        $success = $phone->delete();
        if(!$success){
            return response()->json(['error' => 'error while deleting']);
        }
        return redirect('/phone');
    }
}
