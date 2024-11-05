<?php

namespace App\Providers;

use App\Contracts\Interfaces\Eloquents\SlidesInterface;
use App\Contracts\Repositories\SlidesRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(SlidesInterface::class, SlidesRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}