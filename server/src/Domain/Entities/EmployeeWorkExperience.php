<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class EmployeeWorkExperience extends Model
{
    protected $table = 'employees_work_experience';
    protected $fillable = ['ewe_id', 'ewe_company', 'ewe_designation', 'ewe_start_date', 'ewe_end_date', 'ewe_resign_reason', 'fk_employee', 'ewe_created_at', 'ewe_updated_at'];
    public $timestamps = true;
}