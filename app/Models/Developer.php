<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Developer extends Model
{
    use HasFactory;
    protected $fillable = ['first_name','last_name','formal_name','email','address','iframe','location_url','cv_link_drive','video_intro_url','footer_message','user_id'];

    public function phones():BelongsTo
    {
        return $this->hasMany(Phones::class);
    }
    public function features():BelongsTo
    {
        return $this->hasMany(Features::class);
    }
    public function social_media_icons():BelongsTo
    {
        return $this->hasMany(SocialMedia::class);
    }
    public function User():HasOne
    {
        return $this->belongsTo(User::class);
    }
    public function skills():BelongsTo
    {
        return $this->hasMany(Skills::class);
    }
}
