<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateEmployeesBankTable extends AbstractMigration
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
        $table = $this->table('employees_bank', ['id' => false, 'primary_key' => 'eb_id']);

        $table->addColumn('eb_id', 'integer', ['signed' => false, 'identity' => true])
            ->addColumn('eb_name', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('eb_account_no', 'string', ['limit' => 50, 'null' => true])
            ->addColumn('eb_branch', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('fk_employee', 'integer', ['signed' => false, 'null' => true])
            ->addColumn('eb_created_at', 'datetime', ['null' => true])
            ->addColumn('eb_updated_at', 'datetime', ['null' => true])
            ->addForeignKey('fk_employee', 'employees', 'e_id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->create();
    }
}
