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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LivenessCompare response structure.
 *
 * @method string getBestFrameBase64() Obtain The best screenshot of the video after successful verification. The photo is Base64-encoded and in JPG format.
 * @method void setBestFrameBase64(string $BestFrameBase64) Set The best screenshot of the video after successful verification. The photo is Base64-encoded and in JPG format.
 * @method float getSim() Obtain Similarity. Value range: [0.00, 100.00]. As a recommendation, when the similarity is greater than or equal to 70, it can be determined that the two faces are of the same person. You can adjust the threshold according to your specific scenario (the FAR at the threshold of 70 is 0.1%, and FAR at the threshold of 80 is 0.01%).
 * @method void setSim(float $Sim) Set Similarity. Value range: [0.00, 100.00]. As a recommendation, when the similarity is greater than or equal to 70, it can be determined that the two faces are of the same person. You can adjust the threshold according to your specific scenario (the FAR at the threshold of 70 is 0.1%, and FAR at the threshold of 80 is 0.01%).
 * @method string getResult() Obtain Service error code. `Success` will be returned for success. For error information, please see the `FailedOperation` section in the error code list below.
 * @method void setResult(string $Result) Set Service error code. `Success` will be returned for success. For error information, please see the `FailedOperation` section in the error code list below.
 * @method string getDescription() Obtain Service result description.
 * @method void setDescription(string $Description) Set Service result description.
 * @method array getBestFrameList() Obtain 
 * @method void setBestFrameList(array $BestFrameList) Set 
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class LivenessCompareResponse extends AbstractModel
{
    /**
     * @var string The best screenshot of the video after successful verification. The photo is Base64-encoded and in JPG format.
     */
    public $BestFrameBase64;

    /**
     * @var float Similarity. Value range: [0.00, 100.00]. As a recommendation, when the similarity is greater than or equal to 70, it can be determined that the two faces are of the same person. You can adjust the threshold according to your specific scenario (the FAR at the threshold of 70 is 0.1%, and FAR at the threshold of 80 is 0.01%).
     */
    public $Sim;

    /**
     * @var string Service error code. `Success` will be returned for success. For error information, please see the `FailedOperation` section in the error code list below.
     */
    public $Result;

    /**
     * @var string Service result description.
     */
    public $Description;

    /**
     * @var array 
     */
    public $BestFrameList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $BestFrameBase64 The best screenshot of the video after successful verification. The photo is Base64-encoded and in JPG format.
     * @param float $Sim Similarity. Value range: [0.00, 100.00]. As a recommendation, when the similarity is greater than or equal to 70, it can be determined that the two faces are of the same person. You can adjust the threshold according to your specific scenario (the FAR at the threshold of 70 is 0.1%, and FAR at the threshold of 80 is 0.01%).
     * @param string $Result Service error code. `Success` will be returned for success. For error information, please see the `FailedOperation` section in the error code list below.
     * @param string $Description Service result description.
     * @param array $BestFrameList 
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
        if (array_key_exists("BestFrameBase64",$param) and $param["BestFrameBase64"] !== null) {
            $this->BestFrameBase64 = $param["BestFrameBase64"];
        }

        if (array_key_exists("Sim",$param) and $param["Sim"] !== null) {
            $this->Sim = $param["Sim"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("BestFrameList",$param) and $param["BestFrameList"] !== null) {
            $this->BestFrameList = $param["BestFrameList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
