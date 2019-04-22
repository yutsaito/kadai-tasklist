<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            //接続しているMySQLﾃﾞｰﾀﾍﾞｰｽにtasksﾃｰﾌﾞﾙを作成し、作成するｶﾗﾑも指定
            $table->increments('id');
            $table->string('content');    // content カラム追加 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
