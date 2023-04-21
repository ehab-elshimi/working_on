<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillFeature extends Model
{
    use HasFactory;
    protected $fillable = ['feature','feature_type'];
    
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_skills_features');
    }
}
