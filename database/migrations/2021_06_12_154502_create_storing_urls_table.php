<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoringUrlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storing_urls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id'); // ユーザーID
            $table->text('create_user_url');       // ユニークURL、ユーザー作成時
            $table->text('create_password_url');   // ユニークURL、パスワード再発行時
            $table->timestamps();                  // 作成・更新日時
            $table->dateTime('deleted_at');        // 削除日時
            $table->boolean('is_deleted');         // 削除フラグ
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('storing_urls');
    }
}
