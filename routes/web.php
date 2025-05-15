<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContractsController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\InterventionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return redirect('/');
});

Route::view('client-login','auth.client-login')->name('client-login');
Route::view('employee-login','auth.employee-login')->name('employee-login');
Route::view('test-translate','translate');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/who-we-are', [App\Http\Controllers\HomeController::class, 'who_we_are'])->name('who_we_are');
Route::get('/our-values', [App\Http\Controllers\HomeController::class, 'our_values'])->name('our_values');
Route::get('/why-us', [App\Http\Controllers\HomeController::class, 'why_us'])->name('why_us');
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');
Route::get('/career', [App\Http\Controllers\HomeController::class, 'career'])->name('career');
Route::get('/legal-1', [App\Http\Controllers\HomeController::class, 'legal_1'])->name('legal_1');
Route::get('/legal-2', [App\Http\Controllers\HomeController::class, 'legal_2'])->name('legal_2');
Route::get('/legal-3', [App\Http\Controllers\HomeController::class, 'legal_3'])->name('legal_3');
Route::get('/legal-4', [App\Http\Controllers\HomeController::class, 'legal_4'])->name('legal_4');

Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact_us');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/service-details-1', [App\Http\Controllers\HomeController::class, 'service_details_1'])->name('service_details_1');
Route::get('/service-details-2', [App\Http\Controllers\HomeController::class, 'service_details_2'])->name('service_details_2');
Route::get('/service-details-3', [App\Http\Controllers\HomeController::class, 'service_details_3'])->name('service_details_3');
Route::get('/service-details-4', [App\Http\Controllers\HomeController::class, 'service_details_4'])->name('service_details_4');
Route::get('/service-details-5', [App\Http\Controllers\HomeController::class, 'service_details_5'])->name('service_details_5');
Route::get('/blogs-list', [App\Http\Controllers\HomeController::class, 'blog_list'])->name('blog_list');
Route::get('/blog/{id}', [App\Http\Controllers\HomeController::class, 'blog_details'])->name('blog_details');
Route::post('contact-us', [App\Http\Controllers\HomeController::class, 'store_contact_us'])->name('store_contact_us');

Auth::routes();
Route::get('dashboard', [UsersController::class, 'dashboard'])->name('dashboard');
Route::resource('users-management', UsersController::class);
Route::resource('documents', DocumentsController::class);
Route::get('invoice-create', [DocumentsController::class, 'invoiceCreate'])->name('invoice.create');
Route::get('payslip-create', [DocumentsController::class, 'payslipCreate'])->name('payslip.create');
Route::get('followup-create', [DocumentsController::class, 'followupCreate'])->name('followup.create');
Route::get('activity-create', [DocumentsController::class, 'activityCreate'])->name('activity.create');
Route::get('invoice-list', [DocumentsController::class, 'invoiceList'])->name('invoice.List');
Route::get('payslip-list', [DocumentsController::class, 'payslipList'])->name('payslip.List');
Route::get('followup-list', [DocumentsController::class, 'followupList'])->name('followup.List');
Route::get('activity-list', [DocumentsController::class, 'activityList'])->name('activity.List');
Route::resource('schedules', ScheduleController::class);
Route::resource('interventions', InterventionController::class);
Route::resource('blogs', BlogController::class);
Route::resource('contracts', ContractsController::class);
Route::get('profile-setting', [ProfileController::class, 'index'])->name('profile.index');
Route::post('profile-setting', [ProfileController::class, 'store'])->name('profile.store');

Route::post('/file-download', function (Request $request) {
    $path = storage_path('app/public/' . $request->file_path);

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->download($path);
})->name('file.download');
