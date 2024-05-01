<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=> 'Mas Operator',
                'email'=> 'operator@gmail.com',
                'role'=> 'operator',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=> 'Mas keuangan',
                'email'=> 'keuangan@gmail.com',
                'role'=> 'keuangan',
                'password'=>bcrypt('111111')
            ],
            [
                'name'=> 'Mas marketing',
                'email'=> 'marketing@gmail.com',
                'role'=> 'marketing',
                'password'=>bcrypt('222222')
            ],
        ];
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
