<?php
use App\galery;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    $imagen = galery::all();
    $imagen = $imagen->random(5);
    return view('inicio', compact('imagen'));
});
Route::post('image', function() {
    $imagen = new galery;
    $imagen->name = Input::get('name');
    $imagen->image = Input::get('image');
    $imagen->save();
    $imagen = galery::all();
    return redirect('/');
});