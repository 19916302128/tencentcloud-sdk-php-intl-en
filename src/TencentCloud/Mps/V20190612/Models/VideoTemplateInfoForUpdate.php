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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Video stream configuration parameter
 *
 * @method string getCodec() Obtain Encoding format for video streams. Optional values:
<li>h264: H.264 encoding</li>
<li>h265: H.265 encoding</li>
<li>h266: H.266 encoding</li>
<li>av1: AOMedia Video 1 encoding</li>
<li>vp8: VP8 encoding</li>
<li>vp9: VP9 encoding</li>
<li>mpeg2: MPEG2 encoding</li>
<li>dnxhd: DNxHD encoding</li>
<li>mv-hevc: MV-HEVC encoding</li>

Note: AV1 encoding containers currently only support mp4, webm, and mkv.
Note: H.266 encoding containers currently only support mp4, hls, ts, and mov.
Note: VP8 and VP9 encoding containers currently only support webm and mkv.
Note: MPEG2 and DNxHD encoding containers currently only support mxf.
Note: MV-HEVC encoding containers only support mp4, hls, and mov. Among them, the hls format only supports mp4 segmentation format.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCodec(string $Codec) Set Encoding format for video streams. Optional values:
<li>h264: H.264 encoding</li>
<li>h265: H.265 encoding</li>
<li>h266: H.266 encoding</li>
<li>av1: AOMedia Video 1 encoding</li>
<li>vp8: VP8 encoding</li>
<li>vp9: VP9 encoding</li>
<li>mpeg2: MPEG2 encoding</li>
<li>dnxhd: DNxHD encoding</li>
<li>mv-hevc: MV-HEVC encoding</li>

Note: AV1 encoding containers currently only support mp4, webm, and mkv.
Note: H.266 encoding containers currently only support mp4, hls, ts, and mov.
Note: VP8 and VP9 encoding containers currently only support webm and mkv.
Note: MPEG2 and DNxHD encoding containers currently only support mxf.
Note: MV-HEVC encoding containers only support mp4, hls, and mov. Among them, the hls format only supports mp4 segmentation format.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getFps() Obtain Video frame rate. Value range:
When FpsDenominator is empty, the range is [0, 120], in Hz.
When FpsDenominator is not empty, the Fps/FpsDenominator range is [0, 120].
If the value is 0, the frame rate will be the same as that of the source video.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFps(integer $Fps) Set Video frame rate. Value range:
When FpsDenominator is empty, the range is [0, 120], in Hz.
When FpsDenominator is not empty, the Fps/FpsDenominator range is [0, 120].
If the value is 0, the frame rate will be the same as that of the source video.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBitrate() Obtain Bitrate of a video stream, in kbps. Value range: 0 and [128, 100000].If the value is 0, the bitrate of the video will be the same as that of the source video.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBitrate(integer $Bitrate) Set Bitrate of a video stream, in kbps. Value range: 0 and [128, 100000].If the value is 0, the bitrate of the video will be the same as that of the source video.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResolutionAdaptive() Obtain Resolution adaption. Valid values:
<li>open: Enabled. When resolution adaption is enabled, `Width` indicates the long side of a video, while `Height` indicates the short side.</li>
<li>close: Disabled. When resolution adaption is disabled, `Width` indicates the width of a video, while `Height` indicates the height.</li>
Note: When resolution adaption is enabled, `Width` cannot be smaller than `Height`.
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set Resolution adaption. Valid values:
<li>open: Enabled. When resolution adaption is enabled, `Width` indicates the long side of a video, while `Height` indicates the short side.</li>
<li>close: Disabled. When resolution adaption is disabled, `Width` indicates the width of a video, while `Height` indicates the height.</li>
Note: When resolution adaption is enabled, `Width` cannot be smaller than `Height`.
 * @method integer getWidth() Obtain Maximum value of the width (or long side) of a video stream in px. Value range: 0 and [128, 4,096].
<li>If both `Width` and `Height` are 0, the resolution will be the same as that of the source video;</li>
<li>If `Width` is 0, but `Height` is not 0, `Width` will be proportionally scaled;</li>
<li>If `Width` is not 0, but `Height` is 0, `Height` will be proportionally scaled;</li>
<li>If both `Width` and `Height` are not 0, the custom resolution will be used.</li>
 * @method void setWidth(integer $Width) Set Maximum value of the width (or long side) of a video stream in px. Value range: 0 and [128, 4,096].
<li>If both `Width` and `Height` are 0, the resolution will be the same as that of the source video;</li>
<li>If `Width` is 0, but `Height` is not 0, `Width` will be proportionally scaled;</li>
<li>If `Width` is not 0, but `Height` is 0, `Height` will be proportionally scaled;</li>
<li>If both `Width` and `Height` are not 0, the custom resolution will be used.</li>
 * @method integer getHeight() Obtain Maximum value of the height (or short side) of a video stream in px. Value range: 0 and [128, 4,096].
 * @method void setHeight(integer $Height) Set Maximum value of the height (or short side) of a video stream in px. Value range: 0 and [128, 4,096].
 * @method integer getGop() Obtain Interval between I-frames (keyframes), which can be customized in frames or seconds. GOP value range: 0 and [1, 100000].
If this parameter is 0, the system will automatically set the GOP length.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setGop(integer $Gop) Set Interval between I-frames (keyframes), which can be customized in frames or seconds. GOP value range: 0 and [1, 100000].
If this parameter is 0, the system will automatically set the GOP length.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getGopUnit() Obtain GOP value unit. Optional values: 
frame: indicates frame 
second: indicates second
Default value: frame
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setGopUnit(string $GopUnit) Set GOP value unit. Optional values: 
frame: indicates frame 
second: indicates second
Default value: frame
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFillType() Obtain Filling mode. When the configured aspect ratio parameter for video streams differs from the aspect ratio of the original video, the processing method for transcoding is "filling". Optional filling modes:
 <li>stretch: Each frame is stretched to fill the entire screen, which may cause the transcoded video to be "flattened" or "stretched".</li>
<li>black: The aspect ratio of the video is kept unchanged, and the rest of the edges is filled with black.</li>
<li>white: The aspect ratio of the video is kept unchanged, and the rest of the edges is filled with white.</li>
<li>gauss: The aspect ratio of the video is kept unchanged, and the rest of the edges is filled with a Gaussian blur.</li>

<li>smarttailor: Video images are smartly selected to ensure proportional image cropping.</li>
Default value: black.

Note: Only stretch and black are supported for adaptive bitrate streaming.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFillType(string $FillType) Set Filling mode. When the configured aspect ratio parameter for video streams differs from the aspect ratio of the original video, the processing method for transcoding is "filling". Optional filling modes:
 <li>stretch: Each frame is stretched to fill the entire screen, which may cause the transcoded video to be "flattened" or "stretched".</li>
<li>black: The aspect ratio of the video is kept unchanged, and the rest of the edges is filled with black.</li>
<li>white: The aspect ratio of the video is kept unchanged, and the rest of the edges is filled with white.</li>
<li>gauss: The aspect ratio of the video is kept unchanged, and the rest of the edges is filled with a Gaussian blur.</li>

<li>smarttailor: Video images are smartly selected to ensure proportional image cropping.</li>
Default value: black.

Note: Only stretch and black are supported for adaptive bitrate streaming.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getVcrf() Obtain Control factor for constant video bitrate. Value range: [0, 51] and 100.
It is recommended not to specify this parameter if there are no special requirements.

Note:
When you need to set it to auto, fill in 100.
If Mode is set to ABR, the Vcrf value does not need to be configured.
If Mode is set to CBR, the Vcrf value does not need to be configured.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setVcrf(integer $Vcrf) Set Control factor for constant video bitrate. Value range: [0, 51] and 100.
It is recommended not to specify this parameter if there are no special requirements.

Note:
When you need to set it to auto, fill in 100.
If Mode is set to ABR, the Vcrf value does not need to be configured.
If Mode is set to CBR, the Vcrf value does not need to be configured.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getContentAdaptStream() Obtain Whether to enable adaptive encoding. Valid values:
<li>0: Disable</li>
<li>1: Enable</li>
Default value: 0. If this parameter is set to `1`, multiple streams with different resolutions and bitrates will be generated automatically. The highest resolution, bitrate, and quality of the streams are determined by the values of `width` and `height`, `Bitrate`, and `Vcrf` in `VideoTemplate` respectively. If these parameters are not set in `VideoTemplate`, the highest resolution generated will be the same as that of the source video, and the highest video quality will be close to VMAF 95. To use this parameter or learn about the billing details of adaptive encoding, please contact your sales rep.
 * @method void setContentAdaptStream(integer $ContentAdaptStream) Set Whether to enable adaptive encoding. Valid values:
<li>0: Disable</li>
<li>1: Enable</li>
Default value: 0. If this parameter is set to `1`, multiple streams with different resolutions and bitrates will be generated automatically. The highest resolution, bitrate, and quality of the streams are determined by the values of `width` and `height`, `Bitrate`, and `Vcrf` in `VideoTemplate` respectively. If these parameters are not set in `VideoTemplate`, the highest resolution generated will be the same as that of the source video, and the highest video quality will be close to VMAF 95. To use this parameter or learn about the billing details of adaptive encoding, please contact your sales rep.
 * @method integer getHlsTime() Obtain Average segment duration. Value range: (0-10], unit: second
Default value: 10
Note: It is used only in the format of HLS.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setHlsTime(integer $HlsTime) Set Average segment duration. Value range: (0-10], unit: second
Default value: 10
Note: It is used only in the format of HLS.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getSegmentType() Obtain HLS segment type. Valid values:
<li>0: HLS+TS segment.</li>
<li>2: HLS+TS byte range.</li>
<li>7: HLS+MP4 segment.</li>
<li>5: HLS+MP4 byte range.</li>
Default value: 0

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSegmentType(integer $SegmentType) Set HLS segment type. Valid values:
<li>0: HLS+TS segment.</li>
<li>2: HLS+TS byte range.</li>
<li>7: HLS+MP4 segment.</li>
<li>5: HLS+MP4 byte range.</li>
Default value: 0

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFpsDenominator() Obtain Denominator of the frame rate.
Note: The value must be greater than 0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFpsDenominator(integer $FpsDenominator) Set Denominator of the frame rate.
Note: The value must be greater than 0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStereo3dType() Obtain 3D video splicing mode, which is only valid for MV-HEVC 3D videos. Valid values:
<li>side_by_side: side-by-side view.</li>
<li>top_bottom: top-bottom view.</li>
Default value: side_by_side.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStereo3dType(string $Stereo3dType) Set 3D video splicing mode, which is only valid for MV-HEVC 3D videos. Valid values:
<li>side_by_side: side-by-side view.</li>
<li>top_bottom: top-bottom view.</li>
Default value: side_by_side.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVideoProfile() Obtain Profile, suitable for different scenarios. 
baseline: It only supports I/P-frames and non-interlaced scenarios, and is suitable for scenarios such as video calls and mobile videos. 
main: It offers I-frames, P-frames, and B-frames, and supports both interlaced and non-interlaced modes. It is mainly used in mainstream audio and video consumption products such as video players and streaming media transmission devices. 
high: the highest encoding level, with 8x8 prediction added to the main profile and support for custom quantification. It is widely used in scenarios such as Blu-ray storage and HDTV.
default: automatic filling along with the original video

This configuration appears only when the encoding standard is set to H264. Default value: default
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setVideoProfile(string $VideoProfile) Set Profile, suitable for different scenarios. 
baseline: It only supports I/P-frames and non-interlaced scenarios, and is suitable for scenarios such as video calls and mobile videos. 
main: It offers I-frames, P-frames, and B-frames, and supports both interlaced and non-interlaced modes. It is mainly used in mainstream audio and video consumption products such as video players and streaming media transmission devices. 
high: the highest encoding level, with 8x8 prediction added to the main profile and support for custom quantification. It is widely used in scenarios such as Blu-ray storage and HDTV.
default: automatic filling along with the original video

This configuration appears only when the encoding standard is set to H264. Default value: default
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getVideoLevel() Obtain Encoder level. Default value: auto ("")
If the encoding standard is set to H264, the following options are supported: "", 1, 1.1, 1.2, 1.3, 2, 2.1, 2.2, 3, 3.1, 3.2, 4, 4.1, 4.2, 5, and 5.1. 
If the encoding standard is set to H265, the following options are supported: "", 1, 2, 2.1, 3, 3.1, 4, 4.1, 5, 5.1, 5.2, 6, 6.1, 6.2, and 8.5.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setVideoLevel(string $VideoLevel) Set Encoder level. Default value: auto ("")
If the encoding standard is set to H264, the following options are supported: "", 1, 1.1, 1.2, 1.3, 2, 2.1, 2.2, 3, 3.1, 3.2, 4, 4.1, 4.2, 5, and 5.1. 
If the encoding standard is set to H265, the following options are supported: "", 1, 2, 2.1, 3, 3.1, 4, 4.1, 5, 5.1, 5.2, 6, 6.1, 6.2, and 8.5.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getBframes() Obtain Maximum number of consecutive B-frames. The default is auto, and 0 - 16 and -1 are supported.
Note:

-1 indicates auto.	
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBframes(integer $Bframes) Set Maximum number of consecutive B-frames. The default is auto, and 0 - 16 and -1 are supported.
Note:

-1 indicates auto.	
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getMode() Obtain Bitrate control mode. Optional values: 
VBR: variable bitrate. The output bitrate is adjusted based on the complexity of the video image, ensuring higher image quality. This mode is suitable for storage scenarios as well as applications with high image quality requirements. 
ABR: average bitrate. The average bitrate of the output video is kept stable to the greatest extent, but short-term bitrate fluctuations are allowed. This mode is suitable for scenarios where it is necessary to minimize the overall bitrate while a certain quality is maintained. 
CBR: constant bitrate. The output bitrate remains constant during the video encoding process, regardless of changes in image complexity. This mode is suitable for scenarios with strict network bandwidth requirements, such as live streaming. 
VCRF: constant rate factor. The video quality is controlled by setting a quality factor, achieving constant quality encoding of videos. The bitrate is automatically adjusted based on the complexity of the content. This mode is suitable for scenarios where maintaining a certain quality is desired. 
VBR is selected by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMode(string $Mode) Set Bitrate control mode. Optional values: 
VBR: variable bitrate. The output bitrate is adjusted based on the complexity of the video image, ensuring higher image quality. This mode is suitable for storage scenarios as well as applications with high image quality requirements. 
ABR: average bitrate. The average bitrate of the output video is kept stable to the greatest extent, but short-term bitrate fluctuations are allowed. This mode is suitable for scenarios where it is necessary to minimize the overall bitrate while a certain quality is maintained. 
CBR: constant bitrate. The output bitrate remains constant during the video encoding process, regardless of changes in image complexity. This mode is suitable for scenarios with strict network bandwidth requirements, such as live streaming. 
VCRF: constant rate factor. The video quality is controlled by setting a quality factor, achieving constant quality encoding of videos. The bitrate is automatically adjusted based on the complexity of the content. This mode is suitable for scenarios where maintaining a certain quality is desired. 
VBR is selected by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSar() Obtain Display aspect ratio. Optional values: [1:1, 2:1, default]
Default value: default
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSar(string $Sar) Set Display aspect ratio. Optional values: [1:1, 2:1, default]
Default value: default
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getNoScenecut() Obtain Adaptive I-frame decision. When it is enabled, Media Processing Service will automatically identify transition points between different scenarios in the video (usually they are visually distinct frames, such as those of switching from one shot to another) and adaptively insert keyframes (I-frames) at these points to improve the random accessibility and encoding efficiency of the video. Optional values: 
0: Disable the adaptive I-frame decision 
1: Enable the adaptive I-frame decision 
Default value: 0	
	
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNoScenecut(integer $NoScenecut) Set Adaptive I-frame decision. When it is enabled, Media Processing Service will automatically identify transition points between different scenarios in the video (usually they are visually distinct frames, such as those of switching from one shot to another) and adaptively insert keyframes (I-frames) at these points to improve the random accessibility and encoding efficiency of the video. Optional values: 
0: Disable the adaptive I-frame decision 
1: Enable the adaptive I-frame decision 
Default value: 0	
	
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getBitDepth() Obtain Bit: 8/10 is supported. Default value: 8	
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBitDepth(integer $BitDepth) Set Bit: 8/10 is supported. Default value: 8	
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRawPts() Obtain Preservation of original timestamp. Optional values: 
0: Disabled 
1: Enabled 
Default value: Disabled	
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRawPts(integer $RawPts) Set Preservation of original timestamp. Optional values: 
0: Disabled 
1: Enabled 
Default value: Disabled	
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getCompress() Obtain Proportional compression bitrate. When it is enabled, the bitrate of the output video will be adjusted according to the proportion. After the compression ratio is entered, the system will automatically calculate the target output bitrate based on the source video bitrate. Compression ratio range: 0-100, optional values: [0-100] and -1 
Note: -1 indicates auto.	
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCompress(integer $Compress) Set Proportional compression bitrate. When it is enabled, the bitrate of the output video will be adjusted according to the proportion. After the compression ratio is entered, the system will automatically calculate the target output bitrate based on the source video bitrate. Compression ratio range: 0-100, optional values: [0-100] and -1 
Note: -1 indicates auto.	
Note: This field may return null, indicating that no valid value can be obtained.
 * @method SegmentSpecificInfo getSegmentSpecificInfo() Obtain Special segment configuration	
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSegmentSpecificInfo(SegmentSpecificInfo $SegmentSpecificInfo) Set Special segment configuration	
Note: This field may return null, indicating that no valid value can be obtained.
 */
class VideoTemplateInfoForUpdate extends AbstractModel
{
    /**
     * @var string Encoding format for video streams. Optional values:
<li>h264: H.264 encoding</li>
<li>h265: H.265 encoding</li>
<li>h266: H.266 encoding</li>
<li>av1: AOMedia Video 1 encoding</li>
<li>vp8: VP8 encoding</li>
<li>vp9: VP9 encoding</li>
<li>mpeg2: MPEG2 encoding</li>
<li>dnxhd: DNxHD encoding</li>
<li>mv-hevc: MV-HEVC encoding</li>

Note: AV1 encoding containers currently only support mp4, webm, and mkv.
Note: H.266 encoding containers currently only support mp4, hls, ts, and mov.
Note: VP8 and VP9 encoding containers currently only support webm and mkv.
Note: MPEG2 and DNxHD encoding containers currently only support mxf.
Note: MV-HEVC encoding containers only support mp4, hls, and mov. Among them, the hls format only supports mp4 segmentation format.

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Codec;

    /**
     * @var integer Video frame rate. Value range:
When FpsDenominator is empty, the range is [0, 120], in Hz.
When FpsDenominator is not empty, the Fps/FpsDenominator range is [0, 120].
If the value is 0, the frame rate will be the same as that of the source video.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Fps;

    /**
     * @var integer Bitrate of a video stream, in kbps. Value range: 0 and [128, 100000].If the value is 0, the bitrate of the video will be the same as that of the source video.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Bitrate;

    /**
     * @var string Resolution adaption. Valid values:
<li>open: Enabled. When resolution adaption is enabled, `Width` indicates the long side of a video, while `Height` indicates the short side.</li>
<li>close: Disabled. When resolution adaption is disabled, `Width` indicates the width of a video, while `Height` indicates the height.</li>
Note: When resolution adaption is enabled, `Width` cannot be smaller than `Height`.
     */
    public $ResolutionAdaptive;

    /**
     * @var integer Maximum value of the width (or long side) of a video stream in px. Value range: 0 and [128, 4,096].
<li>If both `Width` and `Height` are 0, the resolution will be the same as that of the source video;</li>
<li>If `Width` is 0, but `Height` is not 0, `Width` will be proportionally scaled;</li>
<li>If `Width` is not 0, but `Height` is 0, `Height` will be proportionally scaled;</li>
<li>If both `Width` and `Height` are not 0, the custom resolution will be used.</li>
     */
    public $Width;

    /**
     * @var integer Maximum value of the height (or short side) of a video stream in px. Value range: 0 and [128, 4,096].
     */
    public $Height;

    /**
     * @var integer Interval between I-frames (keyframes), which can be customized in frames or seconds. GOP value range: 0 and [1, 100000].
If this parameter is 0, the system will automatically set the GOP length.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Gop;

    /**
     * @var string GOP value unit. Optional values: 
frame: indicates frame 
second: indicates second
Default value: frame
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $GopUnit;

    /**
     * @var string Filling mode. When the configured aspect ratio parameter for video streams differs from the aspect ratio of the original video, the processing method for transcoding is "filling". Optional filling modes:
 <li>stretch: Each frame is stretched to fill the entire screen, which may cause the transcoded video to be "flattened" or "stretched".</li>
<li>black: The aspect ratio of the video is kept unchanged, and the rest of the edges is filled with black.</li>
<li>white: The aspect ratio of the video is kept unchanged, and the rest of the edges is filled with white.</li>
<li>gauss: The aspect ratio of the video is kept unchanged, and the rest of the edges is filled with a Gaussian blur.</li>

<li>smarttailor: Video images are smartly selected to ensure proportional image cropping.</li>
Default value: black.

Note: Only stretch and black are supported for adaptive bitrate streaming.

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FillType;

    /**
     * @var integer Control factor for constant video bitrate. Value range: [0, 51] and 100.
It is recommended not to specify this parameter if there are no special requirements.

Note:
When you need to set it to auto, fill in 100.
If Mode is set to ABR, the Vcrf value does not need to be configured.
If Mode is set to CBR, the Vcrf value does not need to be configured.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Vcrf;

    /**
     * @var integer Whether to enable adaptive encoding. Valid values:
<li>0: Disable</li>
<li>1: Enable</li>
Default value: 0. If this parameter is set to `1`, multiple streams with different resolutions and bitrates will be generated automatically. The highest resolution, bitrate, and quality of the streams are determined by the values of `width` and `height`, `Bitrate`, and `Vcrf` in `VideoTemplate` respectively. If these parameters are not set in `VideoTemplate`, the highest resolution generated will be the same as that of the source video, and the highest video quality will be close to VMAF 95. To use this parameter or learn about the billing details of adaptive encoding, please contact your sales rep.
     */
    public $ContentAdaptStream;

    /**
     * @var integer Average segment duration. Value range: (0-10], unit: second
Default value: 10
Note: It is used only in the format of HLS.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $HlsTime;

    /**
     * @var integer HLS segment type. Valid values:
<li>0: HLS+TS segment.</li>
<li>2: HLS+TS byte range.</li>
<li>7: HLS+MP4 segment.</li>
<li>5: HLS+MP4 byte range.</li>
Default value: 0

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SegmentType;

    /**
     * @var integer Denominator of the frame rate.
Note: The value must be greater than 0.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FpsDenominator;

    /**
     * @var string 3D video splicing mode, which is only valid for MV-HEVC 3D videos. Valid values:
<li>side_by_side: side-by-side view.</li>
<li>top_bottom: top-bottom view.</li>
Default value: side_by_side.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Stereo3dType;

    /**
     * @var string Profile, suitable for different scenarios. 
baseline: It only supports I/P-frames and non-interlaced scenarios, and is suitable for scenarios such as video calls and mobile videos. 
main: It offers I-frames, P-frames, and B-frames, and supports both interlaced and non-interlaced modes. It is mainly used in mainstream audio and video consumption products such as video players and streaming media transmission devices. 
high: the highest encoding level, with 8x8 prediction added to the main profile and support for custom quantification. It is widely used in scenarios such as Blu-ray storage and HDTV.
default: automatic filling along with the original video

This configuration appears only when the encoding standard is set to H264. Default value: default
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $VideoProfile;

    /**
     * @var string Encoder level. Default value: auto ("")
If the encoding standard is set to H264, the following options are supported: "", 1, 1.1, 1.2, 1.3, 2, 2.1, 2.2, 3, 3.1, 3.2, 4, 4.1, 4.2, 5, and 5.1. 
If the encoding standard is set to H265, the following options are supported: "", 1, 2, 2.1, 3, 3.1, 4, 4.1, 5, 5.1, 5.2, 6, 6.1, 6.2, and 8.5.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $VideoLevel;

    /**
     * @var integer Maximum number of consecutive B-frames. The default is auto, and 0 - 16 and -1 are supported.
Note:

-1 indicates auto.	
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Bframes;

    /**
     * @var string Bitrate control mode. Optional values: 
VBR: variable bitrate. The output bitrate is adjusted based on the complexity of the video image, ensuring higher image quality. This mode is suitable for storage scenarios as well as applications with high image quality requirements. 
ABR: average bitrate. The average bitrate of the output video is kept stable to the greatest extent, but short-term bitrate fluctuations are allowed. This mode is suitable for scenarios where it is necessary to minimize the overall bitrate while a certain quality is maintained. 
CBR: constant bitrate. The output bitrate remains constant during the video encoding process, regardless of changes in image complexity. This mode is suitable for scenarios with strict network bandwidth requirements, such as live streaming. 
VCRF: constant rate factor. The video quality is controlled by setting a quality factor, achieving constant quality encoding of videos. The bitrate is automatically adjusted based on the complexity of the content. This mode is suitable for scenarios where maintaining a certain quality is desired. 
VBR is selected by default.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Mode;

    /**
     * @var string Display aspect ratio. Optional values: [1:1, 2:1, default]
Default value: default
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Sar;

    /**
     * @var integer Adaptive I-frame decision. When it is enabled, Media Processing Service will automatically identify transition points between different scenarios in the video (usually they are visually distinct frames, such as those of switching from one shot to another) and adaptively insert keyframes (I-frames) at these points to improve the random accessibility and encoding efficiency of the video. Optional values: 
0: Disable the adaptive I-frame decision 
1: Enable the adaptive I-frame decision 
Default value: 0	
	
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NoScenecut;

    /**
     * @var integer Bit: 8/10 is supported. Default value: 8	
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BitDepth;

    /**
     * @var integer Preservation of original timestamp. Optional values: 
0: Disabled 
1: Enabled 
Default value: Disabled	
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RawPts;

    /**
     * @var integer Proportional compression bitrate. When it is enabled, the bitrate of the output video will be adjusted according to the proportion. After the compression ratio is entered, the system will automatically calculate the target output bitrate based on the source video bitrate. Compression ratio range: 0-100, optional values: [0-100] and -1 
Note: -1 indicates auto.	
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Compress;

    /**
     * @var SegmentSpecificInfo Special segment configuration	
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SegmentSpecificInfo;

    /**
     * @param string $Codec Encoding format for video streams. Optional values:
<li>h264: H.264 encoding</li>
<li>h265: H.265 encoding</li>
<li>h266: H.266 encoding</li>
<li>av1: AOMedia Video 1 encoding</li>
<li>vp8: VP8 encoding</li>
<li>vp9: VP9 encoding</li>
<li>mpeg2: MPEG2 encoding</li>
<li>dnxhd: DNxHD encoding</li>
<li>mv-hevc: MV-HEVC encoding</li>

Note: AV1 encoding containers currently only support mp4, webm, and mkv.
Note: H.266 encoding containers currently only support mp4, hls, ts, and mov.
Note: VP8 and VP9 encoding containers currently only support webm and mkv.
Note: MPEG2 and DNxHD encoding containers currently only support mxf.
Note: MV-HEVC encoding containers only support mp4, hls, and mov. Among them, the hls format only supports mp4 segmentation format.

Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Fps Video frame rate. Value range:
When FpsDenominator is empty, the range is [0, 120], in Hz.
When FpsDenominator is not empty, the Fps/FpsDenominator range is [0, 120].
If the value is 0, the frame rate will be the same as that of the source video.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Bitrate Bitrate of a video stream, in kbps. Value range: 0 and [128, 100000].If the value is 0, the bitrate of the video will be the same as that of the source video.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResolutionAdaptive Resolution adaption. Valid values:
<li>open: Enabled. When resolution adaption is enabled, `Width` indicates the long side of a video, while `Height` indicates the short side.</li>
<li>close: Disabled. When resolution adaption is disabled, `Width` indicates the width of a video, while `Height` indicates the height.</li>
Note: When resolution adaption is enabled, `Width` cannot be smaller than `Height`.
     * @param integer $Width Maximum value of the width (or long side) of a video stream in px. Value range: 0 and [128, 4,096].
<li>If both `Width` and `Height` are 0, the resolution will be the same as that of the source video;</li>
<li>If `Width` is 0, but `Height` is not 0, `Width` will be proportionally scaled;</li>
<li>If `Width` is not 0, but `Height` is 0, `Height` will be proportionally scaled;</li>
<li>If both `Width` and `Height` are not 0, the custom resolution will be used.</li>
     * @param integer $Height Maximum value of the height (or short side) of a video stream in px. Value range: 0 and [128, 4,096].
     * @param integer $Gop Interval between I-frames (keyframes), which can be customized in frames or seconds. GOP value range: 0 and [1, 100000].
If this parameter is 0, the system will automatically set the GOP length.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $GopUnit GOP value unit. Optional values: 
frame: indicates frame 
second: indicates second
Default value: frame
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FillType Filling mode. When the configured aspect ratio parameter for video streams differs from the aspect ratio of the original video, the processing method for transcoding is "filling". Optional filling modes:
 <li>stretch: Each frame is stretched to fill the entire screen, which may cause the transcoded video to be "flattened" or "stretched".</li>
<li>black: The aspect ratio of the video is kept unchanged, and the rest of the edges is filled with black.</li>
<li>white: The aspect ratio of the video is kept unchanged, and the rest of the edges is filled with white.</li>
<li>gauss: The aspect ratio of the video is kept unchanged, and the rest of the edges is filled with a Gaussian blur.</li>

<li>smarttailor: Video images are smartly selected to ensure proportional image cropping.</li>
Default value: black.

Note: Only stretch and black are supported for adaptive bitrate streaming.

Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Vcrf Control factor for constant video bitrate. Value range: [0, 51] and 100.
It is recommended not to specify this parameter if there are no special requirements.

Note:
When you need to set it to auto, fill in 100.
If Mode is set to ABR, the Vcrf value does not need to be configured.
If Mode is set to CBR, the Vcrf value does not need to be configured.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ContentAdaptStream Whether to enable adaptive encoding. Valid values:
<li>0: Disable</li>
<li>1: Enable</li>
Default value: 0. If this parameter is set to `1`, multiple streams with different resolutions and bitrates will be generated automatically. The highest resolution, bitrate, and quality of the streams are determined by the values of `width` and `height`, `Bitrate`, and `Vcrf` in `VideoTemplate` respectively. If these parameters are not set in `VideoTemplate`, the highest resolution generated will be the same as that of the source video, and the highest video quality will be close to VMAF 95. To use this parameter or learn about the billing details of adaptive encoding, please contact your sales rep.
     * @param integer $HlsTime Average segment duration. Value range: (0-10], unit: second
Default value: 10
Note: It is used only in the format of HLS.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $SegmentType HLS segment type. Valid values:
<li>0: HLS+TS segment.</li>
<li>2: HLS+TS byte range.</li>
<li>7: HLS+MP4 segment.</li>
<li>5: HLS+MP4 byte range.</li>
Default value: 0

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FpsDenominator Denominator of the frame rate.
Note: The value must be greater than 0.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Stereo3dType 3D video splicing mode, which is only valid for MV-HEVC 3D videos. Valid values:
<li>side_by_side: side-by-side view.</li>
<li>top_bottom: top-bottom view.</li>
Default value: side_by_side.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VideoProfile Profile, suitable for different scenarios. 
baseline: It only supports I/P-frames and non-interlaced scenarios, and is suitable for scenarios such as video calls and mobile videos. 
main: It offers I-frames, P-frames, and B-frames, and supports both interlaced and non-interlaced modes. It is mainly used in mainstream audio and video consumption products such as video players and streaming media transmission devices. 
high: the highest encoding level, with 8x8 prediction added to the main profile and support for custom quantification. It is widely used in scenarios such as Blu-ray storage and HDTV.
default: automatic filling along with the original video

This configuration appears only when the encoding standard is set to H264. Default value: default
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $VideoLevel Encoder level. Default value: auto ("")
If the encoding standard is set to H264, the following options are supported: "", 1, 1.1, 1.2, 1.3, 2, 2.1, 2.2, 3, 3.1, 3.2, 4, 4.1, 4.2, 5, and 5.1. 
If the encoding standard is set to H265, the following options are supported: "", 1, 2, 2.1, 3, 3.1, 4, 4.1, 5, 5.1, 5.2, 6, 6.1, 6.2, and 8.5.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Bframes Maximum number of consecutive B-frames. The default is auto, and 0 - 16 and -1 are supported.
Note:

-1 indicates auto.	
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Mode Bitrate control mode. Optional values: 
VBR: variable bitrate. The output bitrate is adjusted based on the complexity of the video image, ensuring higher image quality. This mode is suitable for storage scenarios as well as applications with high image quality requirements. 
ABR: average bitrate. The average bitrate of the output video is kept stable to the greatest extent, but short-term bitrate fluctuations are allowed. This mode is suitable for scenarios where it is necessary to minimize the overall bitrate while a certain quality is maintained. 
CBR: constant bitrate. The output bitrate remains constant during the video encoding process, regardless of changes in image complexity. This mode is suitable for scenarios with strict network bandwidth requirements, such as live streaming. 
VCRF: constant rate factor. The video quality is controlled by setting a quality factor, achieving constant quality encoding of videos. The bitrate is automatically adjusted based on the complexity of the content. This mode is suitable for scenarios where maintaining a certain quality is desired. 
VBR is selected by default.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Sar Display aspect ratio. Optional values: [1:1, 2:1, default]
Default value: default
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $NoScenecut Adaptive I-frame decision. When it is enabled, Media Processing Service will automatically identify transition points between different scenarios in the video (usually they are visually distinct frames, such as those of switching from one shot to another) and adaptively insert keyframes (I-frames) at these points to improve the random accessibility and encoding efficiency of the video. Optional values: 
0: Disable the adaptive I-frame decision 
1: Enable the adaptive I-frame decision 
Default value: 0	
	
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $BitDepth Bit: 8/10 is supported. Default value: 8	
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RawPts Preservation of original timestamp. Optional values: 
0: Disabled 
1: Enabled 
Default value: Disabled	
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Compress Proportional compression bitrate. When it is enabled, the bitrate of the output video will be adjusted according to the proportion. After the compression ratio is entered, the system will automatically calculate the target output bitrate based on the source video bitrate. Compression ratio range: 0-100, optional values: [0-100] and -1 
Note: -1 indicates auto.	
Note: This field may return null, indicating that no valid value can be obtained.
     * @param SegmentSpecificInfo $SegmentSpecificInfo Special segment configuration	
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("ResolutionAdaptive",$param) and $param["ResolutionAdaptive"] !== null) {
            $this->ResolutionAdaptive = $param["ResolutionAdaptive"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Gop",$param) and $param["Gop"] !== null) {
            $this->Gop = $param["Gop"];
        }

        if (array_key_exists("GopUnit",$param) and $param["GopUnit"] !== null) {
            $this->GopUnit = $param["GopUnit"];
        }

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }

        if (array_key_exists("Vcrf",$param) and $param["Vcrf"] !== null) {
            $this->Vcrf = $param["Vcrf"];
        }

        if (array_key_exists("ContentAdaptStream",$param) and $param["ContentAdaptStream"] !== null) {
            $this->ContentAdaptStream = $param["ContentAdaptStream"];
        }

        if (array_key_exists("HlsTime",$param) and $param["HlsTime"] !== null) {
            $this->HlsTime = $param["HlsTime"];
        }

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }

        if (array_key_exists("FpsDenominator",$param) and $param["FpsDenominator"] !== null) {
            $this->FpsDenominator = $param["FpsDenominator"];
        }

        if (array_key_exists("Stereo3dType",$param) and $param["Stereo3dType"] !== null) {
            $this->Stereo3dType = $param["Stereo3dType"];
        }

        if (array_key_exists("VideoProfile",$param) and $param["VideoProfile"] !== null) {
            $this->VideoProfile = $param["VideoProfile"];
        }

        if (array_key_exists("VideoLevel",$param) and $param["VideoLevel"] !== null) {
            $this->VideoLevel = $param["VideoLevel"];
        }

        if (array_key_exists("Bframes",$param) and $param["Bframes"] !== null) {
            $this->Bframes = $param["Bframes"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Sar",$param) and $param["Sar"] !== null) {
            $this->Sar = $param["Sar"];
        }

        if (array_key_exists("NoScenecut",$param) and $param["NoScenecut"] !== null) {
            $this->NoScenecut = $param["NoScenecut"];
        }

        if (array_key_exists("BitDepth",$param) and $param["BitDepth"] !== null) {
            $this->BitDepth = $param["BitDepth"];
        }

        if (array_key_exists("RawPts",$param) and $param["RawPts"] !== null) {
            $this->RawPts = $param["RawPts"];
        }

        if (array_key_exists("Compress",$param) and $param["Compress"] !== null) {
            $this->Compress = $param["Compress"];
        }

        if (array_key_exists("SegmentSpecificInfo",$param) and $param["SegmentSpecificInfo"] !== null) {
            $this->SegmentSpecificInfo = new SegmentSpecificInfo();
            $this->SegmentSpecificInfo->deserialize($param["SegmentSpecificInfo"]);
        }
    }
}
