<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Log_Activities extends Model
{
    use HasFactory;

    protected $table = 'log_activities';
    protected $primaryKey = 'log_id';

    protected $fillable = [
        'user_id',
        'activity',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

