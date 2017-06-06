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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', function () {
    return view('admin.home');
});

Route::get('admin/admin', function () {
    return view('admin.home');
});

// Routes pour la gestion des roles

Route::get('admin/RolesData','RoleCapaciteController@Roles');

Route::get('admin/RolesCapacites','RoleCapaciteController@showRoles');
Route::post('admin/RoleAdd','RoleCapaciteController@addRole');
Route::post('admin/RoleDelete','RoleCapaciteController@deleteRole');

Route::post('admin/RoleUpdate','RoleCapaciteController@updateRole');
Route::get('admin/RoleByID/{x}','RoleCapaciteController@getRoleByID');

// Routes pour la gestion des capacites

Route::get('admin/CapacitesData','RoleCapaciteController@Capacites');

Route::get('admin/Capacites','RoleCapaciteController@showCapacites');
Route::post('admin/CapaciteAdd','RoleCapaciteController@addCapacite');
Route::post('admin/CapaciteDelete','RoleCapaciteController@deleteCapacite');

Route::post('admin/CapaciteUpdate','RoleCapaciteController@updateCapacite');
Route::get('admin/CapaciteByID/{x}','RoleCapaciteController@getCapaciteByID');

// Routes pour la gestion des prestataires


       
Route::get('admin/PrestatairesData','PrestataireController@Prestataires')->middleware('auth');

Route::get('admin/Prestataires','PrestataireController@showPrestataires')->middleware('auth');
Route::post('admin/PrestataireAdd','PrestataireController@addPrestataire')->middleware('auth');
Route::post('admin/PrestataireDelete','PrestataireController@deletePrestataire')->middleware('auth');

Route::post('admin/PrestataireUpdate','PrestataireController@updatePrestataire')->middleware('auth');
Route::get('admin/PrestataireByID/{x}','PrestataireController@getPrestataireByID')->middleware('auth');

Route::post('admin/PrestataireSendEmail','PrestataireController@PrestataireSendEmail')->middleware('auth');


// Routes pour la gestion des commerciales

Route::get('admin/CommercialesData','CommercialeController@Commerciales');

Route::get('admin/Commerciales','CommercialeController@showCommerciales');
Route::post('admin/CommercialeAdd','CommercialeController@addCommerciale');
Route::post('admin/CommercialeDelete','CommercialeController@deleteCommerciale');

Route::post('admin/CommercialeUpdate','CommercialeController@updateCommerciale');
Route::get('admin/CommercialeByID/{x}','CommercialeController@getCommercialeByID');

Route::post('admin/CommercialeSendEmail','CommercialeController@CommercialeSendEmail');
Route::post('admin/CommercialeConfirme','CommercialeController@CommercialeConfirme');

Route::get('admin/DemandesCommerciales','CommercialeController@showDemandesCommerciales');
Route::get('admin/DemandesData','CommercialeController@Demandes');


//*********************************************************************************************************
//*********************************************************************************************************
//*********************************************************************************************************

Route::get('/Commerciales', function () {
    return view('commerciale.home');
});

Route::get('/Commerciales/DemandesRetrait','SoldeController@DemandesRetrait');

Route::post('/Commerciales/DemanderRetrait','SoldeController@DemanderRetrait');

/*Route::get('/Commerciales/DemanderRetrait', function () {
    return view('commerciale.demanderetrait');
});*/



