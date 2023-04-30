<?php

namespace App\Services;

use App\Models\Skills;
use Illuminate\Database\Eloquent\Model;

class SkillService extends BaseServices
{
    protected $model;

    public function __construct()
    {
        $this->model = new Skills();
    }

}
