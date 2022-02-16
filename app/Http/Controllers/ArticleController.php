<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $articles = Article::latest()->get();

        return view('blog', ['articles' =>$articles]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.article_layout', ['article' => $article]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        $article = new Article();

        $article->title = request('title');
        $article->file_path = request('file_path');
        $article->first_lines = request('first_lines');
        $article->body = request('body');

        $article->save();

        return redirect('/blog');
    }

    /**
     * @return void
     */
    public function edit()
    {
    }

    /**
     * @return void
     */
    public function update()
    {
    }

    /**
     * @return void
     */
    public function delete()
    {
    }
}
