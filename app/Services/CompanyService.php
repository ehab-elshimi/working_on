<?php

namespace App\Services;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;

class ComapnyService extends BaseServices
{
    protected $model;

    public function __construct()
    {
        $this->model = new Company();
    }

}
