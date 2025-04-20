<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTaxesTypeTable extends AbstractMigration
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
        $table = $this->table('taxes_type', ['id' => false, 'primary_key' => 'tt_id']);

        $table->addColumn('tt_id', 'integer', ['signed' => false, 'identity' => true])
            ->addColumn('tt_name', 'string', ['limit' => 255, 'null' => false])
            ->addColumn('tt_description', 'text', ['null' => true])
            ->addColumn('tt_default_rate', 'decimal', ['precision' => 5, 'scale' => 2, 'null' => true])
            ->addColumn('tt_created_at', 'datetime', ['null' => true])
            ->addColumn('tt_updated_at', 'datetime', ['null' => true])
            ->create();
    }
}
