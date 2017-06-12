<?php
/**
 * Основной контроллер для работы с формами
 */

namespace App\Http\Controllers;

use App\Services\FormService;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Выводит страницу с формой
     * @param string $domainUid
     * @param string $formName
     * @param FormService $formService
     * @return \Illuminate\Http\Response|string
     */
    public function getForm(string $domainUid, string $formName, FormService $formService)
    {
        /** Получаем контент страницы формы */
        $formEntityContent = $formService->getFormEntityContentByOwnerUidAndFormName($domainUid, $formName);

        /** Выводим контент в браузер */
        return $formEntityContent;
    }

    /**
     * Принимает данные, полученных из формы
     * @param string $domainUid
     * @param string $formName
     * @param FormService $formService
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postForm(string $domainUid, string $formName, FormService $formService, Request $request)
    {
        $formService->postFormEntityByOwnerUidAndFormName($domainUid, $formName, $request);

        $redirectUrl = $formService->getFormRedirectUrl($domainUid, $formName);

        return redirect($redirectUrl);
    }

    public function successForm(Request $request)
    {
        $formToken = $request->get('token');

        $result = file_get_contents('http://wp.zalipay.com/safeforms/callback?act=check_user');

        $result = json_decode($result);

        if ($result->success === true) {
            return redirect('http://wp.zalipay.com/safeforms/callback?act=success&token=' . $formToken);
        }

        return view('form.success', ['formToken' => $formToken]);
    }
}