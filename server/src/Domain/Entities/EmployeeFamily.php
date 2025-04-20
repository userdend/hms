<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class EmployeeFamily extends Model
{
    protected $table = 'employees_family';
    protected $fillable = ['ef_id', 'ef_name', 'ef_relationship', 'ef_employed', 'ef_birthday', 'ef_phone', 'ef_address', 'fk_employee', 'ef_created_at', 'ef_updated_at'];
    public $timestamps = true;
}