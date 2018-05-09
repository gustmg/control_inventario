<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Article;
use App\ArticleCategory;
use App\MeasurementUnit;
use View;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category_id)
    {
        $articles = Article::where('article_category_id', $category_id)->get();
        $article_category = ArticleCategory::find($category_id);
        $measurement_units = MeasurementUnit::all();
        return View::make('articles.index',['articles' => $articles, 'article_category' => $article_category, 'measurement_units' => $measurement_units]);
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
            'article_name'=>'required',
            'article_price'=>'required',
        ]);

        $article = new Article;
        $article->article_name = $request->article_name;
        $article->article_description = $request->article_description;
        $article->article_internal_code = $request->article_internal_code;
        $article->article_part_number = $request->article_part_number;
        $article->article_price = $request->article_price;
        $article->company_id = 1;
        $article->article_category_id=$request->article_category_id;
        $article->measurement_unit_id=$request->measurement_unit_id;
        $article->save();

        return 'Agregado';
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
            'article_name'=>'required',
            'article_price'=>'required',
        ]);

        $article = Article::find($id);
        $article->article_name = $request->article_name;
        $article->article_description = $request->article_description;
        $article->article_internal_code = $request->article_internal_code;
        $article->article_part_number = $request->article_part_number;
        $article->article_price = $request->article_price;
        $article->company_id = 1;
        $article->article_category_id=$request->article_category_id;
        $article->measurement_unit_id=$request->measurement_unit_id;
        $article->save();

        return Redirect::to('articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return Redirect::to('articles');
    }
}