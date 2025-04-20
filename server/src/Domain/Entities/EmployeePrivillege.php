<?php

namespace Src\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class EmployeePrivillege extends Model
{
    protected $table = 'employee_privileges';
    protected $fillable = ['ep_id', 'fk_employee', 'fk_privilege', 'ep_created_at', 'ep_updated_at'];
    public $timestamps = true;
}