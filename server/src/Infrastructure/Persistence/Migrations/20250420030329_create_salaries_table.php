<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSalariesTable extends AbstractMigration
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
        $table = $this->table('salaries', ['id' => false, 'primary_key' => 's_id']);

        $table->addColumn('s_id', 'integer', ['signed' => false, 'identity' => true])
            ->addColumn('s_base_salary', 'decimal', ['precision' => 15, 'scale' => 2, 'null' => true])
            ->addColumn('s_bonus', 'decimal', ['precision' => 15, 'scale' => 2, 'null' => true])
            ->addColumn('s_effective_date', 'date', ['null' => false])
            ->addColumn('s_created_at', 'datetime', ['null' => true])
            ->addColumn('s_updated_at', 'datetime', ['null' => true])
            ->create();
    }
}
