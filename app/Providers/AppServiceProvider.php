<?php

namespace App\Providers;

use App\Models\Hub;
use App\Models\Instructor;
use App\Models\Lesson;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        View::share('instructors', Instructor::all());
//        View::share('hubs', Hub::all());
//        View::share('lessons', Lesson::all());
    }
}
