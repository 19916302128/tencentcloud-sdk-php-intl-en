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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCU On-Cloud MixTranscoding layout parameters
 *
 * @method integer getTemplate() Obtain On-Cloud MixTranscoding layout template ID. 0: floating template (default value); 1: 9-grid template; 2: screen sharing template
 * @method void setTemplate(integer $Template) Set On-Cloud MixTranscoding layout template ID. 0: floating template (default value); 1: 9-grid template; 2: screen sharing template
 * @method string getMainVideoUserId() Obtain ID of the user in the big image on the left, which takes effect in the screen sharing template
 * @method void setMainVideoUserId(string $MainVideoUserId) Set ID of the user in the big image on the left, which takes effect in the screen sharing template
 * @method integer getMainVideoStreamType() Obtain Stream type of the big image on the left, which takes effect in the screen sharing template. 0: camera; 1: screen sharing. If a web user's stream is displayed in the big image on the left, enter 0 for this parameter
 * @method void setMainVideoStreamType(integer $MainVideoStreamType) Set Stream type of the big image on the left, which takes effect in the screen sharing template. 0: camera; 1: screen sharing. If a web user's stream is displayed in the big image on the left, enter 0 for this parameter
 * @method SmallVideoLayoutParams getSmallVideoLayoutParams() Obtain 
 * @method void setSmallVideoLayoutParams(SmallVideoLayoutParams $SmallVideoLayoutParams) Set 
 */
class LayoutParams extends AbstractModel
{
    /**
     * @var integer On-Cloud MixTranscoding layout template ID. 0: floating template (default value); 1: 9-grid template; 2: screen sharing template
     */
    public $Template;

    /**
     * @var string ID of the user in the big image on the left, which takes effect in the screen sharing template
     */
    public $MainVideoUserId;

    /**
     * @var integer Stream type of the big image on the left, which takes effect in the screen sharing template. 0: camera; 1: screen sharing. If a web user's stream is displayed in the big image on the left, enter 0 for this parameter
     */
    public $MainVideoStreamType;

    /**
     * @var SmallVideoLayoutParams 
     */
    public $SmallVideoLayoutParams;

    /**
     * @param integer $Template On-Cloud MixTranscoding layout template ID. 0: floating template (default value); 1: 9-grid template; 2: screen sharing template
     * @param string $MainVideoUserId ID of the user in the big image on the left, which takes effect in the screen sharing template
     * @param integer $MainVideoStreamType Stream type of the big image on the left, which takes effect in the screen sharing template. 0: camera; 1: screen sharing. If a web user's stream is displayed in the big image on the left, enter 0 for this parameter
     * @param SmallVideoLayoutParams $SmallVideoLayoutParams 
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
        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = $param["Template"];
        }

        if (array_key_exists("MainVideoUserId",$param) and $param["MainVideoUserId"] !== null) {
            $this->MainVideoUserId = $param["MainVideoUserId"];
        }

        if (array_key_exists("MainVideoStreamType",$param) and $param["MainVideoStreamType"] !== null) {
            $this->MainVideoStreamType = $param["MainVideoStreamType"];
        }

        if (array_key_exists("SmallVideoLayoutParams",$param) and $param["SmallVideoLayoutParams"] !== null) {
            $this->SmallVideoLayoutParams = new SmallVideoLayoutParams();
            $this->SmallVideoLayoutParams->deserialize($param["SmallVideoLayoutParams"]);
        }
    }
}
