<?php

use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logins')->insert([
            'username' => Str::random(10),
            'password' => Str::random(10),
            'name' => Str::random(10),
            'email' => Str::random(10).'@hotmail.com',
            'activated' => 1
        ]);
    }
}
