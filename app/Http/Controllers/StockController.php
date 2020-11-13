<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Generic;
use App\Models\Manufacture;
use App\Models\Medicine;
use App\Models\Stock;
use App\Models\Supplier;
use App\Traits\subCategoryTraits;
use Illuminate\Http\Request;

class StockController extends Controller
{
    use subCategoryTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicine::with('generic', 'type')->get();
        $categorys = Category::orderBy('category_name', 'asc')->get();
        $generics = Generic::orderBy('generic_name', 'asc')->get();
        $manufactures = Manufacture::orderBy('manufac_name', 'asc')->get();
        $suppliers = Supplier::orderBy('supplier_name', 'asc')->get();
        return view('Backend.pages.Stock.create', compact('medicines', 'categorys', 'generics', 'manufactures', 'suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        //
    }
}
