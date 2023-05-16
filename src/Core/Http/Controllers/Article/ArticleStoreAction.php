<?php

namespace Core\Http\Controllers\Article;

use Core\Http\Requests\ArticleRequest;
use Core\Traits\Article\InterfaceActionArticle;
use Illuminate\Http\JsonResponse;


class ArticleStoreAction
{
    use InterfaceActionArticle;

    /**
     * @param ArticleRequest $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function __invoke(ArticleRequest $request) : JsonResponse
    {
        $article = $this->ArticleService()->store($request->toArray());

        return response()->json([
            'code' => 200,
            'message' => 'stored article successfully',
            'data' => $article,
        ]);
    }
}
