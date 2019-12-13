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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取Instance ID.
 * @method void setInstanceId(string $InstanceId) 设置Instance ID.
 * @method string getInstanceStatus() 获取Status of the instance in the scaling activity. Value range:
<li>INIT: initializing
<li>RUNNING: running
<li>SUCCESSFUL: succeeded
<li>FAILED: failed
 * @method void setInstanceStatus(string $InstanceStatus) 设置Status of the instance in the scaling activity. Value range:
<li>INIT: initializing
<li>RUNNING: running
<li>SUCCESSFUL: succeeded
<li>FAILED: failed
 */

/**
 *Information of the instances related to the current scaling activity.
 */
class ActivtyRelatedInstance extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Status of the instance in the scaling activity. Value range:
<li>INIT: initializing
<li>RUNNING: running
<li>SUCCESSFUL: succeeded
<li>FAILED: failed
     */
    public $InstanceStatus;
    /**
     * @param string $InstanceId Instance ID.
     * @param string $InstanceStatus Status of the instance in the scaling activity. Value range:
<li>INIT: initializing
<li>RUNNING: running
<li>SUCCESSFUL: succeeded
<li>FAILED: failed
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

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }
    }
}
