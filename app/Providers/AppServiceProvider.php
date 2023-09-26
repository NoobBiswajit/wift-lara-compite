<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\AddEmployee;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //show blog
        $blogs = Blog::orderBy('id','desc')->paginate(3);
        $addEmployee = AddEmployee::all();
        View::share([
            'blogs' => $blogs,
            'addEmployee' => $addEmployee,
        ]);

        Paginator::useBootstrapFour();
    }
}
