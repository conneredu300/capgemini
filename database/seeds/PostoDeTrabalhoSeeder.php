<?php

use Illuminate\Database\Seeder;

class PostoDeTrabalhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PostoDeTrabalho::class, 1)->create();
    }
}
