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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取Connection instance ID.
 * @method void setInstanceId(string $InstanceId) 设置Connection instance ID.
 * @method string getStatus() 获取Connection status.
Where:
RUNNING: running;
CREATING: creating;
DESTROYING: terminating;
OPENING: enabling;
CLOSING: disabling;
CLOSED: disabled;
ADJUSTING: adjusting configuration
ISOLATING: isolating;
ISOLATED: isolated;
UNKNOWN: unknown status.
 * @method void setStatus(string $Status) 设置Connection status.
Where:
RUNNING: running;
CREATING: creating;
DESTROYING: terminating;
OPENING: enabling;
CLOSING: disabling;
CLOSED: disabled;
ADJUSTING: adjusting configuration
ISOLATING: isolating;
ISOLATED: isolated;
UNKNOWN: unknown status.
 */

/**
 *Connection status information
 */
class ProxyStatus extends AbstractModel
{
    /**
     * @var string Connection instance ID.
     */
    public $InstanceId;

    /**
     * @var string Connection status.
Where:
RUNNING: running;
CREATING: creating;
DESTROYING: terminating;
OPENING: enabling;
CLOSING: disabling;
CLOSED: disabled;
ADJUSTING: adjusting configuration
ISOLATING: isolating;
ISOLATED: isolated;
UNKNOWN: unknown status.
     */
    public $Status;
    /**
     * @param string $InstanceId Connection instance ID.
     * @param string $Status Connection status.
Where:
RUNNING: running;
CREATING: creating;
DESTROYING: terminating;
OPENING: enabling;
CLOSING: disabling;
CLOSED: disabled;
ADJUSTING: adjusting configuration
ISOLATING: isolating;
ISOLATED: isolated;
UNKNOWN: unknown status.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
