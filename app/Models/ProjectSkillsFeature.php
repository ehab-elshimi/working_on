<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSkillsFeature extends Model
{
    use HasFactory;
    protected $fillable = ['project_id','skill_feature_id'];

}
