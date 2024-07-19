<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {

        $categories = Category::query()->take(10)->get();



        return Inertia::render('Welcome', [
            'categories' => $categories
        ]);
    }

    public function quiz()
    {
        return Inertia::render('Home/Quiz');
    }

    public function tails()
    {
        return Inertia::render('Home/Tails');
    }

    public function preschool()
    {
        return Inertia::render('Home/Preschool');
    }
}
