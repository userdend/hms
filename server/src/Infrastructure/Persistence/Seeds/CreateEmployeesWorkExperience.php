<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class CreateEmployeesWorkExperience extends AbstractSeed
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
            ['ewe_company' => 'Tech Solutions Inc.', 'ewe_designation' => 'Software Developer', 'ewe_start_date' => '2019-06-01', 'ewe_end_date' => '2021-06-01', 'ewe_resign_reason' => 'Career Growth', 'fk_employee' => 1],
            ['ewe_company' => 'Web Innovations', 'ewe_designation' => 'Frontend Developer', 'ewe_start_date' => '2018-09-01', 'ewe_end_date' => '2020-09-01', 'ewe_resign_reason' => 'Relocation', 'fk_employee' => 2],
            ['ewe_company' => 'Data Corp', 'ewe_designation' => 'Data Scientist', 'ewe_start_date' => '2020-01-01', 'ewe_end_date' => '2022-01-01', 'ewe_resign_reason' => 'Personal Reasons', 'fk_employee' => 3],
            ['ewe_company' => 'Global Solutions Ltd.', 'ewe_designation' => 'Project Manager', 'ewe_start_date' => '2017-03-01', 'ewe_end_date' => '2020-03-01', 'ewe_resign_reason' => 'Pursuing Further Education', 'fk_employee' => 4],
            ['ewe_company' => 'Creative Works', 'ewe_designation' => 'UX Designer', 'ewe_start_date' => '2018-06-01', 'ewe_end_date' => '2021-06-01', 'ewe_resign_reason' => 'Seeking New Opportunities', 'fk_employee' => 5],
            ['ewe_company' => 'Tech Innovators', 'ewe_designation' => 'Backend Developer', 'ewe_start_date' => '2016-05-01', 'ewe_end_date' => '2019-05-01', 'ewe_resign_reason' => 'Career Shift', 'fk_employee' => 6],
            ['ewe_company' => 'Design Co.', 'ewe_designation' => 'Product Designer', 'ewe_start_date' => '2017-07-01', 'ewe_end_date' => '2020-07-01', 'ewe_resign_reason' => 'Better Career Opportunities', 'fk_employee' => 7],
            ['ewe_company' => 'Development Hub', 'ewe_designation' => 'Full Stack Developer', 'ewe_start_date' => '2019-08-01', 'ewe_end_date' => '2022-08-01', 'ewe_resign_reason' => 'Project Completion', 'fk_employee' => 8],
            ['ewe_company' => 'BlueTech', 'ewe_designation' => 'Software Engineer', 'ewe_start_date' => '2015-11-01', 'ewe_end_date' => '2018-11-01', 'ewe_resign_reason' => 'Career Change', 'fk_employee' => 9],
            ['ewe_company' => 'Future Vision', 'ewe_designation' => 'AI Specialist', 'ewe_start_date' => '2020-02-01', 'ewe_end_date' => '2022-02-01', 'ewe_resign_reason' => 'Company Relocation', 'fk_employee' => 10],
            ['ewe_company' => 'GreenTech', 'ewe_designation' => 'Hardware Engineer', 'ewe_start_date' => '2016-12-01', 'ewe_end_date' => '2019-12-01', 'ewe_resign_reason' => 'Relocation', 'fk_employee' => 11],
            ['ewe_company' => 'Websy', 'ewe_designation' => 'Web Developer', 'ewe_start_date' => '2017-01-01', 'ewe_end_date' => '2020-01-01', 'ewe_resign_reason' => 'Higher Studies', 'fk_employee' => 12],
            ['ewe_company' => 'Innovative Solutions', 'ewe_designation' => 'DevOps Engineer', 'ewe_start_date' => '2018-02-01', 'ewe_end_date' => '2021-02-01', 'ewe_resign_reason' => 'Project Completion', 'fk_employee' => 13],
            ['ewe_company' => 'EcomTech', 'ewe_designation' => 'E-commerce Developer', 'ewe_start_date' => '2019-09-01', 'ewe_end_date' => '2022-09-01', 'ewe_resign_reason' => 'New Opportunities', 'fk_employee' => 14],
            ['ewe_company' => 'TechnoWorks', 'ewe_designation' => 'System Architect', 'ewe_start_date' => '2016-04-01', 'ewe_end_date' => '2019-04-01', 'ewe_resign_reason' => 'Career Growth', 'fk_employee' => 15],
            ['ewe_company' => 'FutureTech', 'ewe_designation' => 'Cloud Engineer', 'ewe_start_date' => '2017-08-01', 'ewe_end_date' => '2020-08-01', 'ewe_resign_reason' => 'Seeking New Challenges', 'fk_employee' => 16],
            ['ewe_company' => 'WebGen', 'ewe_designation' => 'QA Engineer', 'ewe_start_date' => '2018-10-01', 'ewe_end_date' => '2021-10-01', 'ewe_resign_reason' => 'Career Advancement', 'fk_employee' => 17],
            ['ewe_company' => 'Open Source Solutions', 'ewe_designation' => 'Frontend Developer', 'ewe_start_date' => '2019-05-01', 'ewe_end_date' => '2022-05-01', 'ewe_resign_reason' => 'New Career Path', 'fk_employee' => 18],
            ['ewe_company' => 'Bluewave', 'ewe_designation' => 'Data Analyst', 'ewe_start_date' => '2016-03-01', 'ewe_end_date' => '2019-03-01', 'ewe_resign_reason' => 'Pursuing Other Interests', 'fk_employee' => 19],
            ['ewe_company' => 'CodeWorks', 'ewe_designation' => 'Backend Developer', 'ewe_start_date' => '2020-01-01', 'ewe_end_date' => '2023-01-01', 'ewe_resign_reason' => 'New Job Offer', 'fk_employee' => 20],
            ['ewe_company' => 'TechBrains', 'ewe_designation' => 'AI Researcher', 'ewe_start_date' => '2017-11-01', 'ewe_end_date' => '2020-11-01', 'ewe_resign_reason' => 'New Career Directions', 'fk_employee' => 21],
            ['ewe_company' => 'Creative Minds', 'ewe_designation' => 'Graphic Designer', 'ewe_start_date' => '2016-06-01', 'ewe_end_date' => '2019-06-01', 'ewe_resign_reason' => 'Relocation', 'fk_employee' => 22],
            ['ewe_company' => 'CloudTech', 'ewe_designation' => 'Cloud Architect', 'ewe_start_date' => '2018-03-01', 'ewe_end_date' => '2021-03-01', 'ewe_resign_reason' => 'New Challenges', 'fk_employee' => 23],
            ['ewe_company' => 'Innovation Lab', 'ewe_designation' => 'IoT Developer', 'ewe_start_date' => '2019-07-01', 'ewe_end_date' => '2022-07-01', 'ewe_resign_reason' => 'Career Advancement', 'fk_employee' => 24],
            ['ewe_company' => 'TechWorld', 'ewe_designation' => 'Systems Analyst', 'ewe_start_date' => '2020-04-01', 'ewe_end_date' => '2023-04-01', 'ewe_resign_reason' => 'New Opportunities', 'fk_employee' => 25],
        ];

        $this->table('employees_work_experience')->insert($data)->save();
    }
}
