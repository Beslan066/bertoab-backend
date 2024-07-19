<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Region\StoreRequest;
use App\Http\Requests\Admin\Region\UpdateRequest;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegionController extends Controller
{
    public function index()
    {

        $regions = Region::all();
        return view('admin.region.index', [
            'regions' => $regions,
        ]);
    }

    public function create()
    {
        return view('admin.region.create');
    }

    public function store(StoreRequest $request)
    {

        $data = $request->validated();

        Region::firstOrCreate($data);

        return redirect()->route('admin.regions.index');    }

    public function edit(Region $region)
    {
        return view('admin.region.edit', [
            'region' => $region
        ]);
    }

    public function update(UpdateRequest $request, Region $region)
    {
        $data = $request->validated();
        $region->update($data);

        return redirect()->route('admin.regions.index', compact('region'));
    }
}
