<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ArticlesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $articles = App\Article::all();
        return view('articles', compact('articles'));
    }

    public function getArticle($id){
        //$article = App\Article::where('id', '=', $id)->first();
        $article = App\Article::find($id);
        //dd($article);
        return view('article', compact('article'));
    }
}
