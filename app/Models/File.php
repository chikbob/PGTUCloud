<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $validate)
 */
class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastModifiedDate',
        'size',
        'type'
    ];
}
