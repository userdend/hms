<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateBenefitsTypeTable extends AbstractMigration
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
        $table = $this->table('benefits_type', ['id' => false, 'primary_key' => 'bt_id']);

        $table->addColumn('bt_id', 'integer', ['signed' => false, 'identity' => true])
            ->addColumn('bt_name', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('bt_description', 'text', ['null' => true])
            ->addColumn('bt_max_amount', 'decimal', ['precision' => 10, 'scale' => 2, 'null' => true])
            ->addColumn('bt_recurring', 'boolean', ['default' => false])
            ->addColumn('bt_taxable', 'boolean', ['default' => false])
            ->addColumn('bt_created_at', 'datetime', ['null' => true])
            ->addColumn('bt_updated_at', 'datetime', ['null' => true])
            ->create();
    }
}
