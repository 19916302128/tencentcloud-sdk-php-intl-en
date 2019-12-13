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
 * @method array getAutoScalingInstanceSet() 获取List of instance details.
 * @method void setAutoScalingInstanceSet(array $AutoScalingInstanceSet) 设置List of instance details.
 * @method integer getTotalCount() 获取Number of eligible instances.
 * @method void setTotalCount(integer $TotalCount) 设置Number of eligible instances.
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeAutoScalingInstances response structure.
 */
class DescribeAutoScalingInstancesResponse extends AbstractModel
{
    /**
     * @var array List of instance details.
     */
    public $AutoScalingInstanceSet;

    /**
     * @var integer Number of eligible instances.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param array $AutoScalingInstanceSet List of instance details.
     * @param integer $TotalCount Number of eligible instances.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("AutoScalingInstanceSet",$param) and $param["AutoScalingInstanceSet"] !== null) {
            $this->AutoScalingInstanceSet = [];
            foreach ($param["AutoScalingInstanceSet"] as $key => $value){
                $obj = new Instance();
                $obj->deserialize($value);
                array_push($this->AutoScalingInstanceSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
