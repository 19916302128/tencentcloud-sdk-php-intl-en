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
 * DescribeDocument response structure.
 *
 * @method string getDocumentId() Obtain The document ID.
 * @method void setDocumentId(string $DocumentId) Set The document ID.
 * @method string getDocumentUrl() Obtain The document’s original URL.
 * @method void setDocumentUrl(string $DocumentUrl) Set The document’s original URL.
 * @method string getDocumentName() Obtain The document title.
 * @method void setDocumentName(string $DocumentName) Set The document title.
 * @method string getOwner() Obtain The user ID of the document’s owner.
 * @method void setOwner(string $Owner) Set The user ID of the document’s owner.
 * @method integer getSdkAppId() Obtain The application ID.
 * @method void setSdkAppId(integer $SdkAppId) Set The application ID.
 * @method integer getPermission() Obtain The document access type.
 * @method void setPermission(integer $Permission) Set The document access type.
 * @method string getTranscodeResult() Obtain The transcoding result. If the file is not transcoded, this parameter will be empty. If it is successfully transcoded, this parameter will be the URL of the transcoded file. If transcoding fails, this parameter will indicate the error code.
 * @method void setTranscodeResult(string $TranscodeResult) Set The transcoding result. If the file is not transcoded, this parameter will be empty. If it is successfully transcoded, this parameter will be the URL of the transcoded file. If transcoding fails, this parameter will indicate the error code.
 * @method integer getTranscodeType() Obtain The transcoding type.
 * @method void setTranscodeType(integer $TranscodeType) Set The transcoding type.
 * @method integer getTranscodeProgress() Obtain The transcoding progress. Value range: 0-100.
 * @method void setTranscodeProgress(integer $TranscodeProgress) Set The transcoding progress. Value range: 0-100.
 * @method integer getTranscodeState() Obtain The transcoding status. `0`: The file is not transcoded. `1`: The file is being transcoded. `2`: Transcoding failed. `3`: Transcoding is successful.
 * @method void setTranscodeState(integer $TranscodeState) Set The transcoding status. `0`: The file is not transcoded. `1`: The file is being transcoded. `2`: Transcoding failed. `3`: Transcoding is successful.
 * @method string getTranscodeInfo() Obtain The error message for failed transcoding.
 * @method void setTranscodeInfo(string $TranscodeInfo) Set The error message for failed transcoding.
 * @method string getDocumentType() Obtain The document type.
 * @method void setDocumentType(string $DocumentType) Set The document type.
 * @method integer getDocumentSize() Obtain The document size (bytes).
 * @method void setDocumentSize(integer $DocumentSize) Set The document size (bytes).
 * @method integer getUpdateTime() Obtain The time (Unix timestamp) when the document was last updated.
 * @method void setUpdateTime(integer $UpdateTime) Set The time (Unix timestamp) when the document was last updated.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDocumentResponse extends AbstractModel
{
    /**
     * @var string The document ID.
     */
    public $DocumentId;

    /**
     * @var string The document’s original URL.
     */
    public $DocumentUrl;

    /**
     * @var string The document title.
     */
    public $DocumentName;

    /**
     * @var string The user ID of the document’s owner.
     */
    public $Owner;

    /**
     * @var integer The application ID.
     */
    public $SdkAppId;

    /**
     * @var integer The document access type.
     */
    public $Permission;

    /**
     * @var string The transcoding result. If the file is not transcoded, this parameter will be empty. If it is successfully transcoded, this parameter will be the URL of the transcoded file. If transcoding fails, this parameter will indicate the error code.
     */
    public $TranscodeResult;

    /**
     * @var integer The transcoding type.
     */
    public $TranscodeType;

    /**
     * @var integer The transcoding progress. Value range: 0-100.
     */
    public $TranscodeProgress;

    /**
     * @var integer The transcoding status. `0`: The file is not transcoded. `1`: The file is being transcoded. `2`: Transcoding failed. `3`: Transcoding is successful.
     */
    public $TranscodeState;

    /**
     * @var string The error message for failed transcoding.
     */
    public $TranscodeInfo;

    /**
     * @var string The document type.
     */
    public $DocumentType;

    /**
     * @var integer The document size (bytes).
     */
    public $DocumentSize;

    /**
     * @var integer The time (Unix timestamp) when the document was last updated.
     */
    public $UpdateTime;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $DocumentId The document ID.
     * @param string $DocumentUrl The document’s original URL.
     * @param string $DocumentName The document title.
     * @param string $Owner The user ID of the document’s owner.
     * @param integer $SdkAppId The application ID.
     * @param integer $Permission The document access type.
     * @param string $TranscodeResult The transcoding result. If the file is not transcoded, this parameter will be empty. If it is successfully transcoded, this parameter will be the URL of the transcoded file. If transcoding fails, this parameter will indicate the error code.
     * @param integer $TranscodeType The transcoding type.
     * @param integer $TranscodeProgress The transcoding progress. Value range: 0-100.
     * @param integer $TranscodeState The transcoding status. `0`: The file is not transcoded. `1`: The file is being transcoded. `2`: Transcoding failed. `3`: Transcoding is successful.
     * @param string $TranscodeInfo The error message for failed transcoding.
     * @param string $DocumentType The document type.
     * @param integer $DocumentSize The document size (bytes).
     * @param integer $UpdateTime The time (Unix timestamp) when the document was last updated.
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
        if (array_key_exists("DocumentId",$param) and $param["DocumentId"] !== null) {
            $this->DocumentId = $param["DocumentId"];
        }

        if (array_key_exists("DocumentUrl",$param) and $param["DocumentUrl"] !== null) {
            $this->DocumentUrl = $param["DocumentUrl"];
        }

        if (array_key_exists("DocumentName",$param) and $param["DocumentName"] !== null) {
            $this->DocumentName = $param["DocumentName"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("TranscodeResult",$param) and $param["TranscodeResult"] !== null) {
            $this->TranscodeResult = $param["TranscodeResult"];
        }

        if (array_key_exists("TranscodeType",$param) and $param["TranscodeType"] !== null) {
            $this->TranscodeType = $param["TranscodeType"];
        }

        if (array_key_exists("TranscodeProgress",$param) and $param["TranscodeProgress"] !== null) {
            $this->TranscodeProgress = $param["TranscodeProgress"];
        }

        if (array_key_exists("TranscodeState",$param) and $param["TranscodeState"] !== null) {
            $this->TranscodeState = $param["TranscodeState"];
        }

        if (array_key_exists("TranscodeInfo",$param) and $param["TranscodeInfo"] !== null) {
            $this->TranscodeInfo = $param["TranscodeInfo"];
        }

        if (array_key_exists("DocumentType",$param) and $param["DocumentType"] !== null) {
            $this->DocumentType = $param["DocumentType"];
        }

        if (array_key_exists("DocumentSize",$param) and $param["DocumentSize"] !== null) {
            $this->DocumentSize = $param["DocumentSize"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
