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
    $data = json_decode(file_get_contents(storage_path('data/projects.json')));
    $dataAddress = json_decode(file_get_contents(storage_path('data/address.json')));
    $dataServices = json_decode(file_get_contents(storage_path('data/services.json')));
    $dataSocialMedia = json_decode(file_get_contents(storage_path('data/socialMedia.json')));

    return view('welcome')->with('data', $data)->with('dataAddress', $dataAddress)->with('dataServices', $dataServices)->with('dataSocialMedia', $dataSocialMedia);
});

Route::get('/services', function () {
    $data = json_decode(file_get_contents(storage_path('data/projects.json')));
    $dataAddress = json_decode(file_get_contents(storage_path('data/address.json')));
    $dataServices = json_decode(file_get_contents(storage_path('data/services.json')));
    $dataSocialMedia = json_decode(file_get_contents(storage_path('data/socialMedia.json')));
    return view('services')->with('data', $data)->with('dataAddress', $dataAddress)->with('dataServices', $dataServices)->with('dataSocialMedia', $dataSocialMedia);
});

Route::get('/contact', function () {
    $data = json_decode(file_get_contents(storage_path('data/projects.json')));
    $dataAddress = json_decode(file_get_contents(storage_path('data/address.json')));
    $dataServices = json_decode(file_get_contents(storage_path('data/services.json')));
    $dataSocialMedia = json_decode(file_get_contents(storage_path('data/socialMedia.json')));

    return view('contact')->with('data', $data)->with('dataAddress', $dataAddress)->with('dataServices', $dataServices)->with('dataSocialMedia', $dataSocialMedia);
});


Route::get('/services/{id}', function ($id) {
    $data = json_decode(file_get_contents(storage_path('data/projects.json')));
    $dataAddress = json_decode(file_get_contents(storage_path('data/address.json')));
    $dataServices = json_decode(file_get_contents(storage_path('data/services.json')));
    $dataSocialMedia = json_decode(file_get_contents(storage_path('data/socialMedia.json')));

    return $filteredPeople = array_filter($dataServices, function ($dataBd) use ($id) {
        return $dataBd->id == $id;
    });

    return view('services-single', compact('filteredPeople'));
});