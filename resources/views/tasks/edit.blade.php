@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>

    <div class="row">
        <div class="col-xs-6">

            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
            
                <div class="form-group">
                    {!! Form::label('content', 'タスク') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('status', 'ステータス') !!}
                    {!! Form::select('status', [ '' => '', '未完了' => '未完了', '完了' => '完了' ], null, ['class' => 'form-control']) !!}
                </div>
            
        
                
                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
            
            {!! Form::close() !!}

            
        </div>
    </div>


@endsection