<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = article::all();
        return view('article.index',['articles'=> $articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view("article.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Validated = $request->validate([
            "name"=> 'required',
            "description"=> 'required',
            "user_id"=> 'required',
            "tages"=> 'required'
        ]);
        article->create($validated)
        article::tag()->attach($Validated['tages']);

        return redirect('article/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(article $article)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(article $article)
    {
        //
    }
}
