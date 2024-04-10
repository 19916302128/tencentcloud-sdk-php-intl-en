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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmNotices response structure.
 *
 * @method array getAlarmNotices() Obtain Alarm notification template list
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAlarmNotices(array $AlarmNotices) Set Alarm notification template list
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Total number of eligible alarm notification templates
 * @method void setTotalCount(integer $TotalCount) Set Total number of eligible alarm notification templates
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeAlarmNoticesResponse extends AbstractModel
{
    /**
     * @var array Alarm notification template list
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AlarmNotices;

    /**
     * @var integer Total number of eligible alarm notification templates
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $AlarmNotices Alarm notification template list
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $TotalCount Total number of eligible alarm notification templates
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("AlarmNotices",$param) and $param["AlarmNotices"] !== null) {
            $this->AlarmNotices = [];
            foreach ($param["AlarmNotices"] as $key => $value){
                $obj = new AlarmNotice();
                $obj->deserialize($value);
                array_push($this->AlarmNotices, $obj);
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
