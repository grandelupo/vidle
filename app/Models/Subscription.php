<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'description', 'stripe_id', 'ends_at', 'user_id'];

    public function user()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }

    public function endsAtString()
    {
        return $this->ends_at->format('d-m-Y');
    }
}
