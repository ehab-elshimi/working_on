<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['intro_image','title','source_code_link','modal_desc','desc','pdf_docs_url','is_displayed','user_id'];

    public function project_images():BelongsTo
    {
        return $this->hasMany(ProjectImages::class);
    }
    public function technologies()
    {
        return $this->belongsToMany(Technologies::class, 'project_technologies');
    }
    public function skill_features()
    {
        return $this->belongsToMany(SkillFeature::class, 'project_skills_features');
    }
    public function User():HasOne
    {
        return $this->belongsTo(User::class);
    }
}
