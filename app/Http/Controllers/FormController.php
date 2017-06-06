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
     * @param int $ownerUid
     * @param string $formName
     * @param FormService $formService
     * @return \Illuminate\Http\Response|string
     */
    public function getForm(int $ownerUid, string $formName, FormService $formService)
    {
        /** Получаем контент страницы формы */
        $formEntityContent = $formService->getFormEntityContentByOwnerUidAndFormName($ownerUid, $formName);

        /** Выводим контент в браузер */
        return $formEntityContent;
    }

    /**
     * Принимает данные, переданные из формы
     * @param int $ownerUid
     * @param string $formName
     * @param FormService $formService
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postForm(int $ownerUid, string $formName, FormService $formService, Request $request)
    {
        /** Обрабатываем данные из формы */
        $result = $formService->postFormEntityByOwnerUidAndFormName($ownerUid, $formName, $request);

        if ($result) {
            /**
             * Если результат обработки данных из формы - положительный,
             * то делаем редирект на страницу владельца формы...
             */
            $redirectUrl = $formService->getFormRedirectUrl($ownerUid, $formName);
        } else {
            /**
             * ... если - отрицательный, то делаем редирект на страницу той же формы,
             * с выводом сообщения о причине неудачи
             */
            $redirectUrl = $formService->getFormUrl($ownerUid, $formName);
        }

        return redirect($redirectUrl);
    }
}