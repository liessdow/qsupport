<?php

namespace App\Models\Authentication;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignInEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'user_account_id', 'time', 'ip_address', 'user_agent',
    ];
}
