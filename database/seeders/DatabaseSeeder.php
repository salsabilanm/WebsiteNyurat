<?php

namespace Database\Seeders;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'nim' => 123456789,
                'password'=> bcrypt('admin1234'),
                'role'=>'sekretaris'
            ],
            [
                'nim' => 205150401111018,
                'role'=>'user',
                'password'=> bcrypt('anggi123'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}