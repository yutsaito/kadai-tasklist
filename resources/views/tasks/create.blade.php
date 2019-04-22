@extends('layouts.app')
@section('content')

    <h1>タスクﾞ新規登録ﾞページ</h1>
    
    <div class="row">
        <div class="col-6">
            {!! Form::model($task,['route'=>'tasks.store'])!!}
                    {{-- 変数の内容や結果を表すのに{{ }}、{!! !!}で囲う --}}
                    {{-- これらは ＜?php echo 変数名;?＞と変換される --}}
                  　<!-- Form::model()でﾌｫｰﾑ開始,後の Form::close()でﾌｫｰﾑ終了 普通のhtmlの＜form＞と＜/form＞に対応 -->
                    <!-- 第1引数:対象Modelのｲﾝｽﾀﾝｽ、第2:formﾀｸﾞのｱｸｼｮﾝ属性をrouteのﾙｰﾃｨﾝｸﾞ名としている -->
            <div class="form-group">

                {!! Form::label('content','タスク：')!!}
                         {{-- Form::label()　第一引数：Form::model()で指定したTaskﾓﾃﾞﾙｲﾝｽﾀﾝｽ$taskのｶﾗﾑ、第2：ラベル名 --}}                            
                {!! Form::text('content',null,['class'=>'form-control'])!!}
                         {{-- Form::text()で、htmlのinput type="text"を生成 --}} 
                         {{-- 第1引数：Form::model()で指定したTaskﾓﾃﾞﾙｲﾝｽﾀﾝｽ$taskのｶﾗﾑ、第2：初期表示text、第3：ﾀｸﾞ属性情報 --}}
                         
                {!! Form::label('content_detail','タスク内容：')!!}                         
                {!! Form::text('content_detail',null,['class'=>'form-control'])!!}
                
                {!! Form::label('deadline','デッドライン：')!!}                         
                {!! Form::date('deadline',null,['class'=>'form-control'])!!}                

                {!! Form::label('status','ステイタス：')!!}                         
                {!! Form::text('status',null,['class'=>'form-control'])!!}                         
            </div>
            
            {!! Form::submit('投稿',['class'=>'btn btn-primary']) !!}
            
            <!-- Form::submit('投稿') は送信ボタンを生成する関数で、第一引数にボタンに書かれる表示を与えます。 -->
            <!-- 送信すると、 Form::model($task, ['route' => 'tasks.store']) の route で指定された action 属性へフォームの入力内容が送られるようになっている。 -->
            
            {!! Form::close()!!}
        </div>
    </div>
@endsection
