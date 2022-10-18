<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController; // MyController.php
use App\Http\Controllers\ResourceController; // ResourceController.php
use App\Http\Controllers\SingleActionController; // SingleActionController.php

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


// =============================== RENDERING SOME SIMPLE STRING ===============================
Route::get('/text', function () {
    echo '<center>';
    echo 'Hello World';
    return '<h3>Hello World</h3></center>';
});

Route::get('/text/{name}', function ($name) {
    echo '<center>In url replace '.$name.' with your name</center>';
    return '<center><h3>Hello '.$name.'</h3></center>';
});

Route::get('/text/{fname}/{lname?}', function ($fname, $lname=null) {
    if($lname==null){
        return '<center><h3>Hello '.$fname.'</h3></center>';
    }else{
        echo '<center>In url Choudhury is optional</center>';
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



// =============================== BLADE TEMPLATEING ===============================
Route::get('template', function () {
    return view('templates.index');
});

Route::get('template/template-1', function () {
    return view('template_1');
});

Route::get('template/template-2', function () {
    return view('template_2');
});

Route::get('template/template-3', function () {
    $header = "Header";
    $main = "Main";
    $footer = "Footer";
    $data = compact('header', 'main', 'footer');
    return view('template_3', $data);
});



// =============================== CONTROLLER ===============================
Route::get('my-controller', [MyController::class, 'index']);
Route::get('my-controller/home', [MyController::class, 'home']);

// ============= RESOURCE CONTROLLER =============
Route::resource('resource-controller', ResourceController::class);

// ============= SINGLE ACTION CONTROLLER =============
// Route::get('single-action-controller', [SingleActionController::class]);
// Route::get('single-action', Controllers\SingleActionController::class);





// =============================== FORM SUBMIT ===============================
use App\Http\Controllers\SubmitForm;  // SubmitForm.php

Route::get('submit-form', [SubmitForm::class, 'index']);
Route::post('submit-form', [SubmitForm::class, 'submit']);


// =============================== COMPONETS ===============================
use App\Http\Controllers\UseComponent;  // UseComponent.php

Route::get('use-component', [UseComponent::class, 'index']);
Route::post('use-component', [UseComponent::class, 'submit']);
