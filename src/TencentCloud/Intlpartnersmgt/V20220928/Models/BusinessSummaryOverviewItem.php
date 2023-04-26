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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Product details in the customer bill data totaled by product
 *
 * @method string getBusinessCode() Obtain Product code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBusinessCode(string $BusinessCode) Set Product code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBusinessCodeName() Obtain Product name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBusinessCodeName(string $BusinessCodeName) Set Product name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOriginalCost() Obtain List price accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginalCost(string $OriginalCost) Set List price accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVoucherPayAmount() Obtain The deducted voucher amount accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set The deducted voucher amount accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTotalCost() Obtain Consumption amount accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCost(string $TotalCost) Set Consumption amount accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BusinessSummaryOverviewItem extends AbstractModel
{
    /**
     * @var string Product code
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BusinessCode;

    /**
     * @var string Product name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BusinessCodeName;

    /**
     * @var string List price accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginalCost;

    /**
     * @var string The deducted voucher amount accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VoucherPayAmount;

    /**
     * @var string Consumption amount accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCost;

    /**
     * @param string $BusinessCode Product code
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BusinessCodeName Product name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OriginalCost List price accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VoucherPayAmount The deducted voucher amount accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TotalCost Consumption amount accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }

        if (array_key_exists("OriginalCost",$param) and $param["OriginalCost"] !== null) {
            $this->OriginalCost = $param["OriginalCost"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }
    }
}
