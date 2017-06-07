<?php

namespace App\Services;


use Domain\Repositories\FormEntityRepository;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class FormService
{
    protected $domainFormService;

    public function __construct(\Domain\Services\FormService $domainFormService)
    {
        $this->domainFormService = $domainFormService;
    }

    /**
     * Возвращает модель формы по её имени и идентификатору владельца
     * @param string $domainUid
     * @param string $formName
     * @return mixed
     * @throws \Exception
     */
    public function getFormModelByOwnerUidAndFormName(string $domainUid, string $formName)
    {
        $domainModel = \App\Models\DomainModel::findByUid($domainUid);

        if (!$domainModel) {
            throw new \Exception('Domain not found, UID = ' . $domainUid);
        }

        $formModel = \App\Models\FormModel::where([
            'domain_id' => $domainModel->id,
            'name' => $formName,
        ])->take(1)->first();

        return $formModel;
    }

    /**
     * Возвращает сущьность формы
     * @param string $domainUid
     * @param string $formName
     * @return string
     */
    public function getFormEntityContentByOwnerUidAndFormName(string $domainUid, string $formName): string
    {
        $domainModel = \App\Models\DomainModel::findByUid($domainUid);

        if (is_null($domainModel)) {
            throw new NotFoundHttpException();
        }

        $formEntity = FormEntityRepository::find($domainUid, $formName);
        return $this->domainFormService->renderForm($formEntity);
    }

    /**
     * Передает данные полученные из формы, на сервер владельца
     * @param string $domainUid
     * @param string $formName
     * @param Request $request
     * @return bool
     */
    public function postFormEntityByOwnerUidAndFormName(string $domainUid, string $formName, Request $request): bool
    {
        $this->domainFormService->obtainForm($domainUid, $formName);
        $formEntity = FormEntityRepository::find($domainUid, $formName);

        return true;
    }

    /**
     * Возвращает URL формы
     * @param string $domainUid
     * @param string $formName
     * @param array $queryParams
     * @return string
     */
    public function getFormUrl(string $domainUid, string $formName, array $queryParams = []): string
    {
        $url = "/form/{$domainUid}/{$formName}";

        if (!empty($queryParams)) {
            $url .= '?' . http_build_query($queryParams);
        }

        return $url;
    }

    /**
     * Возвращает URL формы для редиректа на страницу владельца
     * @param string $domainUid
     * @param string $formName
     * @return string
     */
    public function getFormRedirectUrl(string $domainUid, string $formName): string
    {
        $result = true;

        if ($result) {
            /**
             * Если результат обработки данных из формы - положительный,
             * то делаем редирект на страницу владельца формы...
             */
            $formModel = $this->getFormModelByOwnerUidAndFormName($domainUid, $formName);
            $redirectUrl = $formModel->redirect_url;
        } else {
            /**
             * ... если - отрицательный, то делаем редирект на страницу той же формы,
             * с выводом сообщения о причине неудачи
             */
            $redirectUrl = $this->getFormUrl($domainUid, $formName);
        }

        $token = 'tjhryeu4w6547787378745rwtet236';

        $redirectUrl .= '?token=' . $token;

        return $redirectUrl;
    }
}