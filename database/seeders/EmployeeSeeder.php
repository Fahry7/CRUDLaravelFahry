<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'nama' => 'Fahry Azkha Haidar',
            'jeniskelamin' => 'Cowo',
            'notelpon' => '08888888888',
        ]);
    }
}
