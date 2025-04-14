<?php

namespace App\Application\UseCases;

use App\Domain\Repositories\EmployeeRepositoryInterface;

class UpdateEmployee
{
    public function __construct(private EmployeeRepositoryInterface $employeeRepository)
    {
    }

    public function execute($id, array $data)
    {
        return $this->employeeRepository->update($id, $data);
    }
}