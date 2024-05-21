<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // retornar a view
    public function index()
    {
        $citiesList = [];

        foreach (City::all() as $city) {
            array_push($citiesList, $city->getAttributes());
        }

        return view('admin.cities', ["citiesList" => $citiesList]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "olá";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $city = new City;
        $city->name = $request->name;
        $city->save();


        return redirect("/dashboard/cities");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        dd($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo "deletar cidade id ";
        dd($id);
    }
}
