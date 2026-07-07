<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class BaseModel extends Model
{
    use HasUuid;

    public $incrementing = false;

    protected $keyType = 'string';
}
