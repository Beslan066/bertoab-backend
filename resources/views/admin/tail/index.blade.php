@extends('layouts.admin')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="card">

                    <div class="w-full d-flex align-items-center justify-content-between" style="padding: 20px">
                        <h3>Категории</h3>
                        <a type="button" class="btn btn-outline-success" href="{{route('admin.tails.create')}}">Добавить</a>
                    </div>
                    <div class="card-body">
                        <div class="active-member">
                            <div class="table-responsive">
                                <table class="table table-xs">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Заголовок</th>
                                        <th>Фотография</th>
                                        <th>Регион</th>
                                        <th>Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($tails))
                                        @foreach($tails as $tail)
                                            <tr>
                                                <td>{{$tail->id}}</td>
                                                <td>{{$tail->title}}</td>
                                                <td>
                                                    <img src="{{asset('storage/'.$tail->image)}}" class=" m-r-10" alt="" style="height: 120px; width: 230px"></td>
                                                </td>
                                                <td>{{$tail->region->name}}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a type="button" href="{{route('admin.tails.edit', $tail->id)}}" class="btn btn-light mr-2">Редактировать</a>
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
