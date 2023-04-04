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
 * DescribeDocumentsByRoom response structure.
 *
 * @method array getDocuments() Obtain 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDocuments(array $Documents) Set 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotal() Obtain The total number of records that meet the conditions.
 * @method void setTotal(integer $Total) Set The total number of records that meet the conditions.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDocumentsByRoomResponse extends AbstractModel
{
    /**
     * @var array 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Documents;

    /**
     * @var integer The total number of records that meet the conditions.
     */
    public $Total;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Documents 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Total The total number of records that meet the conditions.
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
        if (array_key_exists("Documents",$param) and $param["Documents"] !== null) {
            $this->Documents = [];
            foreach ($param["Documents"] as $key => $value){
                $obj = new DocumentInfo();
                $obj->deserialize($value);
                array_push($this->Documents, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
