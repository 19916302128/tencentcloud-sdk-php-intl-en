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
 * AssignIpv6SubnetCidrBlock response structure.
 *
 * @method array getIpv6SubnetCidrBlockSet() Obtain The assigned `IPv6` subnet IP range list.
 * @method void setIpv6SubnetCidrBlockSet(array $Ipv6SubnetCidrBlockSet) Set The assigned `IPv6` subnet IP range list.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class AssignIpv6SubnetCidrBlockResponse extends AbstractModel
{
    /**
     * @var array The assigned `IPv6` subnet IP range list.
     */
    public $Ipv6SubnetCidrBlockSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Ipv6SubnetCidrBlockSet The assigned `IPv6` subnet IP range list.
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
        if (array_key_exists("Ipv6SubnetCidrBlockSet",$param) and $param["Ipv6SubnetCidrBlockSet"] !== null) {
            $this->Ipv6SubnetCidrBlockSet = [];
            foreach ($param["Ipv6SubnetCidrBlockSet"] as $key => $value){
                $obj = new Ipv6SubnetCidrBlock();
                $obj->deserialize($value);
                array_push($this->Ipv6SubnetCidrBlockSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
