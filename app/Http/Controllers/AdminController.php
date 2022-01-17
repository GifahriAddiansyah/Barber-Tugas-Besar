<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $var_nama = "Mohamad Gifahri Addiansyah";
        return view('admin.index' ,compact('var_nama'));
    }
}
