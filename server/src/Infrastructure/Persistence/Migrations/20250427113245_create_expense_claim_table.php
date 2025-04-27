<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateExpenseClaimTable extends AbstractMigration
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
        $table = $this->table('expense_claim', ['id' => false, 'primary_key' => 'ec_id']);

        $table->addColumn('ec_id', 'integer', ['identity' => true, 'signed' => false]) // Auto-increment
            ->addColumn('ec_name', 'string', ['limit' => 255])
            ->addColumn('ec_description', 'text', ['null' => true])
            ->addColumn('ec_cost', 'decimal', [
                'precision' => 15,
                'scale' => 2,
                'null' => true
            ])
            ->addColumn('fk_approval_status', 'integer', ['null' => true, 'signed' => false])
            ->addColumn('ec_file_path', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('ec_created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP'
            ])
            ->addColumn('ec_updated_at', 'timestamp', [
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
