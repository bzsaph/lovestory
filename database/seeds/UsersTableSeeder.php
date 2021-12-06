<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->delete();

        DB::table('users')->insert(array (
            0 =>
            array (
                'name'=>1,
                'name' => 'Yanjye ltd',
                'email' => 'info@yanjye.com',
                'password' =>  Hash::make('info@yanjye.com'),
                'google_id' => null,
                'remember_token' => null,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ),
        ));

    }
}
