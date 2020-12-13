<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Heeder
 * @package App\Models
 * @version December 12, 2020, 5:25 pm UTC
 *
 * @property string $title
 * @property string $description
 */
class Heeder extends Model
{
    use SoftDeletes;

    public $table = 'heeders';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
