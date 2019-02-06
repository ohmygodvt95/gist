<?php

use App\Gist;
use Illuminate\Database\Seeder;

class GistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Gist::class, 1000)->create();
    }
}
