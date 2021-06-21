<?php

use Illuminate\Database\Seeder;

class BranchsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branchs')->insert([
            [
                'branch_name' => '埼玉',
                'branch_address' => '埼玉県大宮市',
                'start_time'       => '09:00:00',
                'end_time'         => '18:00:00',
                'business_sun_day' => false,
                'business_mon_day' => true,
                'business_tue_day' => true,
                'business_wed_day' => true,
                'business_thu_day' => true,
                'business_fri_day' => true,
                'business_sat_day' => false,
                'latitude'         => '35.8003026',
                'longitude'        => '139.5578024',
                'created_at'       => now(),
                'updated_at'       => now(),
                'deleted_at'       => now(),
                'is_branch_open'   => true,
            ],
            [
                'branch_name' => '東京',
                'branch_address' => '東京都池袋',
                'start_time'       => '10:00:00',
                'end_time'         => '19:00:00',
                'business_sun_day' => false,
                'business_mon_day' => true,
                'business_tue_day' => true,
                'business_wed_day' => true,
                'business_thu_day' => true,
                'business_fri_day' => true,
                'business_sat_day' => false,
                'latitude'         => '35.7296247',
                'longitude'        => '139.7109215',
                'created_at'       => now(),
                'updated_at'       => now(),
                'deleted_at'       => now(),
                'is_branch_open'   => true,
            ],
            [
                'branch_name' => '北海道',
                'branch_address' => '北海道札幌',
                'start_time'       => '11:00:00',
                'end_time'         => '20:00:00',
                'business_sun_day' => true,
                'business_mon_day' => false,
                'business_tue_day' => false,
                'business_wed_day' => false,
                'business_thu_day' => false,
                'business_fri_day' => false,
                'business_sat_day' => false,
                'latitude'         => '43.2648583',
                'longitude'        => '141.3403110',
                'created_at'       => now(),
                'updated_at'       => now(),
                'deleted_at'       => now(),
                'is_branch_open'   => true,
            ],
            [
                'branch_name' => '大阪',
                'branch_address' => '大阪府',
                'start_time'       => '08:00:00',
                'end_time'         => '17:00:00',
                'business_sun_day' => false,
                'business_mon_day' => true,
                'business_tue_day' => true,
                'business_wed_day' => true,
                'business_thu_day' => true,
                'business_fri_day' => true,
                'business_sat_day' => false,
                'latitude'         => '34.6656251',
                'longitude'        => '135.4323609',
                'created_at'       => now(),
                'updated_at'       => now(),
                'deleted_at'       => now(),
                'is_branch_open'   => false, //営業していない
            ],
        ]);
    }
}
