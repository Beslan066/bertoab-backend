@extends('layouts.admin')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="card" style="padding: 20px">
                    <form action="{{ route('admin.regions.update', $region->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <input type="text" class="form-control input-default" placeholder="Название" name="name" value="{{$region->name}}">
                        </div>
                        @error('name')
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
