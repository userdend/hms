<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AlterSalariesTable extends AbstractMigration
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
        $table = $this->table('salaries');

        $table
            ->addColumn('fk_employee', 'integer', ['signed' => false, 'null' => true])
            ->addForeignKey('fk_employee', 'employees', 'e_id', ['delete' => 'CASCADE', 'update' => 'NO ACTION'])
            ->update();
    }
}
