@extends('layouts.app')
@section('content')
    <h1>id:{{$task->id}}のタスク編集ページ</h1>
    
    <div class="row">
        <div class="col-6">
            {!! Form::model($task,['route'=>['tasks.update',$task->id],'method'=>'put'])!!}
        <!-- Form::model()でﾌｫｰﾑ開始,後の Form::close()でﾌｫｰﾑ終了 普通のhtmlの＜form＞と＜/form＞に対応 -->
        <!-- 第1引数:対象Modelのｲﾝｽﾀﾝｽ、第2:formﾀｸﾞのｱｸｼｮﾝ属性をrouteのﾙｰﾃｨﾝｸﾞ名としている -->
        <!-- 配列の2つ目に $task->id を入れることで update の URL である /tasks/{tasks} の {tasks} に id が入る -->
                <div class="form-group">
                    {!! Form::label('content','タスク：')!!}
                             {{-- Form::label()　第一引数：Form::model()で指定したTaskﾓﾃﾞﾙｲﾝｽﾀﾝｽ$taskのｶﾗﾑ、第2：ラベル名 --}}                
                    {!! Form::text('content', null, ['class'=>'form-control'])!!}
                             {{-- Form::text()で、htmlのinput type="text"を生成 --}} 
                             {{-- 第1引数：Form::model()で指定したTaskﾓﾃﾞﾙｲﾝｽﾀﾝｽ$taskのｶﾗﾑ、第2：初期表示text、第3：ﾀｸﾞ属性情報 --}}                
                </div>
                
                {!! Form::submit('更新',['class'=>'btn btn-light'])!!}
                
            {!! Form::close() !!}
        </div>
    </div>
@endsection