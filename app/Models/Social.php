<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'user_social_accounts';
    
    protected $fillable = [
        'user_id', 'provider', 'uid_provider'
    ];
}
