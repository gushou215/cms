<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    //提交
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('模块名称|input');
            $table->string('name')->comment('模块标识|input');
            $table->tinyInteger('is_default')->default(0)->comment('默认模块|radio|0:否,1:是');
            $table->tinyInteger('front_access')->default(0)->comment('前台访问|radio|0:否,1:是');
            $table->timestamps();
        });
    }

    //回滚
    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
