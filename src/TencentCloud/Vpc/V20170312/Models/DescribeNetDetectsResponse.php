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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getNetDetectSet() 获取The array of network detection objects that meet requirements.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetDetectSet(array $NetDetectSet) 设置The array of network detection objects that meet requirements.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() 获取The number of network detection objects that meet requirements.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) 设置The number of network detection objects that meet requirements.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeNetDetects response structure.
 */
class DescribeNetDetectsResponse extends AbstractModel
{
    /**
     * @var array The array of network detection objects that meet requirements.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NetDetectSet;

    /**
     * @var integer The number of network detection objects that meet requirements.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param array $NetDetectSet The array of network detection objects that meet requirements.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount The number of network detection objects that meet requirements.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("NetDetectSet",$param) and $param["NetDetectSet"] !== null) {
            $this->NetDetectSet = [];
            foreach ($param["NetDetectSet"] as $key => $value){
                $obj = new NetDetect();
                $obj->deserialize($value);
                array_push($this->NetDetectSet, $obj);
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
