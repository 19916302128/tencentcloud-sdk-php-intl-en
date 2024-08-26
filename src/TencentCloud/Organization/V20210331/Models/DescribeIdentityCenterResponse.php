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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIdentityCenter response structure.
 *
 * @method string getZoneId() Obtain Space ID, which starts with the z- prefix, followed by 12 random digits/lowercase letters.
 * @method void setZoneId(string $ZoneId) Set Space ID, which starts with the z- prefix, followed by 12 random digits/lowercase letters.
 * @method string getZoneName() Obtain Space name, which must be globally unique and contain 2-64 characters including lowercase letters, digits, and hyphens (-). It can neither start or end with a hyphen (-) nor contain two consecutive hyphens (-).
 * @method void setZoneName(string $ZoneName) Set Space name, which must be globally unique and contain 2-64 characters including lowercase letters, digits, and hyphens (-). It can neither start or end with a hyphen (-) nor contain two consecutive hyphens (-).
 * @method string getServiceStatus() Obtain Service activation status. Disabled: not activated; Enabled: activated.
 * @method void setServiceStatus(string $ServiceStatus) Set Service activation status. Disabled: not activated; Enabled: activated.
 * @method string getScimSyncStatus() Obtain SCIM synchronization status. Enabled: enabled. Disabled: disabled.
 * @method void setScimSyncStatus(string $ScimSyncStatus) Set SCIM synchronization status. Enabled: enabled. Disabled: disabled.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateTime() Obtain Update date
 * @method void setUpdateTime(string $UpdateTime) Set Update date
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeIdentityCenterResponse extends AbstractModel
{
    /**
     * @var string Space ID, which starts with the z- prefix, followed by 12 random digits/lowercase letters.
     */
    public $ZoneId;

    /**
     * @var string Space name, which must be globally unique and contain 2-64 characters including lowercase letters, digits, and hyphens (-). It can neither start or end with a hyphen (-) nor contain two consecutive hyphens (-).
     */
    public $ZoneName;

    /**
     * @var string Service activation status. Disabled: not activated; Enabled: activated.
     */
    public $ServiceStatus;

    /**
     * @var string SCIM synchronization status. Enabled: enabled. Disabled: disabled.
     */
    public $ScimSyncStatus;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Update date
     */
    public $UpdateTime;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ZoneId Space ID, which starts with the z- prefix, followed by 12 random digits/lowercase letters.
     * @param string $ZoneName Space name, which must be globally unique and contain 2-64 characters including lowercase letters, digits, and hyphens (-). It can neither start or end with a hyphen (-) nor contain two consecutive hyphens (-).
     * @param string $ServiceStatus Service activation status. Disabled: not activated; Enabled: activated.
     * @param string $ScimSyncStatus SCIM synchronization status. Enabled: enabled. Disabled: disabled.
     * @param string $CreateTime Creation time
     * @param string $UpdateTime Update date
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ServiceStatus",$param) and $param["ServiceStatus"] !== null) {
            $this->ServiceStatus = $param["ServiceStatus"];
        }

        if (array_key_exists("ScimSyncStatus",$param) and $param["ScimSyncStatus"] !== null) {
            $this->ScimSyncStatus = $param["ScimSyncStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
