<?php

namespace Core\Providers;

use Core\Services\Article\ArticleService;
use Core\Services\Article\ArticleServiceInterface;
use Domain\Article\Models\Article;
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
        $this->app->bind(ArticleServiceInterface::class, function () {
            return new ArticleService();
        });

        $this->app->bind(ArticleRepositoryInterface::class, function () {
            return new ArticleRepository( new Article());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
