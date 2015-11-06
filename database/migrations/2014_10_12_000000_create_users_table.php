<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->char('username', 50);
            $table->char('password', 60);
            $table->integer('phone')->unique();
            $table->string('email')->unique();
            $table->tinyInteger('gender');            
            $table->string('head');//头像    
            $table->tinyInteger('type');//注册类型
            $table->tinyInteger('status');//状态
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
