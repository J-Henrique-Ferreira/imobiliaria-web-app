<?php

namespace App\Http\Controllers\Admin;

use ErrorException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct(private UserRepositoryInterface $userRepository)
    {
    }

    public function index(Request $request)
    {
        return view('admin.login', []);
    }

    public function store(Request $request)
    {
        try {
            // $user = $this->userRepository->find($request->email);
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required|string',
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('dashboard');
            } else {
                throw new AuthenticationException();
            }
        } catch (\Throwable $th) {
            return redirect()->route('login.index')->withErrors('E-mail ou senha incorretos');
        }
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        return redirect("/login");
    }
}
