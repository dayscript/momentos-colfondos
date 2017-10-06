<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ActivitiesTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(EmployeesActivitiesTableSeeder::class);
    }
}
