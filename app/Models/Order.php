<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Order
 * @package App\Models
 * @version December 12, 2020, 8:38 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $phone
 * @property string $message
 */
class Order extends Model
{
    use SoftDeletes;

    public $table = 'orders';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'subject',
        'phone',
        'message'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'subject' => 'string',
        'phone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name'   => 'required|string|max:255',
        'email'  => 'required|email',
        'subject'=> 'required|string|max:120',
        'phone'  => 'required',
        'message'=> 'required|string|max:255'
    ];


}
