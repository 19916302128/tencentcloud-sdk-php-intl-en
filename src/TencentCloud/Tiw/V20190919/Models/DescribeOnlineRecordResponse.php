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
 * DescribeOnlineRecord response structure.
 *
 * @method string getFinishReason() Obtain Recording stop reason
- AUTO: recording automatically stops because no upstream audio/video or whiteboard operation occurs in the room for a long time.
- USER_CALL: the API for stopping recording is called.
- EXCEPTION: an exception occurred during recording.
 * @method void setFinishReason(string $FinishReason) Set Recording stop reason
- AUTO: recording automatically stops because no upstream audio/video or whiteboard operation occurs in the room for a long time.
- USER_CALL: the API for stopping recording is called.
- EXCEPTION: an exception occurred during recording.
 * @method string getTaskId() Obtain ID of the recording task to be queried.
 * @method void setTaskId(string $TaskId) Set ID of the recording task to be queried.
 * @method string getStatus() Obtain Recording task status
- PREPARED: preparing
- RECORDING: recording
- PAUSED: recording is paused.
- STOPPED: recording is stopped, and the recorded video is being processed and uploaded.
- FINISHED: the recorded video has been processed and uploaded, and the recording result is generated.
 * @method void setStatus(string $Status) Set Recording task status
- PREPARED: preparing
- RECORDING: recording
- PAUSED: recording is paused.
- STOPPED: recording is stopped, and the recorded video is being processed and uploaded.
- FINISHED: the recorded video has been processed and uploaded, and the recording result is generated.
 * @method integer getRoomId() Obtain Room ID
 * @method void setRoomId(integer $RoomId) Set Room ID
 * @method string getGroupId() Obtain Group ID of the whiteboard
 * @method void setGroupId(string $GroupId) Set Group ID of the whiteboard
 * @method string getRecordUserId() Obtain ID of the recording user
 * @method void setRecordUserId(string $RecordUserId) Set ID of the recording user
 * @method integer getRecordStartTime() Obtain Actual recording start time, which is a UNIX timestamp in seconds
 * @method void setRecordStartTime(integer $RecordStartTime) Set Actual recording start time, which is a UNIX timestamp in seconds
 * @method integer getRecordStopTime() Obtain Actual recording stop time, which is a UNIX timestamp in seconds
 * @method void setRecordStopTime(integer $RecordStopTime) Set Actual recording stop time, which is a UNIX timestamp in seconds
 * @method integer getTotalTime() Obtain Total video playback duration, in milliseconds
 * @method void setTotalTime(integer $TotalTime) Set Total video playback duration, in milliseconds
 * @method integer getExceptionCnt() Obtain Number of exceptions during recording
 * @method void setExceptionCnt(integer $ExceptionCnt) Set Number of exceptions during recording
 * @method array getOmittedDurations() Obtain Duration to be deleted in the spliced video. This parameter is valid only when the video splicing feature is enabled.
 * @method void setOmittedDurations(array $OmittedDurations) Set Duration to be deleted in the spliced video. This parameter is valid only when the video splicing feature is enabled.
 * @method array getVideoInfos() Obtain List of recorded videos
 * @method void setVideoInfos(array $VideoInfos) Set List of recorded videos
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeOnlineRecordResponse extends AbstractModel
{
    /**
     * @var string Recording stop reason
- AUTO: recording automatically stops because no upstream audio/video or whiteboard operation occurs in the room for a long time.
- USER_CALL: the API for stopping recording is called.
- EXCEPTION: an exception occurred during recording.
     */
    public $FinishReason;

    /**
     * @var string ID of the recording task to be queried.
     */
    public $TaskId;

    /**
     * @var string Recording task status
- PREPARED: preparing
- RECORDING: recording
- PAUSED: recording is paused.
- STOPPED: recording is stopped, and the recorded video is being processed and uploaded.
- FINISHED: the recorded video has been processed and uploaded, and the recording result is generated.
     */
    public $Status;

    /**
     * @var integer Room ID
     */
    public $RoomId;

    /**
     * @var string Group ID of the whiteboard
     */
    public $GroupId;

    /**
     * @var string ID of the recording user
     */
    public $RecordUserId;

    /**
     * @var integer Actual recording start time, which is a UNIX timestamp in seconds
     */
    public $RecordStartTime;

    /**
     * @var integer Actual recording stop time, which is a UNIX timestamp in seconds
     */
    public $RecordStopTime;

    /**
     * @var integer Total video playback duration, in milliseconds
     */
    public $TotalTime;

    /**
     * @var integer Number of exceptions during recording
     */
    public $ExceptionCnt;

    /**
     * @var array Duration to be deleted in the spliced video. This parameter is valid only when the video splicing feature is enabled.
     */
    public $OmittedDurations;

    /**
     * @var array List of recorded videos
     */
    public $VideoInfos;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $FinishReason Recording stop reason
- AUTO: recording automatically stops because no upstream audio/video or whiteboard operation occurs in the room for a long time.
- USER_CALL: the API for stopping recording is called.
- EXCEPTION: an exception occurred during recording.
     * @param string $TaskId ID of the recording task to be queried.
     * @param string $Status Recording task status
- PREPARED: preparing
- RECORDING: recording
- PAUSED: recording is paused.
- STOPPED: recording is stopped, and the recorded video is being processed and uploaded.
- FINISHED: the recorded video has been processed and uploaded, and the recording result is generated.
     * @param integer $RoomId Room ID
     * @param string $GroupId Group ID of the whiteboard
     * @param string $RecordUserId ID of the recording user
     * @param integer $RecordStartTime Actual recording start time, which is a UNIX timestamp in seconds
     * @param integer $RecordStopTime Actual recording stop time, which is a UNIX timestamp in seconds
     * @param integer $TotalTime Total video playback duration, in milliseconds
     * @param integer $ExceptionCnt Number of exceptions during recording
     * @param array $OmittedDurations Duration to be deleted in the spliced video. This parameter is valid only when the video splicing feature is enabled.
     * @param array $VideoInfos List of recorded videos
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

        if (array_key_exists("RecordUserId",$param) and $param["RecordUserId"] !== null) {
            $this->RecordUserId = $param["RecordUserId"];
        }

        if (array_key_exists("RecordStartTime",$param) and $param["RecordStartTime"] !== null) {
            $this->RecordStartTime = $param["RecordStartTime"];
        }

        if (array_key_exists("RecordStopTime",$param) and $param["RecordStopTime"] !== null) {
            $this->RecordStopTime = $param["RecordStopTime"];
        }

        if (array_key_exists("TotalTime",$param) and $param["TotalTime"] !== null) {
            $this->TotalTime = $param["TotalTime"];
        }

        if (array_key_exists("ExceptionCnt",$param) and $param["ExceptionCnt"] !== null) {
            $this->ExceptionCnt = $param["ExceptionCnt"];
        }

        if (array_key_exists("OmittedDurations",$param) and $param["OmittedDurations"] !== null) {
            $this->OmittedDurations = [];
            foreach ($param["OmittedDurations"] as $key => $value){
                $obj = new OmittedDuration();
                $obj->deserialize($value);
                array_push($this->OmittedDurations, $obj);
            }
        }

        if (array_key_exists("VideoInfos",$param) and $param["VideoInfos"] !== null) {
            $this->VideoInfos = [];
            foreach ($param["VideoInfos"] as $key => $value){
                $obj = new VideoInfo();
                $obj->deserialize($value);
                array_push($this->VideoInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
