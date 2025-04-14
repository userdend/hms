<?php

namespace App\Application\UseCases;

use App\Domain\Repositories\EmployeeRepositoryInterface;

class DeleteEmployee
{
    public function __construct(private EmployeeRepositoryInterface $employeeRepository)
    {
    }

    public function execute($id)
    {
        return $this->employeeRepository->delete($id);
    }
}