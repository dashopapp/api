<?php

namespace Dashopapp\Api\Forms;

use Dashopapp\Api\Http\Requests\StoreSanctumTokenRequest;
use Dashopapp\Api\Models\PersonalAccessToken;
use Dashopapp\Base\Forms\FieldOptions\NameFieldOption;
use Dashopapp\Base\Forms\Fields\TextField;
use Dashopapp\Base\Forms\FormAbstract;

class SanctumTokenForm extends FormAbstract
{
    public function buildForm(): void
    {
        $this
            ->setupModel(new PersonalAccessToken())
            ->setValidatorClass(StoreSanctumTokenRequest::class)
            ->add('name', TextField::class, NameFieldOption::make()->toArray());
    }
}
