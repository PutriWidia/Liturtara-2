<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $table = 'solutions';

    protected $fillable = [
        'case_id',
        'user_id',
        'answer',
        'file_path',
    ];

    /**
     * Solution milik satu Case
     */
    public function case()
    {
        return $this->belongsTo(Cases::class, 'case_id');
    }

    /**
     * Solution punya banyak Review
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    /**
     * Author Solution (User)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
