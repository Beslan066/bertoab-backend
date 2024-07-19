@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$module->name}} - уроки</h4>
                    <div class="card-content">
                        <div class="nestable">
                            <div class="dd" id="nestable2">
                                <ol class="dd-list">
                                    @if($moduleStepsWithCategory)
                                        @foreach($moduleStepsWithCategory as $item)
                                            <li class="dd-item" data-id="{{$item->id}}}"><button data-action="collapse" type="button">Collapse</button><button data-action="expand" type="button" style="display: none;">Expand</button>
                                                <div class="dd-handle">Шаг {{$item->id}}</div>
                                                <ol class="dd-list">
                                                    {!! $item->content !!}

                                                </ol>
                                            </li>
                                        @endforeach
                                    @endif
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
