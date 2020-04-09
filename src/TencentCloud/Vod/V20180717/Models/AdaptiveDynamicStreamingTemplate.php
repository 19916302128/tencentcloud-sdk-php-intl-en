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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of a transcoding to adaptive bitrate streaming template
 *
 * @method integer getDefinition() Obtain Unique ID of a transcoding to adaptive bitrate streaming template.
 * @method void setDefinition(integer $Definition) Set Unique ID of a transcoding to adaptive bitrate streaming template.
 * @method string getType() Obtain Template type. Valid values:
<li>Preset: preset template;</li>
<li>Custom: custom template.</li>
 * @method void setType(string $Type) Set Template type. Valid values:
<li>Preset: preset template;</li>
<li>Custom: custom template.</li>
 * @method string getName() Obtain Name of a transcoding to adaptive bitrate streaming template.
 * @method void setName(string $Name) Set Name of a transcoding to adaptive bitrate streaming template.
 * @method string getComment() Obtain Description of a transcoding to adaptive bitrate streaming template.
 * @method void setComment(string $Comment) Set Description of a transcoding to adaptive bitrate streaming template.
 * @method string getPackageType() Obtain Container type. Valid values:
<li>hls; </li>
<li>dash.</li>
 * @method void setPackageType(string $PackageType) Set Container type. Valid values:
<li>hls; </li>
<li>dash.</li>
 * @method string getDrmType() Obtain DRM type. Valid values:
<li>FairPlay;</li>
<li>SimpleAES;</li>
<li>Widevine.</li>
If this field is a blank string, DRM will not be performed on the video.
 * @method void setDrmType(string $DrmType) Set DRM type. Valid values:
<li>FairPlay;</li>
<li>SimpleAES;</li>
<li>Widevine.</li>
If this field is a blank string, DRM will not be performed on the video.
 * @method array getVideoTrackTemplateSet() Obtain List of video track templates.
 * @method void setVideoTrackTemplateSet(array $VideoTrackTemplateSet) Set List of video track templates.
 * @method array getAudioTrackTemplateSet() Obtain List of audio track templates.
 * @method void setAudioTrackTemplateSet(array $AudioTrackTemplateSet) Set List of audio track templates.
 * @method string getFormat() Obtain Adaptive bitstream format. Valid value:
<li>HLS.</li>
 * @method void setFormat(string $Format) Set Adaptive bitstream format. Valid value:
<li>HLS.</li>
 * @method array getStreamInfos() Obtain Parameter information of input stream for adaptive bitrate streaming. Up to 10 streams can be input.
 * @method void setStreamInfos(array $StreamInfos) Set Parameter information of input stream for adaptive bitrate streaming. Up to 10 streams can be input.
 * @method integer getDisableHigherVideoBitrate() Obtain Whether to prohibit transcoding from low bitrate to high bitrate. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
 * @method void setDisableHigherVideoBitrate(integer $DisableHigherVideoBitrate) Set Whether to prohibit transcoding from low bitrate to high bitrate. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
 * @method integer getDisableHigherVideoResolution() Obtain Whether to prohibit transcoding from low resolution to high resolution. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
 * @method void setDisableHigherVideoResolution(integer $DisableHigherVideoResolution) Set Whether to prohibit transcoding from low resolution to high resolution. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
 * @method string getCreateTime() Obtain Creation time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
 * @method void setCreateTime(string $CreateTime) Set Creation time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
 * @method string getUpdateTime() Obtain Last modified time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
 */
class AdaptiveDynamicStreamingTemplate extends AbstractModel
{
    /**
     * @var integer Unique ID of a transcoding to adaptive bitrate streaming template.
     */
    public $Definition;

    /**
     * @var string Template type. Valid values:
<li>Preset: preset template;</li>
<li>Custom: custom template.</li>
     */
    public $Type;

    /**
     * @var string Name of a transcoding to adaptive bitrate streaming template.
     */
    public $Name;

    /**
     * @var string Description of a transcoding to adaptive bitrate streaming template.
     */
    public $Comment;

    /**
     * @var string Container type. Valid values:
<li>hls; </li>
<li>dash.</li>
     */
    public $PackageType;

    /**
     * @var string DRM type. Valid values:
<li>FairPlay;</li>
<li>SimpleAES;</li>
<li>Widevine.</li>
If this field is a blank string, DRM will not be performed on the video.
     */
    public $DrmType;

    /**
     * @var array List of video track templates.
     */
    public $VideoTrackTemplateSet;

    /**
     * @var array List of audio track templates.
     */
    public $AudioTrackTemplateSet;

    /**
     * @var string Adaptive bitstream format. Valid value:
<li>HLS.</li>
     */
    public $Format;

    /**
     * @var array Parameter information of input stream for adaptive bitrate streaming. Up to 10 streams can be input.
     */
    public $StreamInfos;

    /**
     * @var integer Whether to prohibit transcoding from low bitrate to high bitrate. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
     */
    public $DisableHigherVideoBitrate;

    /**
     * @var integer Whether to prohibit transcoding from low resolution to high resolution. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
     */
    public $DisableHigherVideoResolution;

    /**
     * @var string Creation time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
     */
    public $CreateTime;

    /**
     * @var string Last modified time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
     */
    public $UpdateTime;

    /**
     * @param integer $Definition Unique ID of a transcoding to adaptive bitrate streaming template.
     * @param string $Type Template type. Valid values:
<li>Preset: preset template;</li>
<li>Custom: custom template.</li>
     * @param string $Name Name of a transcoding to adaptive bitrate streaming template.
     * @param string $Comment Description of a transcoding to adaptive bitrate streaming template.
     * @param string $PackageType Container type. Valid values:
<li>hls; </li>
<li>dash.</li>
     * @param string $DrmType DRM type. Valid values:
<li>FairPlay;</li>
<li>SimpleAES;</li>
<li>Widevine.</li>
If this field is a blank string, DRM will not be performed on the video.
     * @param array $VideoTrackTemplateSet List of video track templates.
     * @param array $AudioTrackTemplateSet List of audio track templates.
     * @param string $Format Adaptive bitstream format. Valid value:
<li>HLS.</li>
     * @param array $StreamInfos Parameter information of input stream for adaptive bitrate streaming. Up to 10 streams can be input.
     * @param integer $DisableHigherVideoBitrate Whether to prohibit transcoding from low bitrate to high bitrate. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
     * @param integer $DisableHigherVideoResolution Whether to prohibit transcoding from low resolution to high resolution. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
     * @param string $CreateTime Creation time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
     * @param string $UpdateTime Last modified time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }

        if (array_key_exists("VideoTrackTemplateSet",$param) and $param["VideoTrackTemplateSet"] !== null) {
            $this->VideoTrackTemplateSet = [];
            foreach ($param["VideoTrackTemplateSet"] as $key => $value){
                $obj = new VideoTrackTemplateInfo();
                $obj->deserialize($value);
                array_push($this->VideoTrackTemplateSet, $obj);
            }
        }

        if (array_key_exists("AudioTrackTemplateSet",$param) and $param["AudioTrackTemplateSet"] !== null) {
            $this->AudioTrackTemplateSet = [];
            foreach ($param["AudioTrackTemplateSet"] as $key => $value){
                $obj = new AudioTrackTemplateInfo();
                $obj->deserialize($value);
                array_push($this->AudioTrackTemplateSet, $obj);
            }
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("StreamInfos",$param) and $param["StreamInfos"] !== null) {
            $this->StreamInfos = [];
            foreach ($param["StreamInfos"] as $key => $value){
                $obj = new AdaptiveStreamTemplate();
                $obj->deserialize($value);
                array_push($this->StreamInfos, $obj);
            }
        }

        if (array_key_exists("DisableHigherVideoBitrate",$param) and $param["DisableHigherVideoBitrate"] !== null) {
            $this->DisableHigherVideoBitrate = $param["DisableHigherVideoBitrate"];
        }

        if (array_key_exists("DisableHigherVideoResolution",$param) and $param["DisableHigherVideoResolution"] !== null) {
            $this->DisableHigherVideoResolution = $param["DisableHigherVideoResolution"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
