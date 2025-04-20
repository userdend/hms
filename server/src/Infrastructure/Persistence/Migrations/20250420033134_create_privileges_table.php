<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreatePrivilegesTable extends AbstractMigration
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
        $table = $this->table('privileges', ['id' => false, 'primary_key' => 'p_id']);

        $table->addColumn('p_id', 'integer', ['signed' => false, 'identity' => true])
            ->addColumn('p_name', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('p_description', 'text', ['null' => true])
            ->addColumn('p_created_at', 'datetime', ['null' => true])
            ->addColumn('p_updated_at', 'datetime', ['null' => true])
            ->create();
    }
}
