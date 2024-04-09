<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(Request $request)
    {
        return "oláa";
        // return ["request" => $request->get("id"), "response" => response()];
    }
}
