<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class TaxType extends Model
{
    protected $table = 'taxes_type';
    protected $fillable = ['tt_id', 'tt_name', 'tt_description', 'tt_default_rate', 'tt_created_at', 'tt_updated_at'];
    public $timestamps = true;
}