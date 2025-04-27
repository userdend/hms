<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateRequestTypeTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table('request_type', ['id' => false, 'primary_key' => 'rt_id']);

        $table->addColumn('rt_id', 'integer', ['signed' => false, 'identity' => true])
            ->addColumn('rt_name', 'string', ['limit' => 255])
            ->addColumn('rt_description', 'text', ['null' => true])
            ->addColumn('rt_stage', 'integer', ['null' => true])
            ->addColumn('fk_approver', 'integer', ['null' => true, 'signed' => false])
            ->addColumn('rt_created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('rt_updated_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP', 'update' => 'CURRENT_TIMESTAMP'])
            ->addForeignKey('fk_approver', 'employees', 'e_id', ['delete' => 'SET NULL', 'update' => 'CASCADE'])
            ->create();
    }
}
