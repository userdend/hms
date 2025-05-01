<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class CreateEmployees extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
        $data = [
            ['e_first_name' => 'Alice', 'e_last_name' => 'Tan', 'e_email' => 'alice.tan@example.com', 'e_phone' => '012-3456789', 'e_status' => 'active'],
            ['e_first_name' => 'Bob', 'e_last_name' => 'Lim', 'e_email' => 'bob.lim@example.com', 'e_phone' => '013-2345678', 'e_status' => 'active'],
            ['e_first_name' => 'Carol', 'e_last_name' => 'Wong', 'e_email' => 'carol.wong@example.com', 'e_phone' => '014-1234567', 'e_status' => 'inactive'],
            ['e_first_name' => 'David', 'e_last_name' => 'Chong', 'e_email' => 'david.chong@example.com', 'e_phone' => '015-6543210', 'e_status' => 'active'],
            ['e_first_name' => 'Eva', 'e_last_name' => 'Lee', 'e_email' => 'eva.lee@example.com', 'e_phone' => '016-5678901', 'e_status' => 'inactive'],
            ['e_first_name' => 'Farid', 'e_last_name' => 'Ismail', 'e_email' => 'farid.ismail@example.com', 'e_phone' => '017-1122334', 'e_status' => 'active'],
            ['e_first_name' => 'Grace', 'e_last_name' => 'Ong', 'e_email' => 'grace.ong@example.com', 'e_phone' => '018-9988776', 'e_status' => 'active'],
            ['e_first_name' => 'Hafiz', 'e_last_name' => 'Kamal', 'e_email' => 'hafiz.kamal@example.com', 'e_phone' => '019-4433221', 'e_status' => 'inactive'],
            ['e_first_name' => 'Ivy', 'e_last_name' => 'Yap', 'e_email' => 'ivy.yap@example.com', 'e_phone' => '011-2233445', 'e_status' => 'active'],
            ['e_first_name' => 'Jason', 'e_last_name' => 'Tan', 'e_email' => 'jason.tan@example.com', 'e_phone' => '012-8899776', 'e_status' => 'active'],
            ['e_first_name' => 'Karen', 'e_last_name' => 'Ng', 'e_email' => 'karen.ng@example.com', 'e_phone' => '013-7766554', 'e_status' => 'inactive'],
            ['e_first_name' => 'Leo', 'e_last_name' => 'Goh', 'e_email' => 'leo.goh@example.com', 'e_phone' => '014-3344556', 'e_status' => 'active'],
            ['e_first_name' => 'Maya', 'e_last_name' => 'Abdul', 'e_email' => 'maya.abdul@example.com', 'e_phone' => '015-6677889', 'e_status' => 'active'],
            ['e_first_name' => 'Nina', 'e_last_name' => 'Soh', 'e_email' => 'nina.soh@example.com', 'e_phone' => '016-5566778', 'e_status' => 'inactive'],
            ['e_first_name' => 'Oscar', 'e_last_name' => 'Chin', 'e_email' => 'oscar.chin@example.com', 'e_phone' => '017-3322114', 'e_status' => 'active'],
            ['e_first_name' => 'Putri', 'e_last_name' => 'Aziz', 'e_email' => 'putri.aziz@example.com', 'e_phone' => '018-1231231', 'e_status' => 'active'],
            ['e_first_name' => 'Quentin', 'e_last_name' => 'Low', 'e_email' => 'quentin.low@example.com', 'e_phone' => '019-3213213', 'e_status' => 'inactive'],
            ['e_first_name' => 'Rina', 'e_last_name' => 'Teo', 'e_email' => 'rina.teo@example.com', 'e_phone' => '011-4433556', 'e_status' => 'active'],
            ['e_first_name' => 'Syafiq', 'e_last_name' => 'Razak', 'e_email' => 'syafiq.razak@example.com', 'e_phone' => '012-3344667', 'e_status' => 'active'],
            ['e_first_name' => 'Tina', 'e_last_name' => 'Khoo', 'e_email' => 'tina.khoo@example.com', 'e_phone' => '013-4455667', 'e_status' => 'inactive'],
            ['e_first_name' => 'Umar', 'e_last_name' => 'Bakar', 'e_email' => 'umar.bakar@example.com', 'e_phone' => '014-5566778', 'e_status' => 'active'],
            ['e_first_name' => 'Vicky', 'e_last_name' => 'Lim', 'e_email' => 'vicky.lim@example.com', 'e_phone' => '015-6677880', 'e_status' => 'inactive'],
            ['e_first_name' => 'Wendy', 'e_last_name' => 'Yong', 'e_email' => 'wendy.yong@example.com', 'e_phone' => '016-7788990', 'e_status' => 'active'],
            ['e_first_name' => 'Yusof', 'e_last_name' => 'Zainal', 'e_email' => 'yusof.zainal@example.com', 'e_phone' => '017-8899001', 'e_status' => 'active'],
            ['e_first_name' => 'Zara', 'e_last_name' => 'Hassan', 'e_email' => 'zara.hassan@example.com', 'e_phone' => '018-9900112', 'e_status' => 'inactive'],
        ];

        $this->table('employees')->insert($data)->save();
    }
}
