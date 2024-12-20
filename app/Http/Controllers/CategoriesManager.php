<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoriesManager extends Controller
{
    public function categories()
    {
        $categories = Category::all();
        return view('categories', compact('categories'));
    }
}