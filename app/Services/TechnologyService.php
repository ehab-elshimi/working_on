<?php

namespace App\Services;

use App\Models\Technologies;
use App\Models\Technology;
use Illuminate\Database\Eloquent\Model;

class TechnologyService extends BaseServices
{
    protected $model;

    public function __construct()
    {
        $this->model = new Technologies();
    }

}
