<?php

namespace App\Http\Middleware;


use App\Services\ClientIdentifyService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ClientIdentify
{
    public function handle(Request $request, Closure $next)
    {
        $clientIdentifier = $request->cookie(ClientIdentifyService::CID_COOKIE_KEY);

        var_dump($clientIdentifier);

        if (empty($clientIdentifier)) {
            $clientModel = new \App\Models\ClientModel;
            $clientModel->save();
            $clientIdentifier = $clientModel->id;
        }

        /** @var Response $response */
        $response = $next($request);
        $response->cookie(ClientIdentifyService::CID_COOKIE_KEY, $clientIdentifier, 60 * 24 * 100);

        return $response;
    }
}