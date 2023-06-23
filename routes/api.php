<?php

use App\Http\Controllers\BoxController;
use App\Http\Controllers\RijectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/test', function () {
//     return response()->json([
//         'success' => true,
//         'message' => 'ok'
//     ]);
// });

Route::get('/riject', [RijectController::class, 'index']);
Route::get('/formbox', [FormBoxController::class, 'index'])->name('formbox.index');
Route::post('/formbox', [FormBoxController::class, 'store'])->name('formbox.store');
Route::get('/', [IndexController::class, 'index']);
Route::get('/', [IndexController::class, 'store'])->name('index.store');

Route::get('/box', [BoxController::class, 'store'])->name('box.store');
Route::post('/box', [BoxController::class, 'index'])->name('box.index');

// Route::get('/box/{id}',function($id)
// {
//     DB::select('call UpdateKerusakan(?,?)', [$id])
// });

// Route::get('/box', [BoxController::class, 'box']);
// Route::get('/box', [BoxController::class, 'index']);
// Route::get('/riject', [RijectController::class, 'index']);
// Route::post('/box', [BoxController::class, 'index'])->name('box.index');

// Route::get('/formbox', 'FormBoxController@index')->name('formbox');


// Route::get('/controlbox', [ControlBoxController::class, 'index']);

// Route::post('/simpandata', [ControlBoxController::class, 'store']);
