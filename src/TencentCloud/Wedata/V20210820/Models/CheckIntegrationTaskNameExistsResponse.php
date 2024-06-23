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
 * CheckIntegrationTaskNameExists response structure.
 *
 * @method boolean getData() Obtain true indicates it exists, false indicates it does not exist
 * @method void setData(boolean $Data) Set true indicates it exists, false indicates it does not exist
 * @method integer getExistsType() Obtain Task Name Duplication Type (0: Not duplicated, 1: Duplicated in development state, 2: Duplicated in production state)
 * @method void setExistsType(integer $ExistsType) Set Task Name Duplication Type (0: Not duplicated, 1: Duplicated in development state, 2: Duplicated in production state)
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class CheckIntegrationTaskNameExistsResponse extends AbstractModel
{
    /**
     * @var boolean true indicates it exists, false indicates it does not exist
     */
    public $Data;

    /**
     * @var integer Task Name Duplication Type (0: Not duplicated, 1: Duplicated in development state, 2: Duplicated in production state)
     */
    public $ExistsType;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param boolean $Data true indicates it exists, false indicates it does not exist
     * @param integer $ExistsType Task Name Duplication Type (0: Not duplicated, 1: Duplicated in development state, 2: Duplicated in production state)
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("ExistsType",$param) and $param["ExistsType"] !== null) {
            $this->ExistsType = $param["ExistsType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
