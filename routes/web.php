<?php

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
// Logout route
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/analytic', 'AnalyticController@dashboard')->name('analytic');

Route::get('/persons/add', 'PersonneController@addForm')->name('add_person_form');
Route::post('/persons/add', 'PersonneController@import')->name('import_person');
Route::get('/taches/liste','TacheController@liste')->name('liste_taches');
Route::get('/taches/formulaire/ajout','TacheController@formulaire')->name('ajout_tache');
Route::post('/taches/formulaire/ajout','TacheController@ajouter')->name('post_tache');
// API get tash for doshboard
Route::get('/api/taches/liste','HomeController@listeDesTaches')->name('api_liste_taches');

Route::get('/equipements/liste','EquipementController@liste')->name('liste_equipements');
Route::get('/equipements/formulaire/ajout','EquipementController@ajouter')->name('ajout_equipement');
Route::post('/equipements/formulaire/ajout','EquipementController@poster')->name('post_equipement');

Route::get('/gestion/profiles/liste','GestionProfilesController@liste')->name('liste_profiles');
Route::get('/gestion/profiles/{id}/modifier','GestionProfilesController@formulaire')->name('modifier_profile');
Route::patch('/gestion/profiles/{id}/modifier','GestionProfilesController@modifier')->name('mis_a_jour_profile');

Route::post('/persons/formulaire/ajout','PersonneController@poster')->name('post_personne');

Route::get('/rapport/liste','FicheRapportController@liste')->name('liste_rapport');
Route::get('/rapports/formulaire/ajout','FicheRapportController@ajouter')->name('ajout_rapport');