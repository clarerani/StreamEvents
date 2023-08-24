<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerchSale extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'item_name', 'amount', 'price', 'created_at', 'updated_at'];

    public function user()
{
    return $this->belongsTo(User::class);
}

    //READ/UNREAD
    public function activities()
    {
        return $this->morphMany(UserActivity::class, 'activityable');
    }
}
