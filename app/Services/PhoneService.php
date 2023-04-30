<?php

namespace App\Services;

use App\Models\Phones;
use Illuminate\Database\Eloquent\Model;

class PhoneService extends BaseServices
{
    protected $model;

    public function __construct()
    {
        $this->model = new Phones();
    }

}
