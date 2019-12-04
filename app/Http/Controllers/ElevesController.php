<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eleve;

class ElevesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eleve=eleve::All();
        $eleve=\App\Eleve::orderBy('created_at','Desc')->get();
        return view('eleves.index',compact('eleve'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eleves.create');
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
        'matricule'=>'required|min:4',
        'nom'=>'required',
         'prenom'=>'required'
      ]);


        $elev=new eleve();
         $elev->matricule=$request->input('matricule');
          $elev->nom=$request->input('nom');
           $elev->prenom=$request->input('prenom');
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
         $eleve=\App\Eleve::find($id);
        return view('eleves.edit',compact('eleve'));
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
         $eleve=\App\Eleve::find($id);
         if($eleve){
            $eleve->update([
                'matricule'=>$request->input('matricule'),
                'nom'=>$request->input('nom'),
                'prenom'=>$request->input('prenom'),
            ]);
         }
         return redirect()->back();
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
