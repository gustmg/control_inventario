<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\ArticleCategory;
use View;

class ArticleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article_categories=ArticleCategory::all();
        return View::make('article_categories.index')->with('article_categories', $article_categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'article_category_name' => 'required',
        ]);

        $article_category = new ArticleCategory;
        $article_category->article_category_name = $request->article_category_name;
        $article_category->company_id = 1;
        $article_category->save();

        return Redirect::to('article_categories');
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'article_category_name' => 'required',
        ]);

        $article_category=ArticleCategory::find($id);
        $article_category->article_category_name = $request->article_category_name;
        $article_category->company_id = 1;
        $article_category->save();

        return Redirect::to('article_categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article_category=ArticleCategory::find($id);
        $article_category->delete();
        return Redirect::to('article_categories');
    }
}
