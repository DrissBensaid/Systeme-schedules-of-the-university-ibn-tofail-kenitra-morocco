<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salle;
use App\Models\Filiere;
use DB;
class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salles = Salle::paginate(4);
        return view('admin.salle.index', ['salles'=>$salles]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filieres = Filiere::get();
        return view('admin.salle.create', ['filieres'=>$filieres]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'type_salle' => ['required', 'string'],
            'nbr_places' => ['required', 'integer'],
            'nom_faculte' => ['required'],
            'groupe' => ['required']
            
        ]);

        $salle = new Salle;
        
        $salle->type_salle= $request->type_salle;
        $salle->nbr_places = $request->nbr_places;
        $salle->nom_faculte = $request->nom_faculte;
        $salle->groupe_id = $request->groupe;

        $salle->save();

        return redirect()->back()->with('success', 'l\'utilisateur a été bien ajouté !!');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $salle = Salle::find($id);
        return response()->json($salle);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $salle = Salle::find($id);
        $filieres = Filiere::all();
        return view('admin.salle.edit' , ['salle' => $salle, 'filieres'=>$filieres]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'type_salle' => ['required'],
        //     'nbr_places' => ['required'],
        //     'nom_faculte' => ['required'],
        //     'groupe' => ['required']
        // ]);
        
        $salle = Salle::find($id);
        $salle->type_salle = $request->type_salle;
        $salle->nbr_places = $request->nbr_places;
        $salle->nom_faculte = $request->nom_faculte;
        if($request->groupe)
        {
            $salle->groupe_id = $request->groupe;
        }
        else{
            $salle->groupe_id = $salle->groupe_id;
        }
        

        $salle->save();

        return redirect()->back()->with('success', 'l\'utilisateur a été bien edité !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Salle::destroy($id);
        return redirect()->back()->with('success', 'l\'utilisateur a été bien supprimé !!');
    }
}
