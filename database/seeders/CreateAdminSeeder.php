<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Admin',
                'email'=>'admin@admin.com',
                'password'=> bcrypt('admin@123'),
            ],
            [
                'name'=>'Rauf',
                'email'=>'rauf@admin.com',
                'password'=> bcrypt('rauf@123'),
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
