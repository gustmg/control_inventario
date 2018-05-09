<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeasurementUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('measurement_units')->insert([
			'measurement_unit_name' => 'Pieza',
			'measurement_unit_symbol' => 'pza',
		]);

		DB::table('measurement_units')->insert([
			'measurement_unit_name' => 'Kilogramo',
			'measurement_unit_symbol' => 'kg',
		]);

		DB::table('measurement_units')->insert([
			'measurement_unit_name' => 'Miligramo',
			'measurement_unit_symbol' => 'mg',
		]);

		DB::table('measurement_units')->insert([
			'measurement_unit_name' => 'Litro',
			'measurement_unit_symbol' => 'L',
		]);

		DB::table('measurement_units')->insert([
			'measurement_unit_name' => 'Mililitro',
			'measurement_unit_symbol' => 'ml',
		]);

		DB::table('measurement_units')->insert([
			'measurement_unit_name' => 'Metro',
			'measurement_unit_symbol' => 'm',
		]);
    }
}
