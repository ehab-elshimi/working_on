<?php

namespace App\Services;

use App\Models\ExperiencePeriod;
use Illuminate\Database\Eloquent\Model;

class ExperiencePeriodsService extends BaseServices
{
    protected $model;

    public function __construct()
    {
        $this->model = new ExperiencePeriod();
    }

}
