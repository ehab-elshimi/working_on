<?php

namespace App\Services;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;

class ServiceService extends BaseServices
{
    protected $model;

    public function __construct()
    {
        $this->model = new Service();
    }

}
