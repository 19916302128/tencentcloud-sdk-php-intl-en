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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBSlowLogs response structure.
 *
 * @method float getLockTimeSum() Obtain Sum of all statement lock durations
 * @method void setLockTimeSum(float $LockTimeSum) Set Sum of all statement lock durations
 * @method integer getQueryCount() Obtain Total number of statement queries
 * @method void setQueryCount(integer $QueryCount) Set Total number of statement queries
 * @method integer getTotal() Obtain Total number of slow queries that have been logged
 * @method void setTotal(integer $Total) Set Total number of slow queries that have been logged
 * @method float getQueryTimeSum() Obtain Sum of all statement query durations
 * @method void setQueryTimeSum(float $QueryTimeSum) Set Sum of all statement query durations
 * @method array getData() Obtain Slow query log data
 * @method void setData(array $Data) Set Slow query log data
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDBSlowLogsResponse extends AbstractModel
{
    /**
     * @var float Sum of all statement lock durations
     */
    public $LockTimeSum;

    /**
     * @var integer Total number of statement queries
     */
    public $QueryCount;

    /**
     * @var integer Total number of slow queries that have been logged
     */
    public $Total;

    /**
     * @var float Sum of all statement query durations
     */
    public $QueryTimeSum;

    /**
     * @var array Slow query log data
     */
    public $Data;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param float $LockTimeSum Sum of all statement lock durations
     * @param integer $QueryCount Total number of statement queries
     * @param integer $Total Total number of slow queries that have been logged
     * @param float $QueryTimeSum Sum of all statement query durations
     * @param array $Data Slow query log data
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
        if (array_key_exists("LockTimeSum",$param) and $param["LockTimeSum"] !== null) {
            $this->LockTimeSum = $param["LockTimeSum"];
        }

        if (array_key_exists("QueryCount",$param) and $param["QueryCount"] !== null) {
            $this->QueryCount = $param["QueryCount"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("QueryTimeSum",$param) and $param["QueryTimeSum"] !== null) {
            $this->QueryTimeSum = $param["QueryTimeSum"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new SlowLogData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
