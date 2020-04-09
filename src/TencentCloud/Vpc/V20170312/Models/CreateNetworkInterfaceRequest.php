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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateNetworkInterface request structure.
 *
 * @method string getVpcId() Obtain The ID of the VPC instance. You can obtain the parameter value from the VpcId field in the returned result of DescribeVpcs API.
 * @method void setVpcId(string $VpcId) Set The ID of the VPC instance. You can obtain the parameter value from the VpcId field in the returned result of DescribeVpcs API.
 * @method string getNetworkInterfaceName() Obtain The name of the ENI. The maximum length is 60 characters.
 * @method void setNetworkInterfaceName(string $NetworkInterfaceName) Set The name of the ENI. The maximum length is 60 characters.
 * @method string getSubnetId() Obtain The subnet instance ID of the ENI, such as `subnet-0ap8nwca`.
 * @method void setSubnetId(string $SubnetId) Set The subnet instance ID of the ENI, such as `subnet-0ap8nwca`.
 * @method string getNetworkInterfaceDescription() Obtain ENI description can be named freely, but the maximum length is 60 characters.
 * @method void setNetworkInterfaceDescription(string $NetworkInterfaceDescription) Set ENI description can be named freely, but the maximum length is 60 characters.
 * @method integer getSecondaryPrivateIpAddressCount() Obtain The number of private IP addresses that is newly applied for. The total number of private IP addresses cannot exceed the quota.
 * @method void setSecondaryPrivateIpAddressCount(integer $SecondaryPrivateIpAddressCount) Set The number of private IP addresses that is newly applied for. The total number of private IP addresses cannot exceed the quota.
 * @method array getSecurityGroupIds() Obtain Specifies the security group to be bound with, such as ['sg-1dd51d'].
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Specifies the security group to be bound with, such as ['sg-1dd51d'].
 * @method array getPrivateIpAddresses() Obtain The information of the specified private IPs. You can specify a maximum of 10 each time.
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) Set The information of the specified private IPs. You can specify a maximum of 10 each time.
 * @method array getTags() Obtain Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 * @method void setTags(array $Tags) Set Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 */
class CreateNetworkInterfaceRequest extends AbstractModel
{
    /**
     * @var string The ID of the VPC instance. You can obtain the parameter value from the VpcId field in the returned result of DescribeVpcs API.
     */
    public $VpcId;

    /**
     * @var string The name of the ENI. The maximum length is 60 characters.
     */
    public $NetworkInterfaceName;

    /**
     * @var string The subnet instance ID of the ENI, such as `subnet-0ap8nwca`.
     */
    public $SubnetId;

    /**
     * @var string ENI description can be named freely, but the maximum length is 60 characters.
     */
    public $NetworkInterfaceDescription;

    /**
     * @var integer The number of private IP addresses that is newly applied for. The total number of private IP addresses cannot exceed the quota.
     */
    public $SecondaryPrivateIpAddressCount;

    /**
     * @var array Specifies the security group to be bound with, such as ['sg-1dd51d'].
     */
    public $SecurityGroupIds;

    /**
     * @var array The information of the specified private IPs. You can specify a maximum of 10 each time.
     */
    public $PrivateIpAddresses;

    /**
     * @var array Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
     */
    public $Tags;

    /**
     * @param string $VpcId The ID of the VPC instance. You can obtain the parameter value from the VpcId field in the returned result of DescribeVpcs API.
     * @param string $NetworkInterfaceName The name of the ENI. The maximum length is 60 characters.
     * @param string $SubnetId The subnet instance ID of the ENI, such as `subnet-0ap8nwca`.
     * @param string $NetworkInterfaceDescription ENI description can be named freely, but the maximum length is 60 characters.
     * @param integer $SecondaryPrivateIpAddressCount The number of private IP addresses that is newly applied for. The total number of private IP addresses cannot exceed the quota.
     * @param array $SecurityGroupIds Specifies the security group to be bound with, such as ['sg-1dd51d'].
     * @param array $PrivateIpAddresses The information of the specified private IPs. You can specify a maximum of 10 each time.
     * @param array $Tags Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("NetworkInterfaceName",$param) and $param["NetworkInterfaceName"] !== null) {
            $this->NetworkInterfaceName = $param["NetworkInterfaceName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("NetworkInterfaceDescription",$param) and $param["NetworkInterfaceDescription"] !== null) {
            $this->NetworkInterfaceDescription = $param["NetworkInterfaceDescription"];
        }

        if (array_key_exists("SecondaryPrivateIpAddressCount",$param) and $param["SecondaryPrivateIpAddressCount"] !== null) {
            $this->SecondaryPrivateIpAddressCount = $param["SecondaryPrivateIpAddressCount"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = [];
            foreach ($param["PrivateIpAddresses"] as $key => $value){
                $obj = new PrivateIpAddressSpecification();
                $obj->deserialize($value);
                array_push($this->PrivateIpAddresses, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
