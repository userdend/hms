<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateEmployeesFamily extends AbstractMigration
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
        $table = $this->table('employees_family', ['id' => false, 'primary_key' => 'ef_id']);

        $table->addColumn('ef_id', 'integer', ['identity' => true])
            ->addColumn('ef_name', 'string', ['limit' => 255])
            ->addColumn('ef_relationship', 'string', ['limit' => 100])
            ->addColumn('ef_employed', 'boolean')
            ->addColumn('ef_birthday', 'date', ['null' => true])
            ->addColumn('ef_phone', 'string', ['limit' => 20])
            ->addColumn('ef_address', 'text')
            ->addColumn('fk_employee', 'integer', ['signed' => false])
            ->addColumn('ef_created_at', 'datetime', ['null' => true])
            ->addColumn('ef_updated_at', 'datetime', ['null' => true])
            ->addForeignKey('fk_employee', 'employees', 'e_id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->create();
    }
}
