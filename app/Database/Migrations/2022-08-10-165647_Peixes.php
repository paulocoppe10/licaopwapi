<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peixes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'auto_increment'=>true
            ],
            'especie'=>[
                'type'=>'varchar',
                'constraint'=>100
            ],
            'tipo'=>[
                'type'=>'varchar',
                'constraint'=>100
            ],
            'origem'=>[
                'type'=>'varchar',
                'constraint'=>100
            ],
            'ph'=>[
                'type'=>'double'
            ],
            'tamanho'=>[
                'type'=>'double'
            ],
            'idade'=>[
                'type'=>'double'
            ],
            'valor'=>[
                'type'=>'double'
            ],
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('peixes');
    }

    public function down()
    {
        $this->forge->dropTable('peixes');
    }
}
