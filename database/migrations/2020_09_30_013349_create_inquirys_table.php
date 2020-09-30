<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquirysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquirys', function (Blueprint $table) {
            $table->id();
            $table->string('companyname');  // 会社名
            $table->string('name');  // 担当者名
            $table->string('to');  // TO送信先
            $table->string('cc');  // CC送信先
            $table->string('telnumber');  // 電話番号
            $table->string('usemachine');  // 使用機械
            $table->string('document')->nullable();  // 添付ファイル
            $table->string('body');  // 本文
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
        Schema::dropIfExists('inquirys');
    }
}
