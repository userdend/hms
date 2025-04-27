<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class BudgetRequest extends Model
{
    protected $table = 'budget_request';
    protected $fillable = ['br_id', 'br_name', 'br_description', 'br_budget', 'fk_approval_status', 'br_created_at', 'br_updated_at'];
    public $timestamps = true;
}