<?php

use Illuminate\Database\Seeder;

class MarkeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Marke::class,8)->create();
    }
}
