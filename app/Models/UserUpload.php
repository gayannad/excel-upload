<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserUpload extends Model
{
    protected $fillable = [
        'name',
        'email',
        'contact_no',
        'address',
        'birthday',
    ];
}
