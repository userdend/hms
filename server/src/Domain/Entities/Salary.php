<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table = 'salaries';
    protected $fillable = ['s_id', 's_base_salary', 's_bonus', 's_effective_date', 's_created_at', 's_updated_at'];
    public $timestamps = true;
}