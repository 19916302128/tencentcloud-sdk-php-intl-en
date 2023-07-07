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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenReadOnlyInstanceExclusiveAccess request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getInstanceId() Obtain ID of the read-only instance with dedicated access to be enabled
 * @method void setInstanceId(string $InstanceId) Set ID of the read-only instance with dedicated access to be enabled
 * @method string getVpcId() Obtain Specified VPC ID
 * @method void setVpcId(string $VpcId) Set Specified VPC ID
 * @method string getSubnetId() Obtain Specified subnet ID
 * @method void setSubnetId(string $SubnetId) Set Specified subnet ID
 * @method integer getPort() Obtain Port
 * @method void setPort(integer $Port) Set Port
 * @method array getSecurityGroupIds() Obtain Security group
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group
 */
class OpenReadOnlyInstanceExclusiveAccessRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string ID of the read-only instance with dedicated access to be enabled
     */
    public $InstanceId;

    /**
     * @var string Specified VPC ID
     */
    public $VpcId;

    /**
     * @var string Specified subnet ID
     */
    public $SubnetId;

    /**
     * @var integer Port
     */
    public $Port;

    /**
     * @var array Security group
     */
    public $SecurityGroupIds;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $InstanceId ID of the read-only instance with dedicated access to be enabled
     * @param string $VpcId Specified VPC ID
     * @param string $SubnetId Specified subnet ID
     * @param integer $Port Port
     * @param array $SecurityGroupIds Security group
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
