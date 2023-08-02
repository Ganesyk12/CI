<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class Contact extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [ 'type' => 'INT', 'constraint' => 5, 'unsigned'=> true, 'auto_increment' => true],       
            'name' => ['type' => 'VARCHAR','constraint' => 100, 'NOT NULL' ],
            'phone' => ['type' => 'VARCHAR','constraint' => 100, 'NOT NULL'],
            'address' => ['type' => 'VARCHAR','constraint' => 255, 'NOT NULL'],            
            ]);
            $this->forge->addKey('id', TRUE);
            $this->forge->createTable('contacts', TRUE);
    }
    public function down()
    {
        $this->forge->dropTable('contacts');
    }
}
