@extends('layouts.app')
@section('content')

    <h1> タスク一覧</h1>
    @if(count($tasks)>0)    <!--Controllerから送られてきた変数tasksが一つ以上の要素を含んでいれば-->
        <table class="table table-striped">   <!-- boostrapできれいなtableを作る -->
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>内容</th>
                    <th>デッドライン</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)  <!-- $tasks から $taskとしてひとつづつ取り出し-->
                <tr>
                      <!-- $taskのidｶﾗﾑの内容を表示 -->
                    <td>{!! link_to_route('tasks.show',$task->id,['id'=>$task->id])!!}</td>
                    <!-- 第1引数:ﾙｰﾃｨﾝｸﾞ名、第2:ﾘﾝｸにしたい文字列、第3:URLﾊﾟﾗﾒｰﾀに代入したい値 -->
                    <td>{{$task->content}}</td>   <!-- $taskのcontentｶﾗﾑの内容を表示 -->
                    <td>{{$task->content_detail}}</td>                     
                    <td>{{$task->deadline}}</td>                     
                    <td>{{$task->status}}</td>                     
                </tr>
                @endforeach    
            </tbody>
        </table>
    @endif
    
    <!--indexのviewからcreateのViewへ遷移するﾘﾝｸ-->
   {!! link_to_route('tasks.create', '新規タスクの追加', null, ['class' => 'btn btn-primary']) !!}
    <!--第一引数：ﾙｰﾃｨﾝｸﾞ名（ﾘﾝｸ先）、第二引数：ﾘﾝｸしたい文字列、-->
    <!--、第三引数：URL内のﾊﾟﾗﾒｰﾀに代入したい値を配列形式で第四引数：HTMLﾀｸﾞの属性を配列形式で-->
    <!--つまり、tasksﾌｫﾙﾀﾞのcreate.blade.phpへ、新規ﾀｽｸの登録、btn,primary(boostrap)の、をﾘﾝｸさせる-->
@endsection

