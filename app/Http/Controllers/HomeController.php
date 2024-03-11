<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Groupe;
use App\Models\Module;
use App\Models\Filiere;
use App\Models\Emplois;
use App\Models\Salle;
use App\Models\Semestre;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professeurs = count(User::all()) - 1;
        $filieres = count(Filiere::all()) ;
        $semestres = count(Semestre::all()) ;
        $modules = count(Module::all()) ;
        $salles = count(Salle::all()) ;
        $groupes = count(Groupe::all()) ;
        $emplois = count(Emplois::all()) ;

        return view('admin.index',[
            'professeurs'=>$professeurs,
            "filieres"=>$filieres,
            'semestres'=>$semestres,
            'modules'=>$modules,
            'salles'=>$salles,
            'groupes'=>$groupes,
            'emplois'=>$emplois,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
