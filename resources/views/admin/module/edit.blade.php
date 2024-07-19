@extends('layouts.admin')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="card" style="padding: 20px">
                    <form action="{{ route('admin.modules.update', $module->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <input type="text" class="form-control input-default" placeholder="Название" name="name" value="{{$module->name}}">
                        </div>
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                        <textarea class="form-control col-6" type="text" name="description" placeholder="Текст статьи" id="summernote">
                            {{ $module->description }}
                        </textarea>
                            @error('content')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">

                            <select class="form-control" name="category_id">
                                @if($module->category)
                                    <option value="{{$module->category->id}}">{{ $module->category->name }}</option>
                                @endif
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{ $category->title }}</option>
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
