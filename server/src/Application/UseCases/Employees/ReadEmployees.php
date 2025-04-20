<?php

namespace App\Application\UseCases\Employees;

use App\Domain\Repositories\EmployeeRepositoryInterface;

class ReadEmployees
{
    public function __construct(private EmployeeRepositoryInterface $employeeRepository)
    {
    }

    public function execute()
    {
        return $this->employeeRepository->all();
    }
}