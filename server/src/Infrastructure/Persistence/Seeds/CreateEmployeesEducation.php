<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class CreateEmployeesEducation extends AbstractSeed
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
                'ee_school' => 'University of Selangor',
                'ee_level' => "Bachelor's",
                'ee_course' => 'Computer Science',
                'ee_start_date' => '2015-01-01',
                'ee_end_date' => '2019-12-31',
                'fk_employee' => 1,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [
                'ee_school' => 'UTM',
                'ee_level' => "Master's",
                'ee_course' => 'Software Engineering',
                'ee_start_date' => '2016-01-01',
                'ee_end_date' => '2018-12-31',
                'fk_employee' => 2,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [
                'ee_school' => 'UKM',
                'ee_level' => "Diploma",
                'ee_course' => 'Information Technology',
                'ee_start_date' => '2012-06-01',
                'ee_end_date' => '2015-05-30',
                'fk_employee' => 3,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [
                'ee_school' => 'UM',
                'ee_level' => "Bachelor's",
                'ee_course' => 'Mechanical Engineering',
                'ee_start_date' => '2010-09-01',
                'ee_end_date' => '2014-08-31',
                'fk_employee' => 4,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [
                'ee_school' => "Taylor's University",
                'ee_level' => "Bachelor's",
                'ee_course' => 'Mass Communication',
                'ee_start_date' => '2017-01-01',
                'ee_end_date' => '2021-12-31',
                'fk_employee' => 5,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [
                'ee_school' => 'Sunway University',
                'ee_level' => "Diploma",
                'ee_course' => 'Business Studies',
                'ee_start_date' => '2013-01-01',
                'ee_end_date' => '2015-12-31',
                'fk_employee' => 6,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [
                'ee_school' => 'INTI International University',
                'ee_level' => "Master's",
                'ee_course' => 'Data Science',
                'ee_start_date' => '2018-01-01',
                'ee_end_date' => '2020-12-31',
                'fk_employee' => 7,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [
                'ee_school' => 'SEGi University',
                'ee_level' => "Bachelor's",
                'ee_course' => 'Finance',
                'ee_start_date' => '2011-03-01',
                'ee_end_date' => '2014-12-31',
                'fk_employee' => 8,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [
                'ee_school' => 'HELP University',
                'ee_level' => "Diploma",
                'ee_course' => 'Psychology',
                'ee_start_date' => '2010-06-01',
                'ee_end_date' => '2012-06-01',
                'fk_employee' => 9,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [

                'ee_school' => 'Monash Malaysia',
                'ee_level' => "PhD",
                'ee_course' => 'Artificial Intelligence',
                'ee_start_date' => '2015-01-01',
                'ee_end_date' => '2020-12-31',
                'fk_employee' => 10,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [

                'ee_school' => 'AIMST University',
                'ee_level' => "Bachelor's",
                'ee_course' => 'Biomedical Science',
                'ee_start_date' => '2014-01-01',
                'ee_end_date' => '2018-12-31',
                'fk_employee' => 11,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [

                'ee_school' => 'UNIMAS',
                'ee_level' => "Bachelor's",
                'ee_course' => 'Architecture',
                'ee_start_date' => '2013-02-01',
                'ee_end_date' => '2017-01-31',
                'fk_employee' => 12,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [

                'ee_school' => 'UNITEN',
                'ee_level' => "Master's",
                'ee_course' => 'Electrical Engineering',
                'ee_start_date' => '2016-01-01',
                'ee_end_date' => '2018-12-31',
                'fk_employee' => 13,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [

                'ee_school' => 'UUM',
                'ee_level' => "Diploma",
                'ee_course' => 'Human Resources',
                'ee_start_date' => '2009-01-01',
                'ee_end_date' => '2011-12-31',
                'fk_employee' => 14,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [

                'ee_school' => 'MMU',
                'ee_level' => "Bachelor's",
                'ee_course' => 'Multimedia',
                'ee_start_date' => '2012-03-01',
                'ee_end_date' => '2016-02-28',
                'fk_employee' => 15,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [

                'ee_school' => 'KDU University College',
                'ee_level' => "Bachelor's",
                'ee_course' => 'Culinary Arts',
                'ee_start_date' => '2014-01-01',
                'ee_end_date' => '2018-12-31',
                'fk_employee' => 16,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [

                'ee_school' => 'Limkokwing University',
                'ee_level' => "Diploma",
                'ee_course' => 'Creative Media',
                'ee_start_date' => '2011-01-01',
                'ee_end_date' => '2013-12-31',
                'fk_employee' => 17,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [

                'ee_school' => 'MAHSA University',
                'ee_level' => "Bachelor's",
                'ee_course' => 'Nursing',
                'ee_start_date' => '2013-01-01',
                'ee_end_date' => '2017-12-31',
                'fk_employee' => 18,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [

                'ee_school' => 'Open University Malaysia',
                'ee_level' => "Bachelor's",
                'ee_course' => 'Education',
                'ee_start_date' => '2010-01-01',
                'ee_end_date' => '2014-12-31',
                'fk_employee' => 19,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [

                'ee_school' => 'Wawasan Open University',
                'ee_level' => "Master's",
                'ee_course' => 'Public Administration',
                'ee_start_date' => '2011-01-01',
                'ee_end_date' => '2013-12-31',
                'fk_employee' => 20,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [

                'ee_school' => 'Lincoln University College',
                'ee_level' => "Bachelor's",
                'ee_course' => 'Accounting',
                'ee_start_date' => '2012-01-01',
                'ee_end_date' => '2016-12-31',
                'fk_employee' => 21,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [

                'ee_school' => 'Binary University',
                'ee_level' => "Diploma",
                'ee_course' => 'Marketing',
                'ee_start_date' => '2010-01-01',
                'ee_end_date' => '2012-12-31',
                'fk_employee' => 22,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [

                'ee_school' => 'Asia Pacific University',
                'ee_level' => "Bachelor's",
                'ee_course' => 'Cybersecurity',
                'ee_start_date' => '2016-01-01',
                'ee_end_date' => '2020-12-31',
                'fk_employee' => 23,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [

                'ee_school' => 'Infrastructure University KL',
                'ee_level' => "Bachelor's",
                'ee_course' => 'Civil Engineering',
                'ee_start_date' => '2013-01-01',
                'ee_end_date' => '2017-12-31',
                'fk_employee' => 24,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
            [

                'ee_school' => 'Universiti Tun Abdul Razak',
                'ee_level' => "Master's",
                'ee_course' => 'Business Admin',
                'ee_start_date' => '2017-01-01',
                'ee_end_date' => '2019-12-31',
                'fk_employee' => 25,
                'ee_created_at' => '2025-05-02 12:00:00',
                'ee_updated_at' => '2025-05-02 12:00:00',
            ],
        ];

        $this->table('employees_education')->insert($data)->save();
    }
}
