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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getLoadBalancerId() 获取CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置CLB instance ID
 * @method array getListenerIds() 获取List of CLB listener IDs
 * @method void setListenerIds(array $ListenerIds) 设置List of CLB listener IDs
 * @method string getProtocol() 获取CLB listening protocol. Value range: TCP, UDP, HTTP, HTTPS
 * @method void setProtocol(string $Protocol) 设置CLB listening protocol. Value range: TCP, UDP, HTTP, HTTPS
 * @method integer getListenerPort() 获取CLB listening port. Value range: [1-65535]
 * @method void setListenerPort(integer $ListenerPort) 设置CLB listening port. Value range: [1-65535]
 * @method integer getStatus() 获取Listener status. Value range: 0 (creating), 1 (running)
 * @method void setStatus(integer $Status) 设置Listener status. Value range: 0 (creating), 1 (running)
 */

/**
 *DescribeClassicalLBListeners request structure.
 */
class DescribeClassicalLBListenersRequest extends AbstractModel
{
    /**
     * @var string CLB instance ID
     */
    public $LoadBalancerId;

    /**
     * @var array List of CLB listener IDs
     */
    public $ListenerIds;

    /**
     * @var string CLB listening protocol. Value range: TCP, UDP, HTTP, HTTPS
     */
    public $Protocol;

    /**
     * @var integer CLB listening port. Value range: [1-65535]
     */
    public $ListenerPort;

    /**
     * @var integer Listener status. Value range: 0 (creating), 1 (running)
     */
    public $Status;
    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param array $ListenerIds List of CLB listener IDs
     * @param string $Protocol CLB listening protocol. Value range: TCP, UDP, HTTP, HTTPS
     * @param integer $ListenerPort CLB listening port. Value range: [1-65535]
     * @param integer $Status Listener status. Value range: 0 (creating), 1 (running)
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ListenerIds",$param) and $param["ListenerIds"] !== null) {
            $this->ListenerIds = $param["ListenerIds"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ListenerPort",$param) and $param["ListenerPort"] !== null) {
            $this->ListenerPort = $param["ListenerPort"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
