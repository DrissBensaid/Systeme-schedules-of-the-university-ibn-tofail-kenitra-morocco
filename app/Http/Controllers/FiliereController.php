<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Etablissement;
use Illuminate\Http\Request;

class FiliereController extends Controller
{

    public function index()
    {
        $filieres = Filiere::get();
        return view('admin.filiere.index' , ['filieres' => $filieres ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.filiere.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'filiereFr' => 'required',
            'filiereAr' => 'required',
        ]);

        Filiere::create([
            'filiereFr' => $request->filiereFr,
            'filiereAr' => $request->filiereAr,
        ]);

        return redirect()->back()->with('success', 'la filiere a été bien ajouter');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Filiere $filiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filiere $filiere)
    {
        return view('admin.filiere.edit' , ['filiere' => $filiere]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Filiere $filiere)
    {
        $request->validate([
            'filiereFr' => 'required',
            'filiereAr' => 'required',
        ]);

        $filiere->update([
            'filiereFr' => $request->filiereFr,
            'filiereAr' => $request->filiereAr,
        ]);

        return redirect()->back()->with('success', 'la filiere a été bien editer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filiere $filiere)
    {
        $filiere->destroy($filiere->id);
        return redirect()->back()->with('success', 'la filiere a été bien supprimer');;
    }
}
