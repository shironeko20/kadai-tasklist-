@extends('layouts.app')

@section('content')
 
    <h1>id = {{ $tasks->id }} のタスク詳細ページ</h1>

    <p>{{ $tasks->content }}</p>

    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $tasks->id]) !!}


@endsection