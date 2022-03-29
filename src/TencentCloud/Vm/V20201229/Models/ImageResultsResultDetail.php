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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image recognition result in the specific scenario
 *
 * @method string getName() Obtain This field is used to return the task name in the `TaskInput` parameter passed in when the video moderation API is called for easier task identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set This field is used to return the task name in the `TaskInput` parameter passed in when the video moderation API is called for easier task identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getText() Obtain This field is used to return the OCR result of an image. OCR can recognize text of **up to 5,000 bytes**.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setText(string $Text) Set This field is used to return the OCR result of an image. OCR can recognize text of **up to 5,000 bytes**.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ImageResultsResultDetailLocation getLocation() Obtain This field is used to return the detailed position information of the image moderation sub-result, such as coordinates, size, and rotation angle. For the detailed returned content, see the description of the `ImageResultsResultDetailLocation` data structure.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLocation(ImageResultsResultDetailLocation $Location) Set This field is used to return the detailed position information of the image moderation sub-result, such as coordinates, size, and rotation angle. For the detailed returned content, see the description of the `ImageResultsResultDetailLocation` data structure.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLabel() Obtain This field is used to return the maliciousness tag in the detection result.<br>Returned values: **Normal**: normal; **Porn**: pornographic; **Abuse**: abusive; **Ad**: advertising; **Custom**: custom type of non-compliant content and other offensive, unsafe, or inappropriate types of content.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLabel(string $Label) Set This field is used to return the maliciousness tag in the detection result.<br>Returned values: **Normal**: normal; **Porn**: pornographic; **Abuse**: abusive; **Ad**: advertising; **Custom**: custom type of non-compliant content and other offensive, unsafe, or inappropriate types of content.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLibId() Obtain This field is **valid only when `Label` is `Custom` (custom keyword)**. It is used to return the ID of the custom library for easier custom library management and configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLibId(string $LibId) Set This field is **valid only when `Label` is `Custom` (custom keyword)**. It is used to return the ID of the custom library for easier custom library management and configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLibName() Obtain This field is **valid only when `Label` is `Custom` (custom keyword)**. It is used to return the name of the custom library for easier custom library management and configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLibName(string $LibName) Set This field is **valid only when `Label` is `Custom` (custom keyword)**. It is used to return the name of the custom library for easier custom library management and configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getKeywords() Obtain This field is used to return the keyword information hit by the detected text and indicate the specific cause of text non-compliance (such as *Friend me*). This parameter may have multiple returned values representing multiple hit keywords. If the returned value is empty, but `Score` is not empty, the maliciousness tag (Label) that corresponds to the recognition result derives from the returned value determined by the semantic model.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setKeywords(array $Keywords) Set This field is used to return the keyword information hit by the detected text and indicate the specific cause of text non-compliance (such as *Friend me*). This parameter may have multiple returned values representing multiple hit keywords. If the returned value is empty, but `Score` is not empty, the maliciousness tag (Label) that corresponds to the recognition result derives from the returned value determined by the semantic model.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSuggestion() Obtain This field is used to return the operation suggestion. When you get the determination result, the returned value indicates the suggested operation.<br>
Returned values: **Block**, **Review**, **Pass**.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSuggestion(string $Suggestion) Set This field is used to return the operation suggestion. When you get the determination result, the returned value indicates the suggested operation.<br>
Returned values: **Block**, **Review**, **Pass**.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getScore() Obtain This field is used to return the confidence under the current tag. Value range: 0 (**the lowest confidence**)–100 (**the highest confidence**), where a higher value indicates that the text is more likely to fall into the category of the current returned tag; for example, *Porn 99* indicates that the text is highly likely to be pornographic.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setScore(integer $Score) Set This field is used to return the confidence under the current tag. Value range: 0 (**the lowest confidence**)–100 (**the highest confidence**), where a higher value indicates that the text is more likely to fall into the category of the current returned tag; for example, *Porn 99* indicates that the text is highly likely to be pornographic.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSubLabelCode() Obtain This field is used to return the detection result for a subtag under the maliciousness tag, such as *Porn-SexBehavior*.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSubLabelCode(string $SubLabelCode) Set This field is used to return the detection result for a subtag under the maliciousness tag, such as *Porn-SexBehavior*.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ImageResultsResultDetail extends AbstractModel
{
    /**
     * @var string This field is used to return the task name in the `TaskInput` parameter passed in when the video moderation API is called for easier task identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string This field is used to return the OCR result of an image. OCR can recognize text of **up to 5,000 bytes**.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Text;

    /**
     * @var ImageResultsResultDetailLocation This field is used to return the detailed position information of the image moderation sub-result, such as coordinates, size, and rotation angle. For the detailed returned content, see the description of the `ImageResultsResultDetailLocation` data structure.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Location;

    /**
     * @var string This field is used to return the maliciousness tag in the detection result.<br>Returned values: **Normal**: normal; **Porn**: pornographic; **Abuse**: abusive; **Ad**: advertising; **Custom**: custom type of non-compliant content and other offensive, unsafe, or inappropriate types of content.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Label;

    /**
     * @var string This field is **valid only when `Label` is `Custom` (custom keyword)**. It is used to return the ID of the custom library for easier custom library management and configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LibId;

    /**
     * @var string This field is **valid only when `Label` is `Custom` (custom keyword)**. It is used to return the name of the custom library for easier custom library management and configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LibName;

    /**
     * @var array This field is used to return the keyword information hit by the detected text and indicate the specific cause of text non-compliance (such as *Friend me*). This parameter may have multiple returned values representing multiple hit keywords. If the returned value is empty, but `Score` is not empty, the maliciousness tag (Label) that corresponds to the recognition result derives from the returned value determined by the semantic model.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Keywords;

    /**
     * @var string This field is used to return the operation suggestion. When you get the determination result, the returned value indicates the suggested operation.<br>
Returned values: **Block**, **Review**, **Pass**.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Suggestion;

    /**
     * @var integer This field is used to return the confidence under the current tag. Value range: 0 (**the lowest confidence**)–100 (**the highest confidence**), where a higher value indicates that the text is more likely to fall into the category of the current returned tag; for example, *Porn 99* indicates that the text is highly likely to be pornographic.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Score;

    /**
     * @var string This field is used to return the detection result for a subtag under the maliciousness tag, such as *Porn-SexBehavior*.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SubLabelCode;

    /**
     * @param string $Name This field is used to return the task name in the `TaskInput` parameter passed in when the video moderation API is called for easier task identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Text This field is used to return the OCR result of an image. OCR can recognize text of **up to 5,000 bytes**.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ImageResultsResultDetailLocation $Location This field is used to return the detailed position information of the image moderation sub-result, such as coordinates, size, and rotation angle. For the detailed returned content, see the description of the `ImageResultsResultDetailLocation` data structure.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Label This field is used to return the maliciousness tag in the detection result.<br>Returned values: **Normal**: normal; **Porn**: pornographic; **Abuse**: abusive; **Ad**: advertising; **Custom**: custom type of non-compliant content and other offensive, unsafe, or inappropriate types of content.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LibId This field is **valid only when `Label` is `Custom` (custom keyword)**. It is used to return the ID of the custom library for easier custom library management and configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LibName This field is **valid only when `Label` is `Custom` (custom keyword)**. It is used to return the name of the custom library for easier custom library management and configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Keywords This field is used to return the keyword information hit by the detected text and indicate the specific cause of text non-compliance (such as *Friend me*). This parameter may have multiple returned values representing multiple hit keywords. If the returned value is empty, but `Score` is not empty, the maliciousness tag (Label) that corresponds to the recognition result derives from the returned value determined by the semantic model.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Suggestion This field is used to return the operation suggestion. When you get the determination result, the returned value indicates the suggested operation.<br>
Returned values: **Block**, **Review**, **Pass**.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Score This field is used to return the confidence under the current tag. Value range: 0 (**the lowest confidence**)–100 (**the highest confidence**), where a higher value indicates that the text is more likely to fall into the category of the current returned tag; for example, *Porn 99* indicates that the text is highly likely to be pornographic.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SubLabelCode This field is used to return the detection result for a subtag under the maliciousness tag, such as *Porn-SexBehavior*.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new ImageResultsResultDetailLocation();
            $this->Location->deserialize($param["Location"]);
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("LibId",$param) and $param["LibId"] !== null) {
            $this->LibId = $param["LibId"];
        }

        if (array_key_exists("LibName",$param) and $param["LibName"] !== null) {
            $this->LibName = $param["LibName"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("SubLabelCode",$param) and $param["SubLabelCode"] !== null) {
            $this->SubLabelCode = $param["SubLabelCode"];
        }
    }
}
