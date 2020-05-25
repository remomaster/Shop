<?php

use Illuminate\Database\Seeder;

class SchuheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Schuhe::class, 20)->create();
    }
}
