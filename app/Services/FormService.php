<?php

namespace App\Services;


use Domain\Repositories\FormEntityRepository;
use Illuminate\Http\Request;

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
     */
    public function getFormModelByOwnerUidAndFormName(string $domainUid, string $formName)
    {
        $ownerModel = \App\Models\OwnerModel::findByUid($domainUid);

        $formModel = \App\Models\FormModel::where([
            'owner_id' => $ownerModel->id,
            'name' => $formName,
        ])->one();

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
        $formModel = $this->getFormModelByOwnerUidAndFormName($domainUid, $formName);

        $url = $formModel->redirect_url;

        return $url;
    }
}