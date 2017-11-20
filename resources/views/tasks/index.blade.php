@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    
    @if ( count($tasks) > 0 )
        <ul>
            @foreach ($tasks as $task)
                <li>{{ $task->id }} : {!! link_to_route('tasks.show', $task->content, ['id' => $task->id]) !!} {!! $task->status !!}</li>
            @endforeach
            
            {!! link_to_route('tasks.create', '新規タスク追加') !!}
        </ul>
    @endif

@endsection