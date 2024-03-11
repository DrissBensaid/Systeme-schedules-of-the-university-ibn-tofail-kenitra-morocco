<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use App\Models\Module;
use App\Models\Filiere;
use Illuminate\Http\Request;
use DB;
class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groupes = Groupe::with('module')->get();
        return view('admin.groupe.index' , ['groupes' => $groupes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filieres = Filiere::get();
        return view('admin.groupe.create', ['filieres'=>$filieres]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomGroupe' => 'required',
            'module' => 'required',
        ]);

        Groupe::create([
            'nomGroupe' => $request->nomGroupe,
            'module_id' => $request->module,
        ]);

        return redirect()->back()->with('success','le groupe a été bien ajouter');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $modules = DB::table('modules')->where('semestre_id', $id)->pluck('moduleFr', 'id');
        return response()->json($modules);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Groupe $groupe)
    {
        $filieres = Filiere::get();
        return view('admin.groupe.edit' , ['groupe' => $groupe, 'filieres'=>$filieres]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Groupe $groupe)
    {
        $request->validate([
            'nomGroupe' => 'required',
            'module' => 'required',
        ]);


        $groupe->update([
            'nomGroupe' => $request->nomGroupe,
            'module_id' => $request->module,
        ]);

        return redirect()->back()->with('success','le groupe a été bien editer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Groupe $groupe)
    {
        $groupe->destroy($groupe->id);
        return redirect()->back()->with('success','le groupe a été bien supprimer');
    }
}
