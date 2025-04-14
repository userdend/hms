<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = ['id', 'first_name', 'last_name', 'email', 'phone', 'status', 'created_at'];
    public $timestamps = true;
}