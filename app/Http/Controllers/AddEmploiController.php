<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiere;
use App\Models\Salle;
use App\Models\Emplois;
use DB;

class AddEmploiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filieres = Filiere::all();
        $salles = Salle::all();
        return view('admin.emploi.create',['filieres'=>$filieres, 'salles'=>$salles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $nom_semestre = DB::table('semestres')->where('id',$request->semestre_id)->get('semestre');
        $nom_filiere = DB::table('filieres')->where('id',$request->filiere)->get('filiereFr');

        $emploi = DB::table('emplois')
        ->where('semestre_id',$request->semestre_id)
        ->where('nomGroupe',$request->nomGroupe)
        ->get();

        if(count($emploi)>0)
        {
            return redirect()->back()->with('danger','il ya déjà une emploi pour ajouter cette emploi tu doit supprimer la premiere emploi');
        }
        else
        {
            Emplois::create([
                'list1'=>$request->list1,
                'salle1'=>$request->salle1,
                'list2'=>$request->list2,
                'salle2'=>$request->salle2,
                'list3'=>$request->list3,
                'salle3'=>$request->salle3,
                'salle3'=>$request->salle3,
                'salle4'=>$request->salle4,        
                'list5'=>$request->list5,
                'salle5'=>$request->salle5,
                'list6'=>$request->list6,
                'salle6'=>$request->salle6,        
                'list7'=>$request->list7,
                'salle7'=>$request->salle7,
                'list8'=>$request->list8,
                'salle8'=>$request->salle8,        
                'list9'=>$request->list9,
                'salle9'=>$request->salle9,
                'list10'=>$request->list10,
                'salle10'=>$request->salle10,        
                'list11'=>$request->list11,
                'salle11'=>$request->salle11,
                'list12'=>$request->list12,
                'salle12'=>$request->salle12,        
                'list13'=>$request->list13,
                'salle13'=>$request->salle13,
                'list14'=>$request->list14,
                'salle14'=>$request->salle14,        
                'list15'=>$request->list15,
                'salle15'=>$request->salle15,
                'list16'=>$request->list16,
                'salle16'=>$request->salle16,        
                'list17'=>$request->list17,
                'salle17'=>$request->salle17,
                'list18'=>$request->list18,
                'salle18'=>$request->salle18,        
                'list19'=>$request->list19,
                'salle19'=>$request->salle19,
                'list20'=>$request->list20,
                'salle20'=>$request->salle20,        
                'list21'=>$request->list21,
                'salle21'=>$request->salle21,
                'list22'=>$request->list22,
                'salle22'=>$request->salle22,        
                'list23'=>$request->list23,
                'salle23'=>$request->salle23,
                'list24'=>$request->list24,
                'salle24'=>$request->salle24,        
                'list25'=>$request->list25,
                'salle25'=>$request->salle25,
                'list26'=>$request->list26,
                'salle26'=>$request->salle26,        
                'list27'=>$request->list27,
                'salle27'=>$request->salle27,
                'list28'=>$request->list28,
                'salle28'=>$request->salle28,        
                'list29'=>$request->list29,
                'salle29'=>$request->salle29,
                'list30'=>$request->list30,
                'salle30'=>$request->salle30,        
                'list31'=>$request->list31,
                'salle31'=>$request->salle31,
                'list32'=>$request->list32,
                'salle32'=>$request->salle32,        
                'list33'=>$request->list33,
                'salle33'=>$request->salle33,
                'list34'=>$request->list34,
                'salle34'=>$request->salle34,        
                'list35'=>$request->list35,
                'salle35'=>$request->salle35,
                'list36'=>$request->list36,
                'salle36'=>$request->salle36,        
                'annee1'=>$request->annee1,
                'annee2'=>$request->annee2,
                'semestre_id'=>$request->semestre_id,
                'nomGroupe'=>$request->nomGroupe,
                'nomSemestre'=>$nom_semestre[0]->semestre,
                'filiere'=>$nom_filiere[0]->filiereFr
            ]);
    
            return redirect()->back()->with('success', 'l\'emploi a été bien ajouté !!');
        }
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
    public function destroy($id)
    {
        Emplois::destroy($id);
        return redirect()->back();
    }
}
