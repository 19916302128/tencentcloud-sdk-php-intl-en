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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLoadBalancingDetail request structure.
 *
 * @method string getZoneId() Obtain Site ID
 * @method void setZoneId(string $ZoneId) Set Site ID
 * @method string getLoadBalancingId() Obtain CLB instance ID
 * @method void setLoadBalancingId(string $LoadBalancingId) Set CLB instance ID
 */
class DescribeLoadBalancingDetailRequest extends AbstractModel
{
    /**
     * @var string Site ID
     */
    public $ZoneId;

    /**
     * @var string CLB instance ID
     */
    public $LoadBalancingId;

    /**
     * @param string $ZoneId Site ID
     * @param string $LoadBalancingId CLB instance ID
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("LoadBalancingId",$param) and $param["LoadBalancingId"] !== null) {
            $this->LoadBalancingId = $param["LoadBalancingId"];
        }
    }
}
