<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;
    protected $fillable=['icon', 'link','developer_id'];

    public function developer():HasOne
    {
        return $this->belongsTo(Developer::class);
    }
}
