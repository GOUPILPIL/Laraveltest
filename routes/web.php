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
Route::get('/coucou', function () {
    return "kebab";
});

//Route::get('user/{id}', function ($id = 4) {
//    return 'User '.$id;
//});

Route::get('user/{id?}', function ($id = 'babouche') {
    if($id<=10){
        return 'User '.$id;
    }else{
        return "l'utilisateur n'existe pas";
    }
});
Route::redirect('/onche', '/coucou', 301);