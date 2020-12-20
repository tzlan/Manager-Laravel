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
//<-----------------------------USERS-------------------------------------->
//Route lister les users
Route::get('/lister_user', [App\Http\Controllers\ControllerUser::class, 'lister_users']);

//Route inscription user
Route::get('/inscription_user', [App\Http\Controllers\ControllerUser::class, 'formulaire']);
//Route inscription user
Route::post('/inscription_user', [App\Http\Controllers\ControllerUser::class, 'inscription_user']);

Route::get('/index_users.blade.php', function (){
    return view('index_users');
});

//<------------------------------------------------------------------------------>
//Routes generales
Route::get('/navbarre', function (){
    return view('navbarre');
});
Route::get('/laravel', function () {
    return view('welcome');
});

//<-----------------------------Connexions-------------------------------------->
Route::post('/connexionUser', [App\Http\Controllers\ControllerConnexionUser::class, 'traitement']);
Route::get('/connexionUser', [App\Http\Controllers\ControllerConnexionUser::class, 'formulaire']);


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

//Route supprimer entreprise
Route::get('entreprises/lister_entreprises/{id}',[App\Http\Controllers\ControllerEntreprise::class, 'destroy'])->name('lister_entreprises');

//Modifier offres
Route::get('entreprises/modifier_entreprises/{id}',[App\Http\Controllers\ControllerEntreprise::class, 'edit'])->name('modifier_entreprise');
Route::post('entreprises/modifier_entreprises/{id}',[App\Http\Controllers\ControllerEntreprise::class, 'update'])->name('update_entreprise');


//<-----------------------------STUDENTS-------------------------------------->
//Route Nav de la page STUDENTS
Route::get('/index_students.blade.php', function (){
    return view('index_students');
});
//Route inscription STUDENTS
Route::get('/inscription_students', [App\Http\Controllers\ControllerStudent::class, 'formulaire']);

//Route inscription STUDENTS
Route::post('/inscription_students', [App\Http\Controllers\ControllerStudent::class, 'inscription_students']);

//Route lister STUDENTS
Route::get('/lister_students', [App\Http\Controllers\ControllerStudent::class, 'lister_etudiants']);

//Supprimer STUDENTS
Route::get('students/lister_students/{id}',[App\Http\Controllers\ControllerStudent::class, 'destroy'])->name('lister_students');

//Modifier students
Route::get('students/modifier_students/{id}',[App\Http\Controllers\ControllerStudent::class, 'edit'])->name('modifier_student');
Route::post('students/modifier_students/{id}',[App\Http\Controllers\ControllerStudent::class, 'update'])->name('update_student');



//<-----------------------------OFFRES-------------------------------------->
//Route Nav de la page STUDENT
Route::get('/index_students.blade.php', function (){
    return view('index_students');
});
//Route inscription offre
Route::get('/inscription_offre', [App\Http\Controllers\ControllerOffre::class, 'formulaire']);
Route::post('/inscription_offre', [App\Http\Controllers\ControllerOffre::class, 'inscription_offre']);

//Route lister offres
Route::get('/lister_offres', [App\Http\Controllers\ControllerOffre::class, 'lister_offres']);


//Modifier offres
Route::get('offres/modifier_offres/{id}',[App\Http\Controllers\ControllerOffre::class, 'edit'])->name('modifier_offre');
Route::post('offres/modifier_offres/{id}',[App\Http\Controllers\ControllerOffre::class, 'update'])->name('update_offre');

//Supprimer offres
Route::get('offres/lister_offres/{id}',[App\Http\Controllers\ControllerOffre::class, 'destroy'])->name('lister_offres');


//<-----------------------------TUTEURS-------------------------------------->

Route::get('/index_tuteurs.blade.php', function (){
    return view('index_tuteurs');
});

//Route lister offres
Route::get('/lister_tuteurs', [App\Http\Controllers\ControllerTuteur::class, 'lister_tuteurs']);

//<-----------------------------JURY-------------------------------------->
Route::get('/index_jury.blade.php', function (){
    return view('index_jury');
});
//  Inscription Jury
Route::get('/inscription_jury', [App\Http\Controllers\ControllerJury::class, 'formulaire']);
Route::post('/inscription_jury', [App\Http\Controllers\ControllerJury::class, 'inscription_jury']);

//Lister Jury
Route::get('/lister_jury', [App\Http\Controllers\ControllerJury::class, 'lister_jury']);

//<-----------------------------------CONNEXIONS-------------------------------------------->

Route::get('/redirection_entreprise_connecte', [App\Http\Controllers\ControllerConnexionUser::class, 'accueil']);
Route::get('/deconnexion', [App\Http\Controllers\ControllerConnexionUser::class, 'deconnexion']);
