<?php

namespace App\Infrastructure\Persistence\Repositories;

use App\Domain\Entities\Employee;
use App\Domain\Repositories\EmployeeRepositoryInterface;

class EmployeeRepository implements EmployeeRepositoryInterface
{
    public function all()
    {
        return Employee::all();
    }

    public function find($id)
    {
        return Employee::find($id);
    }

    public function create(array $data)
    {
        return Employee::create($data);
    }

    public function update($id, array $data)
    {
        $employee = Employee::find($id);

        if ($employee) {
            $employee->update($data);
        }

        return $employee;
    }

    public function delete($id)
    {
        $employee = Employee::find($id);

        return $employee ? $employee->delete() : false;
    }
}