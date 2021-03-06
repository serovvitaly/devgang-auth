<?php

namespace Domain\Entities;


use ArrayIterator;
use Domain\Interfaces\FormEntityInterface;

class FormEntity implements FormEntityInterface
{
    protected $domainUid;

    protected $name;

    public function __construct(string $domainUid, string $name)
    {
        $this->domainUid = $domainUid;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        $viewData = [
            'domainUid' => $this->domainUid,
        ];

        switch ($this->name) {
            case 'auth':
                return view('form.auth', $viewData);
            case 'reg':
                return view('form.reg', $viewData);
            case 'reset':
                return view('form.reset', $viewData);
            case 'login':
                return view('form.login', $viewData);
            default:
                return ';{';
        }
    }

    public function getDataView(): ArrayIterator
    {
        return new ArrayIterator;
    }
}