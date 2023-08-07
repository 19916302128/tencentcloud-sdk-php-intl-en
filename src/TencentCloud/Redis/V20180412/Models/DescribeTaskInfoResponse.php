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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskInfo response structure.
 *
 * @method string getStatus() Obtain Task status. Valid values: 
- `preparing`: To be run
- `running`: Running
- `succeed`: Succeeded
- `failed`: Failed
- `Error`: Error occurred while running
 * @method void setStatus(string $Status) Set Task status. Valid values: 
- `preparing`: To be run
- `running`: Running
- `succeed`: Succeeded
- `failed`: Failed
- `Error`: Error occurred while running
 * @method string getStartTime() Obtain Task start time
 * @method void setStartTime(string $StartTime) Set Task start time
 * @method string getTaskType() Obtain Task type, including `Create`, `Configure`, `Disable Instance`, `Clear Instance`, `Reset Password`, `Upgrade Version`, `Back up Instance`, `Modify Network`, `Migrate to New AZ` and `Promote to Master`.
 * @method void setTaskType(string $TaskType) Set Task type, including `Create`, `Configure`, `Disable Instance`, `Clear Instance`, `Reset Password`, `Upgrade Version`, `Back up Instance`, `Modify Network`, `Migrate to New AZ` and `Promote to Master`.
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getTaskMessage() Obtain Message returned by task execution, which will be an error message when execution fails or be empty when the status is `running `or `succeed-`.
 * @method void setTaskMessage(string $TaskMessage) Set Message returned by task execution, which will be an error message when execution fails or be empty when the status is `running `or `succeed-`.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeTaskInfoResponse extends AbstractModel
{
    /**
     * @var string Task status. Valid values: 
- `preparing`: To be run
- `running`: Running
- `succeed`: Succeeded
- `failed`: Failed
- `Error`: Error occurred while running
     */
    public $Status;

    /**
     * @var string Task start time
     */
    public $StartTime;

    /**
     * @var string Task type, including `Create`, `Configure`, `Disable Instance`, `Clear Instance`, `Reset Password`, `Upgrade Version`, `Back up Instance`, `Modify Network`, `Migrate to New AZ` and `Promote to Master`.
     */
    public $TaskType;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Message returned by task execution, which will be an error message when execution fails or be empty when the status is `running `or `succeed-`.
     */
    public $TaskMessage;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Status Task status. Valid values: 
- `preparing`: To be run
- `running`: Running
- `succeed`: Succeeded
- `failed`: Failed
- `Error`: Error occurred while running
     * @param string $StartTime Task start time
     * @param string $TaskType Task type, including `Create`, `Configure`, `Disable Instance`, `Clear Instance`, `Reset Password`, `Upgrade Version`, `Back up Instance`, `Modify Network`, `Migrate to New AZ` and `Promote to Master`.
     * @param string $InstanceId Instance ID
     * @param string $TaskMessage Message returned by task execution, which will be an error message when execution fails or be empty when the status is `running `or `succeed-`.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TaskMessage",$param) and $param["TaskMessage"] !== null) {
            $this->TaskMessage = $param["TaskMessage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
