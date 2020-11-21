<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//<---------------------INDEX----------------------------------->
Route::get('/', function (){
    return view('accueil');
});


//Exemple de route avec fonction


//<------------------------------------------------------------------------------>
//Routes generales
Route::get('/navbarre', function (){
    return view('navbarre');
});



Route::get('/laravel', function () {
    return view('welcome');
});





//<-----------------------------ENTREPRISE-------------------------------------->

//Route Nav de la page entreprise
Route::get('/index_entreprise.blade.php', function (){
    return view('index_entreprise');
});
//Route inscription entreprise
Route::get('/inscription_entreprise', [App\Http\Controllers\ControllerEntreprise::class, 'formulaire']);

//Route inscription
Route::post('/inscription_entreprise', [App\Http\Controllers\ControllerEntreprise::class, 'inscription_entreprise']);

//Route lister entreprise
Route::get('/lister_entreprises', [App\Http\Controllers\ControllerEntreprise::class, 'lister_entreprises']);



//<-----------------------------STUDENTS-------------------------------------->
//Route Nav de la page entreprise
Route::get('/index_students.blade.php', function (){
    return view('index_students');
});
//Route inscription entreprise
Route::get('/inscription_students', [App\Http\Controllers\ControllerStudent::class, 'formulaire']);

//Route inscription
Route::post('/inscription_students', [App\Http\Controllers\ControllerStudent::class, 'inscription_students']);

//Route lister entreprise
Route::get('/lister_students', [App\Http\Controllers\ControllerStudent::class, 'lister_etudiants']);

//<-----------------------------OFFRE-------------------------------------->
//Route Nav de la page entreprise
Route::get('/index_students.blade.php', function (){
    return view('index_students');
});
//Route inscription entreprise
Route::get('/inscription_offre', [App\Http\Controllers\ControllerOffre::class, 'formulaire']);

//Route inscription
Route::post('/inscription_offre', [App\Http\Controllers\ControllerOffre::class, 'inscription_offre']);

//Route lister entreprise
Route::get('/lister_offres', [App\Http\Controllers\ControllerOffre::class, 'lister_offres']);

//<-----------------------------TUTEURS-------------------------------------->

//<-----------------------------JURY-------------------------------------->
