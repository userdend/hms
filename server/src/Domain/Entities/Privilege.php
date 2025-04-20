<?php

namespace Src\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    protected $table = 'privileges';
    protected $fillable = ['p_id', 'p_name', 'p_description', 'p_created_at', 'p_updated_at'];
    public $timestamps = true;
}