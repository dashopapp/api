<?php

namespace Dashopapp\Api\Http\Controllers;

use Dashopapp\Api\Http\Requests\ApiSettingRequest;
use Dashopapp\Base\Facades\Assets;
use Dashopapp\Setting\Http\Controllers\SettingController;

class ApiController extends SettingController
{
    public function edit()
    {
        $this->pageTitle(trans('packages/api::api.settings'));

        Assets::addScriptsDirectly('vendor/core/core/setting/js/setting.js')
            ->addStylesDirectly('vendor/core/core/setting/css/setting.css');

        $this->breadcrumb()
            ->add(trans('core/setting::setting.title'), route('settings.index'))
            ->add(trans('packages/api::api.settings'));

        return view('packages/api::settings');
    }

    public function update(ApiSettingRequest $request)
    {
        return $this->performUpdate($request->validated());
    }
}
