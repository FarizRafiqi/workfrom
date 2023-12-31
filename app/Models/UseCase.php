<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UseCase extends Model
{
    use HasFactory;

    public function parent()
    {
        return $this->belongsTo(UseCase::class, 'parent_id');
    }
}
