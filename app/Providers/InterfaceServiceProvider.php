<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class InterfaceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind (
            'App\Http\interfaces\Admin\teacherInterface',
            'App\Http\repositories\Admin\teacherRepository'
        );

        $this->app->bind(
            'App\Http\interfaces\Admin\courseInterface' ,
            'App\Http\repositories\Admin\courseRepository'
        );

        $this->app->bind(
            'App\Http\interfaces\Admin\activityInterface' ,
            'App\Http\repositories\Admin\activityRepository'
        );

        $this->app->bind(
            'App\Http\interfaces\Admin\contactInterface' ,
            'App\Http\repositories\Admin\contactRepository'
        );
        
        $this->app->bind(
            'App\Http\interfaces\Admin\faqInterface' ,
            'App\Http\repositories\Admin\faqRepository'
        );
        
        $this->app->bind(
            'App\Http\interfaces\Admin\homeInterface' ,
            'App\Http\repositories\Admin\homeRepository'
        );
        
        $this->app->bind(
            'App\Http\interfaces\Admin\sliderInterface' ,
            'App\Http\repositories\Admin\sliderRepository'
        );
        
        $this->app->bind(
            'App\Http\interfaces\Admin\authInterface' ,
            'App\Http\repositories\Admin\authRepository'
        );
        
        $this->app->bind(
            'App\Http\interfaces\EndUser\endUserInterface' ,
            'App\Http\repositories\EndUser\endUserRepository'
        );
    
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
