<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallbackController extends Controller
{
    public function callback(Request $request)
    {
        $formToken = $request->get('token');

        $tokenModel = \App\Models\TokenModel::findByToken($formToken);

        return [
            'success' => true,
            'login' => $tokenModel->login
        ];
    }
}
