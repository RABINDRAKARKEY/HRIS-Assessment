<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Post;
use App\Http\Controllers\SurveyController;
// use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\SurveyController;
// 


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
// return redirect()->route('login');
// });

// Ensure authentication routes are registered
// Auth::routes();

Auth::routes();

// Redirect root URL to login page
Route::get('/', function () {
    return redirect()->route('login');
});


// Route::get('/', [HomeController::class, 'homepage']);
// Route::get('/', function () {
//     return view('welcome');
// });

//removing the unnecessary dashboard default code as we do not need this
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

// route::get('post',[HomeController::class,'post'])->middleware(['auth','admin']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/post_page', [AdminController::class, 'post_page']);

Route::post('/add_post', [AdminController::class, 'add_post']);

Route::get('/show_post', [AdminController::class, 'show_post']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/delete_post/{id}', [AdminController::class, 'delete_post']);

Route::get('/FormsDownload', [AdminController::class, 'FormsDownload']);

// Route::get('/edit_page/{id}', [AdminController::class, 'edit_page']);

// Route::post('/update_post/{id}', [AdminController::class, 'update_post']);

// Route::post('/submit-survey', [SurveyController::class, 'submitSurvey']);

Route::post('/submit-survey', [SurveyController::class, 'submitSurvey']);


// Define a POST route for submitting survey data
// use App\Http\Controllers\SurveyController;
// routes/web.php

// use App\Http\Controllers\SurveyController;

Route::post('/submit-survey', [SurveyController::class, 'store'])->name('survey.store');

Route::get('/surveyhome', [SurveyController::class, 'showQuestions'])->name('survey.show');
Route::post('/surveyhome/response', [SurveyController::class, 'storeResponse'])->name('survey.response');


// use App\Http\Controllers\SurveyController;

Route::post('/survey/response', [SurveyController::class, 'storeResponse'])->name('survey.response');

Route::get('/admin/survey/create', [SurveyController::class, 'createSurvey'])->name('survey.create');

Route::get('/admin/survey', [SurveyController::class, 'index'])->name('survey.index');
// Route::get('/admin/surveys', [SurveyController::class, 'showQuestions'])->name('survey.index');
// Route::get('/admin/surveys', [SurveyController::class, 'showQuestions'])->name('survey.index');
Route::get('/admin/surveys', [SurveyController::class, 'showQuestions'])->name('survey.index');
