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

    public function sigin(Request $request)
    {
        // return to_route("districts.index");
    }

    public function logout(Request $request)
    {
        // retorno
    }
}
