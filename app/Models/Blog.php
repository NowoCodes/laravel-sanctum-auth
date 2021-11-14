<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $input)
 * @method static get()
 * @method static find($id)
 * @property mixed title
 * @property mixed description
 */
class Blog extends Model
{
  use HasFactory;

  protected $fillable = [
    'title',
    'description'
  ];
}
