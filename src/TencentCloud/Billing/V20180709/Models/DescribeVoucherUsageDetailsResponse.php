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
 * DescribeVoucherUsageDetails response structure.
 *
 * @method integer getTotalCount() Obtain The total number of vouchers.
 * @method void setTotalCount(integer $TotalCount) Set The total number of vouchers.
 * @method integer getTotalUsedAmount() Obtain The total amount used. The value of this parameter is the total amount used (USD, rounded to 8 decimal places) multiplied by 100,000,000.
 * @method void setTotalUsedAmount(integer $TotalUsedAmount) Set The total amount used. The value of this parameter is the total amount used (USD, rounded to 8 decimal places) multiplied by 100,000,000.
 * @method array getUsageRecords() Obtain The usage details.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setUsageRecords(array $UsageRecords) Set The usage details.
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeVoucherUsageDetailsResponse extends AbstractModel
{
    /**
     * @var integer The total number of vouchers.
     */
    public $TotalCount;

    /**
     * @var integer The total amount used. The value of this parameter is the total amount used (USD, rounded to 8 decimal places) multiplied by 100,000,000.
     */
    public $TotalUsedAmount;

    /**
     * @var array The usage details.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $UsageRecords;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount The total number of vouchers.
     * @param integer $TotalUsedAmount The total amount used. The value of this parameter is the total amount used (USD, rounded to 8 decimal places) multiplied by 100,000,000.
     * @param array $UsageRecords The usage details.
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalUsedAmount",$param) and $param["TotalUsedAmount"] !== null) {
            $this->TotalUsedAmount = $param["TotalUsedAmount"];
        }

        if (array_key_exists("UsageRecords",$param) and $param["UsageRecords"] !== null) {
            $this->UsageRecords = [];
            foreach ($param["UsageRecords"] as $key => $value){
                $obj = new UsageRecords();
                $obj->deserialize($value);
                array_push($this->UsageRecords, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
