<?php

namespace Dashopapp\Api\Http\Requests;

use Dashopapp\Base\Rules\OnOffRule;
use Dashopapp\Support\Http\Requests\Request;

class ApiSettingRequest extends Request
{
    public function rules(): array
    {
        return [
            'api_enabled' => [new OnOffRule()],
        ];
    }
}
