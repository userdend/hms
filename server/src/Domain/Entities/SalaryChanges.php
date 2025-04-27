<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class SalaryChanges extends Model
{
    protected $table = 'salary_changes';
    protected $fillable = ['sc_id', 'fk_employee', 'sc_current_salary', 'sc_new_salary', 'sc_status', 'fk_approval', 'sc_created_at', 'sc_updated_at'];
    public $timestamps = true;
}