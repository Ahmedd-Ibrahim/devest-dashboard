<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Prant
 * @package App\Models
 * @version December 12, 2020, 8:21 pm UTC
 *
 * @property string $photo
 */
class Prant extends Model
{
    use SoftDeletes;

    public $table = 'prants';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'photo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'photo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
