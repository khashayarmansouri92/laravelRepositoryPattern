<?php

namespace Domain\Repositories\Article;

use Domain\Article\Models\Article;
use Domain\Repositories\BaseRepository;

class ArticleRepository extends BaseRepository implements ArticleRepositoryInterface
{
    /**
     * @param Article $model
     */
    public function __construct(Article $model)
    {
        parent::__construct($model);
    }
}
