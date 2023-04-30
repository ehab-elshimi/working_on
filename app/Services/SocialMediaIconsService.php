<?php

namespace App\Services;

use App\Models\SocialMedia;
use Illuminate\Database\Eloquent\Model;

class SocialMediaIconsService extends BaseServices
{
    protected $model;

    public function __construct()
    {
        $this->model = new SocialMedia();
    }

}
