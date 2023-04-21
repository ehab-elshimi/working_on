<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;
    protected $fillable=['icon', 'link','contact_id'];

    public function contact():HasOne
    {
        return $this->belongsTo(Contact::class);
    }
}
