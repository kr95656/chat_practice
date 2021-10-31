<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('message')->comment('メッセージ内容');
            
            // インデックス（あとで使い方を調べる）
            $table->index('id');
            $table->index('user_id');
            $table->index('message');
            
            // 外部キー
            $table->foreignId('user_id')->comment('ユーザID')->constrained();
            // $table->unsignedBigInteger('user_id')->comment('ユーザID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
