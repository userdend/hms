<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class CreateEmployeeBank extends AbstractSeed
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
            ['eb_name' => 'Maybank', 'eb_account_no' => '114031245678', 'eb_branch' => 'KLCC', 'fk_employee' => 1],
            ['eb_name' => 'CIMB', 'eb_account_no' => '8601234567', 'eb_branch' => 'Mid Valley', 'fk_employee' => 2],
            ['eb_name' => 'Public Bank', 'eb_account_no' => '3065012345', 'eb_branch' => 'Subang Jaya', 'fk_employee' => 3],
            ['eb_name' => 'RHB', 'eb_account_no' => '21233456789', 'eb_branch' => 'Bangsar', 'fk_employee' => 4],
            ['eb_name' => 'Hong Leong Bank', 'eb_account_no' => '1357924680', 'eb_branch' => 'Cheras', 'fk_employee' => 5],
            ['eb_name' => 'Bank Islam', 'eb_account_no' => '111122223333', 'eb_branch' => 'Gombak', 'fk_employee' => 6],
            ['eb_name' => 'Affin Bank', 'eb_account_no' => '9988776655', 'eb_branch' => 'Wangsa Maju', 'fk_employee' => 7],
            ['eb_name' => 'Ambank', 'eb_account_no' => '1122334455', 'eb_branch' => 'Petaling Jaya', 'fk_employee' => 8],
            ['eb_name' => 'HSBC', 'eb_account_no' => '123456789012', 'eb_branch' => 'Damansara', 'fk_employee' => 9],
            ['eb_name' => 'Maybank', 'eb_account_no' => '114033224455', 'eb_branch' => 'Shah Alam', 'fk_employee' => 10],
            ['eb_name' => 'CIMB', 'eb_account_no' => '8601456321', 'eb_branch' => 'Seremban', 'fk_employee' => 11],
            ['eb_name' => 'Public Bank', 'eb_account_no' => '3065098765', 'eb_branch' => 'Kepong', 'fk_employee' => 12],
            ['eb_name' => 'RHB', 'eb_account_no' => '21239876543', 'eb_branch' => 'Kajang', 'fk_employee' => 13],
            ['eb_name' => 'Hong Leong Bank', 'eb_account_no' => '1357448899', 'eb_branch' => 'Melaka', 'fk_employee' => 14],
            ['eb_name' => 'Bank Islam', 'eb_account_no' => '101010101010', 'eb_branch' => 'Putrajaya', 'fk_employee' => 15],
            ['eb_name' => 'Affin Bank', 'eb_account_no' => '9090909090', 'eb_branch' => 'Cyberjaya', 'fk_employee' => 16],
            ['eb_name' => 'Ambank', 'eb_account_no' => '5566778899', 'eb_branch' => 'Alor Setar', 'fk_employee' => 17],
            ['eb_name' => 'HSBC', 'eb_account_no' => '445566778899', 'eb_branch' => 'Sungai Petani', 'fk_employee' => 18],
            ['eb_name' => 'Maybank', 'eb_account_no' => '112200334455', 'eb_branch' => 'Klang', 'fk_employee' => 19],
            ['eb_name' => 'CIMB', 'eb_account_no' => '8601765432', 'eb_branch' => 'Ipoh', 'fk_employee' => 20],
            ['eb_name' => 'Public Bank', 'eb_account_no' => '3065443322', 'eb_branch' => 'Penang', 'fk_employee' => 21],
            ['eb_name' => 'RHB', 'eb_account_no' => '2123123123', 'eb_branch' => 'Manjung', 'fk_employee' => 22],
            ['eb_name' => 'Hong Leong Bank', 'eb_account_no' => '1357666555', 'eb_branch' => 'Kuala Terengganu', 'fk_employee' => 23],
            ['eb_name' => 'Bank Islam', 'eb_account_no' => '112233445566', 'eb_branch' => 'Kuantan', 'fk_employee' => 24],
            ['eb_name' => 'Affin Bank', 'eb_account_no' => '9988001122', 'eb_branch' => 'Kota Bharu', 'fk_employee' => 25],
        ];

        $this->table('employees_bank')->insert($data)->save();
    }
}
