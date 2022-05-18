<?php

namespace App\Http\Controllers;
use  App\Models\Calender;
use App\Imports\UsersImport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalenderController extends Controller
{
    
    public function index()
    {
      //  dd('test');
        return Calender::all();
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clndr = new Calender();
        $clndr->dateEvent= $request->input('dateEvent');
        $clndr->heureStart = $request->input('heureStart');
         $clndr->heureEnd = $request->input('heureEnd');
         $clndr-> event= $request->input('event');
         $clndr->save();
return $clndr;
}
 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Calender::find ($id);
    }
 /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Calender::destroy($id);
    }
}
