<?php 
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tb_login extends Migration{
    public function up(){

        // Uncomment below if want config
        // $this->forge->addField([
        // 		'id'          		=> [
        // 				'type'           => 'INT',
        // 				'unsigned'       => TRUE,
        // 				'auto_increment' => TRUE
        // 		],
        // 		'title'       		=> [
        // 				'type'           => 'VARCHAR',
        // 				'constraint'     => '100',
        // 		],
        // ]);
        // $this->forge->addKey('id', TRUE);
        $this->forge->createTable('tb_login');
    }

    public function down(){
        $this->forge->dropTable('tb_login');
    }
}