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
 * @method string getAutoScalingPolicyId() 获取ID of the alarm policy to be deleted.
 * @method void setAutoScalingPolicyId(string $AutoScalingPolicyId) 设置ID of the alarm policy to be deleted.
 */

/**
 *DeleteScalingPolicy request structure.
 */
class DeleteScalingPolicyRequest extends AbstractModel
{
    /**
     * @var string ID of the alarm policy to be deleted.
     */
    public $AutoScalingPolicyId;
    /**
     * @param string $AutoScalingPolicyId ID of the alarm policy to be deleted.
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
        if (array_key_exists("AutoScalingPolicyId",$param) and $param["AutoScalingPolicyId"] !== null) {
            $this->AutoScalingPolicyId = $param["AutoScalingPolicyId"];
        }
    }
}
