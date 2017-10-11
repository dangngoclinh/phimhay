<?php

use Illuminate\Database\Seeder;

class EpisodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('episode')->insert([
        	'number' => 1,
        	'name' => str_random(11)
        ]);
    }
}
