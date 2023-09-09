<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/simple', function () {
    return view('simple', ['name' => 'Admin']);
})->name('simple-route');*/

Route::get('/simple',  fn() => view('simple', ['name' => 'Admin']))->name('simple-route');

/*Route::get('/simple/{id}', function (int $id) {
    if ($id === 1) {
        return to_route('simple-route');
        // return redirect()->to('simple');
        // return redirect('simple');
    }
   return view('simple', ['name' => 'Admin-'. $id]);
})->name('simple-id-route');*/

Route::get('/simple/{id}',
    fn (int $id) => $id === 1 ?
        to_route('simple-route') :
        view('simple', ['name' => 'Admin-'. $id])
)->name('simple-id-route');
