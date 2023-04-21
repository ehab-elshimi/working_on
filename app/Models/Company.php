<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ['logo','link','name','location','period_type','user_id'];

    public function User():HasOne
    {
        return $this->belongsTo(User::class);
    }
    public function experience_periods():BelongsTo //one to many
    {
        return $this->hasMany(ExperiencePeriod::class);
    }
}
