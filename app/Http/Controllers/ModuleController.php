<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Semestre;
use App\Models\Filiere;
use Illuminate\Http\Request;
use DB;
class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modules = Module::with('semestre')->get();
        $semestres = Semestre::all();
        return view('admin.module.index' , ['modules' => $modules , 'semestres' => $semestres ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filieres = Filiere::get();
        return view('admin.module.create',['filieres' => $filieres ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'moduleFr' => 'required',
            'moduleAr' => 'required',
            'semestre' => 'required',
        ]);

        Module::create([
            'moduleFr' => $request->moduleFr,
            'moduleAr' => $request->moduleAr,
            'semestre_id' => $request->semestre,
        ]);

        return redirect()->back()->with('success','le seméstre a été bien ajouter');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $semestres = DB::table('semestres')->where('filiere_id', $id)->pluck('semestre', 'id');
        return response()->json($semestres);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module)
    {
        $filieres = Filiere::get();
        return view('admin.module.edit' , ['module' => $module, 'filieres'=>$filieres]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Module $module)
    {
        $request->validate([
            'moduleFr' => 'required',
            'moduleAr' => 'required',
            'semestre' => 'required',
        ]);

        $module->update([
            'moduleFr' => $request->moduleFr,
            'moduleAr' => $request->moduleAr,
            'semestre_id' => $request->semestre,
        ]);

        return redirect()->back()->with('success','le seméstre a été bien editer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module)
    {
        $module->destroy($module->id);
        return redirect()->back()->with('success','le seméstre a été bien supprimer');
    }
}
