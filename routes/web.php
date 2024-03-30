<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BiblioController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EmployeController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProductController;
use App\Models\ExembleModel;
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Auth;

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

/* 
GET    : lecture 
POST   : ajoutre
PUT    : modificatoin complete
PATCH  : modification partielle
DELETE : supprimer  

*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/wel', function () {
    return view('emails.welcome');
});
///////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////


// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/',['\App\Http\Controllers\homeController' , 'index']);
// Route::get('/', [homeController::class, 'index']);
Route::resource('books' , BookController::class);
Route::resource('articles' , ArticleController::class);
Route::resource('bibliotheques' , BiblioController::class);
Route::resource('employer' , EmployeController::class);


Route::resource('product' , ProductController::class);
Route::get('q2' , [ProductController::class, "filteredProducts"]);
Route::get('q3' , [ProductController::class, "topTen"]);
Route::get('q4' , [ProductController::class, "productsWithCategory"]);
Route::get("q22",'App\Http\Controllers\ProductController@filteredProducts');






// Route::resource('books', BookController::class)->only([
//     'index', 'show' // Movement allowed
//     ]);
//     Route::resource('books', BookController::class)->except([
//     'create', 'store', 'update', 'destroy' // Movement is not allowed
//     ]);

// Route::get('/hello/{nom}/{prenom}', function ($nom, $prenom) {
//     return view('hello',[
//         'nom' => $nom,
//         'prenom' => $prenom






// Route::get('/prenom/{nom}/{prenom}', function (Request $request) {
//     dd($request);
//     return view('prenom', [
//         'nom' => $request->nom,
//         'prenom' => $request->prenom
//     ]);
// });


// Route::get('/bienvenue/{id}', function ($id) {
//     return "un ID $id";
// });





// Route::get('/bienvenue', function () {
//     return ('bienvenue');
// })->name('bienvenue');

Route::get('/home', function () {
    return "page home";
})->name('home');

Route::get('/age/{age}' , function(){
    
})->middleware('age');

Route::get('/event', [EmailController::class,"send"]);




// Route::middleware(['auth'])->prefix('admin')->group(function(){
//     Route::get('/dashboard', function(){
//         return view('admin.dashboard');
//     });

// });

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
