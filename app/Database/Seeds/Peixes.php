<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Peixes extends Seeder
{
    public function run()
    {
            $especie = ['oscar', 'aruana', 'motoro', 'carpa koi', 'acara bandeira', 'neon'];
            $tipo = ['jumbo','jumbo','jumbo','ornamental','ornamental','ornamental'];
            $origem = ['america','america','america','japao','america','america',];
            $ph = [7,7,7,7,7,7,];
            $tamanho = [30,50,30,40,5,2];
            $idade = [10,10,10,10,3,2];
            $valor = [15,150,250,5,8,4];
            for($x =0; $x <6; $x++){               
                $data = [
                    'especie' => $especie[$x],
                    'tipo' => $tipo[$x],
                    'origem' => $origem[$x],
                    'ph' => $ph[$x],
                    'tamanho' => $tamanho[$x],
                    'idade' => $idade[$x],
                    'valor' => $valor[$x],
                ];
            $this->db->table('peixes')->insert($data);
            }
    }
}