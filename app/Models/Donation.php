<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'amount', 'currency', 'donation_message', 'created_at', 'updated_at'];

    public function user()
{
    return $this->belongsTo(User::class);
}


    // public static function totalDonationsInLast30Days($userId) {
    //     return self::where('user_id', $userId)
    //         ->where('created_at', '>=', now()->subDays(30))
    //         ->sum('amount');
    // }

    //READ/UNREAD
    public function activities()
    {
        return $this->morphMany(UserActivity::class, 'activityable');
    }
}
