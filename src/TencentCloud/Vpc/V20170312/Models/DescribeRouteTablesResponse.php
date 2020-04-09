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
 * DescribeRouteTables response structure.
 *
 * @method integer getTotalCount() Obtain The number of instances meeting the filter condition.
 * @method void setTotalCount(integer $TotalCount) Set The number of instances meeting the filter condition.
 * @method array getRouteTableSet() Obtain Route table object.
 * @method void setRouteTableSet(array $RouteTableSet) Set Route table object.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRouteTablesResponse extends AbstractModel
{
    /**
     * @var integer The number of instances meeting the filter condition.
     */
    public $TotalCount;

    /**
     * @var array Route table object.
     */
    public $RouteTableSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount The number of instances meeting the filter condition.
     * @param array $RouteTableSet Route table object.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RouteTableSet",$param) and $param["RouteTableSet"] !== null) {
            $this->RouteTableSet = [];
            foreach ($param["RouteTableSet"] as $key => $value){
                $obj = new RouteTable();
                $obj->deserialize($value);
                array_push($this->RouteTableSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
