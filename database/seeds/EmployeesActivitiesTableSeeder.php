<?php

use Illuminate\Database\Seeder;

class EmployeesActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inserts = [];
        $employees = DB::table('employees')->get();
        $activities = DB::table('activities')->get();
        foreach ($employees as $employee) {
            foreach ($activities as $activity) {
                if($employee->name != "Adriana" && $activity->id == 7){
                    continue;
                }
    	        DB::table('employees_activities')->insert([
    	            'employee_id' => $employee->id,
    	            'activity_id' => $activity->id,
    	        ]);
            }
    	}
    }
}
