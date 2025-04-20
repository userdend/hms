<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class EmployeeEmergencyContact extends Model
{
    protected $table = 'employees_emergency_contact';
    protected $fillable = ['eec_id', 'eec_name', 'eec_relationship', 'eec_address', 'eec_phone', 'fk_employee', 'eec_created_at', 'eec_updated_at'];
    public $timestamps = true;
}