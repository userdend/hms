<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateEmployeesEmergencyContact extends AbstractMigration
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
        $table = $this->table('employees_emergency_contact', ['id' => false, 'primary_key' => 'eec_id']);

        $table->addColumn('eec_id', 'integer', ['identity' => true])
            ->addColumn('eec_name', 'string', ['limit' => 255])
            ->addColumn('eec_relationship', 'string', ['limit' => 100])
            ->addColumn('eec_address', 'text')
            ->addColumn('eec_phone', 'string', ['limit' => 20])
            ->addColumn('fk_employee', 'integer', ['signed' => false])
            ->addColumn('eec_created_at', 'datetime', ['null' => true])
            ->addColumn('eec_updated_at', 'datetime', ['null' => true])
            ->addForeignKey('fk_employee', 'employees', 'e_id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->create();
    }
}
