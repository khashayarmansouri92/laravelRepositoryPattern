<?php

namespace Core\Providers;

use Core\Services\Article\ArticleService;
use Core\Services\Article\ArticleServiceInterface;
use Domain\Repositories\Article\ArticleRepository;
use Domain\Repositories\Article\ArticleRepositoryInterface;
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

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ArticleServiceInterface::class, ArticleService::class);

        $this->app->bind(ArticleRepositoryInterface::class, ArticleRepository::class);
    }
}
