<?php
use App\Http\Controllers\OsobaController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PersController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\KlasaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SegmentController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
Route::match(['get' ,'post'],'/person', [PersController::class , 'created'])->name('person');
Route::match(['get' ,'post'],'/klasa', [KlasaController::class , 'created'])->name('klasa');
Route::get('/indeks', [KlasaController::class , 'index'])->name('indeks');
Route::get('/show', [AutoController::class , 'index'])->name('show');
Route::get('/auto/{id}', [AutoController::class ,'show'])->name('show_id');
Route::get('/nowy', [AutoController::class ,'create'])->name('nowy');
Route::post('/auto_store', [AutoController::class ,'store'])->name('auto_store');
Route::get('/update/{id}', [AutoController::class ,'update'])->name('auto_up');
Route::post('/auto_ed', [AutoController::class ,'up'])->name('auto_ed');
Route::get('/delete/{id}', [AutoController::class ,'ddelete'])->name('auto_de');
Route::get('osoba', [OsobaController::class ,'Index']);

Route::get('/segm', [SegmentController::class ,'index'])->name('pokaz');

Route::get('/s_nowy', [SegmentController::class ,'created'])->name('s_nowy');
Route::post('/stored', [SegmentController::class ,'stored'])->name('stored');
Route::get('/segm/{id}', [SegmentController::class ,'show'])->name('sh_id');