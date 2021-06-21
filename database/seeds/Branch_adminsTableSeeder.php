<?php

use Illuminate\Database\Seeder;

class Branch_adminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branch_admins')->insert([
            [
                'user_id' => '1',
                'branch_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
            ],
            [
                'user_id' => '2',
                'branch_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
            ],
            [
                'user_id' => '3',
                'branch_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
            ],
        ]);
    }
}
