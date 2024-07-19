<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tail\StoreRequest;
use App\Http\Requests\Admin\Tail\UpdateRequest;
use App\Models\Region;
use App\Models\Tail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TailController extends Controller
{
    public function index()
    {

        $tails = Tail::orderBy('id', 'desc')->paginate(10);
        return view('admin.tail.index', [
            'tails' => $tails,
        ]);
    }

    public function create()
    {
        $regions = Region::all();

        return view('admin.tail.create', [
            'regions' => $regions
        ]);
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            $path = Storage::put('images', $data['image']);
            $data['image'] = str_replace('images/', '', $path);
        }


        Tail::firstOrCreate($data);

        return redirect()->route('admin.tails.index');    }

    public function edit(Tail $tail)
    {
        return view('admin.tail.edit', [
            'tail' => $tail
        ]);
    }

    public function update(UpdateRequest $request, Tail $tail)
    {
        $data = $request->validated();
        if (isset($data['image'])) {
            // сохраняем новое изображение и обновляем ссылку
            $data['image'] = Storage::put('images', $data['image']);
            $data['image'] = str_replace('images/', '', $data['image']);
        } else {
            // если изображение не загружено, используем старое значение
            $data['image'] = $tail->image;
        }

        $tail->update($data);




        return redirect()->route('admin.tails.index', compact('tail'));
    }
}
