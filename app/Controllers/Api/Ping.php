<?php

namespace App\Controllers\Api;

class Ping extends BaseApiController
{
    public function index()
    {
        return json_encode("pong!");
    }
}
