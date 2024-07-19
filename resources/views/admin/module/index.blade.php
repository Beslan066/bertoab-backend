@extends('layouts.admin')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="card">

                    <div class="w-full d-flex align-items-center justify-content-between" style="padding: 20px">
                        <h3>Модули</h3>
                        <a type="button" class="btn btn-outline-success" href="{{route('admin.modules.create')}}">Добавить</a>
                    </div>
                    <div class="card-body">
                        <div class="active-member">

                            <div class="btn-group m-b-10">
                                @foreach($categories as $category)
                                    <button id="filter-button-{{$category->id}}" class="btn btn-primary mr-2" type="button">{{$category->name}}</button>
                                @endforeach
                            </div>
                            <div class="table-responsive">
                                <table class="table table-xs">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Заголовок</th>
                                        <th>Категория</th>
                                        <th>Уроки</th>
                                        <th>Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($modules))
                                        @foreach($modules as $module)
                                            <tr>
                                                <td>{{$module->id}}</td>
                                                <td>{{$module->name}}</td>
                                                <td>{{$module->category->name}}</td>
                                                <td>

                                                    <a type="button" href="{{route('admin.modules-step.create')}}" class="btn btn-success mr-2"><span class="mdi mdi-plus"></span>  </a>
                                                    <a type="button" href="{{route('admin.modules.show', $module->id)}}" class="btn btn-success mr-2"><span class="mdi mdi-eye"></span></a>

                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a type="button" href="{{route('admin.modules.edit', $module->id)}}" class="btn btn-light mr-2">Редактировать</a>
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
