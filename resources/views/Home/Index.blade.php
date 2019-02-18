@extends('layouts.app')

@section('content')
    <div id="accordion">
        @foreach($lists as $list)
        <div class="card list ">
            <div class="card-header" id="headingOne">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$list->id}}" aria-expanded="true" aria-controls="collapseOne">
                    <p>{{$list->list_name}}</p>
                </button>
            </div>
            <div id="collapse{{$list->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body list-body">
                    @foreach($tasks as $task)
                        @if ($task->list_id === $list->id)
                        <div class="card task">
                            <div class="card-body">
                                    <h5 class="card-title">{{$task->task_title}}</h5>
                                    <p class="card-text">{{$task->task_text}}</p>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection


