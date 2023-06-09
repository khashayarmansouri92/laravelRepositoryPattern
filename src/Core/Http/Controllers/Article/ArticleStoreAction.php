<?php

namespace Core\Http\Controllers\Article;

use Core\Http\Requests\ArticleRequest;
use Core\Traits\Article\InteractsWithArticle;
use Illuminate\Http\JsonResponse;


class ArticleStoreAction
{
    use InteractsWithArticle;

    /**
     * @param ArticleRequest $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function __invoke(ArticleRequest $request) : JsonResponse
    {
        $article = $this->ArticleService()->store($request->toArray());

        return response()->json([
            'success' => true,
            'message' => 'stored article successfully',
            'data' => $article
            ], 200);
    }
}
