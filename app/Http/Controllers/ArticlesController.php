<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;

use App\Http\Requests\CreateArticleRequest;
use Illuminate\HttpResponse;

//use Request;


class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::latest('published-at')->get();

        return view('articles.index', compact('articles'));
    }


    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Requests\CreateArticleRequest $request)
    {


        Article::create($request->all());
        

        \Session::flash('flash_message', 'Your articles has been cretaed');


        return redirect('articles');
    }


    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
        //compact means it patail to view
    }

     public function update($id, Request $request)
    {
        $article = Article::findOrFail($id);
        
        $article->update($request->all());

        return redirect('articles');
    }


}
