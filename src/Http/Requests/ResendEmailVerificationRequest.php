<?php

namespace Dashopapp\Api\Http\Requests;

use Dashopapp\Support\Http\Requests\Request;

class ResendEmailVerificationRequest extends Request
{
    public function rules(): array
    {
        return [
            'email' => 'required|email|string',
        ];
    }
}
