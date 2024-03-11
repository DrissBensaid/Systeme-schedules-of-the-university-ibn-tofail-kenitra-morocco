<?php

namespace App\Http\Controllers;
use Dompdf\Dompdf;
use PDF;

use Illuminate\Http\Request;
use App\Models\Filiere;
use DB;
class EmploiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filieres = Filiere::all();
        return view('admin.emplois.search_emploi',['filieres'=>$filieres]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $emploi = DB::table('emplois')
        ->where('semestre_id',$request->semestre)
        ->where('nomGroupe',$request->groupe)
        ->get();

        if(count($emploi) == 0)
        {
            return redirect()->back(); 
        }
        else
        {
            return view('admin.emplois.emploi' , ['emploi'=>$emploi]);
        }

        // $cours = DB::table('cours')->get();
        // return $cours;

       
    }

    public function genererPDF(Request $request)
    {
        $emploi = DB::table('emplois')
        ->where('semestre_id',$request->semestre_id)
        ->where('nomGroupe',$request->nomGroupe)
        ->get();
        $data = [
            'emploi'=>$emploi,
        ];
        // return $emploi;
        // Instancier Dompdf
        $pdf= PDF::loadView('admin.emplois.pdf', $data);

        return $pdf->stream('Emploi_du_temps.pdf');

        // Récupérer la vue
        // $vue = view('admin.emplois.pdf', $data);

        // Convertir la vue en HTML
        // $html = $vue->render();

        // Générer le PDF
        // $pdf = new Dompdf();
        // $pdf->loadHtml($html);
        // $pdf->setPaper('A4');
        // $pdf->render();

        // Retourner le PDF
        // return $pdf->stream('Emploi.pdf');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
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
