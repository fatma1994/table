<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscription;

class InscriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $inscription=inscription::All();
        $inscription=\App\Inscription::orderBy('created_at','Desc')->get();
        return view('inscriptions.index',compact('inscription'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eleve=\App\Eleve::pluck('id');
         return view('inscriptions.create',compact('eleve'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      $data=$request->validate([
        'date_inscrit'=>'required',
        'frais_inscription'=>'required',
         'annee_academique'=>'required'
      ]);


        $insc=new inscriptions();
         $insc->date_inscrit=$request->input('date_inscrit');
          $insc->frais_inscription=$request->input('frais_inscription');
           $insc->annee_academique=$request->input('annee_academique');
             $insc->eleve_id=$request->input('eleve_id');
        //eleves::create(['name'=>$elev]);
          $elev->save();
          return redirect('/');
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
        $inscription=\App\Inscription::find($id);
         $eleve=\App\Eleve::pluck('id');
        return view('inscriptions.edit',compact('inscription','eleve'));
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
        $inscription=\App\Inscription::find($id);
         if($inscription){
            $inscription->update([
        'date_inscrit'=>$request->input('date_inscrit'),
          'frais_inscription'=>$request->input('frais_inscription'),
           'annee_academique'=>$request->input('annee_academique'),
            'eleve_id'=>$request->input('eleve_id'),
            ]);
         }
         return redirect()->back;
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
