<?php

use Illuminate\Database\Seeder;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('times')->insert(
            [
                'time' => '11:11:15'
            ]
        );

        DB::table('times')->insert(
            [
                'time' => '12:11:15'
            ]
        );

        DB::table('times')->insert(
            [
                'time' => '13:11:15'
            ]
        );
    }
}
