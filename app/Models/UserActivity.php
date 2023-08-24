<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'activity_type', 'activityable_id', 'activityable_type'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function activityable()
    {
        return $this->morphTo();
    }
}
