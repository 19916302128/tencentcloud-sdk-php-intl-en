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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetWatermark response structure.
 *
 * @method WatermarkConfig getTeacherLogo() Obtain The watermark settings for the teacher’s video.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeacherLogo(WatermarkConfig $TeacherLogo) Set The watermark settings for the teacher’s video.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method WatermarkConfig getBoardLogo() Obtain The watermark settings for the whiteboard.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBoardLogo(WatermarkConfig $BoardLogo) Set The watermark settings for the whiteboard.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method BackgroundPictureConfig getBackgroundPicture() Obtain The background image.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackgroundPicture(BackgroundPictureConfig $BackgroundPicture) Set The background image.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TextMarkConfig getText() Obtain The watermark text.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setText(TextMarkConfig $Text) Set The watermark text.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetWatermarkResponse extends AbstractModel
{
    /**
     * @var WatermarkConfig The watermark settings for the teacher’s video.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeacherLogo;

    /**
     * @var WatermarkConfig The watermark settings for the whiteboard.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BoardLogo;

    /**
     * @var BackgroundPictureConfig The background image.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackgroundPicture;

    /**
     * @var TextMarkConfig The watermark text.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Text;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param WatermarkConfig $TeacherLogo The watermark settings for the teacher’s video.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param WatermarkConfig $BoardLogo The watermark settings for the whiteboard.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param BackgroundPictureConfig $BackgroundPicture The background image.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TextMarkConfig $Text The watermark text.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TeacherLogo",$param) and $param["TeacherLogo"] !== null) {
            $this->TeacherLogo = new WatermarkConfig();
            $this->TeacherLogo->deserialize($param["TeacherLogo"]);
        }

        if (array_key_exists("BoardLogo",$param) and $param["BoardLogo"] !== null) {
            $this->BoardLogo = new WatermarkConfig();
            $this->BoardLogo->deserialize($param["BoardLogo"]);
        }

        if (array_key_exists("BackgroundPicture",$param) and $param["BackgroundPicture"] !== null) {
            $this->BackgroundPicture = new BackgroundPictureConfig();
            $this->BackgroundPicture->deserialize($param["BackgroundPicture"]);
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = new TextMarkConfig();
            $this->Text->deserialize($param["Text"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
