<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.login', []);
    }

    public function store(Request $request)
    {

        return redirect("dashboard/");
    }

    public function destroy(Request $request)
    {
        return redirect("/");
    }
}
