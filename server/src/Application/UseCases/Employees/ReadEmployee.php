<?php

namespace App\Application\UseCases\Employees;

use App\Domain\Repositories\EmployeeRepositoryInterface;

class ReadEmployee
{
    public function __construct(private EmployeeRepositoryInterface $employeeRepository)
    {
    }

    public function execute($id)
    {
        return $this->employeeRepository->find($id);
    }
}