<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateRequestApprovalTable extends AbstractMigration
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
        $table = $this->table('request_approvals', ['id' => false, 'primary_key' => 'ra_id']);

        $table->addColumn('ra_id', 'integer', ['identity' => true, 'signed' => false]) // Auto-increment
            ->addColumn('fk_approval_process', 'integer', ['null' => true, 'signed' => false])
            ->addColumn('ra_step_order', 'integer', ['null' => true])
            ->addColumn('fk_approver', 'integer', ['null' => true, 'signed' => false])
            ->addColumn('ra_status', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('ra_created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP'
            ])
            ->addColumn('ra_updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'update' => 'CURRENT_TIMESTAMP'
            ])
            ->addForeignKey('fk_approval_process', 'approval_process', 'ap_id', [
                'delete' => 'SET NULL',
                'update' => 'CASCADE'
            ])
            ->addForeignKey('fk_approver', 'employees', 'e_id', [
                'delete' => 'SET NULL',
                'update' => 'CASCADE'
            ])
            ->create();
    }
}
