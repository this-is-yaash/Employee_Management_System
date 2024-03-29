<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'email'=>"y1@gmail.com",
                'password' => Hash::make('123')
            ]
        ];
        foreach ($data as $key =>$value){
            DB::table('users')->insert($value);
        }
    }
}
