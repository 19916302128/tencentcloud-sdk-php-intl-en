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
 * DescribeWhiteboardPush response structure.
 *
 * @method string getFinishReason() Obtain Reason for push stop.
- AUTO: Pushing automatically stops because no upstream audio/video or whiteboard operation occurs in the room for a long time.
- USER_CALL: The API for stopping pushing is called.
- EXCEPTION: An exception occurred.
 * @method void setFinishReason(string $FinishReason) Set Reason for push stop.
- AUTO: Pushing automatically stops because no upstream audio/video or whiteboard operation occurs in the room for a long time.
- USER_CALL: The API for stopping pushing is called.
- EXCEPTION: An exception occurred.
 * @method string getTaskId() Obtain ID of the whiteboard push task.
 * @method void setTaskId(string $TaskId) Set ID of the whiteboard push task.
 * @method string getStatus() Obtain Status of the push task.
- PREPARED: Push in preparation (including entering the room and starting the push service).
- PUSHING: Pushing in progress.
- STOPPED: Pushing stopped.
 * @method void setStatus(string $Status) Set Status of the push task.
- PREPARED: Push in preparation (including entering the room and starting the push service).
- PUSHING: Pushing in progress.
- STOPPED: Pushing stopped.
 * @method integer getRoomId() Obtain Room ID.
 * @method void setRoomId(integer $RoomId) Set Room ID.
 * @method string getGroupId() Obtain Group ID of the whiteboard.
 * @method void setGroupId(string $GroupId) Set Group ID of the whiteboard.
 * @method string getPushUserId() Obtain User ID of the push task.
 * @method void setPushUserId(string $PushUserId) Set User ID of the push task.
 * @method integer getPushStartTime() Obtain Actual push start time, which is a Unix timestamp in seconds.
 * @method void setPushStartTime(integer $PushStartTime) Set Actual push start time, which is a Unix timestamp in seconds.
 * @method integer getPushStopTime() Obtain Actual push stop time, which is a Unix timestamp in seconds.
 * @method void setPushStopTime(integer $PushStopTime) Set Actual push stop time, which is a Unix timestamp in seconds.
 * @method integer getExceptionCnt() Obtain Number of exceptions during push.
 * @method void setExceptionCnt(integer $ExceptionCnt) Set Number of exceptions during push.
 * @method integer getIMSyncTime() Obtain IM timestamp corresponding to the first frame of the whiteboard push video. The timestamp is used for time synchronization between IM messages and the whiteboard push video during playback.
 * @method void setIMSyncTime(integer $IMSyncTime) Set IM timestamp corresponding to the first frame of the whiteboard push video. The timestamp is used for time synchronization between IM messages and the whiteboard push video during playback.
 * @method string getBackup() Obtain Result information of the backup push task.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setBackup(string $Backup) Set Result information of the backup push task.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeWhiteboardPushResponse extends AbstractModel
{
    /**
     * @var string Reason for push stop.
- AUTO: Pushing automatically stops because no upstream audio/video or whiteboard operation occurs in the room for a long time.
- USER_CALL: The API for stopping pushing is called.
- EXCEPTION: An exception occurred.
     */
    public $FinishReason;

    /**
     * @var string ID of the whiteboard push task.
     */
    public $TaskId;

    /**
     * @var string Status of the push task.
- PREPARED: Push in preparation (including entering the room and starting the push service).
- PUSHING: Pushing in progress.
- STOPPED: Pushing stopped.
     */
    public $Status;

    /**
     * @var integer Room ID.
     */
    public $RoomId;

    /**
     * @var string Group ID of the whiteboard.
     */
    public $GroupId;

    /**
     * @var string User ID of the push task.
     */
    public $PushUserId;

    /**
     * @var integer Actual push start time, which is a Unix timestamp in seconds.
     */
    public $PushStartTime;

    /**
     * @var integer Actual push stop time, which is a Unix timestamp in seconds.
     */
    public $PushStopTime;

    /**
     * @var integer Number of exceptions during push.
     */
    public $ExceptionCnt;

    /**
     * @var integer IM timestamp corresponding to the first frame of the whiteboard push video. The timestamp is used for time synchronization between IM messages and the whiteboard push video during playback.
     */
    public $IMSyncTime;

    /**
     * @var string Result information of the backup push task.
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $Backup;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $FinishReason Reason for push stop.
- AUTO: Pushing automatically stops because no upstream audio/video or whiteboard operation occurs in the room for a long time.
- USER_CALL: The API for stopping pushing is called.
- EXCEPTION: An exception occurred.
     * @param string $TaskId ID of the whiteboard push task.
     * @param string $Status Status of the push task.
- PREPARED: Push in preparation (including entering the room and starting the push service).
- PUSHING: Pushing in progress.
- STOPPED: Pushing stopped.
     * @param integer $RoomId Room ID.
     * @param string $GroupId Group ID of the whiteboard.
     * @param string $PushUserId User ID of the push task.
     * @param integer $PushStartTime Actual push start time, which is a Unix timestamp in seconds.
     * @param integer $PushStopTime Actual push stop time, which is a Unix timestamp in seconds.
     * @param integer $ExceptionCnt Number of exceptions during push.
     * @param integer $IMSyncTime IM timestamp corresponding to the first frame of the whiteboard push video. The timestamp is used for time synchronization between IM messages and the whiteboard push video during playback.
     * @param string $Backup Result information of the backup push task.
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
        if (array_key_exists("FinishReason",$param) and $param["FinishReason"] !== null) {
            $this->FinishReason = $param["FinishReason"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("PushUserId",$param) and $param["PushUserId"] !== null) {
            $this->PushUserId = $param["PushUserId"];
        }

        if (array_key_exists("PushStartTime",$param) and $param["PushStartTime"] !== null) {
            $this->PushStartTime = $param["PushStartTime"];
        }

        if (array_key_exists("PushStopTime",$param) and $param["PushStopTime"] !== null) {
            $this->PushStopTime = $param["PushStopTime"];
        }

        if (array_key_exists("ExceptionCnt",$param) and $param["ExceptionCnt"] !== null) {
            $this->ExceptionCnt = $param["ExceptionCnt"];
        }

        if (array_key_exists("IMSyncTime",$param) and $param["IMSyncTime"] !== null) {
            $this->IMSyncTime = $param["IMSyncTime"];
        }

        if (array_key_exists("Backup",$param) and $param["Backup"] !== null) {
            $this->Backup = $param["Backup"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
