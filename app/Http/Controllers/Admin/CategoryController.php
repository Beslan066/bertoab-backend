<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        return view('admin.category.index', [
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(StoreRequest $request)
    {

        $data = $request->validated();

        if (isset($data['image'])) {
            $path = Storage::put('images', $data['image']);
            $data['image'] = str_replace('images/', '', $path);
        }


        Category::firstOrCreate($data);

        return redirect()->route('admin.categories.index');    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', [
            'category' => $category
        ]);
    }

    public function update(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        if (isset($data['image'])) {
            // сохраняем новое изображение и обновляем ссылку
            $data['image'] = Storage::put('images', $data['image']);
            $data['image'] = str_replace('images/', '', $data['image']);
        } else {
            // если изображение не загружено, используем старое значение
            $data['image'] = $category->image;
        }

        $category->update($data);




        return redirect()->route('admin.categories.index', compact('category'));
    }
}
