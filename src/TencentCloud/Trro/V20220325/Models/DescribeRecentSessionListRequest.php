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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRecentSessionList request structure.
 *
 * @method string getProjectId() Obtain Project id.
 * @method void setProjectId(string $ProjectId) Set Project id.
 * @method integer getPageNumber() Obtain Page number, beginning from 1.
 * @method void setPageNumber(integer $PageNumber) Set Page number, beginning from 1.
 * @method integer getPageSize() Obtain Number of entries per page.
 * @method void setPageSize(integer $PageSize) Set Number of entries per page.
 * @method string getDeviceId() Obtain Device id, supports filtering by remote device or on-site device.
 * @method void setDeviceId(string $DeviceId) Set Device id, supports filtering by remote device or on-site device.
 * @method integer getStartTime() Obtain Start time of the time range. the maximum time range is the last two hours. if not specified or out of range, the start time is calculated as two hours ago.
 * @method void setStartTime(integer $StartTime) Set Start time of the time range. the maximum time range is the last two hours. if not specified or out of range, the start time is calculated as two hours ago.
 * @method integer getEndTime() Obtain End time of the time range. the maximum time range is the last two hours. if not specified or out of range, the end time is calculated as the current time.
 * @method void setEndTime(integer $EndTime) Set End time of the time range. the maximum time range is the last two hours. if not specified or out of range, the end time is calculated as the current time.
 */
class DescribeRecentSessionListRequest extends AbstractModel
{
    /**
     * @var string Project id.
     */
    public $ProjectId;

    /**
     * @var integer Page number, beginning from 1.
     */
    public $PageNumber;

    /**
     * @var integer Number of entries per page.
     */
    public $PageSize;

    /**
     * @var string Device id, supports filtering by remote device or on-site device.
     */
    public $DeviceId;

    /**
     * @var integer Start time of the time range. the maximum time range is the last two hours. if not specified or out of range, the start time is calculated as two hours ago.
     */
    public $StartTime;

    /**
     * @var integer End time of the time range. the maximum time range is the last two hours. if not specified or out of range, the end time is calculated as the current time.
     */
    public $EndTime;

    /**
     * @param string $ProjectId Project id.
     * @param integer $PageNumber Page number, beginning from 1.
     * @param integer $PageSize Number of entries per page.
     * @param string $DeviceId Device id, supports filtering by remote device or on-site device.
     * @param integer $StartTime Start time of the time range. the maximum time range is the last two hours. if not specified or out of range, the start time is calculated as two hours ago.
     * @param integer $EndTime End time of the time range. the maximum time range is the last two hours. if not specified or out of range, the end time is calculated as the current time.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
