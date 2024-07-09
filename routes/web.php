<?php

use App\Http\Controllers\CenterController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
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

Route::get('/Center', [CenterController::class, 'index'])->name('centers.index');
Route::get('/Center/get', [CenterController::class, 'create'])->name('centers.create');
Route::post('/Center', [CenterController::class, 'store'])->name('centers.store');
Route::get('/Center/{id}', [CenterController::class, 'show'])->name('centers.show');
Route::get('/Center/{id}/edit', [CenterController::class, 'edit'])->name('centers.edit');
Route::put('/Center/{id}', [CenterController::class, 'update'])->name('centers.update');
Route::delete('/Center/{id}', [CenterController::class, 'destroy'])->name('centers.destroy');

Route::get('/Career', [CareerController::class, 'index'])->name('careers.index');
Route::get('/Career/get', [CareerController::class, 'create'])->name('careers.create');
Route::post('/Career', [CareerController::class, 'store'])->name('careers.store');
Route::get('/Career/{id}', [CareerController::class, 'show'])->name('careers.show');
Route::get('/Career/{id}/edit', [CareerController::class, 'edit'])->name('careers.edit');
Route::put('/Career/{id}', [CareerController::class, 'update'])->name('careers.update');
Route::delete('/Career/{id}', [CareerController::class, 'destroy'])->name('careers.destroy');

Route::get('/Sector', [SectorController::class, 'index'])->name('sectors.index');
Route::get('/Sector/get', [SectorController::class, 'create'])->name('sectors.create');
Route::post('/Sector', [SectorController::class, 'store'])->name('sectors.store');
Route::get('/Sector/{id}', [SectorController::class, 'show'])->name('sectors.show');
Route::get('/Sector/{id}/edit', [SectorController::class, 'edit'])->name('sectors.edit');
Route::put('/Sector/{id}', [SectorController::class, 'update'])->name('sectors.update');
Route::delete('/Sector/{id}', [SectorController::class, 'destroy'])->name('sectors.destroy');

Route::get('/Specialty', [SpecialtyController::class, 'index'])->name('specialties.index');
Route::get('/Specialty/get', [SpecialtyController::class, 'create'])->name('specialties.create');
Route::post('/Specialty', [SpecialtyController::class, 'store'])->name('specialties.store');
Route::get('/Specialty/{id}', [SpecialtyController::class, 'show'])->name('specialties.show');
Route::get('/Specialty/{id}/edit', [SpecialtyController::class, 'edit'])->name('specialties.edit');
Route::put('/Specialty/{id}', [SpecialtyController::class, 'update'])->name('specialties.update');
Route::delete('/Specialty/{id}', [SpecialtyController::class, 'destroy'])->name('specialties.destroy');

Route::get('/Student', [StudentController::class, 'index'])->name('students.index');
Route::get('/Student/get', [StudentController::class, 'create'])->name('students.create');
Route::post('/Student', [StudentController::class, 'store'])->name('students.store');
Route::get('/Student/{id}', [StudentController::class, 'show'])->name('students.show');
Route::get('/Student/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/Student/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/Student/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

Route::get('/Subject', [SubjectController::class, 'index'])->name('subjects.index');
Route::get('/Subject/get', [SubjectController::class, 'create'])->name('subjects.create');
Route::post('/Subject', [SubjectController::class, 'store'])->name('subjects.store');
Route::get('/Subject/{id}', [SubjectController::class, 'show'])->name('subjects.show');
Route::get('/Subject/{id}/edit', [SubjectController::class, 'edit'])->name('subjects.edit');
Route::put('/Subject/{id}', [SubjectController::class, 'update'])->name('subjects.update');
Route::delete('/Subject/{id}', [SubjectController::class, 'destroy'])->name('subjects.destroy');
