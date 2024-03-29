    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Auth\AuthController;

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

    Route::get('/', function () {
        return view('/auth/login');
    });

    Route::post('/auth/login', [AuthController::class, 'login'])->name('login');
    Route::get('logout', '\App\Http\Controllers\Auth\AuthController@logout')->name('logout');


    Route::get("/dashboard", function () {
        return view('emp_dashboard');
    });

    Route::get("/attendance", function () {
        return view('emp_attendance');
    });
    Route::get("/request", function () {
        return view('emp_request');
    });

    Route::get("/register", function () {
        return view('register');
    });
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::get('register', '\App\Http\Controllers\Auth\AuthController@register')->name('register');
