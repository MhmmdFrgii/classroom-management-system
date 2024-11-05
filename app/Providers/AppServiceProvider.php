<?php

namespace App\Providers;

use App\Contracts\Interfaces\Eloquents\PagelaranInterface;
use App\Contracts\Interfaces\Eloquents\SlidesInterface;
use App\Contracts\Repositories\PagelaranRepository;
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
        $this->app->bind(PagelaranInterface::class, PagelaranRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
