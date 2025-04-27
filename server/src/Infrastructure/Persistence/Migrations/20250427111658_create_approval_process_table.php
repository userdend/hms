<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateApprovalProcessTable extends AbstractMigration
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
        $table = $this->table('approval_process', ['id' => false, 'primary_key' => 'ap_id']);

        $table->addColumn('ap_id', 'integer', ['signed' => false, 'identity' => true]) // Auto-increment
            ->addColumn('fk_request_type', 'integer', ['null' => true, 'signed' => false])
            ->addColumn('fk_requestor', 'integer', ['null' => true, 'signed' => false])
            ->addColumn('ap_status', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('ap_created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP'
            ])
            ->addColumn('ap_updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'update' => 'CURRENT_TIMESTAMP'
            ])
            ->addForeignKey('fk_request_type', 'request_type', 'rt_id', [
                'delete' => 'SET NULL',
                'update' => 'CASCADE'
            ])
            ->addForeignKey('fk_requestor', 'employees', 'e_id', [
                'delete' => 'SET NULL',
                'update' => 'CASCADE'
            ])
            ->create();
    }
}
