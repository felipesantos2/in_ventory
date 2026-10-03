<?php

namespace App\Controllers\Api\V1;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\CodeIgniter;
use CodeIgniter\HTTP\ResponseInterface;

/**
 * @see https://codeigniter.com/user_guide/guides/api/first-endpoint.html
 */
class Ping extends BaseController
{
    use ResponseTrait;

    // getIndex como nome obrigatório
    public function getIndex(): ResponseInterface
    {
        return $this->respond([
            [
                'status'  => 'OK',
                'date'    => date('c'),
                'version' => CodeIgniter::CI_VERSION,
            ],

            [
                'status'  => 'OK',
                'date'    => date('c'),
                'version' => CodeIgniter::CI_VERSION,
            ],
        ], 200);
    }
}
