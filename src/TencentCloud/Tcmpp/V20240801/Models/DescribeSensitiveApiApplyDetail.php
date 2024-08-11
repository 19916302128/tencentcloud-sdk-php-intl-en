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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of sensitive API applications
 *
 * @method string getAPIId() Obtain API ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAPIId(string $APIId) Set API ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAPIMethod() Obtain API request method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAPIMethod(string $APIMethod) Set API request method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplyReason() Obtain Reason for application
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplyReason(string $ApplyReason) Set Reason for application
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRejectReason() Obtain Reason for rejection
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRejectReason(string $RejectReason) Set Reason for rejection
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAuditStatus() Obtain Approval status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuditStatus(integer $AuditStatus) Set Approval status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAPIDesc() Obtain API function description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAPIDesc(string $APIDesc) Set API function description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAPIType() Obtain API type. 1: System; 2: Custom
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAPIType(integer $APIType) Set API type. 1: System; 2: Custom
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeSensitiveApiApplyDetail extends AbstractModel
{
    /**
     * @var string API ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $APIId;

    /**
     * @var string API request method
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $APIMethod;

    /**
     * @var string Reason for application
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplyReason;

    /**
     * @var string Reason for rejection
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RejectReason;

    /**
     * @var integer Approval status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuditStatus;

    /**
     * @var string API function description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $APIDesc;

    /**
     * @var integer API type. 1: System; 2: Custom
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $APIType;

    /**
     * @param string $APIId API ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $APIMethod API request method
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplyReason Reason for application
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RejectReason Reason for rejection
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AuditStatus Approval status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $APIDesc API function description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $APIType API type. 1: System; 2: Custom
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("APIId",$param) and $param["APIId"] !== null) {
            $this->APIId = $param["APIId"];
        }

        if (array_key_exists("APIMethod",$param) and $param["APIMethod"] !== null) {
            $this->APIMethod = $param["APIMethod"];
        }

        if (array_key_exists("ApplyReason",$param) and $param["ApplyReason"] !== null) {
            $this->ApplyReason = $param["ApplyReason"];
        }

        if (array_key_exists("RejectReason",$param) and $param["RejectReason"] !== null) {
            $this->RejectReason = $param["RejectReason"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("APIDesc",$param) and $param["APIDesc"] !== null) {
            $this->APIDesc = $param["APIDesc"];
        }

        if (array_key_exists("APIType",$param) and $param["APIType"] !== null) {
            $this->APIType = $param["APIType"];
        }
    }
}
