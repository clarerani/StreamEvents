<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Subscriber extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'name', 'subscription_tier', 'created_at', 'updated_at'];

    public function user()
{
    return $this->belongsTo(User::class);
}

    public function activities()
    {
        return $this->morphMany(UserActivity::class, 'activityable');
    }
}
