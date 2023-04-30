<?php

namespace App\Services;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;

class ProjectService extends BaseServices
{
    protected $model;

    public function __construct()
    {
        $this->model = new Project();
    }

}
