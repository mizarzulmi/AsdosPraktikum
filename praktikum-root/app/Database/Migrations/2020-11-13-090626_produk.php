<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
	public function up()
	{
		$this->forge->addField([

			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'nama_produk' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'deskripsi_produk' => [
				'type' => 'TEXT',
				'constraint' => 100
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => TRUE
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => TRUE
			]

		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('produk');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('produk');
	}
}
