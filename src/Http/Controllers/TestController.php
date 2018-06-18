<?php
namespace App\Http\Controllers;

use Layton\Library\Http\Response;
use Layton\Library\Http\Request;

class TestController extends BaseController
{
    public function test(Request $request, Response $response, $id)
    {
        $params = $request->getParams();
        return $response->json($params);
    }
}
