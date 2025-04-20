<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    protected $table = 'payrolls';
    protected $fillable = ['p_id', 'fk_employee', 'p_pay_period_start', 'p_pay_period_end', 'p_total_pay', 'p_net_pay', 'p_created_at', 'p_updated_at'];
    public $timestamps = true;
}