<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$activities = [
    		'Llevarte a la oficina en la mañana',
			'Recogerte en tu oficina por la tarde para llevarte a tu casa',
			'Vamos a desayunar',
			'Vamos a tomar onces',
			'Te recogemos para llevarte a una de tus reuniones',
			'Vamos a cine o teatro',
			'Vamos a hacer ejercicio',
    	];

    	foreach ($activities as $activity) {
	        DB::table('activities')->insert([
	            'name' => $activity,
	        ]);
    	}
    }
}
