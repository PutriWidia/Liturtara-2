<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewerRequest extends Model
{
     protected $fillable = [
        'solution_id',
        'reviewer_id',
        'comment',
        'status',
        'admin_note'
    ];

    // 🔗 reviewer (user)
    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewer_id');
    }

    // 🔗 solution (INI YANG BIKIN ERROR)
    public function solution()
    {
        return $this->belongsTo(Solution::class, 'solution_id');
    }
}
