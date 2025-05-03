<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class CreateEmployeeEmergencyContact extends AbstractSeed
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
            ['eec_name' => 'Sarah Lim', 'eec_relationship' => 'Mother', 'eec_address' => '123 Jalan Bunga Raya, Kuala Lumpur', 'eec_phone' => '012-3456789', 'fk_employee' => 1],
            ['eec_name' => 'Jason Tan', 'eec_relationship' => 'Father', 'eec_address' => '45 Jalan Bukit, Petaling Jaya', 'eec_phone' => '011-1122334', 'fk_employee' => 2],
            ['eec_name' => 'Linda Wong', 'eec_relationship' => 'Sister', 'eec_address' => '10A Jalan SS2, Selangor', 'eec_phone' => '016-9988776', 'fk_employee' => 3],
            ['eec_name' => 'Amirul Hassan', 'eec_relationship' => 'Brother', 'eec_address' => '32 Jalan Dato Onn, Johor Bahru', 'eec_phone' => '018-2345678', 'fk_employee' => 4],
            ['eec_name' => 'Mei Lin', 'eec_relationship' => 'Wife', 'eec_address' => '88 Jalan Ampang, Kuala Lumpur', 'eec_phone' => '017-7766554', 'fk_employee' => 5],
            ['eec_name' => 'Faizal Rahman', 'eec_relationship' => 'Husband', 'eec_address' => '77 Jalan Telawi, Bangsar', 'eec_phone' => '014-3322110', 'fk_employee' => 6],
            ['eec_name' => 'Nur Aina', 'eec_relationship' => 'Mother', 'eec_address' => '5 Jalan Mutiara, Shah Alam', 'eec_phone' => '012-1122334', 'fk_employee' => 7],
            ['eec_name' => 'Daniel Lee', 'eec_relationship' => 'Father', 'eec_address' => '50 Jalan Universiti, Petaling Jaya', 'eec_phone' => '010-3344556', 'fk_employee' => 8],
            ['eec_name' => 'Sophia Chan', 'eec_relationship' => 'Sister', 'eec_address' => '12 Jalan Taman, Klang', 'eec_phone' => '019-2233445', 'fk_employee' => 9],
            ['eec_name' => 'Aaron Ng', 'eec_relationship' => 'Brother', 'eec_address' => '34 Jalan Merdeka, Ipoh', 'eec_phone' => '018-7654321', 'fk_employee' => 10],
            ['eec_name' => 'Zarina Ahmad', 'eec_relationship' => 'Aunt', 'eec_address' => '23 Jalan Kenari, Subang Jaya', 'eec_phone' => '013-5566778', 'fk_employee' => 11],
            ['eec_name' => 'James Wong', 'eec_relationship' => 'Uncle', 'eec_address' => '99 Jalan Kuchai Lama, Kuala Lumpur', 'eec_phone' => '012-8899001', 'fk_employee' => 12],
            ['eec_name' => 'Farah Liyana', 'eec_relationship' => 'Cousin', 'eec_address' => '101 Jalan Teratai, Penang', 'eec_phone' => '019-1011121', 'fk_employee' => 13],
            ['eec_name' => 'Kelvin Goh', 'eec_relationship' => 'Brother', 'eec_address' => '56 Jalan Loke Yew, Cheras', 'eec_phone' => '011-5566771', 'fk_employee' => 14],
            ['eec_name' => 'Amelia Tan', 'eec_relationship' => 'Sister', 'eec_address' => '60 Jalan SS15, Subang Jaya', 'eec_phone' => '010-9911882', 'fk_employee' => 15],
            ['eec_name' => 'Zulkifli Musa', 'eec_relationship' => 'Father', 'eec_address' => '35 Jalan Reko, Kajang', 'eec_phone' => '014-9988776', 'fk_employee' => 16],
            ['eec_name' => 'Aida Natasya', 'eec_relationship' => 'Mother', 'eec_address' => '3 Jalan Pegaga, Bangi', 'eec_phone' => '017-3344221', 'fk_employee' => 17],
            ['eec_name' => 'Chen Wei', 'eec_relationship' => 'Uncle', 'eec_address' => '21 Jalan Ipoh, Kuala Lumpur', 'eec_phone' => '016-8899776', 'fk_employee' => 18],
            ['eec_name' => 'Siti Khadijah', 'eec_relationship' => 'Aunt', 'eec_address' => '11 Jalan Impian, Putrajaya', 'eec_phone' => '018-7766553', 'fk_employee' => 19],
            ['eec_name' => 'Leonard Tan', 'eec_relationship' => 'Father', 'eec_address' => '72 Jalan Tunku Abdul Rahman, Alor Setar', 'eec_phone' => '012-9988002', 'fk_employee' => 20],
            ['eec_name' => 'Nurul Huda', 'eec_relationship' => 'Mother', 'eec_address' => '85 Jalan Duta, Kuala Lumpur', 'eec_phone' => '019-6677885', 'fk_employee' => 21],
            ['eec_name' => 'Raj Kumar', 'eec_relationship' => 'Brother', 'eec_address' => '90 Jalan Sultan Azlan Shah, Taiping', 'eec_phone' => '010-2244668', 'fk_employee' => 22],
            ['eec_name' => 'Lim Siew Ling', 'eec_relationship' => 'Sister', 'eec_address' => '15 Jalan Teknologi, Cyberjaya', 'eec_phone' => '013-3366990', 'fk_employee' => 23],
            ['eec_name' => 'Mohd Rizal', 'eec_relationship' => 'Cousin', 'eec_address' => '44 Jalan Kolam Ayer, Seremban', 'eec_phone' => '011-7744332', 'fk_employee' => 24],
            ['eec_name' => 'Amani Bakar', 'eec_relationship' => 'Wife', 'eec_address' => '26 Jalan Bahagia, Johor Bahru', 'eec_phone' => '018-2255880', 'fk_employee' => 25],
        ];

        $this->table('employees_emergency_contact')->insert($data)->save();
    }
}
