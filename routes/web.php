<?php

use App\Http\Controllers\BoxController;
use App\Http\Controllers\BoxPController;
use App\Http\Controllers\ControlBox;
use App\Http\Controllers\ControlBoxController;
use App\Http\Controllers\FormBox;
use App\Http\Controllers\FormBoxController;
use App\Http\Controllers\GlassController;
use App\Http\Controllers\GlassPController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RijectController;
use App\Http\Controllers\RijectPController;
use App\Http\Controllers\TotalboxController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;
use Symfony\Component\HttpKernel\Event\ViewEvent;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('glass', [GlassController::class, 'store']);
// Route::post('glass', [GlassController::class, 'store']);

Route::get('/', [IndexController::class, 'index']);
Route::post('login', [IndexController::class, 'authenticate']);
Route::get('logout', [IndexController::class, 'logout']);

// Route::group(['middleware' => ['auth']], function () {
//     Route::group(['middleware' => ['cek_login:admin']], function () {
//         Route::get('formbox', FormBoxController::class, 'index');
//     });
//     Route::group(['middleware' => ['cek_login:editor']], function () {
//         Route::resource('glass', GlassController::class, 'store');
//     });
// });

Route::get('glass', [GlassController::class, 'store']);
Route::post('glass', [GlassController::class, 'store']);

Route::get('glassp', [GlassPController::class, 'index']);
Route::get('/glassp/total', [GlassPController::class, 'total'])->name('/glassp/total');
Route::post('filter', [GlassPController::class, 'search'])->name('/glassp/search');
// Route::get('glassp/cetak_pdf', [GlassPController::class, 'cetak_pdf']);
Route::get('/filter', [GlassPController::class, 'filter']);

Route::get('/box', [BoxController::class, 'store']);
Route::post('/box', [BoxController::class, 'store']);

Route::get('boxp', [BoxPController::class, 'index']);
Route::get('/boxp/hasilAkhir', [BoxPController::class, 'hasilAkhir'])->name('/boxp/hasilAkhir');
Route::post('rekap', [BoxPController::class, 'search'])->name('/glassp/search');

Route::get('/riject', [RijectController::class, 'index']);

Route::get('/rijectp', [RijectPController::class, 'index']);
Route::get('/rijectp/store', [RijectController::class, 'store'])->name('rijectp/store');
// Route::get('rijectp/cetak_pdf', [RijectPController::class, 'cetak_pdf']);
Route::get('/rijectp/max', [RijectPController::class, 'max'])->name('/rijectp/max');
Route::post('search_date', [RijectPController::class, 'search'])->name('/rijectp/search');
// Route::get('students/records', [StudentController::class, 'records'])->name('students/records');

Route::get('/formbox', [FormBoxController::class, 'index'])->middleware('auth');
// Route::post('/formbox', [FormBoxController::class, 'index']);
// Route::get('/formbox', 'FormBoxController@index')->name('formbox');
Route::post('/formbox', [FormBoxController::class, 'store'])->middleware('auth');

Route::get('/controlbox', [ControlBoxController::class, 'index']);
Route::post('/insertdata', [ControlBoxController::class, 'updateKerusakan']);
Route::post('/simpanbox', [ControlBoxController::class, 'store']);
Route::get('totalbox', [TotalboxController::class, 'index'])->name('index');



// Route::get('/', function () {
//     return view('welcome');
// });
