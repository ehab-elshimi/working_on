<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phones extends Model
{
    use HasFactory;
    protected $filable=['phone', 'contact_id'];
    public function contact():HasOne
    {
        return $this->belongsTo(Contact::class);
    }
}
