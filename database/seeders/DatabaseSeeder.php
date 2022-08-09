<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(
            [
                'email' => 'admin@breaknlinks.com'
            ],
            [
                'password' => Hash::make('admin@321'),
                'name'=>'admin'
            ]
        );
        // User::factory(10)->create();
    }
}
