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
 * @method integer getBandwidth() 获取The bandwidth quota.
 * @method void setBandwidth(integer $Bandwidth) 设置The bandwidth quota.
 * @method string getCname() 获取The bandwidth quota name in Chinese.
 * @method void setCname(string $Cname) 设置The bandwidth quota name in Chinese.
 * @method string getName() 获取The bandwidth quota name in English.
 * @method void setName(string $Name) 设置The bandwidth quota name in English.
 */

/**
 *VPN gateway quota object
 */
class VpnGatewayQuota extends AbstractModel
{
    /**
     * @var integer The bandwidth quota.
     */
    public $Bandwidth;

    /**
     * @var string The bandwidth quota name in Chinese.
     */
    public $Cname;

    /**
     * @var string The bandwidth quota name in English.
     */
    public $Name;
    /**
     * @param integer $Bandwidth The bandwidth quota.
     * @param string $Cname The bandwidth quota name in Chinese.
     * @param string $Name The bandwidth quota name in English.
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
        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
