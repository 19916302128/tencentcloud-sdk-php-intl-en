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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getZone() 获取Availability zone.
 * @method void setZone(string $Zone) 设置Availability zone.
 * @method string getInstanceType() 获取Instance model.
 * @method void setInstanceType(string $InstanceType) 设置Instance model.
 * @method string getInstanceChargeType() 获取Instance billing method. Valid values: <br><li>`PREPAID`: prepaid, i.e., monthly subscription <br><li>`POSTPAID_BY_HOUR`: pay-as-you-go <br><li>`CDHPAID`: you are only billed for the [CDH](https://cloud.tencent.com/document/product/416) instances, not the CVMs running on the CDHs. <br><li>`SPOTPAID`: you are billed based on your bid.
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置Instance billing method. Valid values: <br><li>`PREPAID`: prepaid, i.e., monthly subscription <br><li>`POSTPAID_BY_HOUR`: pay-as-you-go <br><li>`CDHPAID`: you are only billed for the [CDH](https://cloud.tencent.com/document/product/416) instances, not the CVMs running on the CDHs. <br><li>`SPOTPAID`: you are billed based on your bid.
 * @method integer getNetworkCard() 获取ENI type. For example, 25 represents an ENI of 25 GB.
 * @method void setNetworkCard(integer $NetworkCard) 设置ENI type. For example, 25 represents an ENI of 25 GB.
 * @method Externals getExternals() 获取Additional data.
Note: This field may return null, indicating that no valid value is found.
 * @method void setExternals(Externals $Externals) 设置Additional data.
Note: This field may return null, indicating that no valid value is found.
 * @method integer getCpu() 获取Number of CPU cores of an instance model.
 * @method void setCpu(integer $Cpu) 设置Number of CPU cores of an instance model.
 * @method integer getMemory() 获取Instance memory capacity; unit: `GB`.
 * @method void setMemory(integer $Memory) 设置Instance memory capacity; unit: `GB`.
 * @method string getInstanceFamily() 获取Instance model family.
 * @method void setInstanceFamily(string $InstanceFamily) 设置Instance model family.
 * @method string getTypeName() 获取Model name.
 * @method void setTypeName(string $TypeName) 设置Model name.
 * @method array getLocalDiskTypeList() 获取List of local disk specifications. If the parameter returns null, it means that local disks cannot be created.
 * @method void setLocalDiskTypeList(array $LocalDiskTypeList) 设置List of local disk specifications. If the parameter returns null, it means that local disks cannot be created.
 * @method string getStatus() 获取Whether an instance model is available. Valid values: <br><li>SELL: available <br><li>SOLD_OUT: sold out
 * @method void setStatus(string $Status) 设置Whether an instance model is available. Valid values: <br><li>SELL: available <br><li>SOLD_OUT: sold out
 * @method ItemPrice getPrice() 获取Price of an instance model.
 * @method void setPrice(ItemPrice $Price) 设置Price of an instance model.
 */

/**
 *Describes instance model quota.
 */
class InstanceTypeQuotaItem extends AbstractModel
{
    /**
     * @var string Availability zone.
     */
    public $Zone;

    /**
     * @var string Instance model.
     */
    public $InstanceType;

    /**
     * @var string Instance billing method. Valid values: <br><li>`PREPAID`: prepaid, i.e., monthly subscription <br><li>`POSTPAID_BY_HOUR`: pay-as-you-go <br><li>`CDHPAID`: you are only billed for the [CDH](https://cloud.tencent.com/document/product/416) instances, not the CVMs running on the CDHs. <br><li>`SPOTPAID`: you are billed based on your bid.
     */
    public $InstanceChargeType;

    /**
     * @var integer ENI type. For example, 25 represents an ENI of 25 GB.
     */
    public $NetworkCard;

    /**
     * @var Externals Additional data.
Note: This field may return null, indicating that no valid value is found.
     */
    public $Externals;

    /**
     * @var integer Number of CPU cores of an instance model.
     */
    public $Cpu;

    /**
     * @var integer Instance memory capacity; unit: `GB`.
     */
    public $Memory;

    /**
     * @var string Instance model family.
     */
    public $InstanceFamily;

    /**
     * @var string Model name.
     */
    public $TypeName;

    /**
     * @var array List of local disk specifications. If the parameter returns null, it means that local disks cannot be created.
     */
    public $LocalDiskTypeList;

    /**
     * @var string Whether an instance model is available. Valid values: <br><li>SELL: available <br><li>SOLD_OUT: sold out
     */
    public $Status;

    /**
     * @var ItemPrice Price of an instance model.
     */
    public $Price;
    /**
     * @param string $Zone Availability zone.
     * @param string $InstanceType Instance model.
     * @param string $InstanceChargeType Instance billing method. Valid values: <br><li>`PREPAID`: prepaid, i.e., monthly subscription <br><li>`POSTPAID_BY_HOUR`: pay-as-you-go <br><li>`CDHPAID`: you are only billed for the [CDH](https://cloud.tencent.com/document/product/416) instances, not the CVMs running on the CDHs. <br><li>`SPOTPAID`: you are billed based on your bid.
     * @param integer $NetworkCard ENI type. For example, 25 represents an ENI of 25 GB.
     * @param Externals $Externals Additional data.
Note: This field may return null, indicating that no valid value is found.
     * @param integer $Cpu Number of CPU cores of an instance model.
     * @param integer $Memory Instance memory capacity; unit: `GB`.
     * @param string $InstanceFamily Instance model family.
     * @param string $TypeName Model name.
     * @param array $LocalDiskTypeList List of local disk specifications. If the parameter returns null, it means that local disks cannot be created.
     * @param string $Status Whether an instance model is available. Valid values: <br><li>SELL: available <br><li>SOLD_OUT: sold out
     * @param ItemPrice $Price Price of an instance model.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("NetworkCard",$param) and $param["NetworkCard"] !== null) {
            $this->NetworkCard = $param["NetworkCard"];
        }

        if (array_key_exists("Externals",$param) and $param["Externals"] !== null) {
            $this->Externals = new Externals();
            $this->Externals->deserialize($param["Externals"]);
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("LocalDiskTypeList",$param) and $param["LocalDiskTypeList"] !== null) {
            $this->LocalDiskTypeList = [];
            foreach ($param["LocalDiskTypeList"] as $key => $value){
                $obj = new LocalDiskType();
                $obj->deserialize($value);
                array_push($this->LocalDiskTypeList, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = new ItemPrice();
            $this->Price->deserialize($param["Price"]);
        }
    }
}
