@extends('layouts.admin')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="card">

                    <div class="w-full d-flex align-items-center justify-content-between" style="padding: 20px">
                        <h3>Категории</h3>
                        <a type="button" class="btn btn-outline-success" href="{{route('admin.categories.create')}}">Добавить</a>
                    </div>
                    <div class="card-body">
                        <div class="active-member">
                            <div class="table-responsive">
                                <table class="table table-xs">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Название</th>
                                        <th>Фотография</th>
                                        <th>Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($categories))
                                        @foreach($categories as $category)
                                            <tr>
                                                <td>{{$category->id}}</td>
                                                <td>{{$category->name}}</td>
                                                <td>
                                                    <img src="{{asset('storage/'.$category->image)}}" class="w-40px rounded-circle m-r-10" alt=""></td>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a type="button" href="{{route('admin.categories.edit', $category->id)}}" class="btn btn-light mr-2">Редактировать</a>
                                                        <form action="">
                                                            @csrf
                                                            @method('delete')
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger link-dark">Удалить</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
