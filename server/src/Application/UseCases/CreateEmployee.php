<?php

namespace App\Application\UseCases;

use App\Domain\Repositories\EmployeeRepositoryInterface;

class CreateEmployee
{
    public function __construct(private EmployeeRepositoryInterface $employeeRepository)
    {
    }

    public function execute(array $data)
    {
        return $this->employeeRepository->create($data);
    }
}