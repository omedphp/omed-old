<?php


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