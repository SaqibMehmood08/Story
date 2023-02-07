<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\BotmanController;
use App\Http\Controllers\ProductsController;

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
Route::get('/',[StripeController::class,'index']);
Route::get('success',[StripeController::class,'success']);
// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/story-view', [App\Http\Controllers\StoryController::class, 'story'])->name('storiess');
// Route::get('addmoney/stripe', array('as' => 'addmoney.paystripe','uses' => 'MoneySetupController@PaymentStripe'));
// Route::post('addmoney/stripe', array('as' => 'addmoney.stripe','uses' => 'MoneySetupController@postPaymentStripe'));
// Route::post('/', [TestController::class, 'create']);
// Route::get('/', [TestController::class, 'index']);
// Route::put('/', [TestController::class, 'edit']);
// Route::delete('/', [TestController::class, 'delete']);
Route::get('/firebase/check-connection', [FirebaseController::class, 'index'])->name('firebase.index');
Route::get('/firebase/fetch-Data', [FirebaseController::class, 'fetchData']);
Route::get('/firebase/update-Data', [FirebaseController::class, 'updateData']);
Route::get('/firebase/delete-Data', [FirebaseController::class, 'DeleteData']);
Route::get('/firebase/delete-Data-with-condition', [FirebaseController::class, 'DeleteDatawithCondition']);
// Route::get('/firebase/check-connection', 'FirebaseController@checkDatabase');
Route::post('/firebase/view',[FirebaseController::class,'returnView']);
Route::get('/firebase/views',[FirebaseController::class,'ShowData']);

Route::get('/firebase/delete',[FirebaseController::class,'deleteFirebaseData']);
Route::get('/firebase/update',[FirebaseController::class,'updateFirebaseData']);

Route::get('TestJquery',[TestController::class,'test']);

// firebase notifications start


Route::get('/notifications/firebase',[FirebaseController::class,'firebaseViewPage']);

Route::post('/notifications/send',[FirebaseController::class,'firebasesendNotification']);

Route::get('/botman',[BotmanController::class,'hendleViewPage']);
Route::post('/botman',[BotmanController::class,'hendle']);
//Cache
Route::get('/cache',[ProductsController::class,'sayHelloTocache']);
