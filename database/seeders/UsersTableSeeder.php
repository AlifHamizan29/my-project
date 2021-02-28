<?php

namespace Database\Seeders;

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
        //factory(Framework\User::class, 10)->create()->each(function ($user) {
        \App\Models\User::factory()->count(10)->create()->each(function ($user) {
            $user->profile()->create([
                'user_id' => $user->id
            ]);
        });
    }
}
