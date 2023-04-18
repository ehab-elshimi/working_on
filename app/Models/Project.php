<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Project extends Model
{
    use HasFactory;
    public function project_images():BelongsTo
    {
        return $this->hasMany(ProjectImages::class);
    }
    public function technologies()
    {
        return $this->belongsToMany(Technologies::class, 'project_technologies');
    }
    public function User():HasOne
    {
        return $this->belongsTo(User::class);
    }
}
