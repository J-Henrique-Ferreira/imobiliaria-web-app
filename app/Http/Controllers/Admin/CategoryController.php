<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Category\CategoryStoreUpdateRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.category.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreUpdateRequest $request)
    {
        dd("caiu no store");
    }


    /**
     * Display the specified resource.
     */
    public function show(string | int $id)
    {
        return to_route("category.index");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryStoreUpdateRequest $request)
    {
        dd("caiu no update");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string | int $id)
    {
        dd("caiu no destroy");
    }
}
