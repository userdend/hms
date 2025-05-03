<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class CreateBenefitType extends AbstractSeed
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
            [
                'bt_name' => 'Medical Allowance',
                'bt_description' => 'Covers outpatient and hospitalization medical expenses.',
                'bt_max_amount' => 5000,
                'bt_recurring' => true,
                'bt_taxable' => false,
            ],
            [
                'bt_name' => 'Transport Allowance',
                'bt_description' => 'Monthly allowance for commuting to work.',
                'bt_max_amount' => 300,
                'bt_recurring' => true,
                'bt_taxable' => true,
            ],
            [
                'bt_name' => 'Meal Voucher',
                'bt_description' => 'Lunch vouchers provided daily.',
                'bt_max_amount' => 200,
                'bt_recurring' => true,
                'bt_taxable' => false,
            ],
            [
                'bt_name' => 'Annual Bonus',
                'bt_description' => 'Bonus given at the end of the year based on performance.',
                'bt_max_amount' => 10000,
                'bt_recurring' => false,
                'bt_taxable' => true,
            ],
            [
                'bt_name' => 'Education Grant',
                'bt_description' => 'Covers training or course fees for professional development.',
                'bt_max_amount' => 2000,
                'bt_recurring' => false,
                'bt_taxable' => false,
            ],
            [
                'bt_name' => 'Housing Allowance',
                'bt_description' => 'Support for rental or mortgage costs.',
                'bt_max_amount' => 1500,
                'bt_recurring' => true,
                'bt_taxable' => true,
            ],
            [
                'bt_name' => 'Childcare Support',
                'bt_description' => 'Reimbursement for daycare or babysitting services.',
                'bt_max_amount' => 800,
                'bt_recurring' => true,
                'bt_taxable' => false,
            ],
            [
                'bt_name' => 'Fitness Subsidy',
                'bt_description' => 'Covers gym memberships or fitness programs.',
                'bt_max_amount' => 500,
                'bt_recurring' => false,
                'bt_taxable' => false,
            ],
            [
                'bt_name' => 'Internet Reimbursement',
                'bt_description' => 'Covers internet expenses for remote work.',
                'bt_max_amount' => 100,
                'bt_recurring' => true,
                'bt_taxable' => true,
            ],
            [
                'bt_name' => 'Relocation Package',
                'bt_description' => 'One-time benefit to support moving costs for new hires.',
                'bt_max_amount' => 7000,
                'bt_recurring' => false,
                'bt_taxable' => true,
            ],
        ];

        $this->table('benefits_type')->insert($data)->save();
    }
}
