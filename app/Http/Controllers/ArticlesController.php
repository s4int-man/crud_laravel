<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //TODO: Разобраться с middleware для ресурсных контроллеров
        if(Auth::user()->role != 'admin')
            return redirect('home');
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TODO: Разобраться с middleware для ресурсных контроллеров
        if(Auth::user()->role != 'admin')
            return redirect('home');
        Article::create($request->all());
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $article = Article::find($id);
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //TODO: Разобраться с middleware для ресурсных контроллеров
        if(Auth::user()->role != 'admin')
            return redirect('home');
        $article = Article::find($id);
        return view("articles.edit",
            [
                'article' => $article,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //TODO: Разобраться с middleware для ресурсных контроллеров
        if(Auth::user()->role != 'admin')
            return redirect('home');
        $article->title = $request->input('title');
        $article->small_body = $request->input('small_body');
        $article->body = $request->input('body');
        $article->save();
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //TODO: Разобраться с middleware для ресурсных контроллеров
        if(Auth::user()->role != 'admin')
            return redirect('home');
    }
}
