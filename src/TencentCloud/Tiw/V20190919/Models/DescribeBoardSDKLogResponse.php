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
 * DescribeBoardSDKLog response structure.
 *
 * @method integer getTotal() Obtain Number of logs queried.
 * @method void setTotal(integer $Total) Set Number of logs queried.
 * @method array getSources() Obtain Log details.
 * @method void setSources(array $Sources) Set Log details.
 * @method array getBuckets() Obtain Number of logs queried within each time range after aggregation based on the time range.
 * @method void setBuckets(array $Buckets) Set Number of logs queried within each time range after aggregation based on the time range.
 * @method string getContext() Obtain Context key used for recursive extraction. This parameter can be used in the next request.
 * @method void setContext(string $Context) Set Context key used for recursive extraction. This parameter can be used in the next request.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeBoardSDKLogResponse extends AbstractModel
{
    /**
     * @var integer Number of logs queried.
     */
    public $Total;

    /**
     * @var array Log details.
     */
    public $Sources;

    /**
     * @var array Number of logs queried within each time range after aggregation based on the time range.
     */
    public $Buckets;

    /**
     * @var string Context key used for recursive extraction. This parameter can be used in the next request.
     */
    public $Context;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Total Number of logs queried.
     * @param array $Sources Log details.
     * @param array $Buckets Number of logs queried within each time range after aggregation based on the time range.
     * @param string $Context Context key used for recursive extraction. This parameter can be used in the next request.
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

        if (array_key_exists("Sources",$param) and $param["Sources"] !== null) {
            $this->Sources = $param["Sources"];
        }

        if (array_key_exists("Buckets",$param) and $param["Buckets"] !== null) {
            $this->Buckets = $param["Buckets"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
