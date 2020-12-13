<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class InFoAboutCompany
 * @package App\Models
 * @version December 12, 2020, 5:37 pm UTC
 *
 * @property string $sub_title
 * @property string $title
 * @property string $who_are_we_title
 * @property string $description_who_are_we
 * @property string $photo_who_are_we
 * @property string $how_we_work_title
 * @property string $description_how_we_work
 * @property string $photo_how_we_work
 */
class InFoAboutCompany extends Model
{
    use SoftDeletes;

    public $table = 'in_fo_about_companies';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'sub_title',
        'title',
        'who_are_we_title',
        'description_who_are_we',
        'photo_who_are_we',
        'how_we_work_title',
        'description_how_we_work',
        'photo_how_we_work'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sub_title' => 'string',
        'who_are_we_title' => 'string',
        'description_who_are_we' => 'string',
        'photo_who_are_we' => 'string',
        'how_we_work_title' => 'string',
        'photo_how_we_work' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

        'sub_title'=>'required',
        'title'=>'required',
        'who_are_we_title'=>'required',
        'description_who_are_we'=>'required',
        'photo_who_are_we'=>'required',
        'how_we_work_title'=>'required',
        'description_how_we_work'=>'required',
        'photo_how_we_work'=>'required'
    ];


}
