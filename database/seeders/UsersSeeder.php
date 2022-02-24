<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Esteban Patiño",
            'email' => "esteban.patinog@autonoma.edu.co",
            'password' => "hola1234",
        ]);
        DB::table('users')->insert([
            'name' => "Don Asistente",
            'email' => "asistente@autonoma.edu.co",
            'password' => "bola1234",
        ]);
        DB::table('users')->insert([
            'name' => "Diseñador",
            'email' => "diseno@autonoma.edu.co",
            'password' => "cola1234",
        ]);
    }
}
