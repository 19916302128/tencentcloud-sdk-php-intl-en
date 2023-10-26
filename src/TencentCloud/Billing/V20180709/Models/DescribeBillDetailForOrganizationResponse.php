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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillDetailForOrganization response structure.
 *
 * @method array getDetailSet() Obtain Details list.
 * @method void setDetailSet(array $DetailSet) Set Details list.
 * @method integer getTotal() Obtain Total number of records, which is cached every 24 hours and may be less than the actual total number of records.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotal(integer $Total) Set Total number of records, which is cached every 24 hours and may be less than the actual total number of records.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContext() Obtain Context information of the current request, which can be used in the parameters of the next request to speed up the query.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContext(string $Context) Set Context information of the current request, which can be used in the parameters of the next request to speed up the query.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeBillDetailForOrganizationResponse extends AbstractModel
{
    /**
     * @var array Details list.
     */
    public $DetailSet;

    /**
     * @var integer Total number of records, which is cached every 24 hours and may be less than the actual total number of records.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Total;

    /**
     * @var string Context information of the current request, which can be used in the parameters of the next request to speed up the query.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Context;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $DetailSet Details list.
     * @param integer $Total Total number of records, which is cached every 24 hours and may be less than the actual total number of records.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Context Context information of the current request, which can be used in the parameters of the next request to speed up the query.
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
        if (array_key_exists("DetailSet",$param) and $param["DetailSet"] !== null) {
            $this->DetailSet = [];
            foreach ($param["DetailSet"] as $key => $value){
                $obj = new DistributionBillDetail();
                $obj->deserialize($value);
                array_push($this->DetailSet, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
