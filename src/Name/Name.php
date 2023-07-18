<?php

namespace App\Name;

use App\App;

class Name
{
    public function __construct(
        private readonly App $app
    )
    {

    }

    public function getApp(): App
    {
        return $this->app;
    }


}