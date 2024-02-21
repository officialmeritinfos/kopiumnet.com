<?php

namespace App\Custom;

use App\Models\Service;

class Regular
{
    public function fetchServices()
    {
        return Service::where('status',1)->get();
    }
}
