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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRealTimeTaskSpeed response structure.
 *
 * @method array getRecordsSpeedList() Obtain Synchronous Speed Bar/s List
 * @method void setRecordsSpeedList(array $RecordsSpeedList) Set Synchronous Speed Bar/s List
 * @method array getBytesSpeedList() Obtain Synchronous Speed Bytes/s List
 * @method void setBytesSpeedList(array $BytesSpeedList) Set Synchronous Speed Bytes/s List
 * @method RealTimeTaskSpeed getData() Obtain Synchronous Speed, including RecordsSpeedList and BytesSpeedList
 * @method void setData(RealTimeTaskSpeed $Data) Set Synchronous Speed, including RecordsSpeedList and BytesSpeedList
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeRealTimeTaskSpeedResponse extends AbstractModel
{
    /**
     * @var array Synchronous Speed Bar/s List
     */
    public $RecordsSpeedList;

    /**
     * @var array Synchronous Speed Bytes/s List
     */
    public $BytesSpeedList;

    /**
     * @var RealTimeTaskSpeed Synchronous Speed, including RecordsSpeedList and BytesSpeedList
     */
    public $Data;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $RecordsSpeedList Synchronous Speed Bar/s List
     * @param array $BytesSpeedList Synchronous Speed Bytes/s List
     * @param RealTimeTaskSpeed $Data Synchronous Speed, including RecordsSpeedList and BytesSpeedList
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
        if (array_key_exists("RecordsSpeedList",$param) and $param["RecordsSpeedList"] !== null) {
            $this->RecordsSpeedList = [];
            foreach ($param["RecordsSpeedList"] as $key => $value){
                $obj = new RecordsSpeed();
                $obj->deserialize($value);
                array_push($this->RecordsSpeedList, $obj);
            }
        }

        if (array_key_exists("BytesSpeedList",$param) and $param["BytesSpeedList"] !== null) {
            $this->BytesSpeedList = [];
            foreach ($param["BytesSpeedList"] as $key => $value){
                $obj = new BytesSpeed();
                $obj->deserialize($value);
                array_push($this->BytesSpeedList, $obj);
            }
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new RealTimeTaskSpeed();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
