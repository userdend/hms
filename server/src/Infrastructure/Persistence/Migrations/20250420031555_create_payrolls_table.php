<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreatePayrollsTable extends AbstractMigration
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
        $table = $this->table('payrolls', ['id' => false, 'primary_key' => 'p_id']);

        $table->addColumn('p_id', 'integer', ['signed' => false, 'identity' => true])
            ->addColumn('fk_employee', 'integer', ['signed' => false])
            ->addColumn('p_pay_period_start', 'date', ['null' => false])
            ->addColumn('p_pay_period_end', 'date', ['null' => false])
            ->addColumn('p_total_pay', 'decimal', ['precision' => 15, 'scale' => 2, 'null' => false])
            ->addColumn('p_net_pay', 'decimal', ['precision' => 15, 'scale' => 2, 'null' => false])
            ->addColumn('p_created_at', 'datetime', ['null' => true])
            ->addColumn('p_updated_at', 'datetime', ['null' => true])
            ->addForeignKey('fk_employee', 'employees', 'e_id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->create();
    }
}
