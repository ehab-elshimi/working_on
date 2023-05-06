<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    use HasFactory;
    protected $fillable = ['feature','feature_type','developer_id'];
    public function developer():HasOne
    {
        return $this->belongsTo(Developer::class);
    }
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_features');
    }
}
