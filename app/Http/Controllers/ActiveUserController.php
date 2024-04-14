<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ActiveUserController extends Controller
{
    /**
     * Метод передаёт информацию об авторизованном пользователе
     */
    public function index()
    {
        $user = Auth::user();
        return view('activeUser', compact('user'));
    }
}
