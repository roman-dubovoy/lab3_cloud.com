<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Auto
 * @package App\Models
 */
class Auto extends Model
{
    /**
     * @var string
     */
    protected $table = 'autos';

    /**
     * @var array
     */
    protected $fillable = [
        'brand', 'model', 'year_of_release'
    ];
}
