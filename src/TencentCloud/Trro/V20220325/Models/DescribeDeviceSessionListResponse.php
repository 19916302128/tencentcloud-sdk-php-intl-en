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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceSessionList response structure.
 *
 * @method integer getTotal() Obtain Total number.
 * @method void setTotal(integer $Total) Set Total number.
 * @method array getDeviceSessionList() Obtain Conversation list.
 * @method void setDeviceSessionList(array $DeviceSessionList) Set Conversation list.
 * @method integer getNum() Obtain Number of items on this page.
 * @method void setNum(integer $Num) Set Number of items on this page.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeDeviceSessionListResponse extends AbstractModel
{
    /**
     * @var integer Total number.
     */
    public $Total;

    /**
     * @var array Conversation list.
     */
    public $DeviceSessionList;

    /**
     * @var integer Number of items on this page.
     */
    public $Num;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Total Total number.
     * @param array $DeviceSessionList Conversation list.
     * @param integer $Num Number of items on this page.
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("DeviceSessionList",$param) and $param["DeviceSessionList"] !== null) {
            $this->DeviceSessionList = [];
            foreach ($param["DeviceSessionList"] as $key => $value){
                $obj = new SessionInfo();
                $obj->deserialize($value);
                array_push($this->DeviceSessionList, $obj);
            }
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
