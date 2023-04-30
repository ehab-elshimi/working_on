<?php

namespace App\Services;

use App\Models\Developer;
use Illuminate\Database\Eloquent\Model;

class DeveloperService extends BaseServices
{
    protected $model;

    public function __construct()
    {
        $this->model = new Developer();
    }
    
}
