<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSalaryChangesTable extends AbstractMigration
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
        $table = $this->table('salary_changes', ['id' => false, 'primary_key' => 'sc_id']);

        $table->addColumn('sc_id', 'integer', ['identity' => true, 'signed' => false]) // Auto-increment
            ->addColumn('fk_employee', 'integer', ['null' => true, 'signed' => false])
            ->addColumn('sc_current_salary', 'decimal', [
                'precision' => 15,
                'scale' => 2,
                'null' => true
            ])
            ->addColumn('sc_new_salary', 'decimal', [
                'precision' => 15,
                'scale' => 2,
                'null' => true
            ])
            ->addColumn('sc_status', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('fk_approval', 'integer', ['null' => true, 'signed' => false])
            ->addColumn('sc_created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP'
            ])
            ->addColumn('sc_updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'update' => 'CURRENT_TIMESTAMP'
            ])
            ->addForeignKey('fk_employee', 'employees', 'e_id', [
                'delete' => 'SET NULL',
                'update' => 'CASCADE'
            ])
            ->addForeignKey('fk_approval', 'request_approvals', 'ra_id', [
                'delete' => 'SET NULL',
                'update' => 'CASCADE'
            ])
            ->create();
    }
}
