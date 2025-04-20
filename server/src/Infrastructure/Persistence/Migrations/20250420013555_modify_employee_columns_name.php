<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Phinx\Migration\AbstractMigration;
use Illuminate\Support\Facades\Schema;

final class ModifyEmployeeColumnsName extends AbstractMigration
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
    public function up()
    {
        // Rename columns with their exact data types
        $this->execute("ALTER TABLE employees CHANGE id e_id INT UNSIGNED NOT NULL AUTO_INCREMENT;");
        $this->execute("ALTER TABLE employees CHANGE first_name e_first_name VARCHAR(100) DEFAULT NULL;");
        $this->execute("ALTER TABLE employees CHANGE last_name e_last_name VARCHAR(100) DEFAULT NULL;");
        $this->execute("ALTER TABLE employees CHANGE email e_email VARCHAR(150) DEFAULT NULL;");
        $this->execute("ALTER TABLE employees CHANGE phone e_phone VARCHAR(20) DEFAULT NULL;");
        $this->execute("ALTER TABLE employees CHANGE status e_status ENUM('enable', 'disabled') DEFAULT NULL;");
        $this->execute("ALTER TABLE employees CHANGE created_at e_created_at DATE DEFAULT NULL;");
    }

    public function down()
    {
        // Rollback: Rename columns back to their original names
        $this->execute("ALTER TABLE employees CHANGE e_id id INT UNSIGNED NOT NULL AUTO_INCREMENT;");
        $this->execute("ALTER TABLE employees CHANGE e_first_name first_name VARCHAR(100) DEFAULT NULL;");
        $this->execute("ALTER TABLE employees CHANGE e_last_name last_name VARCHAR(100) DEFAULT NULL;");
        $this->execute("ALTER TABLE employees CHANGE e_email email VARCHAR(150) DEFAULT NULL;");
        $this->execute("ALTER TABLE employees CHANGE e_phone phone VARCHAR(20) DEFAULT NULL;");
        $this->execute("ALTER TABLE employees CHANGE e_status status ENUM('enable', 'disabled') DEFAULT NULL;");
        $this->execute("ALTER TABLE employees CHANGE e_created_at created_at DATE DEFAULT NULL;");
    }
}
