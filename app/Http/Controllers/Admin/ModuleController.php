<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Module\StoreRequest;
use App\Http\Requests\Admin\Module\UpdateRequest;
use App\Models\Category;
use App\Models\Module;
use App\Models\ModuleStep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\AssignOp\Mod;

class ModuleController extends Controller
{
    public function index()
    {

        $categories = Category::all();

        $modules = Module::orderBy('id', 'desc')->paginate(10);
        return view('admin.module.index', [
            'modules' => $modules,
            'categories' => $categories
        ]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.module.create', [
            'categories' => $categories
        ]);
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        Module::firstOrCreate($data);

        return redirect()->route('admin.modules.index');
    }

    public function show(Module $module)
    {


        $moduleStepsWithCategory = ModuleStep::query()->where('module_id', $module->id)->get();

        return view('admin.module.show', [
            'moduleStepsWithCategory' => $moduleStepsWithCategory,
            'module' => $module
        ]);
    }

    public function edit(Module $module)
    {
        $categories = Category::all();


        return view('admin.module.edit', [
            'module' => $module,
            'categories' => $categories
        ]);
    }

    public function update(UpdateRequest $request, Module $module)
    {
        $data = $request->validated();

        $module->update($data);




        return redirect()->route('admin.modules.index', compact('module'));
    }
}
