@extends('layouts.app')


@section('title')
Todos
@endsection

@section('content')

<h1 class="text-center my-5">Todos Page</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                Todos
            </div>
            <div class="card-body">
                <ul class="list-group">
                @foreach($todos as $todo)

                    <li class="list-group-item">
                        {{$todo->name}}

                        @if(!$todo->completed)
                        <a href="/todos/{{$todo->id}}/complete" class="text-white btn btn-xs btn-warning float-right">Complete</a>
                        @endif
                        <a href="/todos/{{$todo->id}}" class="btn btn-xs btn-primary float-right mr-2">View</a>
                    </li>

                @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection