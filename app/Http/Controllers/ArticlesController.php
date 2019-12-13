<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    /**
     * Render a list of a resource
     *
     * @return view
     */
    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    /**
     * Show a single resource.
     *
     * @param  int $id
     *
     * @return view
     */
    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    /**
     * Create a new resource.
     *
     * @return [type] [description]
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store/persist a new resource.
     *
     * @return [type] [description]
     */
    public function store()
    {
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');
    }

    /**
     * Show a view to edit an existing resource.
     *
     * @return [type] [description]
     */
    public function edit()
    {

    }

    /**
     * Persist the edited resource.
     *
     * @return [type] [description]
     */
    public function update()
    {

    }

    /**
     * Destroy the resource.
     *
     * @return [type] [description]
     */
    public function destroy()
    {

    }
}
