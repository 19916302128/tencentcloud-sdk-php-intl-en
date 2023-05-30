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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserStatus response structure.
 *
 * @method integer getAppId() Obtain AppId of the customer.
 * @method void setAppId(integer $AppId) Set AppId of the customer.
 * @method integer getIsTiwUser() Obtain Specifies whether the whiteboard service of the trial or official edition is activated before.

0: The whiteboard service is not activated.
1: The whiteboard service is activated.
 * @method void setIsTiwUser(integer $IsTiwUser) Set Specifies whether the whiteboard service of the trial or official edition is activated before.

0: The whiteboard service is not activated.
1: The whiteboard service is activated.
 * @method integer getIsSaaSUser() Obtain Specifies whether the interactive class feature of the trial or official edition is activated before.
 * @method void setIsSaaSUser(integer $IsSaaSUser) Set Specifies whether the interactive class feature of the trial or official edition is activated before.
 * @method integer getIsTiwOfflineRecordUser() Obtain Specifies whether the user uses the offline recording feature of the whiteboard service.
 * @method void setIsTiwOfflineRecordUser(integer $IsTiwOfflineRecordUser) Set Specifies whether the user uses the offline recording feature of the whiteboard service.
 * @method integer getIsAuthenticated() Obtain Specifies whether the user is authenticated.
 * @method void setIsAuthenticated(integer $IsAuthenticated) Set Specifies whether the user is authenticated.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeUserStatusResponse extends AbstractModel
{
    /**
     * @var integer AppId of the customer.
     */
    public $AppId;

    /**
     * @var integer Specifies whether the whiteboard service of the trial or official edition is activated before.

0: The whiteboard service is not activated.
1: The whiteboard service is activated.
     */
    public $IsTiwUser;

    /**
     * @var integer Specifies whether the interactive class feature of the trial or official edition is activated before.
     */
    public $IsSaaSUser;

    /**
     * @var integer Specifies whether the user uses the offline recording feature of the whiteboard service.
     */
    public $IsTiwOfflineRecordUser;

    /**
     * @var integer Specifies whether the user is authenticated.
     */
    public $IsAuthenticated;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $AppId AppId of the customer.
     * @param integer $IsTiwUser Specifies whether the whiteboard service of the trial or official edition is activated before.

0: The whiteboard service is not activated.
1: The whiteboard service is activated.
     * @param integer $IsSaaSUser Specifies whether the interactive class feature of the trial or official edition is activated before.
     * @param integer $IsTiwOfflineRecordUser Specifies whether the user uses the offline recording feature of the whiteboard service.
     * @param integer $IsAuthenticated Specifies whether the user is authenticated.
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("IsTiwUser",$param) and $param["IsTiwUser"] !== null) {
            $this->IsTiwUser = $param["IsTiwUser"];
        }

        if (array_key_exists("IsSaaSUser",$param) and $param["IsSaaSUser"] !== null) {
            $this->IsSaaSUser = $param["IsSaaSUser"];
        }

        if (array_key_exists("IsTiwOfflineRecordUser",$param) and $param["IsTiwOfflineRecordUser"] !== null) {
            $this->IsTiwOfflineRecordUser = $param["IsTiwOfflineRecordUser"];
        }

        if (array_key_exists("IsAuthenticated",$param) and $param["IsAuthenticated"] !== null) {
            $this->IsAuthenticated = $param["IsAuthenticated"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
