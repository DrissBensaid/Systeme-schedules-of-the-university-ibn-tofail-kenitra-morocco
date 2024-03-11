<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours;
use App\Models\Filiere;
use App\Models\Salle;
use DB;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cours = Cours::all();
        return view('admin.cours.index',['cours'=>$cours]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filieres = Filiere::all();
        $salles = Salle::all();
        return view('admin.cours.create', ['filieres'=>$filieres, 'salles'=>$salles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jour'=>'required',
            'module'=>'required',
            'debutDeSeance'=>'required',
            'finDeSeance'=>'required',
            'salle'=>'required',
            'groupe'=>'required'
        ]);
        $module = DB::table('modules')->where('id',$request->module)->get('moduleFr');

        Cours::create([
            'jour'=>$request->jour,
            'module'=>$module[0]->moduleFr,
            'nomGroupe'=>$request->groupe,
            'debutDeSeance'=>$request->debutDeSeance,
            'finDeSeance'=>$request->finDeSeance,
            'salle'=>$request->salle,
            'semestre_id'=>$request->semestre
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $groupes = DB::table('groupes')->where('module_id', $id)->pluck('nomGroupe','id');
        return response()->json($groupes);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cours = Cours::find($id);
        $filieres = Filiere::all();
        $salles = Salle::all();
        return view('admin.cours.edit' , ['cours' => $cours, 'filieres'=>$filieres, 'salles'=>$salles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'jour'=>'required',
        //     'debutDeSeance'=>'required',
        //     'finDeSeance'=>'required',
        //     'salle'=>'required'
        // ]);
        
        $module = DB::table('modules')->where('id',$request->module)->get('moduleFr');
        // return $module;
        $cours = Cours::find($id);
        
                
        $cours->jour = $request->jour;
        if(count($module) > 0)
        {
            $cours->module = $module[0]->moduleFr;
        }
        else{
            $cours->module = $request->module;
        }
        $cours->nomGroupe = $request->groupe;
        $cours->debutDeSeance = $request->debutDeSeance;
        $cours->finDeSeance = $request->finDeSeance;
        $cours->salle = $request->salle;
        $cours->semestre_id = $request->semestre;

        $cours->save();

        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Cours::destroy($id);
        return redirect()->back();
    }
}
