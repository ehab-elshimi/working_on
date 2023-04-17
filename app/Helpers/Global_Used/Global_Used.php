<?php

namespace App\Helpers\Global_Used;

use Illuminate\Support\Facades\Route;

class Global_Used
{
    public function check_routes(array $routes)
    {
        foreach ($routes as $route) {
            if (Route::current()->getName() == $route) {
                return true;
            }
        }
    }

    public function put_code_html($routes, $text)
    {
        $condition = $this->check_routes($routes);
        if ($condition) {
            return $text;
        }
    }
}
