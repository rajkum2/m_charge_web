<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class contact
 * @package App\Models
 * @version February 6, 2020, 12:08 pm UTC
 *
 * @property string name
 * @property string email
 * @property string phone_number
 * @property string message
 */
class contact extends Model
{
    use SoftDeletes;

    public $table = 'contacts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'phone_number',
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
        'phone_number' => 'string',
        'message' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'message' => 'required'
    ];

    
}
