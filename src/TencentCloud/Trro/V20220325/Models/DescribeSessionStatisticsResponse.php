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
 * DescribeSessionStatistics response structure.
 *
 * @method integer getSessionNum() Obtain Number of sessions.
 * @method void setSessionNum(integer $SessionNum) Set Number of sessions.
 * @method integer getTotalDuration() Obtain Call duration, unit: minutes.
 * @method void setTotalDuration(integer $TotalDuration) Set Call duration, unit: minutes.
 * @method integer getActiveFieldDeviceNum() Obtain Number of active on-site devices.
 * @method void setActiveFieldDeviceNum(integer $ActiveFieldDeviceNum) Set Number of active on-site devices.
 * @method integer getActiveRemoteDeviceNum() Obtain Number of active remote devices.
 * @method void setActiveRemoteDeviceNum(integer $ActiveRemoteDeviceNum) Set Number of active remote devices.
 * @method integer getNotBadSessionRatio() Obtain Proportion of excellent sessions, unit: %.
 * @method void setNotBadSessionRatio(integer $NotBadSessionRatio) Set Proportion of excellent sessions, unit: %.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeSessionStatisticsResponse extends AbstractModel
{
    /**
     * @var integer Number of sessions.
     */
    public $SessionNum;

    /**
     * @var integer Call duration, unit: minutes.
     */
    public $TotalDuration;

    /**
     * @var integer Number of active on-site devices.
     */
    public $ActiveFieldDeviceNum;

    /**
     * @var integer Number of active remote devices.
     */
    public $ActiveRemoteDeviceNum;

    /**
     * @var integer Proportion of excellent sessions, unit: %.
     */
    public $NotBadSessionRatio;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $SessionNum Number of sessions.
     * @param integer $TotalDuration Call duration, unit: minutes.
     * @param integer $ActiveFieldDeviceNum Number of active on-site devices.
     * @param integer $ActiveRemoteDeviceNum Number of active remote devices.
     * @param integer $NotBadSessionRatio Proportion of excellent sessions, unit: %.
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
        if (array_key_exists("SessionNum",$param) and $param["SessionNum"] !== null) {
            $this->SessionNum = $param["SessionNum"];
        }

        if (array_key_exists("TotalDuration",$param) and $param["TotalDuration"] !== null) {
            $this->TotalDuration = $param["TotalDuration"];
        }

        if (array_key_exists("ActiveFieldDeviceNum",$param) and $param["ActiveFieldDeviceNum"] !== null) {
            $this->ActiveFieldDeviceNum = $param["ActiveFieldDeviceNum"];
        }

        if (array_key_exists("ActiveRemoteDeviceNum",$param) and $param["ActiveRemoteDeviceNum"] !== null) {
            $this->ActiveRemoteDeviceNum = $param["ActiveRemoteDeviceNum"];
        }

        if (array_key_exists("NotBadSessionRatio",$param) and $param["NotBadSessionRatio"] !== null) {
            $this->NotBadSessionRatio = $param["NotBadSessionRatio"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
