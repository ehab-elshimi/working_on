<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;
    protected $fillable = ['skill','type','developer_id'];

    public function developer():HasOne
    {
        return $this->belongsTo(Developer::class);
    }
}
