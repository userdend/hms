<?php

namespace Src\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class PrivilegePermission extends Model
{
    protected $table = 'privilege_permissions';
    protected $fillable = ['pp_id', 'fk_employee_privilege', 'fk_permission', 'pp_created_at', 'pp_updated_at'];
    public $timestamps = true;
}