<?php

namespace App\Services;

use App\Models\Features;
use Illuminate\Database\Eloquent\Model;

class FeatureService extends BaseServices
{
    protected $model;

    public function __construct()
    {
        $this->model = new Features();
    }
}
