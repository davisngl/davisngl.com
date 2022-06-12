<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Inertia\Response as InertiaResponse;

class ArticleController extends Controller
{
    public function index(): InertiaResponse
    {
        return inertia('Articles', [
            'articles' => Article::select(['title', 'slug'])->get(),
        ]);
    }

    public function show(Article $article): InertiaResponse
    {
        return inertia('Article', [
            'article' => [
                'url'          => $article->url(),
                'title'        => $article->title,
                'slug'         => $article->slug,
                'content'      => $article->content,
                'created_at'   => $article->created_at->format('F j Y'),
                'time_to_read' => $article->time_to_read,
            ],
        ]);
    }
}
