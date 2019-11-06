<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\StoreArticle;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::simplePaginate();
        return view('article.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:articles',
            'body' => 'required|min:10'
        ]);
        $article = new Article();
        $articleData = $request->all();
        $article->fill($articleData);
        $article->save();
        $request->session()->flash('success', 'Article is created!');
        return redirect()->route('articles.index');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    public function update(StoreArticle $request, $id)
    {
        $article = Article::findOrFail($id);
        $articleData = $request->validated();
        $article->fill($articleData);
        $article->save();
        $request->session()->flash('success', 'Article is updated!');
        return redirect()->route('articles.index');
    }
}
