<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class RequestType extends Model
{
    protected $table = 'request_type';
    protected $fillable = ['rt_id', 'rt_name', 'rt_description', 'rt_stage', 'rt_approver', 'rt_created_at', 'rt_updated_at'];
    public $timestamps = true;
}