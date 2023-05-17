<?php

namespace Core\Traits\Article;


use Core\Services\Article\ArticleServiceInterface;
use Domain\Repositories\Article\ArticleRepositoryInterface;

trait InteractsWithArticle
{
    /**
     * @return mixed
     * @throws \Exception
     */
    public function ArticleService()
    {
        try {
            return app()->make(ArticleServiceInterface::class);
        }catch (\Exception $e) {
            throw new \Exception('Error');
        }
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function ArticleRepository()
    {
        try {
            return app()->make(ArticleRepositoryInterface::class);
        }catch (\Exception $e) {
            throw new \Exception('Error');
        }
    }
}
