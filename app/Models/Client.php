<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Fillable fields for mass assignment
    protected $fillable = [
        'name',
        'phone',
        'brand_name',
        'business_type',
        'user_id',  // The user who added the client
    ];

    // Relationship to the User model (assuming each client belongs to a user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
