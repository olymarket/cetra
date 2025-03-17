<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{
    Auth,
    Validator,
    Storage
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class BlogController extends Controller
{
    public function index()
    {
        return view('Admin.Blog.Home')->with([

        ]);
    }

    public function create()
    {
        return view('Admin.Blog.Create')->with([

        ]);
    }
    public function edit()
    {
        return view('Admin.Blog.Edit')->with([

        ]);
    }
}
