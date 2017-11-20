@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('content', 'タスク') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'ステータス') !!}
        {!! Form::select('status', [ '' => '', '未完了' => '未完了', '完了' => '完了' ]) !!}
        
        {!! Form::submit('新規追加') !!}
    
    {!! Form::close() !!}

@endsection