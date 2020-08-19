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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node hardware information
 *
 * @method integer getAppId() Obtain User `APPID`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAppId(integer $AppId) Set User `APPID`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSerialNo() Obtain Serial number
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSerialNo(string $SerialNo) Set Serial number
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOrderNo() Obtain Machine instance ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOrderNo(string $OrderNo) Set Machine instance ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getWanIp() Obtain Public IP bound to master node
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWanIp(string $WanIp) Set Public IP bound to master node
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getFlag() Obtain Node type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFlag(integer $Flag) Set Node type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSpec() Obtain Node specification
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSpec(string $Spec) Set Node specification
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCpuNum() Obtain Number of node cores
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCpuNum(integer $CpuNum) Set Number of node cores
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMemSize() Obtain Node memory size
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMemSize(integer $MemSize) Set Node memory size
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMemDesc() Obtain Node memory description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMemDesc(string $MemDesc) Set Node memory description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRegionId() Obtain Node region
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRegionId(integer $RegionId) Set Node region
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getZoneId() Obtain Node AZ
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setZoneId(integer $ZoneId) Set Node AZ
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApplyTime() Obtain Application time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApplyTime(string $ApplyTime) Set Application time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFreeTime() Obtain Release time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFreeTime(string $FreeTime) Set Release time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDiskSize() Obtain Disk size
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDiskSize(string $DiskSize) Set Disk size
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getNameTag() Obtain Node description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNameTag(string $NameTag) Set Node description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServices() Obtain Services deployed on node
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServices(string $Services) Set Services deployed on node
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStorageType() Obtain Disk type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStorageType(integer $StorageType) Set Disk type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRootSize() Obtain System disk size
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRootSize(integer $RootSize) Set System disk size
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getChargeType() Obtain Payment type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setChargeType(integer $ChargeType) Set Payment type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCdbIp() Obtain Database IP
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCdbIp(string $CdbIp) Set Database IP
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCdbPort() Obtain Database port
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCdbPort(integer $CdbPort) Set Database port
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getHwDiskSize() Obtain Disk capacity
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHwDiskSize(integer $HwDiskSize) Set Disk capacity
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getHwDiskSizeDesc() Obtain Disk capacity description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHwDiskSizeDesc(string $HwDiskSizeDesc) Set Disk capacity description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getHwMemSize() Obtain Memory capacity
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHwMemSize(integer $HwMemSize) Set Memory capacity
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getHwMemSizeDesc() Obtain Memory capacity description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHwMemSizeDesc(string $HwMemSizeDesc) Set Memory capacity description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getExpireTime() Obtain Expiration time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEmrResourceId() Obtain Node resource ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEmrResourceId(string $EmrResourceId) Set Node resource ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getIsAutoRenew() Obtain Renewal flag
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsAutoRenew(integer $IsAutoRenew) Set Renewal flag
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDeviceClass() Obtain Device flag
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeviceClass(string $DeviceClass) Set Device flag
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMutable() Obtain Support for configuration adjustment
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMutable(integer $Mutable) Set Support for configuration adjustment
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getMCMultiDisk() Obtain Multi-cloud disk
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMCMultiDisk(array $MCMultiDisk) Set Multi-cloud disk
Note: this field may return null, indicating that no valid values can be obtained.
 * @method CdbInfo getCdbNodeInfo() Obtain Database information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCdbNodeInfo(CdbInfo $CdbNodeInfo) Set Database information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIp() Obtain Private IP
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIp(string $Ip) Set Private IP
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getDestroyable() Obtain Whether this node can be terminated. 1: yes, 0: no
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDestroyable(integer $Destroyable) Set Whether this node can be terminated. 1: yes, 0: no
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tags bound to node
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tags bound to node
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getAutoFlag() Obtain 
 * @method void setAutoFlag(integer $AutoFlag) Set 
 * @method string getHardwareResourceType() Obtain Resource type. Valid values: host, pod
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHardwareResourceType(string $HardwareResourceType) Set Resource type. Valid values: host, pod
Note: this field may return null, indicating that no valid values can be obtained.
 */
class NodeHardwareInfo extends AbstractModel
{
    /**
     * @var integer User `APPID`
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string Serial number
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SerialNo;

    /**
     * @var string Machine instance ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OrderNo;

    /**
     * @var string Public IP bound to master node
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $WanIp;

    /**
     * @var integer Node type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Flag;

    /**
     * @var string Node specification
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Spec;

    /**
     * @var integer Number of node cores
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CpuNum;

    /**
     * @var integer Node memory size
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MemSize;

    /**
     * @var string Node memory description
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MemDesc;

    /**
     * @var integer Node region
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RegionId;

    /**
     * @var integer Node AZ
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneId;

    /**
     * @var string Application time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApplyTime;

    /**
     * @var string Release time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FreeTime;

    /**
     * @var string Disk size
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DiskSize;

    /**
     * @var string Node description
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NameTag;

    /**
     * @var string Services deployed on node
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Services;

    /**
     * @var integer Disk type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StorageType;

    /**
     * @var integer System disk size
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RootSize;

    /**
     * @var integer Payment type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ChargeType;

    /**
     * @var string Database IP
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CdbIp;

    /**
     * @var integer Database port
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CdbPort;

    /**
     * @var integer Disk capacity
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HwDiskSize;

    /**
     * @var string Disk capacity description
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HwDiskSizeDesc;

    /**
     * @var integer Memory capacity
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HwMemSize;

    /**
     * @var string Memory capacity description
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HwMemSizeDesc;

    /**
     * @var string Expiration time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @var string Node resource ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EmrResourceId;

    /**
     * @var integer Renewal flag
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsAutoRenew;

    /**
     * @var string Device flag
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DeviceClass;

    /**
     * @var integer Support for configuration adjustment
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Mutable;

    /**
     * @var array Multi-cloud disk
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MCMultiDisk;

    /**
     * @var CdbInfo Database information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CdbNodeInfo;

    /**
     * @var string Private IP
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Ip;

    /**
     * @var integer Whether this node can be terminated. 1: yes, 0: no
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Destroyable;

    /**
     * @var array Tags bound to node
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var integer 
     */
    public $AutoFlag;

    /**
     * @var string Resource type. Valid values: host, pod
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HardwareResourceType;

    /**
     * @param integer $AppId User `APPID`
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SerialNo Serial number
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OrderNo Machine instance ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $WanIp Public IP bound to master node
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Flag Node type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Spec Node specification
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CpuNum Number of node cores
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MemSize Node memory size
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $MemDesc Node memory description
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RegionId Node region
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ZoneId Node AZ
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApplyTime Application time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FreeTime Release time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DiskSize Disk size
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $NameTag Node description
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Services Services deployed on node
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $StorageType Disk type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RootSize System disk size
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ChargeType Payment type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CdbIp Database IP
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CdbPort Database port
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $HwDiskSize Disk capacity
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $HwDiskSizeDesc Disk capacity description
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $HwMemSize Memory capacity
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $HwMemSizeDesc Memory capacity description
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireTime Expiration time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $EmrResourceId Node resource ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $IsAutoRenew Renewal flag
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DeviceClass Device flag
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Mutable Support for configuration adjustment
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $MCMultiDisk Multi-cloud disk
Note: this field may return null, indicating that no valid values can be obtained.
     * @param CdbInfo $CdbNodeInfo Database information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Ip Private IP
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Destroyable Whether this node can be terminated. 1: yes, 0: no
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tags bound to node
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $AutoFlag 
     * @param string $HardwareResourceType Resource type. Valid values: host, pod
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("SerialNo",$param) and $param["SerialNo"] !== null) {
            $this->SerialNo = $param["SerialNo"];
        }

        if (array_key_exists("OrderNo",$param) and $param["OrderNo"] !== null) {
            $this->OrderNo = $param["OrderNo"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("MemDesc",$param) and $param["MemDesc"] !== null) {
            $this->MemDesc = $param["MemDesc"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("FreeTime",$param) and $param["FreeTime"] !== null) {
            $this->FreeTime = $param["FreeTime"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("NameTag",$param) and $param["NameTag"] !== null) {
            $this->NameTag = $param["NameTag"];
        }

        if (array_key_exists("Services",$param) and $param["Services"] !== null) {
            $this->Services = $param["Services"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("RootSize",$param) and $param["RootSize"] !== null) {
            $this->RootSize = $param["RootSize"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("CdbIp",$param) and $param["CdbIp"] !== null) {
            $this->CdbIp = $param["CdbIp"];
        }

        if (array_key_exists("CdbPort",$param) and $param["CdbPort"] !== null) {
            $this->CdbPort = $param["CdbPort"];
        }

        if (array_key_exists("HwDiskSize",$param) and $param["HwDiskSize"] !== null) {
            $this->HwDiskSize = $param["HwDiskSize"];
        }

        if (array_key_exists("HwDiskSizeDesc",$param) and $param["HwDiskSizeDesc"] !== null) {
            $this->HwDiskSizeDesc = $param["HwDiskSizeDesc"];
        }

        if (array_key_exists("HwMemSize",$param) and $param["HwMemSize"] !== null) {
            $this->HwMemSize = $param["HwMemSize"];
        }

        if (array_key_exists("HwMemSizeDesc",$param) and $param["HwMemSizeDesc"] !== null) {
            $this->HwMemSizeDesc = $param["HwMemSizeDesc"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("EmrResourceId",$param) and $param["EmrResourceId"] !== null) {
            $this->EmrResourceId = $param["EmrResourceId"];
        }

        if (array_key_exists("IsAutoRenew",$param) and $param["IsAutoRenew"] !== null) {
            $this->IsAutoRenew = $param["IsAutoRenew"];
        }

        if (array_key_exists("DeviceClass",$param) and $param["DeviceClass"] !== null) {
            $this->DeviceClass = $param["DeviceClass"];
        }

        if (array_key_exists("Mutable",$param) and $param["Mutable"] !== null) {
            $this->Mutable = $param["Mutable"];
        }

        if (array_key_exists("MCMultiDisk",$param) and $param["MCMultiDisk"] !== null) {
            $this->MCMultiDisk = [];
            foreach ($param["MCMultiDisk"] as $key => $value){
                $obj = new MultiDiskMC();
                $obj->deserialize($value);
                array_push($this->MCMultiDisk, $obj);
            }
        }

        if (array_key_exists("CdbNodeInfo",$param) and $param["CdbNodeInfo"] !== null) {
            $this->CdbNodeInfo = new CdbInfo();
            $this->CdbNodeInfo->deserialize($param["CdbNodeInfo"]);
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Destroyable",$param) and $param["Destroyable"] !== null) {
            $this->Destroyable = $param["Destroyable"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoFlag",$param) and $param["AutoFlag"] !== null) {
            $this->AutoFlag = $param["AutoFlag"];
        }

        if (array_key_exists("HardwareResourceType",$param) and $param["HardwareResourceType"] !== null) {
            $this->HardwareResourceType = $param["HardwareResourceType"];
        }
    }
}
