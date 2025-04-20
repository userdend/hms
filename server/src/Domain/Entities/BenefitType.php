<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class BenefitType extends Model
{
    protected $table = 'benefits_type';
    protected $fillable = ['bt_id', 'bt_name', 'bt_description', 'bt_max_amount', 'bt_recurring', 'bt_taxable', 'bt_created_at', 'bt_updated_at'];
    public $timestamps = true;
}