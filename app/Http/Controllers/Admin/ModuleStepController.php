<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ModuleStep\StoreRequest;
use App\Http\Requests\Admin\ModuleStep\UpdateRequest;
use App\Models\ModuleStep;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\AssignOp\Mod;

class ModuleStepController extends Controller
{
    public function index()
    {

        $modules = Module::all();

        $moduleSteps = ModuleStep::orderBy('id', 'desc')->paginate(10);
        return view('admin.module-step.index', [
            'modules' => $modules,
            'moduleSteps' => $moduleSteps
        ]);
    }

    public function create()
    {
        $modules = Module::all();

        return view('admin.module-step.create', [
            'modules' => $modules
        ]);
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        ModuleStep::firstOrCreate($data);

        return redirect()->route('admin.modules-step.index');
    }

    public function show(ModuleStep $moduleStep)
    {



        return view('admin.module-step.show', [
            'module' => $moduleStep
        ]);
    }

    public function edit(ModuleStep $moduleStep)
    {
        $modules = Module::all();


        return view('admin.module-step.edit', [
            'modules' => $modules,
            'moduleStep' => $moduleStep
        ]);
    }

    public function update(UpdateRequest $request, ModuleStep $moduleStep)
    {
        $data = $request->validated();

        $moduleStep->update($data);




        return redirect()->route('admin.modules-step.index', compact('moduleStep'));
    }
}
