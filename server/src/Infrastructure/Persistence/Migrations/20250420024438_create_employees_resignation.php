<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateEmployeesResignation extends AbstractMigration
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
        $table = $this->table('employees_resignation', ['id' => false, 'primary_key' => 'er_id']);

        $table->addColumn('er_id', 'integer', ['signed' => false, 'identity' => true])
            ->addColumn('er_notice_date', 'date', ['null' => true])
            ->addColumn('er_last_working_day', 'date', ['null' => true])
            ->addColumn('er_reason', 'text', ['null' => true])
            ->addColumn('fk_employee', 'integer', ['signed' => false, 'null' => true])
            ->addColumn('er_created_at', 'datetime', ['null' => true])
            ->addColumn('er_updated_at', 'datetime', ['null' => true])
            ->addForeignKey('fk_employee', 'employees', 'e_id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->create();
    }
}
