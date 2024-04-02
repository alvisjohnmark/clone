<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'comments' => Comment::orderBy('created_at', 'DESC')->get()
        ]);
    }

    public function terms()
    {
        return view('terms');
    }
}
