<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_create_users_table extends CI_Migration
{
    const TABLE_NAME = 'users';

    public function up()
    {
        $this->dbforge->add_field([
            'id'           => [
                'type'           => 'INT',
                'constraint'     => '11',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email'        => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'unique'     => true,
            ],
            'password'     => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'name'         => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'phone_number' => [
                'type'       => 'VARCHAR',
                'constraint' => '45',
            ],
        ]);
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table(self::TABLE_NAME);
        $this->seeder();
    }

    public function down()
    {
        $this->dbforge->drop_table(self::TABLE_NAME);
    }

    protected function seeder()
    {
        $data = [];
        for ($i = 1; $i < 15; $i++) {
            $data[] = [
                'email'        => 'email_' . $i . '@gmail.com',
                'password'     => md5('admin123'),
                'name'         => 'Name ' . $i,
                'phone_number' => '0961396777',
            ];
        }

        $this->db->insert_batch(self::TABLE_NAME, $data);
    }
}
