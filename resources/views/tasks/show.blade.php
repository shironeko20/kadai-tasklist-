@extends('layouts.app')

@section('content')

<h1>id = {{ $tasks->id }} のタスク詳細ページ</h1>

<p>タイトル: {{ $tasks->title }}</p>
<p>タスク: {{ $tasks->content }}</p>

    <p>{{ $tasks->content }}</p>
    
    {!! link_to_route('tasks.edit', 'このタスク編集', ['id' => $tasks->id]) !!}

    {!! Form::model($tasks, ['route' => ['tasks.destroy', $tasks->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection