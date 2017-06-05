<?php

namespace App\Http\Controllers;

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
     * @param $merchantId
     * @param $formName
     * @return \Illuminate\Http\Response|string
     */
    public function getForm(int $merchantId, string $formName)
    {
        if ($merchantId < 1) {
            return ';{{';
        }

        $merchant = $merchantId;

        switch ($formName) {
            case 'auth':
                return view('form.auth');
                break;
            case 'reg':
                return view('form.reg');
                break;
            case 'reset':
                return view('form.reset');
                break;
            default:
                return ';{';
        }
    }
}