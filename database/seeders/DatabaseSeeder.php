<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StorySeeder::class,
            TagSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        $user = [
            [
                'fullname' => 'Admin',
                'phone_number' => '081234567890',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('adminpwd'),
                'is_admin' => true
            ],
            [
                'fullname' => 'Sultan Fariz',
                'phone_number' => '089691306796',
                'email' => 'sultan_fariz@apps.ipb.ac.id',
                'password' => bcrypt('sultanpwd'),
                'is_admin' => false
            ]
        ];

        foreach ($user as $key => $val) {
            User::create($val);
        }
    }
}
