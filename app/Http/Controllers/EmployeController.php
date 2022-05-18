<?php

namespace App\Http\Controllers;
use App\Models\Employe;
use App\Imports\UsersImport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  dd('test');
        return Employe::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        /* $request->validate([
            'email'=>'required',
            'cin'=>'required',
        'mot de passe'=>'required',
        'Nom'=>'required',
        'Prenom'=>'required',
        'sexe'=>'required',
        'date_nais'=>'required',
        ' tel'=>'required',
        'grade'=>'required',
        'salaire'=>'required',
        
        ]); */

       // return [];

       $emp = new Employe();
       $emp->email = $request->input('email');
       $emp->mot_de_passe = $request->input('mot_de_passe');
        $emp->cin = $request->input('cin');
        $emp->Nom = $request->input('Nom');
        $emp->Prenom = $request->input('Prenom');
        $emp->sexe = $request->input('sexe');
        $emp->date_nais = $request->input('date_nais');
        $emp->tel = $request->input('tel');
        $emp->grade = $request->input('grade');
        $emp->salaire = $request->input('salaire');
        $emp->role= $request->input('role');
       $emp->save();
    return $emp;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Employe::find ($id);
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
        $Employe=Employe::find($id);
        $Employe->update($request->all());
        return $Employe;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Employe::destroy($id);
    }
}




