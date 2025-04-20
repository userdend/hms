<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    protected $table = 'taxes';
    protected $fillable = ['t_id', 'fk_employee', 'fk_taxes_type', 't_amount', 't_month', 't_created_at', 't_updated_at'];
    public $timestamps = true;
}