<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContractsController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\InterventionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\UsersController;
use Google\Cloud\Vision\V1\Client\ImageAnnotatorClient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use thiagoalessio\TesseractOCR\TesseractOCR;
use Stichoza\GoogleTranslate\GoogleTranslate;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('translate', function () {


    $tr = new GoogleTranslate();
    $tr->setSource('en');
    $tr->setTarget('ku'); // or use your dynamic language code

    echo $tr->translate('Languages');
});
Route::resource('users-management', UsersController::class);
Route::resource('documents', DocumentsController::class);
Route::get('invoice-create',[DocumentsController::class,'invoiceCreate'])->name('invoice.create');
Route::get('payslip-create',[DocumentsController::class,'payslipCreate'])->name('payslip.create');
Route::get('followup-create',[DocumentsController::class,'followupCreate'])->name('followup.create');
Route::get('activity-create',[DocumentsController::class,'activityCreate'])->name('activity.create');
Route::get('invoice-list',[DocumentsController::class,'invoiceList'])->name('invoice.List');
Route::get('payslip-list',[DocumentsController::class,'payslipList'])->name('payslip.List');
Route::get('followup-list',[DocumentsController::class,'followupList'])->name('followup.List');
Route::get('activity-list',[DocumentsController::class,'activityList'])->name('activity.List');
Route::resource('schedules', ScheduleController::class);
Route::resource('interventions', InterventionController::class);
Route::resource('blogs', BlogController::class);
Route::resource('contracts', ContractsController::class);
Route::get('profile-setting', [ProfileController::class, 'index'])->name('profile.index');
Route::post('profile-setting', [ProfileController::class, 'store'])->name('profile.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
