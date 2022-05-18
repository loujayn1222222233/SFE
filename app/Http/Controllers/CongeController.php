<?php

namespace App\Http\Controllers;
use App\Models\Conge;
use App\Imports\UsersImport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CongeController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Conge::all();
    }
    
    public function destroy($id)
    {
        return conge::destroy($id);
    }

/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {




    $Conge = new Conge();
    $Conge-> id_demande= $request->input('id_demande');
    $Conge-> type_demande = $request->input('type_demande');
    $Conge-> description = $request->input('description');
    $Conge-> date_debut= $request->input('date_debut');
    $Conge-> date_fin = $request->input('date_fin');
    $Conge-> heure_debut = $request->input('heure_debut');
    $Conge-> heure_fin= $request->input('heure_fin');
     
    $Conge->save();
 return $Conge;
}}