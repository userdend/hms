<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateEmployeesEducationTable extends AbstractMigration
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
        $table = $this->table('employees_education', ['id' => false, 'primary_key' => 'ee_id']);

        $table->addColumn('ee_id', 'integer', ['signed' => false, 'identity' => true])
            ->addColumn('ee_school', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('ee_level', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('ee_course', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('ee_start_date', 'date', ['null' => true])
            ->addColumn('ee_end_date', 'date', ['null' => true])
            ->addColumn('fk_employee', 'integer', ['signed' => false])
            ->addColumn('ee_created_at', 'datetime', ['null' => true])
            ->addColumn('ee_updated_at', 'datetime', ['null' => true])
            ->addForeignKey('fk_employee', 'employees', 'e_id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->create();
    }
}
