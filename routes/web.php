<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalleController;
// use App\Http\Controllers\SalleUserController;

use App\Http\Controllers\FiliereController;
use App\Http\Controllers\SemestreController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\EmploiController;
use App\Http\Controllers\AddEmploiController;
use App\Http\Controllers\HomeController;


use App\Models\Groupe;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['prefix'=>'user', 'as'=>'user.', 'middleware'=>['auth','isUser']],function () {
    Route::view('/', 'user.home')->name('home');
    // Route::resource('salles', SalleUserController::class);
    // Route::resource('profile', ProfileUserController::class);
    
});

Route::group(['prefix'=>'admin', 'as'=>'admin.', 'middleware'=>['auth','isAdmin']],function () {
    Route::get('/home',[HomeController::class, 'index'])->name('home');
    Route::resource('users', UserController::class);
    Route::resource('salles', SalleController::class);
    Route::resource('filiere', FiliereController::class);
    Route::resource('semestre', SemestreController::class);
    Route::resource('module', ModuleController::class);
    Route::resource('groupe', GroupeController::class);
    Route::resource('cours', CoursController::class);
    Route::resource('emploi', EmploiController::class)->except('genererPDF');
    Route::resource('emplois', AddEmploiController::class);
    // Route::get('/dropdowns/getStates/{id}', [ModuleController::class, 'getStates']);
    Route::get('/pdf', [EmploiController::class, 'genererPDF'])->name('pdf');


});



Route::get('/get-groupe/{semestre}' , function($semestre){
    if($semestre !== '')
    {
        $modules = DB::table('modules')->where('semestre_id', $semestre)->first('id');
        
        if($modules)
        {
            $groupes = DB::table('groupes')->where('module_id', $modules->id)->pluck('nomGroupe', 'id');
            return response()->json($groupes);
        }
        else
        {
            $groupes = DB::table('groupes')->where('module_id', '/1\/*28903@##4098348904370@###')->pluck('nomGroupe', 'id');
            return response()->json($groupes);
        } 
        // $groupes = Groupe::with('module.semestre')
        //  ->whereHas('module.semestre', function($query) use ($semestre) {
        //         $query->where('semestre_id' , $semestre);
        //     })
        //     ->pluck('nomGroupe');
        // return $groupes;
        // return response()->json($groupes);
    }
});

