<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Filiere;
use Hash;
use Auth;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('is_admin','!=',true)->paginate(4);
        return view('admin.profisseur.index', ['users'=>$users]);
    }




    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filieres = Filiere::get();
        return view('admin.profisseur.create', ['filieres'=>$filieres]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'telephone' => ['required','max:10', 'min:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
            
        ]);

        $user = new User;
        
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->telephone = $request->telephone;
        $user->poste = 'professeur';
        $user->email = $request->email;
        $user->groupe_id = $request->groupe;
        $user->password = Hash::make($request->nom);

        $user->save();

        return redirect()->back()->with('success', 'l\'utilisateur a été bien ajouté !!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return response()->json($user);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::find($id);
        $filieres = Filiere::all();
        return view('admin.profisseur.edit' , ['users' => $users, 'filieres'=>$filieres]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $user = User::find($id);
        if($user->email == $request->email)
        {
            $user->nom = $request->nom;
            $user->prenom = $request->prenom;
            $user->telephone = $request->telephone;
            $user->poste = $request->poste;
            $user->groupe_id = $request->groupe;
        }
        else
        {
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);

            $user->nom = $request->nom;
            $user->prenom = $request->prenom;
            $user->telephone = $request->telephone;
            $user->poste = $request->poste;
            $user->email = $request->email;
            $user->groupe_id = $request->groupe;
        }
        $user->save();

        return redirect()->back()
        ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()->back()->with('success', 'l\'utilisateur a été bien supprimé !!');
    }


    
}
