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
use App\Models\Customer;

Route::get('use-component', [UseComponent::class, 'index']);
Route::post('use-component', [UseComponent::class, 'submit']);


// =============================== MODEL ===============================
Route::get('model', function () {
    // $data = App\Models\Customer::all();
    $data = Customer::all();
    $data = $data->toArray();
    echo '<pre>';
    print_r($data);
});



// =============================== CRUD ===============================
use App\Http\Controllers\CRUDcontroller;  // CRUD.php

Route::get('crud', [CRUDcontroller::class, 'index']);
Route::get('crud/create', [CRUDcontroller::class, 'create']);
Route::post('crud', [CRUDcontroller::class, 'store']);
Route::get('crud/show/{id}', [CRUDcontroller::class, 'show']);
Route::get('crud/{id}/edit', [CRUDcontroller::class, 'edit']);
Route::put('crud/{id}', [CRUDcontroller::class, 'update']);
Route::delete('crud/{id}', [CRUDcontroller::class, 'destroy']);


// =============================== Web Routes ===============================
Route::get('web-routes', function () {
    return view('web_routes.index');
});

Route::get('web-routes/about', function () {
    return view('web_routes.about');
})->name('web-routes.about');

Route::get('web-routes/contact', function () {
    return view('web_routes.contact');
});



// =============================== Helper File ===============================
Route::get('helper_file', function () {
    echo "<title>Helper File</title>";
    echo "<center>";
    echo "<u><h1><i>Helper File</i></h1></u>";

    // callinng helper file function
    echo current_date();

    echo current_time();

    echo '</center>';
});



// =============================== File Upload ===============================
use App\Http\Controllers\FileUpload;

Route::get('file-upload', [FileUpload::class, 'index'])->name('file_upload');
Route::post('file-upload', [FileUpload::class, 'upload']);
Route::get('download-file', [FileUpload::class, 'download'])->name('download_file');



// =============================== Custom Validation ===============================
use App\Http\Controllers\CustomValidation;

Route::get('custom-validation', [CustomValidation::class, 'index'])->name('custom_validation');
Route::post('custom-validation', [CustomValidation::class, 'submit']);