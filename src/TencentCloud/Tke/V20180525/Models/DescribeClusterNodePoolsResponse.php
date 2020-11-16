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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterNodePools response structure.
 *
 * @method array getNodePoolSet() Obtain NodePools (node pool list)
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setNodePoolSet(array $NodePoolSet) Set NodePools (node pool list)
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getTotalCount() Obtain Total resources
 * @method void setTotalCount(integer $TotalCount) Set Total resources
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeClusterNodePoolsResponse extends AbstractModel
{
    /**
     * @var array NodePools (node pool list)
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $NodePoolSet;

    /**
     * @var integer Total resources
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $NodePoolSet NodePools (node pool list)
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $TotalCount Total resources
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
        if (array_key_exists("NodePoolSet",$param) and $param["NodePoolSet"] !== null) {
            $this->NodePoolSet = [];
            foreach ($param["NodePoolSet"] as $key => $value){
                $obj = new NodePool();
                $obj->deserialize($value);
                array_push($this->NodePoolSet, $obj);
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
