<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                                    ['name'=> 'admin', 'email'=>'admin@mail.com', 'password'=> bcrypt('admin')],
                                    ['name'=> 'admin', 'email'=>'user@mail.com', 'password'=> bcrypt('user')]
                                  ]);
    }
}
