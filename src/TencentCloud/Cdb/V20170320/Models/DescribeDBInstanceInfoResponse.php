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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstanceInfo response structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getEncryption() Obtain Whether encryption is enabled. YES: enabled, NO: not enabled.
 * @method void setEncryption(string $Encryption) Set Whether encryption is enabled. YES: enabled, NO: not enabled.
 * @method string getKeyId() Obtain Encryption key ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setKeyId(string $KeyId) Set Encryption key ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getKeyRegion() Obtain Key region.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setKeyRegion(string $KeyRegion) Set Key region.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDefaultKmsRegion() Obtain The default region of the KMS service currently used by the TencentDB backend service.
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setDefaultKmsRegion(string $DefaultKmsRegion) Set The default region of the KMS service currently used by the TencentDB backend service.
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeDBInstanceInfoResponse extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string Whether encryption is enabled. YES: enabled, NO: not enabled.
     */
    public $Encryption;

    /**
     * @var string Encryption key ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $KeyId;

    /**
     * @var string Key region.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $KeyRegion;

    /**
     * @var string The default region of the KMS service currently used by the TencentDB backend service.
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $DefaultKmsRegion;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $InstanceName Instance name.
     * @param string $Encryption Whether encryption is enabled. YES: enabled, NO: not enabled.
     * @param string $KeyId Encryption key ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $KeyRegion Key region.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DefaultKmsRegion The default region of the KMS service currently used by the TencentDB backend service.
Note: this field may return `null`, indicating that no valid value can be found.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = $param["Encryption"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyRegion",$param) and $param["KeyRegion"] !== null) {
            $this->KeyRegion = $param["KeyRegion"];
        }

        if (array_key_exists("DefaultKmsRegion",$param) and $param["DefaultKmsRegion"] !== null) {
            $this->DefaultKmsRegion = $param["DefaultKmsRegion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
