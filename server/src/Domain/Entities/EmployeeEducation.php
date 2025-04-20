<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class EmployeeEducation extends Model
{
    protected $table = 'employees_education';
    protected $fillable = ['ee_id', 'ee_school', 'ee_level', 'ee_course', 'ee_start_date', 'ee_end_date', 'fk_employee', 'ee_created_at', 'ee_updated_at'];
    public $timestamps = true;
}