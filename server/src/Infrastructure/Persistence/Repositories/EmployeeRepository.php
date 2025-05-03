<?php

namespace App\Infrastructure\Persistence\Repositories;

use App\Domain\Entities\Employee;
use App\Domain\Repositories\EmployeeRepositoryInterface;

class EmployeeRepository implements EmployeeRepositoryInterface
{
    public function all()
    {
        return Employee::where('e_status', 'active')->take(10)->get();
    }

    public function find($id)
    {
        return Employee::with(['employeeEducation', 'employeeWorkExperience', 'employeeFamily', 'employeeEmergencyContact', 'employeeBank'])->find($id);
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