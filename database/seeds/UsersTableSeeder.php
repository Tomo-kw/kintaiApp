<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'branch_id' => '1',
                'name' => '管理者1',
                'email' => 'aaa@a.com',
                'password' => Hash::make('secret'), // 「secretでログインできる」
                'authority' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
                'is_retirement' => false,
            ],
            [
                'branch_id' => '2',
                'name' => '管理者2',
                'email' => 'bbb@b.com',
                'password' => Hash::make('secret'), // 「secretでログインできる」
                'authority' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
                'is_retirement' => false,
            ],
            [
                'branch_id' => '3',
                'name' => '管理者3',
                'email' => 'ccc@c.com',
                'password' => Hash::make('secret'), // 「secretでログインできる」
                'authority' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
                'is_retirement' => false,
            ],
            [
                'branch_id' => '3',
                'name' => '管理者4',
                'email' => 'cccc@c.com',
                'password' => Hash::make('secret'), // 「secretでログインできる」
                'authority' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
                'is_retirement' => true, //退職者、表示させない
            ],
            [
                'branch_id' => '1',
                'name' => '一般ユーザー1',
                'email' => 'ddd@d.com',
                'password' => Hash::make('secret'), // 「secretでログインできる」
                'authority' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
                'is_retirement' => false,
            ],
            [
                'branch_id' => '2',
                'name' => '一般ユーザー2',
                'email' => 'eee@e.com',
                'password' => Hash::make('secret'), // 「secretでログインできる」
                'authority' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
                'is_retirement' => false,
            ],
            [
                'branch_id' => '3',
                'name' => '一般ユーザー3',
                'email' => 'fff@f.com',
                'password' => Hash::make('secret'), // 「secretでログインできる」
                'authority' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
                'is_retirement' => false,
            ],
            [
                'branch_id' => '3',
                'name' => '一般ユーザー4',
                'email' => 'ffff@f.com',
                'password' => Hash::make('secret'), // 「secretでログインできる」
                'authority' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
                'is_retirement' => true, //退職者、表示させない
            ],
            [
                'branch_id' => '999',
                'name' => 'システム管理者',
                'email' => 'ggg@g.com',
                'password' => Hash::make('secret'), // 「secretでログインできる」
                'authority' => 'system',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
                'is_retirement' => false,
            ],
        ]);
    }
}
