<?php

namespace App\Services;

use App\Models\Emails;
use Illuminate\Database\Eloquent\Model;

class EmailService extends BaseServices
{
    protected $model;

    public function __construct()
    {
        $this->model = new Emails();
    }

}
