<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateBudgetRequestTable extends AbstractMigration
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
        $table = $this->table('budget_request', ['id' => false, 'primary_key' => 'br_id']);

        $table->addColumn('br_id', 'integer', ['identity' => true]) // Auto-increment
            ->addColumn('br_name', 'string', ['limit' => 255])
            ->addColumn('br_description', 'text', ['null' => true])
            ->addColumn('br_budget', 'decimal', [
                'precision' => 15, // up to 999 trillion
                'scale' => 2,      // 2 decimal points
                'null' => true
            ])
            ->addColumn('fk_approval_status', 'integer', ['null' => true, 'signed' => false])
            ->addColumn('br_created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP'
            ])
            ->addColumn('br_updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'update' => 'CURRENT_TIMESTAMP'
            ])
            ->addForeignKey('fk_approval_status', 'request_approvals', 'ra_id', [
                'delete' => 'SET NULL',
                'update' => 'CASCADE'
            ])
            ->create();
    }
}
