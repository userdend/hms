<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreatePrivilegePermissionsTable extends AbstractMigration
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
        $table = $this->table('privilege_permissions', ['id' => false, 'primary_key' => 'pp_id']);

        $table->addColumn('pp_id', 'integer', ['signed' => false, 'identity' => true])
            ->addColumn('fk_employee_privilege', 'integer', ['signed' => false])
            ->addColumn('fk_permission', 'integer', ['signed' => false])
            ->addColumn('pp_created_at', 'datetime', ['null' => true])
            ->addColumn('pp_updated_at', 'datetime', ['null' => true])
            ->addForeignKey('fk_employee_privilege', 'employee_privileges', 'ep_id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->addForeignKey('fk_permission', 'permissions', 'p_id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->create();
    }
}
