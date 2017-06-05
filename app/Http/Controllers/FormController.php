<?php

namespace App\Http\Controllers;

use App\Services\FormService;
use function Couchbase\defaultDecoder;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @param int $merchantId
     * @param string $formName
     * @param FormService $formService
     * @return \Illuminate\Http\Response|string
     */
    public function getForm(int $merchantId, string $formName, FormService $formService)
    {
        $formEntity = $formService->getFormEntityByMerchantIdAndFormName($merchantId, $formName);

        return $formEntity->render();
    }

    public function postForm(int $merchantId, string $formName, FormService $formService, Request $request)
    {
        //
    }
}