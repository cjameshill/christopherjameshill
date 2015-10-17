<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    public function index() {
        
        
        
        $articles = Article::latest('created_at')->published()->get();
        
        return view('pages.articles.index', compact('articles'));
    }
    
    public function show($id){
        $article = Article::find($id);

        
        return view('pages.articles.show', compact('article'), ['userid' => $article->user_id]);

    }
    
    public function create() {
        return view('pages.articles.create');
    }
    
    public function store(Requests\ArticleRequest $request) {
        
        $article = new Article($request->all());

//        \Auth::user()->articles()->save($article);
        
        Article::create($request->all());
        
        return redirect('articles'); 
        
    }
    
    public function edit($id) {
        
        $article = Article::findOrFail($id);
        
        return view('pages.articles.edit', compact('article'));
    }
    
     public function update($id, Requests\ArticleRequest $request) {
        
        $article = Article::findOrFail($id);
        
        $article->update($request->all());
        
        return redirect('articles'); 
    }
    
    
}
