<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'apellidos'=>'Caiza',
            'nombres'=>'Holger',
            'cedula'=>'0000000000',
            'celular'=>'090000000000',
            'name'=>'SuperAdmin',
            'email'=>'admin@editorial.com',
            'password'=>bcrypt('12345678'),
            'estado'=>0,
            'created_at'=>date('Y-m-d H:i:s'),
        ]);          
    }
}
