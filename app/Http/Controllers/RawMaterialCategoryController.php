<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\RawMaterial;
use App\RawMaterialCategory;
use App\MeasurementUnit;
use View;

class RawMaterialCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $raw_material_categories = RawMaterialCategory::all();
        return View::make('raw_material_categories.index')->with('raw_material_categories', $raw_material_categories);
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
            'raw_material_category_name' => 'required',
        ]);

        $raw_material_category = new RawMaterialCategory;
        $raw_material_category->raw_material_category_name = $request->raw_material_category_name;
        $raw_material_category->company_id = 1;
        $raw_material_category->save();

        return Redirect::to('raw_material_categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category_id)
    {
        $raw_materials = RawMaterial::where('raw_material_category_id', $category_id)->get();
        $raw_material_category = RawMaterialCategory::find($category_id);
        $measurement_units = MeasurementUnit::all();
        return View::make('raw_materials.index',['raw_materials' => $raw_materials, 'raw_material_category' => $raw_material_category, 'measurement_units' => $measurement_units]);
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
            'raw_material_category_name' => 'required',
        ]);

        $raw_material_category = RawMaterialCategory::find($id);
        $raw_material_category->raw_material_category_name = $request->raw_material_category_name;
        $raw_material_category->company_id = 1;
        $raw_material_category->save();

        return Redirect::to('raw_material_categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $raw_material_category = RawMaterialCategory::find($id);
        $raw_material_category->delete();
        return Redirect::to('raw_material_categories');
    }
}
