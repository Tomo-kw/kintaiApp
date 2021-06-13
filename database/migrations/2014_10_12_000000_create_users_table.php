<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('branch_id'); // 拠点ID
            $table->string('name');                  // 名前
            $table->string('kana_name');             // 名前カナ
            $table->string('email')->unique();       // メールアドレス
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');              // パスワード
            $table->string('authority');             // 権限
            $table->rememberToken();
            $table->timestamps();                    // 作成・更新日時
            $table->dateTime('deleted_at');          // 削除日時
            $table->boolean('is_retirement');        // 退職フラグ
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
