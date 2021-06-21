<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branchs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('branch_name');       // 拠点名 
            $table->string('branch_address');    // 拠点拠点住所
            $table->time('start_time');          // 営業開始時間
            $table->time('end_time');            // 営業終了時間
            $table->boolean('business_sun_day'); // 営業曜日：日
            $table->boolean('business_mon_day'); // 営業曜日：月
            $table->boolean('business_tue_day'); // 営業曜日：火
            $table->boolean('business_wed_day'); // 営業曜日：水
            $table->boolean('business_thu_day'); // 営業曜日：木
            $table->boolean('business_fri_day'); // 営業曜日：金
            $table->boolean('business_sat_day'); // 営業曜日：土
            $table->double('latitude', 9, 7);    // 経度
            $table->double('longitude', 10, 7);  // 緯度
            $table->timestamps();                // 作成・更新日時
            $table->dateTime('deleted_at');      // 削除日時
            $table->boolean('is_branch_open');   // 拠点営業中フラグ
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branchs');
    }
}
