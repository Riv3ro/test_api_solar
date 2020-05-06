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
        //
        DB::table('users')->insert([
          [
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => bcrypt('admin'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
          ]
        ]);
    }


}
