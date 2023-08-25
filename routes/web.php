<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MethodologyController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\MeetController;
use App\Http\Controllers\ReportController;

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

Route::get('/',[PortalController::class,'index'])->name('portal');

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/methodology',[MethodologyController::class,'index'])->name('methodology.index');
Route::post('/methodology/save-methodology',[MethodologyController::class,'store'])->name('methodology.store');
Route::put('/methodology/update-methodology/{id}',[MethodologyController::class,'update'])->name('methodology.update');
Route::get('/methodology/delete-methodology/{id}',[MethodologyController::class,'destroy'])->name('methodology.delete');


Route::get('/guide',[GuideController::class,'index'])->name('guide.index');
Route::post('/guide/save-guide',[GuideController::class,'store'])->name('guide.store');
Route::put('/guide/update-guide/{id}',[GuideController::class,'update'])->name('guide.update');
Route::delete('/guide/delete-guide/{id}',[GuideController::class,'destroy'])->name('guide.delete');

Route::get('/other',[OtherController::class,'index'])->name('other.index');
Route::post('/other/save-other',[OtherController::class,'store'])->name('other.store');
Route::put('/other/update-other/{id}',[OtherController::class,'update'])->name('other.update');
Route::get('/other/delete-other/{id}',[OtherController::class,'destroy'])->name('other.delete');

// bagian menu meet
Route::get('/meet',[MeetController::class,'index'])->name('meet.index');
Route::post('/meet',[MeetController::class,'store'])->name('meet.store');
Route::get('/meet/edit-meet/{id}',[MeetController::class,'edit'])->name('meet.edit');
Route::put('/meet/update-meet/{id}',[MeetController::class,'update'])->name('meet.update');


// bagian menu report
Route::get('/report',[ReportController::class,'index'])->name('report.index');
Route::post('/report',[ReportController::class,'store'])->name('report.store');
Route::get('/reports/{id}/download', [ReportController::class, 'download'])->name('report.download');
Route::get('/reports/{id}/preview', [ReportController::class, 'preview'])->name('report.preview');
Route::delete('/reports/{id}/delete', [ReportController::class, 'destroy'])->name('report.delete');
Route::get('/report/edit-report/{id}',[ReportController::class,'edit'])->name('report.edit');
Route::put('/report/update-report/{id}',[ReportController::class,'update'])->name('report.update');

// bagian menu surat tugas 
Route::get('/letter',[LetterController::class,'index'])->name('letter.index');
Route::post('/letter',[LetterController::class,'store'])->name('letter.store');
Route::get('/letters/{id}/download', [LetterController::class, 'download'])->name('letter.download');
Route::get('/letters/{id}/preview', [LetterController::class, 'preview'])->name('letter.preview');
Route::delete('/letters/{id}/delete', [LetterController::class, 'destroy'])->name('letter.delete');
Route::get('/letter/edit-letter/{id}',[LetterController::class,'edit'])->name('letter.edit');
Route::put('/letter/update-letter/{id}',[LetterController::class,'update'])->name('letter.update');
