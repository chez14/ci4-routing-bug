<?php

namespace App\Controllers\Api;

/**
 * This class is reserved for handling generic things such as 404 error or
 * other, maybe.
 */
class Generic extends BaseApiController
{
    public function handle404()
    {
        $this->response->setStatusCode(404, "Not found");
        echo json_encode([
            "message" => "'" . uri_string() . "' is an Invalid URL",
        ]);
    }
}
