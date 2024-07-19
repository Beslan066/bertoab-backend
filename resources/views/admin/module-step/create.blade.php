@extends('layouts.admin')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="card" style="padding: 20px">
                    <div class="card-body">
                        <div class="row page-titles">
                            <div class="col p-0">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.modules-step.index')}}">Урок</a>
                                    </li>
                                    <li class="breadcrumb-item active">Создание</li>
                                </ol>
                            </div>
                        </div>
                        <form action="{{ route('admin.modules-step.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <textarea id="summernote" name="content"></textarea>
                            </div>
                            @error('content')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <select class="form-control" id="sel1" name="module_id">
                                    @foreach($modules as $module)
                                        <option value="{{$module->id}}">{{$module->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-success">Сохранить</button>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>
@endsection
