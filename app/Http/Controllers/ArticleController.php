<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = \App\Article::simplePaginate(1);
        return view('article.index', compact('articles'));
    }
}
