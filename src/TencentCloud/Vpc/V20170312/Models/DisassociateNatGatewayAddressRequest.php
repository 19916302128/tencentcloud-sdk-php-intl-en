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
 * DisassociateNatGatewayAddress request structure.
 *
 * @method string getNatGatewayId() Obtain The ID of the NAT gateway, such as `nat-df45454`.
 * @method void setNatGatewayId(string $NatGatewayId) Set The ID of the NAT gateway, such as `nat-df45454`.
 * @method array getPublicIpAddresses() Obtain The array of EIPs bound to the NAT gateway.
 * @method void setPublicIpAddresses(array $PublicIpAddresses) Set The array of EIPs bound to the NAT gateway.
 */
class DisassociateNatGatewayAddressRequest extends AbstractModel
{
    /**
     * @var string The ID of the NAT gateway, such as `nat-df45454`.
     */
    public $NatGatewayId;

    /**
     * @var array The array of EIPs bound to the NAT gateway.
     */
    public $PublicIpAddresses;

    /**
     * @param string $NatGatewayId The ID of the NAT gateway, such as `nat-df45454`.
     * @param array $PublicIpAddresses The array of EIPs bound to the NAT gateway.
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
        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }
    }
}
