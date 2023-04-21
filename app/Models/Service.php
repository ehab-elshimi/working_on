<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable =['icon','title','description','user_id'];
    
    public function User():HasOne
    {
        return $this->belongsTo(User::class);
    }
}
