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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCU On-Cloud MixTranscoding output parameters
 *
 * @method string getStreamId() Obtain Custom live stream ID, which must be different from the ID of relayed stream.
 * @method void setStreamId(string $StreamId) Set Custom live stream ID, which must be different from the ID of relayed stream.
 * @method integer getPureAudioStream() Obtain Value range: [0, 1]. If it is 0, live streams are audio and video; if it is 1, live streams are only audio. Default value: 0.
 * @method void setPureAudioStream(integer $PureAudioStream) Set Value range: [0, 1]. If it is 0, live streams are audio and video; if it is 1, live streams are only audio. Default value: 0.
 * @method string getRecordId() Obtain Custom recording file name
 * @method void setRecordId(string $RecordId) Set Custom recording file name
 * @method integer getRecordAudioOnly() Obtain Value range: [0, 1]. If it is 0, the recording template configured in the console will be used; if it is 1, streams are recorded as .mp3 files.
 * @method void setRecordAudioOnly(integer $RecordAudioOnly) Set Value range: [0, 1]. If it is 0, the recording template configured in the console will be used; if it is 1, streams are recorded as .mp3 files.
 */
class OutputParams extends AbstractModel
{
    /**
     * @var string Custom live stream ID, which must be different from the ID of relayed stream.
     */
    public $StreamId;

    /**
     * @var integer Value range: [0, 1]. If it is 0, live streams are audio and video; if it is 1, live streams are only audio. Default value: 0.
     */
    public $PureAudioStream;

    /**
     * @var string Custom recording file name
     */
    public $RecordId;

    /**
     * @var integer Value range: [0, 1]. If it is 0, the recording template configured in the console will be used; if it is 1, streams are recorded as .mp3 files.
     */
    public $RecordAudioOnly;

    /**
     * @param string $StreamId Custom live stream ID, which must be different from the ID of relayed stream.
     * @param integer $PureAudioStream Value range: [0, 1]. If it is 0, live streams are audio and video; if it is 1, live streams are only audio. Default value: 0.
     * @param string $RecordId Custom recording file name
     * @param integer $RecordAudioOnly Value range: [0, 1]. If it is 0, the recording template configured in the console will be used; if it is 1, streams are recorded as .mp3 files.
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
        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }

        if (array_key_exists("PureAudioStream",$param) and $param["PureAudioStream"] !== null) {
            $this->PureAudioStream = $param["PureAudioStream"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("RecordAudioOnly",$param) and $param["RecordAudioOnly"] !== null) {
            $this->RecordAudioOnly = $param["RecordAudioOnly"];
        }
    }
}
