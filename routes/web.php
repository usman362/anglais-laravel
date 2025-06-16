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

Route::view('votre-espace-client','auth.client-login')->name('client-login');
Route::view('espace-collaborateurs','auth.employee-login')->name('employee-login');
// Route::view('test-translate','translate');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/qui-sommes-nous', [App\Http\Controllers\HomeController::class, 'who_we_are'])->name('who_we_are');
Route::get('/our-valeurs', [App\Http\Controllers\HomeController::class, 'our_values'])->name('our_values');
Route::get('/pourquoi-nous', [App\Http\Controllers\HomeController::class, 'why_us'])->name('why_us');
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');
// Route::get('/nous-recrutons', [App\Http\Controllers\HomeController::class, 'career'])->name('career');
Route::get('/mentions-légales', [App\Http\Controllers\HomeController::class, 'legal_1'])->name('legal_1');
Route::get('/conditions-générales-d-utilisation', [App\Http\Controllers\HomeController::class, 'legal_2'])->name('legal_2');
Route::get('/conditions-générales-de-vente', [App\Http\Controllers\HomeController::class, 'legal_3'])->name('legal_3');
Route::get('/politique-de-confidentialité', [App\Http\Controllers\HomeController::class, 'legal_4'])->name('legal_4');

Route::get('/contactez-nous', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact_us');
Route::get('/nos-services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/accompagnement-de-fin-de-vie', [App\Http\Controllers\HomeController::class, 'service_details_1'])->name('service_details_1');
Route::get('/actes-quotidiens-de-la-vie', [App\Http\Controllers\HomeController::class, 'service_details_2'])->name('service_details_2');
Route::get('/entretien-du-cadre-de-vie', [App\Http\Controllers\HomeController::class, 'service_details_3'])->name('service_details_3');
Route::get('/interaction-sociale', [App\Http\Controllers\HomeController::class, 'service_details_4'])->name('service_details_4');
Route::get('/appui-administratif-personnalisé', [App\Http\Controllers\HomeController::class, 'service_details_5'])->name('service_details_5');
Route::get('/blogs-list', [App\Http\Controllers\HomeController::class, 'blog_list'])->name('blog_list');
Route::get('/blog/{id}', [App\Http\Controllers\HomeController::class, 'blog_details'])->name('blog_details');
Route::post('contact-us', [App\Http\Controllers\HomeController::class, 'store_contact_us'])->name('store_contact_us');

Auth::routes();
Route::get('dashboard', [UsersController::class, 'dashboard'])->name('dashboard');
Route::resource('utilisateurs', UsersController::class)->names([
    'index'   => 'users-management.index',
    'create'  => 'users-management.create',
    'store'   => 'users-management.store',
    'show'    => 'users-management.show',
    'edit'    => 'users-management.edit',
    'update'  => 'users-management.update',
    'destroy' => 'users-management.destroy',
]);
Route::resource('documents', DocumentsController::class);
Route::get('ajouter-une-facture', [DocumentsController::class, 'invoiceCreate'])->name('invoice.create');
Route::get('ajouter-une-fiche-de-paie', [DocumentsController::class, 'payslipCreate'])->name('payslip.create');
Route::get('ajouter-une-feuille-de-suivi', [DocumentsController::class, 'followupCreate'])->name('followup.create');
Route::get('ajouter-un-rapport-d-activité', [DocumentsController::class, 'activityCreate'])->name('activity.create');
Route::get('liste-des-factures', [DocumentsController::class, 'invoiceList'])->name('invoice.List');
Route::get('bulletins-de-paie', [DocumentsController::class, 'payslipList'])->name('payslip.List');
Route::get('fiches-de-suivi', [DocumentsController::class, 'followupList'])->name('followup.List');
Route::get('rapports-d-activité', [DocumentsController::class, 'activityList'])->name('activity.List');
Route::resource('planning', ScheduleController::class)->names([
    'index'   => 'schedules.index',
    'create'  => 'schedules.create',
    'store'   => 'schedules.store',
    'show'    => 'schedules.show',
    'edit'    => 'schedules.edit',
    'update'  => 'schedules.update',
    'destroy' => 'schedules.destroy',
]);
Route::resource('interventions', InterventionController::class);
Route::resource('blogs', BlogController::class);
Route::resource('contracts', ContractsController::class);
Route::get('modifier-le-profil', [ProfileController::class, 'index'])->name('profile.index');
Route::post('profile-setting', [ProfileController::class, 'store'])->name('profile.store');

Route::post('/file-download', function (Request $request) {
    $path = storage_path('app/public/' . $request->file_path);

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->download($path);
})->name('file.download');
