@extends('layouts.app')

@section('content')

<h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $tasks)
                <li>{!! link_to_route('tasks.show', $tasks->id, ['id' => $tasks->id]) !!} : {{ $tasks->content }}</li>
            @endforeach
        </ul>
    @endif
    
{!! link_to_route('takss.create', '新規タスクの投稿') !!}

@endsection