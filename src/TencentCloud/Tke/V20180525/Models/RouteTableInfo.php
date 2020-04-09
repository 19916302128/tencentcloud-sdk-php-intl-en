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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Object of cluster route table
 *
 * @method string getRouteTableName() Obtain Route table name.
 * @method void setRouteTableName(string $RouteTableName) Set Route table name.
 * @method string getRouteTableCidrBlock() Obtain Route table CIDR.
 * @method void setRouteTableCidrBlock(string $RouteTableCidrBlock) Set Route table CIDR.
 * @method string getVpcId() Obtain VPC instance ID.
 * @method void setVpcId(string $VpcId) Set VPC instance ID.
 */
class RouteTableInfo extends AbstractModel
{
    /**
     * @var string Route table name.
     */
    public $RouteTableName;

    /**
     * @var string Route table CIDR.
     */
    public $RouteTableCidrBlock;

    /**
     * @var string VPC instance ID.
     */
    public $VpcId;

    /**
     * @param string $RouteTableName Route table name.
     * @param string $RouteTableCidrBlock Route table CIDR.
     * @param string $VpcId VPC instance ID.
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
        if (array_key_exists("RouteTableName",$param) and $param["RouteTableName"] !== null) {
            $this->RouteTableName = $param["RouteTableName"];
        }

        if (array_key_exists("RouteTableCidrBlock",$param) and $param["RouteTableCidrBlock"] !== null) {
            $this->RouteTableCidrBlock = $param["RouteTableCidrBlock"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
    }
}
