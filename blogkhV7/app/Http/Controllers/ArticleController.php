<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return response()->json($articles);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return response()->json($article, 201);
    }

    public function show($id)
    {
        $article = Article::find($id);
        return response()->json($article);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->update($request->all());
        return response()->json($article);
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return response()->json(null, 204);
    }
}
