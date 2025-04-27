<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class ApprovalProcess extends Model
{
    protected $table = 'approval_process';
    protected $fillable = ['ap_id', 'fk_request_type', 'fk_requestor', 'ap_status', 'ap_created_at', 'ap_updated_at'];
    public $timestamps = true;
}