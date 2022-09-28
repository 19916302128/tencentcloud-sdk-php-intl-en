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
namespace TencentCloud\Tmt\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextTranslate response structure.
 *
 * @method string getTargetText() Obtain The translation outcome.
 * @method void setTargetText(string $TargetText) Set The translation outcome.
 * @method string getSource() Obtain The source language. See the request parameter `Source` for details.
 * @method void setSource(string $Source) Set The source language. See the request parameter `Source` for details.
 * @method string getTarget() Obtain The target language. See the request parameter `Target` for details.
 * @method void setTarget(string $Target) Set The target language. See the request parameter `Target` for details.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class TextTranslateResponse extends AbstractModel
{
    /**
     * @var string The translation outcome.
     */
    public $TargetText;

    /**
     * @var string The source language. See the request parameter `Source` for details.
     */
    public $Source;

    /**
     * @var string The target language. See the request parameter `Target` for details.
     */
    public $Target;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $TargetText The translation outcome.
     * @param string $Source The source language. See the request parameter `Source` for details.
     * @param string $Target The target language. See the request parameter `Target` for details.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("TargetText",$param) and $param["TargetText"] !== null) {
            $this->TargetText = $param["TargetText"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
