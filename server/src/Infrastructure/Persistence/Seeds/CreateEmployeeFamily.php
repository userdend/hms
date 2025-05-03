<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class CreateEmployeeFamily extends AbstractSeed
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
                'ef_name' => 'Adam Smith',
                'ef_relationship' => 'Father',
                'ef_employed' => true,
                'ef_birthday' => '1965-03-12',
                'ef_phone' => '0123456781',
                'ef_address' => '12 Oak St, City A',
                'fk_employee' => 1,
            ],
            [
                'ef_name' => 'Laura Smith',
                'ef_relationship' => 'Mother',
                'ef_employed' => false,
                'ef_birthday' => '1967-08-25',
                'ef_phone' => '0123456782',
                'ef_address' => '12 Oak St, City A',
                'fk_employee' => 2,
            ],
            [
                'ef_name' => 'Mike Johnson',
                'ef_relationship' => 'Brother',
                'ef_employed' => true,
                'ef_birthday' => '1990-06-14',
                'ef_phone' => '0123456783',
                'ef_address' => '34 Pine St, City B',
                'fk_employee' => 3,
            ],
            [
                'ef_name' => 'Sarah Johnson',
                'ef_relationship' => 'Sister',
                'ef_employed' => false,
                'ef_birthday' => '1993-11-04',
                'ef_phone' => '0123456784',
                'ef_address' => '34 Pine St, City B',
                'fk_employee' => 4,
            ],
            [
                'ef_name' => 'David Lee',
                'ef_relationship' => 'Father',
                'ef_employed' => false,
                'ef_birthday' => '1958-12-21',
                'ef_phone' => '0123456785',
                'ef_address' => '78 Elm St, City C',
                'fk_employee' => 5,
            ],
            [
                'ef_name' => 'Karen Lee',
                'ef_relationship' => 'Mother',
                'ef_employed' => true,
                'ef_birthday' => '1961-07-10',
                'ef_phone' => '0123456786',
                'ef_address' => '78 Elm St, City C',
                'fk_employee' => 6,
            ],
            [
                'ef_name' => 'Kevin Tan',
                'ef_relationship' => 'Spouse',
                'ef_employed' => true,
                'ef_birthday' => '1987-02-17',
                'ef_phone' => '0123456787',
                'ef_address' => '99 Maple St, City D',
                'fk_employee' => 7,
            ],
            [
                'ef_name' => 'Melissa Tan',
                'ef_relationship' => 'Spouse',
                'ef_employed' => false,
                'ef_birthday' => '1989-09-08',
                'ef_phone' => '0123456788',
                'ef_address' => '99 Maple St, City D',
                'fk_employee' => 8,
            ],
            [
                'ef_name' => 'John Lim',
                'ef_relationship' => 'Father',
                'ef_employed' => false,
                'ef_birthday' => '1955-05-05',
                'ef_phone' => '0123456789',
                'ef_address' => '120 Cedar St, City E',
                'fk_employee' => 9,
            ],
            [
                'ef_name' => 'Rachel Lim',
                'ef_relationship' => 'Mother',
                'ef_employed' => false,
                'ef_birthday' => '1959-10-30',
                'ef_phone' => '0123456790',
                'ef_address' => '120 Cedar St, City E',
                'fk_employee' => 10,
            ],
            [
                'ef_name' => 'Eric Wong',
                'ef_relationship' => 'Brother',
                'ef_employed' => true,
                'ef_birthday' => '1991-01-20',
                'ef_phone' => '0123456791',
                'ef_address' => '15 Spruce St, City F',
                'fk_employee' => 11,
            ],
            [
                'ef_name' => 'Amy Wong',
                'ef_relationship' => 'Sister',
                'ef_employed' => true,
                'ef_birthday' => '1995-05-15',
                'ef_phone' => '0123456792',
                'ef_address' => '15 Spruce St, City F',
                'fk_employee' => 12,
            ],
            [
                'ef_name' => 'George Tan',
                'ef_relationship' => 'Father',
                'ef_employed' => false,
                'ef_birthday' => '1952-03-03',
                'ef_phone' => '0123456793',
                'ef_address' => '45 Willow St, City G',
                'fk_employee' => 13,
            ],
            [
                'ef_name' => 'Helen Tan',
                'ef_relationship' => 'Mother',
                'ef_employed' => false,
                'ef_birthday' => '1956-12-19',
                'ef_phone' => '0123456794',
                'ef_address' => '45 Willow St, City G',
                'fk_employee' => 14,
            ],
            [
                'ef_name' => 'Alex Ng',
                'ef_relationship' => 'Brother',
                'ef_employed' => true,
                'ef_birthday' => '1988-06-06',
                'ef_phone' => '0123456795',
                'ef_address' => '77 Birch St, City H',
                'fk_employee' => 15,
            ],
            [
                'ef_name' => 'Lisa Ng',
                'ef_relationship' => 'Sister',
                'ef_employed' => false,
                'ef_birthday' => '1992-04-18',
                'ef_phone' => '0123456796',
                'ef_address' => '77 Birch St, City H',
                'fk_employee' => 16,
            ],
            [
                'ef_name' => 'Vincent Chua',
                'ef_relationship' => 'Father',
                'ef_employed' => true,
                'ef_birthday' => '1963-02-01',
                'ef_phone' => '0123456797',
                'ef_address' => '88 Chestnut St, City I',
                'fk_employee' => 17,
            ],
            [
                'ef_name' => 'Diana Chua',
                'ef_relationship' => 'Mother',
                'ef_employed' => false,
                'ef_birthday' => '1965-09-11',
                'ef_phone' => '0123456798',
                'ef_address' => '88 Chestnut St, City I',
                'fk_employee' => 18,
            ],
            [
                'ef_name' => 'Daniel Goh',
                'ef_relationship' => 'Spouse',
                'ef_employed' => true,
                'ef_birthday' => '1985-08-24',
                'ef_phone' => '0123456799',
                'ef_address' => '99 Cypress St, City J',
                'fk_employee' => 19,
            ],
            [
                'ef_name' => 'Fiona Goh',
                'ef_relationship' => 'Spouse',
                'ef_employed' => true,
                'ef_birthday' => '1986-03-13',
                'ef_phone' => '0123456700',
                'ef_address' => '99 Cypress St, City J',
                'fk_employee' => 20,
            ],
            [
                'ef_name' => 'Sam Yeo',
                'ef_relationship' => 'Father',
                'ef_employed' => false,
                'ef_birthday' => '1953-01-09',
                'ef_phone' => '0123456701',
                'ef_address' => '66 Redwood St, City K',
                'fk_employee' => 21,
            ],
            [
                'ef_name' => 'Jenny Yeo',
                'ef_relationship' => 'Mother',
                'ef_employed' => false,
                'ef_birthday' => '1957-11-29',
                'ef_phone' => '0123456702',
                'ef_address' => '66 Redwood St, City K',
                'fk_employee' => 22,
            ],
            [
                'ef_name' => 'Victor Teo',
                'ef_relationship' => 'Brother',
                'ef_employed' => true,
                'ef_birthday' => '1990-07-30',
                'ef_phone' => '0123456703',
                'ef_address' => '23 Aspen St, City L',
                'fk_employee' => 23,
            ],
            [
                'ef_name' => 'Natalie Teo',
                'ef_relationship' => 'Sister',
                'ef_employed' => false,
                'ef_birthday' => '1994-05-16',
                'ef_phone' => '0123456704',
                'ef_address' => '23 Aspen St, City L',
                'fk_employee' => 24,
            ],
            [
                'ef_name' => 'Henry Goh',
                'ef_relationship' => 'Father',
                'ef_employed' => true,
                'ef_birthday' => '1950-10-01',
                'ef_phone' => '0123456705',
                'ef_address' => '50 Sycamore St, City M',
                'fk_employee' => 25,
            ],
        ];

        $this->table('employees_family')->insert($data)->save();
    }
}
