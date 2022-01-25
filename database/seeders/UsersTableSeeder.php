<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Eloquent\Factories\Factory as FactoriesFactory;
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
        \App\Models\User::factory()->count(3)->create(); 
        // ->each(function($user) {
        //     $user->role()->save(\App\Models\User::factory())->make();
        // });
    }
}
