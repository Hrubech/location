<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles")->insert([
            ["nom"=>"superadmin", "description"=>"Test"],
            ["nom"=>"admin", "description"=>"Test"],
            ["nom"=>"manager", "description"=>"Test"],
            ["nom"=>"employe", "description"=>"Test"]
        ]);
    }
}
