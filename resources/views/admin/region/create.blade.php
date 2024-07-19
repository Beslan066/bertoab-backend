@extends('layouts.admin')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="card" style="padding: 20px">
                    <form action="{{ route('admin.regions.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control input-default" placeholder="Название" name="name">
                        </div>
                        @error('name')
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
@endsection
