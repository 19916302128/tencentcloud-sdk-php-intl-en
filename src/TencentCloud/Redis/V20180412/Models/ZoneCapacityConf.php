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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getZoneId() 获取AZ ID, such as ap-guangzhou-3
 * @method void setZoneId(string $ZoneId) 设置AZ ID, such as ap-guangzhou-3
 * @method string getZoneName() 获取AZ name
 * @method void setZoneName(string $ZoneName) 设置AZ name
 * @method boolean getIsSaleout() 获取Whether a product is sold out in an AZ
 * @method void setIsSaleout(boolean $IsSaleout) 设置Whether a product is sold out in an AZ
 * @method boolean getIsDefault() 获取Whether it is a default AZ
 * @method void setIsDefault(boolean $IsDefault) 设置Whether it is a default AZ
 * @method array getNetWorkType() 获取Network type. basenet: basic network; vpcnet: VPC
 * @method void setNetWorkType(array $NetWorkType) 设置Network type. basenet: basic network; vpcnet: VPC
 * @method array getProductSet() 获取Information of an AZ, such as product specifications in it
 * @method void setProductSet(array $ProductSet) 设置Information of an AZ, such as product specifications in it
 * @method integer getOldZoneId() 获取AZ ID, such as 100003
 * @method void setOldZoneId(integer $OldZoneId) 设置AZ ID, such as 100003
 */

/**
 *Product information in the availability zone
 */
class ZoneCapacityConf extends AbstractModel
{
    /**
     * @var string AZ ID, such as ap-guangzhou-3
     */
    public $ZoneId;

    /**
     * @var string AZ name
     */
    public $ZoneName;

    /**
     * @var boolean Whether a product is sold out in an AZ
     */
    public $IsSaleout;

    /**
     * @var boolean Whether it is a default AZ
     */
    public $IsDefault;

    /**
     * @var array Network type. basenet: basic network; vpcnet: VPC
     */
    public $NetWorkType;

    /**
     * @var array Information of an AZ, such as product specifications in it
     */
    public $ProductSet;

    /**
     * @var integer AZ ID, such as 100003
     */
    public $OldZoneId;
    /**
     * @param string $ZoneId AZ ID, such as ap-guangzhou-3
     * @param string $ZoneName AZ name
     * @param boolean $IsSaleout Whether a product is sold out in an AZ
     * @param boolean $IsDefault Whether it is a default AZ
     * @param array $NetWorkType Network type. basenet: basic network; vpcnet: VPC
     * @param array $ProductSet Information of an AZ, such as product specifications in it
     * @param integer $OldZoneId AZ ID, such as 100003
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("IsSaleout",$param) and $param["IsSaleout"] !== null) {
            $this->IsSaleout = $param["IsSaleout"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("NetWorkType",$param) and $param["NetWorkType"] !== null) {
            $this->NetWorkType = $param["NetWorkType"];
        }

        if (array_key_exists("ProductSet",$param) and $param["ProductSet"] !== null) {
            $this->ProductSet = [];
            foreach ($param["ProductSet"] as $key => $value){
                $obj = new ProductConf();
                $obj->deserialize($value);
                array_push($this->ProductSet, $obj);
            }
        }

        if (array_key_exists("OldZoneId",$param) and $param["OldZoneId"] !== null) {
            $this->OldZoneId = $param["OldZoneId"];
        }
    }
}
