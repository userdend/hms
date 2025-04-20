<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateBenefitsTable extends AbstractMigration
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
        $table = $this->table('benefits', ['id' => false, 'primary_key' => 'b_id']);

        $table->addColumn('b_id', 'integer', ['signed' => false, 'identity' => true])
            ->addColumn('fk_employee', 'integer', ['signed' => false, 'null' => true])
            ->addColumn('fk_benefit_type', 'integer', ['signed' => false, 'null' => true])
            ->addColumn('b_start_date', 'date', ['null' => true])
            ->addColumn('b_created_at', 'datetime', ['null' => true])
            ->addColumn('b_updated_at', 'datetime', ['null' => true])
            ->addForeignKey('fk_employee', 'employees', 'e_id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->addForeignKey('fk_benefit_type', 'benefits_type', 'bt_id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->create();
    }
}
