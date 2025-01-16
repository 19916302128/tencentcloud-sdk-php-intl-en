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
 * Policy product list entity response parameters structure.
 *
 * @method string getPolicyCode() Obtain Dealer policy code.
 * @method void setPolicyCode(string $PolicyCode) Set Dealer policy code.
 * @method string getProductCode() Obtain Product level 1 code. If the return value is *, any item at this level is included in the policy product range.
 * @method void setProductCode(string $ProductCode) Set Product level 1 code. If the return value is *, any item at this level is included in the policy product range.
 * @method string getProductName() Obtain Product level 1 name. If the return value is *, any item at this level is included in the policy product range.
 * @method void setProductName(string $ProductName) Set Product level 1 name. If the return value is *, any item at this level is included in the policy product range.
 * @method string getSubProductCode() Obtain Product level 2 code. If the return value is *, any item at this level is included in the policy product range.
 * @method void setSubProductCode(string $SubProductCode) Set Product level 2 code. If the return value is *, any item at this level is included in the policy product range.
 * @method string getSubProductName() Obtain Product level 2 name. If the return value is *, any item at this level is included in the policy product range.
 * @method void setSubProductName(string $SubProductName) Set Product level 2 name. If the return value is *, any item at this level is included in the policy product range.
 * @method string getComponentTypeCode() Obtain Product level 3 code. If the return value is *, any item at this level is included in the policy product range.
 * @method void setComponentTypeCode(string $ComponentTypeCode) Set Product level 3 code. If the return value is *, any item at this level is included in the policy product range.
 * @method string getComponentTypeName() Obtain Product level 3 name. If the return value is *, any item at this level is included in the policy product range.
 * @method void setComponentTypeName(string $ComponentTypeName) Set Product level 3 name. If the return value is *, any item at this level is included in the policy product range.
 * @method string getComponentCode() Obtain Product level 4 code. If the return value is *, any item at this level is included in the policy product range.
 * @method void setComponentCode(string $ComponentCode) Set Product level 4 code. If the return value is *, any item at this level is included in the policy product range.
 * @method string getComponentName() Obtain Product fourth-level name. If the return value is *, any item under this level is included in the policy product scope.
 * @method void setComponentName(string $ComponentName) Set Product fourth-level name. If the return value is *, any item under this level is included in the policy product scope.
 * @method string getStartDate() Obtain Policy effective time.
 * @method void setStartDate(string $StartDate) Set Policy effective time.
 * @method string getEndDate() Obtain Policy expiration time.
 * @method void setEndDate(string $EndDate) Set Policy expiration time.
 */
class PolicyProductList extends AbstractModel
{
    /**
     * @var string Dealer policy code.
     */
    public $PolicyCode;

    /**
     * @var string Product level 1 code. If the return value is *, any item at this level is included in the policy product range.
     */
    public $ProductCode;

    /**
     * @var string Product level 1 name. If the return value is *, any item at this level is included in the policy product range.
     */
    public $ProductName;

    /**
     * @var string Product level 2 code. If the return value is *, any item at this level is included in the policy product range.
     */
    public $SubProductCode;

    /**
     * @var string Product level 2 name. If the return value is *, any item at this level is included in the policy product range.
     */
    public $SubProductName;

    /**
     * @var string Product level 3 code. If the return value is *, any item at this level is included in the policy product range.
     */
    public $ComponentTypeCode;

    /**
     * @var string Product level 3 name. If the return value is *, any item at this level is included in the policy product range.
     */
    public $ComponentTypeName;

    /**
     * @var string Product level 4 code. If the return value is *, any item at this level is included in the policy product range.
     */
    public $ComponentCode;

    /**
     * @var string Product fourth-level name. If the return value is *, any item under this level is included in the policy product scope.
     */
    public $ComponentName;

    /**
     * @var string Policy effective time.
     */
    public $StartDate;

    /**
     * @var string Policy expiration time.
     */
    public $EndDate;

    /**
     * @param string $PolicyCode Dealer policy code.
     * @param string $ProductCode Product level 1 code. If the return value is *, any item at this level is included in the policy product range.
     * @param string $ProductName Product level 1 name. If the return value is *, any item at this level is included in the policy product range.
     * @param string $SubProductCode Product level 2 code. If the return value is *, any item at this level is included in the policy product range.
     * @param string $SubProductName Product level 2 name. If the return value is *, any item at this level is included in the policy product range.
     * @param string $ComponentTypeCode Product level 3 code. If the return value is *, any item at this level is included in the policy product range.
     * @param string $ComponentTypeName Product level 3 name. If the return value is *, any item at this level is included in the policy product range.
     * @param string $ComponentCode Product level 4 code. If the return value is *, any item at this level is included in the policy product range.
     * @param string $ComponentName Product fourth-level name. If the return value is *, any item under this level is included in the policy product scope.
     * @param string $StartDate Policy effective time.
     * @param string $EndDate Policy expiration time.
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
        if (array_key_exists("PolicyCode",$param) and $param["PolicyCode"] !== null) {
            $this->PolicyCode = $param["PolicyCode"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("SubProductName",$param) and $param["SubProductName"] !== null) {
            $this->SubProductName = $param["SubProductName"];
        }

        if (array_key_exists("ComponentTypeCode",$param) and $param["ComponentTypeCode"] !== null) {
            $this->ComponentTypeCode = $param["ComponentTypeCode"];
        }

        if (array_key_exists("ComponentTypeName",$param) and $param["ComponentTypeName"] !== null) {
            $this->ComponentTypeName = $param["ComponentTypeName"];
        }

        if (array_key_exists("ComponentCode",$param) and $param["ComponentCode"] !== null) {
            $this->ComponentCode = $param["ComponentCode"];
        }

        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }
    }
}
