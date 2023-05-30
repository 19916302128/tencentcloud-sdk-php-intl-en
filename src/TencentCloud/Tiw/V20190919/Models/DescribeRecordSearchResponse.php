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
 * DescribeRecordSearch response structure.
 *
 * @method array getRecordTaskSet() Obtain The set of queried recording tasks.
 * @method void setRecordTaskSet(array $RecordTaskSet) Set The set of queried recording tasks.
 * @method integer getTotalCount() Obtain Number of recording tasks.
 * @method void setTotalCount(integer $TotalCount) Set Number of recording tasks.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRecordSearchResponse extends AbstractModel
{
    /**
     * @var array The set of queried recording tasks.
     */
    public $RecordTaskSet;

    /**
     * @var integer Number of recording tasks.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $RecordTaskSet The set of queried recording tasks.
     * @param integer $TotalCount Number of recording tasks.
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
        if (array_key_exists("RecordTaskSet",$param) and $param["RecordTaskSet"] !== null) {
            $this->RecordTaskSet = [];
            foreach ($param["RecordTaskSet"] as $key => $value){
                $obj = new RecordTaskSearchResult();
                $obj->deserialize($value);
                array_push($this->RecordTaskSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
