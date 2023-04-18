<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    use HasFactory;
    protected $filable=['first_name','lastname','formal_name','email','address','iframe','location_url'];

    public function phones():BelongsTo
    {
        return $this->hasMany(Phones::class);
    }
    public function social_media_icons():BelongsTo
    {
        return $this->hasMany(SocialMedia::class);
    }
    public function User():HasOne
    {
        return $this->belongsTo(User::class);
    }
}
