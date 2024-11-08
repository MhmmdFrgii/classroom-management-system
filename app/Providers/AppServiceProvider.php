<?php

namespace App\Providers;

use App\Contracts\Interfaces\Eloquents\ClassmeetInterface;
use App\Contracts\Interfaces\Eloquents\PagelaranInterface;
use App\Contracts\Interfaces\Eloquents\PlimaInterface;
use App\Contracts\Interfaces\Eloquents\RandomInterface;
use App\Contracts\Interfaces\Eloquents\SlidesInterface;
use App\Contracts\Interfaces\Eloquents\UserInterface;
use App\Contracts\Repositories\ClassmeetRepository;
use App\Contracts\Repositories\PagelaranRepository;
use App\Contracts\Repositories\PlimaRepository;
use App\Contracts\Repositories\RandomRepository;
use App\Contracts\Repositories\SlidesRepository;
use App\Services\UserService;
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
        $this->app->bind(ClassmeetInterface::class, ClassmeetRepository::class);
        $this->app->bind(PlimaInterface::class, PlimaRepository::class);
        $this->app->bind(RandomInterface::class, RandomRepository::class);
        $this->app->bind(UserInterface::class, UserService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}