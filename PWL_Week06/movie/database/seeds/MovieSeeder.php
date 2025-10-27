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
        DB::table('movie')->insert([
            'imdb_id' => 'tt123456',
            'title' => 'Abadi Nan Jaya',
            'genre' => 'Horror',
            'year' => 2025,
            'description' => 'Film zombie jadi jamu',
            'poster' => 'zombie.jpg',
        ]);
    }
}
