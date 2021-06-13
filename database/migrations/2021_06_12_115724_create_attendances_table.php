<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');   // ユーザーID
            $table->unsignedBigInteger('branch_id'); // 拠点ID
            $table->dateTime('start_time');          // 出勤日・出勤時間
            $table->dateTime('end_time');            // 退勤日・退勤時間
            $table->timestamps();                    // 作成・更新日時
            $table->dateTime('deleted_at');          // 削除日時
            $table->boolean('is_deleted');           // 削除フラグ
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
