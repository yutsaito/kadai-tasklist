@extends('layouts.app')
@section('content')

    <h1> id={{$task->id}}のtask詳細ページ</h1>
    
    <table class="table table-bordered table-striped">
        <tr>
            <th>id</th>
            <td>{{$task->id}}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{$task->content}}</td>
        </tr>
        <tr>
            <th>内容</th>
            <td>{{$task->content_detail}}</td>
        </tr>        
        <tr>
            <th>デッドライン</th>
            <td>{{$task->deadline}}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{$task->status}}</td>
        </tr>        
    </table>

    {!! link_to_route('tasks.edit','このタスクを編集',['id'=>$task->id],['class'=>'btn btn-light'])!!}
    
    {!! Form::model($task,['route'=>['tasks.destroy',$task->id],'method'=>'delete'])!!}
    <br>
        {!! Form::submit('削除',['class'=>'btn btn-danger'])!!}
    {!! Form::close() !!}
    
@endsection