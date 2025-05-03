<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Domain\Entities\EmployeeEducation;
use App\Domain\Entities\EmployeeWorkExperience;
use App\Domain\Entities\EmployeeFamily;
use App\Domain\Entities\EmployeeEmergencyContact;
use App\Domain\Entities\EmployeeBank;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = "e_id";
    protected $fillable = ['e_id', 'e_first_name', 'e_last_name', 'e_email', 'e_phone', 'e_status', 'e_created_at'];
    public $timestamps = true;

    public function employeeEducation()
    {
        return $this->hasMany(EmployeeEducation::class, 'fk_employee');
    }

    public function employeeWorkExperience()
    {
        return $this->hasMany(EmployeeWorkExperience::class, 'fk_employee');
    }

    public function employeeFamily()
    {
        return $this->hasMany(EmployeeFamily::class, 'fk_employee');
    }

    public function employeeEmergencyContact()
    {
        return $this->hasMany(EmployeeEmergencyContact::class, 'fk_employee');
    }

    public function employeeBank()
    {
        return $this->hasOne(EmployeeBank::class, 'fk_employee');
    }
}