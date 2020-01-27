<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert(
            [
                'genre' => 'Comedy'
            ]
        );

        DB::table('genres')->insert(
            [
                'genre' => 'Horor'
            ]
        );
        
        DB::table('genres')->insert(
            [
                'genre' => 'Action'
            ]
        );
    }
}
