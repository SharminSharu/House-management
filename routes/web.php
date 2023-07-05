<?php

use App\Http\Controllers\BillController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Tenant_Controller;
use App\Http\Controllers\User_Controller;
use App\Http\Controllers\Expense_Controller;
use App\Http\Controllers\ExpenseReportController;
use App\Http\Controllers\FlatAssign_Controller;
use App\Http\Controllers\FlatController;
use App\Http\Controllers\FlatReport_Controller;
use App\Http\Controllers\FlatReportController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\SubscriberController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\MaintenanceReportController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentReportController;
use App\Http\Controllers\TenantReportController;
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





// Route::get('/', function () {
//     return view('welcome');
// });

// templating check:::

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/review', [AboutController::class, 'review'])->name('review'); 


// contact-------


Route::get('/contact', [ContactController::class, 'index'])->name('ct.index');
Route::post('/contactstore', [ContactController::class, 'store'])->name('ct.store');
Route::get('/contactshow', [ContactController::class, 'show'])->middleware(['auth', 'verified'])->name('ct.show');
Route::delete('/deletemsg/{id}', [ContactController::class, 'destroy'])->middleware(['auth', 'verified'])->name('ct.destroy');

// Subscriber-------
// Route::resource('sub', SubscriberController::class);
Route::get('/sub', [SubscriberController::class, 'index'])->name('sub.index');
Route::post('/substore', [SubscriberController::class, 'store'])->middleware(['auth', 'verified'])->name('sub.store');
Route::get('/subshow', [SubscriberController::class, 'show'])->middleware(['auth', 'verified'])->name('sub.show');
Route::delete('/deletemsg/{id}', [SubscriberController::class, 'destroy'])->middleware(['auth', 'verified'])->name('sub.destroy');





// cart check------

Route::get('/flatc', [ProductController::class, 'index'])->name('room');  
// Route::get('a_det/{id}', [ProductController::class, 'adetail'])->name('a_det');
Route::get('a_det', [ProductController::class, 'cart'])->name('a_det');
Route::get('b_det', [ProductController::class, 'bcart'])->name('b_det');
Route::get('c_det', [ProductController::class, 'ccart'])->name('c_det');
Route::get('d_det', [ProductController::class, 'dcart'])->name('d_det');



// --------------------


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin panel-------------------
Route::resource("tenant", Tenant_Controller::class);
Route::resource("user", User_Controller::class);
Route::resource("expense", Expense_Controller::class);
Route::resource('flat', FlatController::class);
Route::resource("fagn", FlatAssign_Controller::class);
Route::resource('payment',PaymentController::class);
Route::resource('bill', BillController::class);
Route::resource('maintenance', MaintenanceController::class);


// Report show-----------------

 Route::get('/flatreport/filter',[FlatReport_Controller::class,'filter'])->name('frep.filter');


 Route::get('/mainreport/filter',[MaintenanceReportController::class,'filter'])->name('main.filter');

//  Route::get('/mainreport',[MaintenanceReportController::class,'index'])->name('main.index');

 Route::get('/payreport/filter',[PaymentReportController::class,'filter'])->name('pay.filter');

 Route::get('/exreport/filter',[ExpenseReportController::class,'filter'])->name('expense.filter');

 Route::get('/flatReport/filter', [FlatReportController::class, 'filter'])->name('flat.filter');
 Route::get('/tenantreport/filter', [TenantReportController::class, 'filter'])->name('ten.filter');

 // payment Ajax work----------
 Route::post('/getflat', [PaymentController::class, 'getflat'])->name('getflat');


 //due ajax work------------------
 Route::post('/getdue', [PaymentController::class, 'getdue'])->name('getdue');
//  Route::post('/gettotal', [PaymentController::class, 'gettotal'])->name('gettotal');



 
require __DIR__.'/auth.php';
