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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getOperator() 获取UIN of operator.
Note: This field may return null, indicating that no valid value was found.
 * @method void setOperator(string $Operator) 设置UIN of operator.
Note: This field may return null, indicating that no valid value was found.
 * @method string getOperation() 获取Operation type. Value range:
SNAP_OPERATION_DELETE: Delete snapshot
SNAP_OPERATION_ROLLBACK: Roll back snapshot
SNAP_OPERATION_MODIFY: Modify snapshot attributes
SNAP_OPERATION_CREATE: Create snapshot
SNAP_OPERATION_COPY: Cross-region replication of snapshot
ASP_OPERATION_CREATE_SNAP: Create snapshot with scheduled snapshot policy
ASP_OPERATION_DELETE_SNAP: Delete snapshot from scheduled snapshot policy
 * @method void setOperation(string $Operation) 设置Operation type. Value range:
SNAP_OPERATION_DELETE: Delete snapshot
SNAP_OPERATION_ROLLBACK: Roll back snapshot
SNAP_OPERATION_MODIFY: Modify snapshot attributes
SNAP_OPERATION_CREATE: Create snapshot
SNAP_OPERATION_COPY: Cross-region replication of snapshot
ASP_OPERATION_CREATE_SNAP: Create snapshot with scheduled snapshot policy
ASP_OPERATION_DELETE_SNAP: Delete snapshot from scheduled snapshot policy
 * @method string getSnapshotId() 获取ID of snapshot being operated.
 * @method void setSnapshotId(string $SnapshotId) 设置ID of snapshot being operated.
 * @method string getOperationState() 获取Status of operation. Value range:
SUCCESS: Operation successful 
FAILED: Operation failed 
PROCESSING: Operation in process
 * @method void setOperationState(string $OperationState) 设置Status of operation. Value range:
SUCCESS: Operation successful 
FAILED: Operation failed 
PROCESSING: Operation in process
 * @method string getStartTime() 获取Start time
 * @method void setStartTime(string $StartTime) 设置Start time
 * @method string getEndTime() 获取End time
 * @method void setEndTime(string $EndTime) 设置End time
 */

/**
 *The snapshot operation log.
 */
class SnapshotOperationLog extends AbstractModel
{
    /**
     * @var string UIN of operator.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Operator;

    /**
     * @var string Operation type. Value range:
SNAP_OPERATION_DELETE: Delete snapshot
SNAP_OPERATION_ROLLBACK: Roll back snapshot
SNAP_OPERATION_MODIFY: Modify snapshot attributes
SNAP_OPERATION_CREATE: Create snapshot
SNAP_OPERATION_COPY: Cross-region replication of snapshot
ASP_OPERATION_CREATE_SNAP: Create snapshot with scheduled snapshot policy
ASP_OPERATION_DELETE_SNAP: Delete snapshot from scheduled snapshot policy
     */
    public $Operation;

    /**
     * @var string ID of snapshot being operated.
     */
    public $SnapshotId;

    /**
     * @var string Status of operation. Value range:
SUCCESS: Operation successful 
FAILED: Operation failed 
PROCESSING: Operation in process
     */
    public $OperationState;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;
    /**
     * @param string $Operator UIN of operator.
Note: This field may return null, indicating that no valid value was found.
     * @param string $Operation Operation type. Value range:
SNAP_OPERATION_DELETE: Delete snapshot
SNAP_OPERATION_ROLLBACK: Roll back snapshot
SNAP_OPERATION_MODIFY: Modify snapshot attributes
SNAP_OPERATION_CREATE: Create snapshot
SNAP_OPERATION_COPY: Cross-region replication of snapshot
ASP_OPERATION_CREATE_SNAP: Create snapshot with scheduled snapshot policy
ASP_OPERATION_DELETE_SNAP: Delete snapshot from scheduled snapshot policy
     * @param string $SnapshotId ID of snapshot being operated.
     * @param string $OperationState Status of operation. Value range:
SUCCESS: Operation successful 
FAILED: Operation failed 
PROCESSING: Operation in process
     * @param string $StartTime Start time
     * @param string $EndTime End time
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("OperationState",$param) and $param["OperationState"] !== null) {
            $this->OperationState = $param["OperationState"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
