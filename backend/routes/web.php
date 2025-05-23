<?php

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


    // Page Login
    use App\Http\Controllers\Auth\LoginController;

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/home', function () {
        if (!session()->has('user_id')) {
            return redirect('/login');
        }
        return view('home');
    });

    // Page Home
    use App\Http\Controllers\OffreController;

    Route::get('/home', [OffreController::class, 'index'])->name('home');

    // API routes pour les offres
    Route::get('/api/offres', [OffreController::class, 'getOffres']);
    Route::post('/api/offres', [OffreController::class, 'addOffre']);
    Route::put('/api/offres/{id}', [OffreController::class, 'updateOffre']);
    Route::delete('/api/offres/{id}', [OffreController::class, 'deleteOffre']);

?>


