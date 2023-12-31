<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_id',
        'email',
        'otp_code',
        'status',
        'attempts',
        'time_when_verified',
    ];
}
