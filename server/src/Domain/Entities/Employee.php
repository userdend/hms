<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = ['e_id', 'e_first_name', 'e_last_name', 'e_email', 'e_phone', 'e_status', 'e_created_at'];
    public $timestamps = true;
}