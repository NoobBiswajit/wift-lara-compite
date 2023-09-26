<?php

use App\Http\Controllers\AddEmployeeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => ['auth', 'roles:admin']], function () {
    Route::resource('users', UserController::class);
    Route::resource('component', BlogController::class)->except('show');
    Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');

    Route::get('/employee/add', [AddEmployeeController::class, 'create'])->name('employee.add_employees');
    Route::post('/add_employees', [AddEmployeeController::class, 'store'])->name('add_employees.store');

    // Add a specific route for the "create" method (addBlog)
    Route::get('/blogs/add', [BlogController::class, 'create'])->name('blogs.addBlog');
    // Route::get('component/{blog}', [BlogController::class, 'show'])->name('component.blogCom');

});

Auth::routes();




Route::get('/team-members', [EmployeeController::class, 'show']);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});

//blog show in frontend
Route::get('/blog', [BlogController::class, 'showBlogs']);

//blog detais
Route::get('/blog/details/{id}', [BlogController::class, 'detailsBlogs'])->name('blog.details');

Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/career', function () {
    return view('career');
});
Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/signup', function () {
    return view('signup');
});
Route::get('/signin', function () {
    return view('signin');
});
