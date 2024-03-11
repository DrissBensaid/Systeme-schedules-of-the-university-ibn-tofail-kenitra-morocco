<?php

namespace App\Http\Controllers;

use App\Models\Semestre;
use App\Models\Filiere;
use App\Models\Etablissement;
use Illuminate\Http\Request;

class SemestreController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $semestres = Semestre::with('filiere')->get();
        $filieres = Filiere::get();
        return view('admin.semestre.index' , ['semestres' => $semestres , "filieres" => $filieres]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filieres = Filiere::get();
        return view('admin.semestre.create', ['filieres'=>$filieres]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'semestre' => 'required',
            'capacite' => 'required|numeric',
            'filiere' => 'required',
        ]);


        Semestre::create([
            'semestre' => $request->semestre,
            'capacite' => $request->capacite,
            'filiere_id' => $request->filiere,
        ]);

        $request->session()->flash('success', 'le seméstre a été bien ajouter');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $request->validate([
            'filiere' => 'required',
        ]);

        $filiere = Filiere::where('filiereFr' , $request->filiere)
        ->value('id');

        $semestre = Semestre::with('filiere')->where('filiere_id' , $filiere)->get();

        $filiere = Filiere::all();
        return view('admin.semestre.index' , ['semestre' => $semestre , 'filiere' => $filiere]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Semestre $semestre)
    {
        $filieres = Filiere::get();
        return view('admin.semestre.edit' , ['semestre' => $semestre, 'filieres'=>$filieres]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Semestre $semestre)
    {
        $request->validate([
            'semestre' => 'required',
            'capacite' => 'required|numeric',
            'filiere' => 'required',
        ]);


        $semestre->update([
            'semestre' => $request->semestre,
            'capacite' => $request->capacite,
            'filiere_id' => $request->filiere,
        ]);

        return redirect()->back()->with('success','le seméstre a été bien editer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Semestre $semestre)
    {
        $semestre->destroy($semestre->id);
        return redirect()->back()->with('success','le seméstre a été bien supprimer');;
    }
}
