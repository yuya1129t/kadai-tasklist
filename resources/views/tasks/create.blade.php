@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    <div class="row">
        <div class="col-xs-6">

            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('content', 'タスク') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('status', 'ステータス') !!}
                    {!! Form::select('status', [ '' => '', '未完了' => '未完了', '完了' => '完了' ], null, ['class' => 'form-control']) !!}
                </div>
            
                
                
                {!! Form::submit('新規追加', ['class' => 'btn btn-primary']) !!}
            
            {!! Form::close() !!}
        
            
        </div>
    </div>
    

@endsection