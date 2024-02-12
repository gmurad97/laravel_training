<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        Category::;
        $categories = Category::create(request()->all());
        return view('categories.index', compact('categories'));
    }
}