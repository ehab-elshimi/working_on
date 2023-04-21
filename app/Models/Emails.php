<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','message','user_id'];
    
    public function User():HasOne
    {
        return $this->belongsTo(User::class);
    }
}
