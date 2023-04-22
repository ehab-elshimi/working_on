<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phones extends Model
{
    use HasFactory;
    protected $fillable=['phone', 'developer_id'];
    public function developer():HasOne
    {
        return $this->belongsTo(Developer::class);
    }
}
