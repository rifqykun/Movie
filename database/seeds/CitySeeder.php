<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert(
            [
                'city' => 'Yogyakarta'
            ]
        );

        DB::table('cities')->insert(
            [
                'city' => 'Cilacap'
            ]
        );

        DB::table('cities')->insert(
            [
                'city' => 'Jakarta'
            ]
        );

        DB::table('cities')->insert(
            [
                'city' => 'Surabaya'
            ]
        );

        DB::table('cities')->insert(
            [
                'city' => 'Malang'
            ]
        );
    }
}
