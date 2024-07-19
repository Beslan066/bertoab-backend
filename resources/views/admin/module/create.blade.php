@extends('layouts.admin')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="card" style="padding: 20px">
                    <div class="card-body">

                        <form action="{{ route('admin.modules.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <input type="text" class="form-control input-default" placeholder="Название" name="name">
                            </div>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror


                            <div class="form-group">
                                <textarea id="summernote" name="description"></textarea>
                            </div>
                            @error('content')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <select class="form-control" id="sel1" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
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
