<?php
namespace App\Http\Middlewares;

use Layton\Library\Http\Request;

class TestMiddleware extends BaseMiddleware
{
    public function handle(Request $request, $next, $id)
    {
        $request->withQueryParam('TestMiddleware', 'on');
        $next();
    }
}
