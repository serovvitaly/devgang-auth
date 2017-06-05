<?php

namespace Domain\Entities;


use Domain\Interfaces\FormEntityInterface;

class FormEntity implements FormEntityInterface
{
    protected $merchantId;

    protected $name;

    public function __construct(int $merchantId, string $name)
    {
        $this->merchantId = $merchantId;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        switch ($this->name) {
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