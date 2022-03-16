<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyStreamLiveWatermark request structure.
 *
 * @method string getId() Obtain Watermark ID
 * @method void setId(string $Id) Set Watermark ID
 * @method string getName() Obtain Watermark name
 * @method void setName(string $Name) Set Watermark name
 * @method CreateImageSettings getImageSettings() Obtain Watermark image settings. This parameter is valid if `Type` is `STATIC_IMAGE`.
 * @method void setImageSettings(CreateImageSettings $ImageSettings) Set Watermark image settings. This parameter is valid if `Type` is `STATIC_IMAGE`.
 * @method CreateTextSettings getTextSettings() Obtain Watermark text settings. This parameter is valid if `Type` is `TEXT`.
 * @method void setTextSettings(CreateTextSettings $TextSettings) Set Watermark text settings. This parameter is valid if `Type` is `TEXT`.
 */
class ModifyStreamLiveWatermarkRequest extends AbstractModel
{
    /**
     * @var string Watermark ID
     */
    public $Id;

    /**
     * @var string Watermark name
     */
    public $Name;

    /**
     * @var CreateImageSettings Watermark image settings. This parameter is valid if `Type` is `STATIC_IMAGE`.
     */
    public $ImageSettings;

    /**
     * @var CreateTextSettings Watermark text settings. This parameter is valid if `Type` is `TEXT`.
     */
    public $TextSettings;

    /**
     * @param string $Id Watermark ID
     * @param string $Name Watermark name
     * @param CreateImageSettings $ImageSettings Watermark image settings. This parameter is valid if `Type` is `STATIC_IMAGE`.
     * @param CreateTextSettings $TextSettings Watermark text settings. This parameter is valid if `Type` is `TEXT`.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ImageSettings",$param) and $param["ImageSettings"] !== null) {
            $this->ImageSettings = new CreateImageSettings();
            $this->ImageSettings->deserialize($param["ImageSettings"]);
        }

        if (array_key_exists("TextSettings",$param) and $param["TextSettings"] !== null) {
            $this->TextSettings = new CreateTextSettings();
            $this->TextSettings->deserialize($param["TextSettings"]);
        }
    }
}
