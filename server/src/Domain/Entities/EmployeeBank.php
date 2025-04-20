<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class EmployeeBank extends Model
{
    protected $table = 'employees_bank';
    protected $fillable = ['eb_id', 'eb_name', 'eb_account_no', 'eb_branch', 'fk_employee', 'eb_created_at', 'eb_updated_at'];
    public $timestamps = true;
}