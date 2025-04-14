<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Employees extends AbstractMigration
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
        $table = $this->table('employees');
        $table
            ->addColumn('first_name', 'string', ['limit' => 100])
            ->addColumn('last_name', 'string', ['limit' => 100])
            ->addColumn('email', 'string', ['limit' => 150])
            ->addColumn('phone', 'string', ['limit' => 20])
            ->addColumn('status', 'enum', ['values' => ['enable', 'disabled']])
            ->addColumn('created_at', 'date')
            ->create();
    }
}
