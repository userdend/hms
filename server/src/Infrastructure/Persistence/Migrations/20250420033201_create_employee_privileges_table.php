<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateEmployeePrivilegesTable extends AbstractMigration
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
        $table = $this->table('employee_privileges', ['id' => false, 'primary_key' => 'ep_id']);

        $table->addColumn('ep_id', 'integer', ['signed' => false, 'identity' => true])
            ->addColumn('fk_employee', 'integer', ['signed' => false])
            ->addColumn('fk_privilege', 'integer', ['signed' => false])
            ->addColumn('ep_created_at', 'datetime', ['null' => true])
            ->addColumn('ep_updated_at', 'datetime', ['null' => true])
            ->addForeignKey('fk_employee', 'employees', 'e_id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->addForeignKey('fk_privilege', 'privileges', 'p_id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->create();
    }
}
