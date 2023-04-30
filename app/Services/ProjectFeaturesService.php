<?php

namespace App\Services;

use App\Models\ProjectFeatures;
use Illuminate\Database\Eloquent\Model;

class ProjectFeaturesService extends BaseServices
{
    protected $model;

    public function __construct()
    {
        $this->model = new ProjectFeatures();
    }

}
