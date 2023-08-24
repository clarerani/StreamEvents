<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'name', 'created_at', 'updated_at'];

    public function user()
{
    return $this->belongsTo(User::class);
}


    //MARK AS READ/UNREAD
    public function activities()
    {
        return $this->morphMany(UserActivity::class, 'activityable');
    }

}
