<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OurServices
 * @package App\Models
 * @version December 12, 2020, 5:50 pm UTC
 *
 * @property string $section_icon
 * @property string $title
 * @property string $description
 */
class OurServices extends Model
{
    use SoftDeletes;

    public $table = 'our_services';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'section_icon',
        'title',
        'description',
        'description_hidden'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'section_icon' => 'string',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

        'section_icon'=>'required',
        'title'=>'required',
        'description'=>'required',
        'description_hidden'=>'sometimes'

    ];


}
