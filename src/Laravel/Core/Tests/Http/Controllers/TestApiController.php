<?php

/*
 * This file is part of the Omed project.
 *
 * (c) Anthonius Munthi <https://itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Omed\Laravel\Core\Tests\Http\Controllers;

use Omed\Laravel\Core\Http\Controllers\ApiController;

class TestApiController extends ApiController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth:api')->except('login');
    }

    public function login()
    {
        return response()->json(['message' => 'Unauthenticated']);
    }

    public function index()
    {
    }
}
