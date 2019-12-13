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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取Real server ID
 * @method void setInstanceId(string $InstanceId) 设置Real server ID
 * @method array getLoadBalancerIds() 获取List of CLB instance IDs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置List of CLB instance IDs
Note: This field may return null, indicating that no valid values can be obtained.
 */

/**
 *CLB information
 */
class ClassicalLoadBalancerInfo extends AbstractModel
{
    /**
     * @var string Real server ID
     */
    public $InstanceId;

    /**
     * @var array List of CLB instance IDs
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerIds;
    /**
     * @param string $InstanceId Real server ID
     * @param array $LoadBalancerIds List of CLB instance IDs
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }
    }
}
