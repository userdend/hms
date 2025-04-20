<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    protected $table = 'benefits';
    protected $fillable = ['b_id', 'fk_employee', 'fk_benefit_type', 'b_start_date', 'b_created_at', 'b_updated_at'];
    public $timestamps = true;
}