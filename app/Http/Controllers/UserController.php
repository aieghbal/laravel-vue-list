<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
class UserController extends Controller
{
    public function index(Request $request): Response
    {
        $users = User::all();
        return Inertia::render('Users/users', [
            'users' => $users
        ]);
    }
}
