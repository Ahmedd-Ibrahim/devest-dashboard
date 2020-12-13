<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Settings
 * @package App\Models
 * @version December 12, 2020, 8:50 pm UTC
 *
 * @property string $facebook_link
 * @property string $twitter_link
 * @property string $insta_link
 * @property string $Email
 * @property string $phone
 * @property string $Description_on_footer
 */
class Settings extends Model
{
    use SoftDeletes;

    public $table = 'settings';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'facebook_link',
        'twitter_link',
        'insta_link',
        'Email',
        'phone',
        'Description_on_footer'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'facebook_link' => 'string',
        'twitter_link' => 'string',
        'insta_link' => 'string',
        'Email' => 'string',
        'phone' => 'string',
        'Description_on_footer' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
