<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class RequestApproval extends Model
{
    protected $table = 'request_approvals';
    protected $fillable = ['ra_id', 'fk_approval_process', 'ra_step_order', 'fk_approver', 'ra_status', 'ra_created_at', 'ra_updated_at'];
    public $timestamps = true;
}