<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HabilitacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 30; $i++){
            $data = (new \DateTime("2019-06-$i 00:00:00"));

            DB::table('habilitacoes')->insert([
                'posto_id' => 1,
                'funcionario_id' => $i,
                'habilitado_ate' => $data
            ]);
        }
    }
}
