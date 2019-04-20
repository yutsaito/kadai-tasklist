<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;  //このControllerは、ﾓﾃﾞﾙApp\TaskのModel操作が主な役割。App\Taskはよく使うので。これでTaskですむ。

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     //getでtasks/　にｱｸｾｽされた時の" 一覧表示処理"
    public function index()
    {
        $tasks=Task::all();     //ﾓﾃﾞﾙTaskの一覧を取得し、変数$tasksに入れる
        return view('tasks.index',['tasks'=>$tasks,]);
        //第一引数は表示したいviewであるviewsﾌｫﾙﾀﾞのtasksﾌｫﾙﾀﾞに入っているindex.blade.php
        //第二引数は渡すﾃﾞｰﾀ。ここではViewﾌｧｲﾙ側の変数であるtasks(左側ここでは一覧表示)に、このControllerの変数$tasks(右側、一覧表示)を入れている
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $task=new Task;   //ﾓﾃﾞﾙ TaskSの要素Taskのｲﾝｽﾀﾝｽを生成
        //(ﾓﾃﾞﾙTaskの要素Taskを取得し、変数$taskに入れる)
        return view('tasks.create',['task'=>$task,]);
        //第一引数は表示したいviewであるviewsﾌｫﾙﾀﾞにあるtasksﾌｫﾙﾀﾞのcreate.blade.php
        //第二引数は渡すﾃﾞｰﾀ。viewﾌｧｲﾙ側の変数task（右側）に、このCOntrollerの変数$task（左側）を渡す
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task=new Task;
        $task->content=$request->content;
        //受け取った変数requestのcontentを、変数taskのcontentに入れる
        $task->save();
        //ｲﾝｽﾀﾝｽ$taskのsave()関数を実行
        
        return redirect('/');       //index.blade.phpにﾘﾀﾞｲﾚｸﾄ
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task=Task::find($id);
        
        return view('tasks.show',[
            'task'=>$task,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task=Task::find($id);
        
        return view('tasks.edit',[
            'task'=>$task,
        //第一引数は表示したいviewであるviewsﾌｫﾙﾀﾞにあるtasksﾌｫﾙﾀﾞedie.blade.php
        //第二引数は渡すﾃﾞｰﾀ。viewﾌｧｲﾙ側の変数task（右側）に、このCOntrollerの変数$task（左側）を渡す
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task=Task::find($id);
        $task->content=$request->content;
        //受け取った変数requestのcontentを、変数taskのcontentに入れる        
        $task->save();
        
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task=Task::find($id);
        $task->delete();
        
        return redirect('/');
    }
}