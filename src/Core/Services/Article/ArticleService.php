<?php

namespace Core\Services\Article;

use Core\Traits\Article\InterfaceActionArticle;
use Domain\Article\Models\Article;

class ArticleService implements ArticleServiceInterface
{
    use InterfaceActionArticle;

    /**
     * @param $data
     * @return Article
     * @throws \Exception
     */
    public function store($data) : Article
    {
        $article = $this->ArticleRepository()->store($data);

        return $article;
    }
}
