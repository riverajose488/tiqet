<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tiqet;

class tiqetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiqet = tiqet::all();
        return view('tiqet.index',compact('tiqet')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tiqet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        tiqet::create($request->all());
        //dd("store");
        return view('tiqet.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);
        $tiqet = tiqet::find($id);
        //dd($tiqet);
        return view('tiqet.show', compact ('tiqet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiqet = tiqet::find($id);
        return View ('tiqet.edit', compact('tiqet')); 
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
        
        tiqet::find($id)->update($request->all());
            $this->validate($request,[ 'categoria'=>'required', 'titulo'=>'required', 'descripcion'=>'required']);
            dd($id);
            $tiqet = tiqet::all();
            return redirect()->route('tiqet.index');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);
        $tiqet = tiqet::find($id);
             $tiqet->delete();
             $tiqet = tiqet::all();
                return redirect()->route('tiqet.index');
    }
}