<?php

namespace App\Services;

use App\Models\ProjectImages;
use Illuminate\Database\Eloquent\Model;

class ProjectImagesService extends BaseServices
{
    protected $model;

    public function __construct()
    {
        $this->model = new ProjectImages();
    }

}
