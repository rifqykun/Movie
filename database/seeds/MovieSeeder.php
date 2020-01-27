<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert(
            [
                'title' => 'Jumanji',
                'description' => 'Film Barat',
                'cast' => 'Dwyne Johnsone',
                'city_id' => 1,
                'time_id' => 1,
                'genre_id' => 1
            ]
        );

        DB::table('movies')->insert(
            [
                'title' => 'Avenger',
                'description' => 'Film Barat',
                'cast' => 'Robert JR',
                'city_id' => 2,
                'time_id' => 2,
                'genre_id' => 2
            ]
        );

        DB::table('movies')->insert(
            [
                'title' => 'Once Upon a Time in China',
                'description' => 'Film Asia',
                'cast' => 'Jet Lie',
                'city_id' => 3,
                'time_id' => 3,
                'genre_id' => 3
            ]
        );
    }
}
