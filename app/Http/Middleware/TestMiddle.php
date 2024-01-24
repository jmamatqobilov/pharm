<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;


class TestMiddle
{
    public function handle(Request $request, \Closure $next, $info)
    {
        dd($info);

    }
}
