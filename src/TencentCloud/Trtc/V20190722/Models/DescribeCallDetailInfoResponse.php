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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCallDetailInfo response structure.
 *
 * @method integer getTotal() Obtain The number of records returned.
 * @method void setTotal(integer $Total) Set The number of records returned.
 * @method array getUserList() Obtain The user information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserList(array $UserList) Set The user information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getData() Obtain The call quality data.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setData(array $Data) Set The call quality data.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeCallDetailInfoResponse extends AbstractModel
{
    /**
     * @var integer The number of records returned.
     */
    public $Total;

    /**
     * @var array The user information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserList;

    /**
     * @var array The call quality data.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Data;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Total The number of records returned.
     * @param array $UserList The user information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Data The call quality data.
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("UserList",$param) and $param["UserList"] !== null) {
            $this->UserList = [];
            foreach ($param["UserList"] as $key => $value){
                $obj = new UserInformation();
                $obj->deserialize($value);
                array_push($this->UserList, $obj);
            }
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new QualityData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
