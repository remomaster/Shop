<?php

use Illuminate\Database\Seeder;

class ShoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Shoes::class, 20)->create();
    }
}
