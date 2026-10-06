<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterUpdatedAtColumnToUsersTable extends Migration
{
    public function up(): void
    {
        // https://codeigniter.com/user_guide/dbmgmt/forge.html#modifying-a-field-in-a-table
        $this->db->query('alter table users change created_at created_at timestamp null default current_timestamp on update current_timestamp');
        $this->db->query('alter table users change updated_at updated_at timestamp null default current_timestamp on update current_timestamp');
    }

    public function down(): void {}
}
