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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Background image settings.
 *
 * @method string getUrl() Obtain The URL of the background image.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set The URL of the background image.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BackgroundPictureConfig extends AbstractModel
{
    /**
     * @var string The URL of the background image.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @param string $Url The URL of the background image.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
