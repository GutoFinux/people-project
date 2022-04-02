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

Route::get('/', [App\Http\Controllers\People::class, 'dashboard'])->name('dashboard');
Route::get('/new_person', [App\Http\Controllers\People::class, 'newPerson'])->name('new_person');
Route::get('/edit_person', [App\Http\Controllers\People::class, 'editPerson'])->name('edit_person');
Route::get('/details_person', [App\Http\Controllers\People::class, 'detailsPerson'])->name('details_person');

