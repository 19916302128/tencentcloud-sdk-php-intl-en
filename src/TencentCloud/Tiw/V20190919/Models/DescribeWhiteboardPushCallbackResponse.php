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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWhiteboardPushCallback response structure.
 *
 * @method string getCallback() Obtain Callback URL of the whiteboard push event. If no callback URL is set, this parameter is null.
 * @method void setCallback(string $Callback) Set Callback URL of the whiteboard push event. If no callback URL is set, this parameter is null.
 * @method string getCallbackKey() Obtain Callback authentication key for whiteboard push.
 * @method void setCallbackKey(string $CallbackKey) Set Callback authentication key for whiteboard push.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeWhiteboardPushCallbackResponse extends AbstractModel
{
    /**
     * @var string Callback URL of the whiteboard push event. If no callback URL is set, this parameter is null.
     */
    public $Callback;

    /**
     * @var string Callback authentication key for whiteboard push.
     */
    public $CallbackKey;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Callback Callback URL of the whiteboard push event. If no callback URL is set, this parameter is null.
     * @param string $CallbackKey Callback authentication key for whiteboard push.
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
        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = $param["Callback"];
        }

        if (array_key_exists("CallbackKey",$param) and $param["CallbackKey"] !== null) {
            $this->CallbackKey = $param["CallbackKey"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
