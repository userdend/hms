<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class EmployeeResignation extends Model
{
    protected $table = 'employees_resignation';
    protected $fillable = ['er_id', 'er_notice_date', 'er_last_working_day', 'er_reason', 'fk_employee', 'er_created_at', 'er_updated_at'];
    public $timestamps = true;
}