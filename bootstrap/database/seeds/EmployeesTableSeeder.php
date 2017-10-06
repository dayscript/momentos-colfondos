<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [];
        $employees[] = [
        	'name' => 'Alcides',
        	'lastname' => 'Vargas',
        	'position' => 'Presidente',
        	'description' => 'Alcides es un visionario, una persona dinámica, atenta, innovadora y sobre todo muy cercana. Para Alcides será un placer hablar contigo, él fue el promotor de esta gran idea, pues siempre ha tenido a nuestros afiliados en el primer lugar. 

Alcides te explicará cómo proyectarte al futuro, lo que debes esperar del sistema pensional y cómo Colfondos te acompañará en el cumplimiento de tus metas.',
			'image' => 'alcides-Vargas.jpg'
        ];

        $employees[] = [
        	'name' => 'Alain',
        	'lastname' => 'Foucrier',
        	'position' => 'Vicepresidente Financiero y Administrativo',
        	'description' => 'Alain es una persona dinámica, práctica y alguien que puede transformar los temas para que sean sencillos y concretos; está siempre disponible y atento a resolver todas tus inquietudes.
 
Alain te guiará sobre cómo se genera el ingreso y se controlan los gastos.',
			'image' => 'alain-foucrier.jpg'
        ];

        $employees[] = [
        	'name' => 'Andres',
        	'lastname' => 'Lozano',
        	'position' => 'Vicepresidente de inversiones',
        	'description' => 'Andrés es una persona muy amable, disponible, ágil y que siempre está dispuesta a brindar soporte y acompañamiento.  
  
Te dará un panorama muy interesante sobre cómo se invierte tu dinero.',
			'image' => 'andres-lozano.jpg'
        ];

        $employees[] = [
        	'name' => 'Jaime Andrés',
        	'lastname' => 'Rivera',
        	'position' => 'Gerente Unidad Previsiona',
        	'description' => 'Jaime es un gran conocedor del mundo de los seguros y de las coberturas.   El se encarga del seguro previsional de tu pensión, es decir el seguro que cubre los riesgos de invalidez y sobrevivencia. Te contará cómo funcionan estas coberturas y cómo se tramitan.',
			'image' => 'jaime-andres-rivera.jpg'
        ];

        $employees[] = [
        	'name' => 'Orietta',
        	'lastname' => 'Guerrero',
        	'position' => 'Vicepresidente de Ventas y Distribución',
        	'description' => 'Orietta es una líder llena de energía, alegría y optimismo. Tiene a su cargo las fuerzas de ventas de Colfondos y estará feliz de compartir contigo los retos que enfrenta en su labor y la mejor forma de lograr las metas.',
			'image' => 'orietta-guerrero.jpg'
        ];

        $employees[] = [
        	'name' => 'Marcela',
        	'lastname' => 'Giraldo',
        	'position' => 'Vicepresidente de Mercadeo',
        	'description' => 'Marcela es una persona que sabe escuchar, muy hábil en el planteamiento de la estrategia y en la forma de controlarla para lograr los resultados. Sin duda compartirá contigo tips de gran importancia que podrás aplicar en muchos aspectos de tu vida.',
			'image' => 'marcela-giraldo.jpg'
        ];

        $employees[] = [
        	'name' => 'Alexandra',
        	'lastname' => 'Castillo',
        	'position' => 'Vicepresidente de Riesgo',
        	'description' => 'Alexandra es una persona alegre, cercana y con una visión muy importante del negocio, de los riesgos que se  presentan y la forma de controlarlos. No te puedes perder compartir con ella la forma como se plantea, ejecuta y controla una estrategia de este tipo.',
			'image' => 'alexandra-castillo.jpg'
        ];

        $employees[] = [
        	'name' => 'Janeth',
        	'lastname' => 'Garcia',
        	'position' => 'Vicepresidente de Gestión patrimonial',
        	'description' => 'Janeth conoce profundamente a Colfondos y hoy lidera el mundo de la asesoría y administración de tu patrimonio a través del servicio especializado en Gestión Patrimonial. Una inmejorable oportunidad para que hables sobre tu plan financiero, cómo construirlo y controlarlo.',
			'image' => 'janeth-garcia.jpg'
        ];

        $employees[] = [
        	'name' => 'Adriana',
        	'lastname' => 'Gómez',
        	'position' => 'Vicepresidente de Cumplimiento',
        	'description' => 'Adriana es una persona ágil, alegre, tranquila y muy deportista. Ella vela porque las normas  se cumplan y lo hace de manera muy eficiente. Le gustan todas las actividades para compartir contigo, en especial salir a trotar o montar en bicicleta.

¿Te animas?',
			'image' => 'adriana-gomez.jpg'
        ];

        $employees[] = [
        	'name' => 'Juan Manuel',
        	'lastname' => 'Trujillo',
        	'position' => 'Secretario General',
        	'description' => 'Juan Manuel es la persona que conoce el mundo legal. Es una persona muy dinámica, alegre y siempre está dispuesto a brindar la mejor orientación.',
			'image' => 'juan-manuel-trujillo.jpg'
        ];

        $employees[] = [
        	'name' => 'Alejandro',
        	'lastname' => 'Bustamante',
        	'position' => 'Gerente de Gestión Humana',
        	'description' => 'Alejandro está a cargo del todo el talento humano de Colfondos. Es innovador, alegre, positivo y cercano. 

De seguro compartirá contigo importantes estrategias para obtener lo mejor de la gente.',
			'image' => 'alejandro-bustamante.jpg'
        ];

    	foreach ($employees as $employee) {
	        DB::table('employees')->insert([
	            'name' => $employee['name'],
	            'lastname' => $employee['lastname'],
	            'position' => $employee['position'],
	            'description' => $employee['description'],
	            'image' => $employee['image'],
	        ]);
    	}
    }
}
