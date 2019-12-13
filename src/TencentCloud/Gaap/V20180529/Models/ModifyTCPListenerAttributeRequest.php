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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getListenerId() 获取Listener ID
 * @method void setListenerId(string $ListenerId) 设置Listener ID
 * @method string getGroupId() 获取Connection group ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
 * @method void setGroupId(string $GroupId) 设置Connection group ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
 * @method string getProxyId() 获取Connection ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
 * @method void setProxyId(string $ProxyId) 设置Connection ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
 * @method string getListenerName() 获取Listener name
 * @method void setListenerName(string $ListenerName) 设置Listener name
 * @method string getScheduler() 获取Origin server scheduling policy of listeners, which supports round robin (rr), weighted round robin (wrr), and least connections (lc).
 * @method void setScheduler(string $Scheduler) 设置Origin server scheduling policy of listeners, which supports round robin (rr), weighted round robin (wrr), and least connections (lc).
 * @method integer getDelayLoop() 获取Time interval of origin server health check (unit: seconds). Value range: [5, 300].
 * @method void setDelayLoop(integer $DelayLoop) 设置Time interval of origin server health check (unit: seconds). Value range: [5, 300].
 * @method integer getConnectTimeout() 获取Response timeout of origin server health check (unit: seconds). Value range: [2, 60]. The timeout value shall be less than the time interval for health check DelayLoop.
 * @method void setConnectTimeout(integer $ConnectTimeout) 设置Response timeout of origin server health check (unit: seconds). Value range: [2, 60]. The timeout value shall be less than the time interval for health check DelayLoop.
 * @method integer getHealthCheck() 获取Whether to enable health check. 1: enable; 0: disable.
 * @method void setHealthCheck(integer $HealthCheck) 设置Whether to enable health check. 1: enable; 0: disable.
 */

/**
 *ModifyTCPListenerAttribute request structure.
 */
class ModifyTCPListenerAttributeRequest extends AbstractModel
{
    /**
     * @var string Listener ID
     */
    public $ListenerId;

    /**
     * @var string Connection group ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
     */
    public $GroupId;

    /**
     * @var string Connection ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
     */
    public $ProxyId;

    /**
     * @var string Listener name
     */
    public $ListenerName;

    /**
     * @var string Origin server scheduling policy of listeners, which supports round robin (rr), weighted round robin (wrr), and least connections (lc).
     */
    public $Scheduler;

    /**
     * @var integer Time interval of origin server health check (unit: seconds). Value range: [5, 300].
     */
    public $DelayLoop;

    /**
     * @var integer Response timeout of origin server health check (unit: seconds). Value range: [2, 60]. The timeout value shall be less than the time interval for health check DelayLoop.
     */
    public $ConnectTimeout;

    /**
     * @var integer Whether to enable health check. 1: enable; 0: disable.
     */
    public $HealthCheck;
    /**
     * @param string $ListenerId Listener ID
     * @param string $GroupId Connection group ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
     * @param string $ProxyId Connection ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
     * @param string $ListenerName Listener name
     * @param string $Scheduler Origin server scheduling policy of listeners, which supports round robin (rr), weighted round robin (wrr), and least connections (lc).
     * @param integer $DelayLoop Time interval of origin server health check (unit: seconds). Value range: [5, 300].
     * @param integer $ConnectTimeout Response timeout of origin server health check (unit: seconds). Value range: [2, 60]. The timeout value shall be less than the time interval for health check DelayLoop.
     * @param integer $HealthCheck Whether to enable health check. 1: enable; 0: disable.
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("DelayLoop",$param) and $param["DelayLoop"] !== null) {
            $this->DelayLoop = $param["DelayLoop"];
        }

        if (array_key_exists("ConnectTimeout",$param) and $param["ConnectTimeout"] !== null) {
            $this->ConnectTimeout = $param["ConnectTimeout"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = $param["HealthCheck"];
        }
    }
}
