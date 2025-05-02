<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Domain\Entities\EmployeeEducation;
use App\Domain\Entities\EmployeeWorkExperience;

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
}