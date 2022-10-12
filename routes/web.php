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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/text', function () {
    echo '<center>';
    echo 'Hello World';
    return '<h3>Hello World</h3></center>';
});

Route::get('/text/{name}', function ($name) {
    return '<center><h3>Hello '.$name.'</h3></center>';
});

Route::get('/text/{fname}/{lname?}', function ($fname, $lname=null) {
    if($lname==null){
        return '<center><h3>Hello '.$fname.'</h3></center>';
    }else{
    return '<center><h3>Hello '.$fname.' '.$lname.'</h3></center>';
    }
});


// =============================== DYANMIC ROUTE ===============================
Route::get('dynamic-route', function () {
    return view('dynamic_routes.index');
});

Route::get('dynamic-route/{name}', function ($name) {
    $data = compact('name');
    return view('dynamic_routes.route', $data);
});


// =============================== BLADE SYNTAX ===============================
Route::get('blade-syntax', function () {
    return view('blade_syntax.index');
});
