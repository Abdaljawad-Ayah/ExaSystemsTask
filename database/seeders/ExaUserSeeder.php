<?php

namespace Database\Seeders;
// use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExaUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('user')->truncate();
        DB::table('user')->insert(array(
            0 => array(
                'full_name' => "Adam Q. Hinton",
                'slug' => "Ante Corp.",
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            1 => array(
                'full_name' => "Melissa A. Hinton",
                'slug' => "Enim Nec LLP",
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            2 => array(
                'full_name' => "Ulla C. Donaldson",
                'slug' => "delectus aut autem",
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            3 => array(
                'full_name' => "Channing Ballard",
                'slug' => "delectus aut autem",
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            4 => array(
                'full_name' => "Elizabeth Dyer",
                'slug' => "delectus aut autem",
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            5 => array(
                "full_name" => "Clayton Rutledge",
                "slug" => "dolor sit amet, consectetuer adipiscing elit",
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            6 => array(
                "full_name" => "Jamalia Davenport",
                "slug" => "dolor sit amet, consectetuer adipiscing elit",
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            7 => array(
                "full_name" => "Tate Hunter",
                "slug" => "consectetuer adipiscing elit",
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            8 => array(
                "full_name" => "Ulla C. Donaldson",
                "slug" => "Mi Tempor Limited",
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            9 => array(
                "full_name" => "Ian K. Butler",
                "slug" => "Varius Associates",
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            10 => array(
                "full_name" => "Shea K. Adkins",
                "slug" => "Nec Ante Blandit Incorporated",
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),

        ));
    }
}
