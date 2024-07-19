@extends('layouts.admin')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="card" style="padding: 20px">
                    <form action="{{ route('admin.categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <input type="text" class="form-control input-default" placeholder="Название" name="name" value="{{$category->name}}">
                        </div>
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group w-50">
                            <label for="exampleInputFile">Изображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image" value="{{ asset('storage/images/'.$category->image) }}" src="{{ asset('storage/images/'.$category->image) }}">
                                    <label class="custom-file-label" for="image">{{asset('storage/'.$category->image)}}</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузить</span>
                                </div>
                            </div>
                        </div>

                        <div style="width: 170px; height: 100px; margin-bottom: 100px" >
                            <h3 class="w-100">Текущее изображение</h3>
                            <img src="{{asset('storage/'.$category->image)}}" alt="" style="width: 100%; height: 100%">
                        </div>
                        @error('image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div>
                            <button type="submit" class="btn btn-success">Обновить</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
