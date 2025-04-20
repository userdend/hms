<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateEmployeesWorkExperience extends AbstractMigration
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
        $table = $this->table('employees_work_experience', ['id' => false, 'primary_key' => 'ewe_id']);

        $table->addColumn('ewe_id', 'integer', ['signed' => false, 'identity' => true])
            ->addColumn('ewe_company', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('ewe_designation', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('ewe_start_date', 'date', ['null' => true])
            ->addColumn('ewe_end_date', 'date', ['null' => true])
            ->addColumn('ewe_resign_reason', 'text', ['null' => true])
            ->addColumn('fk_employee', 'integer', ['signed' => false])
            ->addColumn('ewe_created_at', 'datetime', ['null' => true])
            ->addColumn('ewe_updated_at', 'datetime', ['null' => true])
            ->addForeignKey('fk_employee', 'employees', 'e_id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->create();
    }
}
