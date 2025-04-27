<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class ExpenseClaim extends Model
{
    protected $table = 'expense_claim';
    protected $fillable = ['ec_id', 'ec_name', 'ec_description', 'ec_cost', 'fk_approval_status', 'ec_file_path', 'ec_created_at', 'ec_updated_at'];
    public $timestamps = true;
}