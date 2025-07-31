<?php

namespace App\Providers;

use App\Repositories\Interfaces\UserUploadRepositoryInterface;
use App\Repositories\UserUploadRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserUploadRepositoryInterface::class, UserUploadRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
