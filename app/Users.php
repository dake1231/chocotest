<?php
/**
 * Created by PhpStorm.
 * User: dake1
 * Date: 24.06.2018
 * Time: 7:28
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
    ];

    protected $hidden = ['created_at', 'updated_at'];

}