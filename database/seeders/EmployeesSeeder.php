<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'nik' => '',
            'employee_name' => '',
            'project_id' => '',
        ]);
    }
}
