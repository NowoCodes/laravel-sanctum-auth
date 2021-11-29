<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @method static updateOrCreate(mixed $advice)
 * @method static latest()
 */
class Advice extends Model
{
    use HasFactory;

    protected $guarded = [];
}
