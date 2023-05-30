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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSnapshotTask response structure.
 *
 * @method string getTaskID() Obtain Task ID.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setTaskID(string $TaskID) Set Task ID.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Task status.
Running: The task is running.
Finished: The task is finished.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Task status.
Running: The task is running.
Finished: The task is finished.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Creation time of the task. Unit: seconds.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set Creation time of the task. Unit: seconds.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method integer getFinishTime() Obtain Completion time of the task. Unit: seconds.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setFinishTime(integer $FinishTime) Set Completion time of the task. Unit: seconds.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method SnapshotResult getResult() Obtain Task result information.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setResult(SnapshotResult $Result) Set Task result information.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSnapshotTaskResponse extends AbstractModel
{
    /**
     * @var string Task ID.
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $TaskID;

    /**
     * @var string Task status.
Running: The task is running.
Finished: The task is finished.
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Creation time of the task. Unit: seconds.
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer Completion time of the task. Unit: seconds.
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $FinishTime;

    /**
     * @var SnapshotResult Task result information.
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $Result;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $TaskID Task ID.
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param string $Status Task status.
Running: The task is running.
Finished: The task is finished.
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Creation time of the task. Unit: seconds.
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param integer $FinishTime Completion time of the task. Unit: seconds.
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param SnapshotResult $Result Task result information.
Note: This parameter may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new SnapshotResult();
            $this->Result->deserialize($param["Result"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
