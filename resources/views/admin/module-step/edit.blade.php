@extends('layouts.admin')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="card" style="padding: 20px">
                    <form action="{{ route('admin.modules-step.update', $moduleStep->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="form-group">
                        <textarea class="form-control col-6" type="text" name="content" placeholder="Текст статьи" id="summernote">
                            {{ $moduleStep->content }}
                        </textarea>
                            @error('content')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">

                            <select class="form-control" name="module_id">
                                @if($moduleStep->module)
                                    <option value="{{$moduleStep->module->id}}">{{ $moduleStep->module->name }}</option>
                                @endif
                                @foreach($modules as $module)
                                    <option value="{{$module->id}}">{{ $module->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div>
                            <button type="submit" class="btn btn-success">Обновить</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
