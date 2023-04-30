<?php

namespace App\Services;

use App\Models\ProjectTechnologies;
use Illuminate\Database\Eloquent\Model;

class ProjectTechnologyService extends BaseServices
{
    protected $model;

    public function __construct()
    {
        $this->model = new ProjectTechnologies();
    }

}
