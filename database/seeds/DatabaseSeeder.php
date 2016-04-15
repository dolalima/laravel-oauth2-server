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
        Model::unguard();

        // $this->call(UserTableSeeder::class);



        factory(\App\User::class)->create([
            'name' => 'Dola Lima',
            'email' => 'dolalima@gmail.com',
            'password' => bcrypt('12345'),
            'remember_token' => str_random(10),
        ]);

        Model::reguard();
    }
}
