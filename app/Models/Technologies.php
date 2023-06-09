<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technologies extends Model
{
    use HasFactory;
    protected $fillable = ['icon','technology'];
    
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_technologies');
    }
}
