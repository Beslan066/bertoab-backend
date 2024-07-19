@extends('layouts.admin')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="card" style="padding: 20px">
                    <div class="card-body">

                        <form action="{{ route('admin.tails.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <input type="text" class="form-control input-default" placeholder="Название" name="title">
                            </div>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror


                            <div class="form-group">
                                <textarea id="summernote" name="content"></textarea>
                            </div>
                            @error('content')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <select class="form-control" id="sel1" name="region_id">
                                    @foreach($regions as $region)
                                        <option value="{{$region->id}}">{{$region->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="file" class="form-control-file" name="image">
                            </div>
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

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
