<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('名前(name)'); //プロフィールの名前を保存
            $table->string('性別(gender)'); //プロフィールの性別を保存
            $table->string('趣味(hobby)'); //プロフィールの趣味を保存
            $table->string('自己紹介(introduction)'); //の本文を保存
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
        Schema::dropIfExists('profile');
    }
}
