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
 * @method array getPorts() 获取Specifies for which ports to create listeners. Each port corresponds to a new listener
 * @method void setPorts(array $Ports) 设置Specifies for which ports to create listeners. Each port corresponds to a new listener
 * @method string getProtocol() 获取Listener protocol: TCP, UDP, HTTP, HTTPS, or TCP_SSL (which is currently in beta test. If you want to use it, please submit a ticket for application)
 * @method void setProtocol(string $Protocol) 设置Listener protocol: TCP, UDP, HTTP, HTTPS, or TCP_SSL (which is currently in beta test. If you want to use it, please submit a ticket for application)
 * @method array getListenerNames() 获取List of names of the listeners to be created. The array of names and array of ports are in one-to-one correspondence. If you do not want to name them now, you do not need to provide this parameter.
 * @method void setListenerNames(array $ListenerNames) 设置List of names of the listeners to be created. The array of names and array of ports are in one-to-one correspondence. If you do not want to name them now, you do not need to provide this parameter.
 * @method HealthCheck getHealthCheck() 获取Health check parameter, which is applicable only to TCP/UDP/TCP_SSL listeners
 * @method void setHealthCheck(HealthCheck $HealthCheck) 设置Health check parameter, which is applicable only to TCP/UDP/TCP_SSL listeners
 * @method CertificateInput getCertificate() 获取Certificate information. This parameter is applicable only to HTTPS/TCP_SSL listeners.
 * @method void setCertificate(CertificateInput $Certificate) 设置Certificate information. This parameter is applicable only to HTTPS/TCP_SSL listeners.
 * @method integer getSessionExpireTime() 获取Session persistence time in seconds. Value range: 30-3,600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
 * @method void setSessionExpireTime(integer $SessionExpireTime) 设置Session persistence time in seconds. Value range: 30-3,600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
 * @method string getScheduler() 获取Forwarding method of a listener. Value range: WRR, LEAST_CONN.
They represent weighted round robin and least connections, respectively. Default value: WRR. This parameter is applicable only to TCP/UDP/TCP_SSL listeners.
 * @method void setScheduler(string $Scheduler) 设置Forwarding method of a listener. Value range: WRR, LEAST_CONN.
They represent weighted round robin and least connections, respectively. Default value: WRR. This parameter is applicable only to TCP/UDP/TCP_SSL listeners.
 * @method integer getSniSwitch() 获取Whether to enable the SNI feature. This parameter is applicable only to HTTPS listeners
 * @method void setSniSwitch(integer $SniSwitch) 设置Whether to enable the SNI feature. This parameter is applicable only to HTTPS listeners
 */

/**
 *CreateListener request structure.
 */
class CreateListenerRequest extends AbstractModel
{
    /**
     * @var string CLB instance ID
     */
    public $LoadBalancerId;

    /**
     * @var array Specifies for which ports to create listeners. Each port corresponds to a new listener
     */
    public $Ports;

    /**
     * @var string Listener protocol: TCP, UDP, HTTP, HTTPS, or TCP_SSL (which is currently in beta test. If you want to use it, please submit a ticket for application)
     */
    public $Protocol;

    /**
     * @var array List of names of the listeners to be created. The array of names and array of ports are in one-to-one correspondence. If you do not want to name them now, you do not need to provide this parameter.
     */
    public $ListenerNames;

    /**
     * @var HealthCheck Health check parameter, which is applicable only to TCP/UDP/TCP_SSL listeners
     */
    public $HealthCheck;

    /**
     * @var CertificateInput Certificate information. This parameter is applicable only to HTTPS/TCP_SSL listeners.
     */
    public $Certificate;

    /**
     * @var integer Session persistence time in seconds. Value range: 30-3,600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
     */
    public $SessionExpireTime;

    /**
     * @var string Forwarding method of a listener. Value range: WRR, LEAST_CONN.
They represent weighted round robin and least connections, respectively. Default value: WRR. This parameter is applicable only to TCP/UDP/TCP_SSL listeners.
     */
    public $Scheduler;

    /**
     * @var integer Whether to enable the SNI feature. This parameter is applicable only to HTTPS listeners
     */
    public $SniSwitch;
    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param array $Ports Specifies for which ports to create listeners. Each port corresponds to a new listener
     * @param string $Protocol Listener protocol: TCP, UDP, HTTP, HTTPS, or TCP_SSL (which is currently in beta test. If you want to use it, please submit a ticket for application)
     * @param array $ListenerNames List of names of the listeners to be created. The array of names and array of ports are in one-to-one correspondence. If you do not want to name them now, you do not need to provide this parameter.
     * @param HealthCheck $HealthCheck Health check parameter, which is applicable only to TCP/UDP/TCP_SSL listeners
     * @param CertificateInput $Certificate Certificate information. This parameter is applicable only to HTTPS/TCP_SSL listeners.
     * @param integer $SessionExpireTime Session persistence time in seconds. Value range: 30-3,600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
     * @param string $Scheduler Forwarding method of a listener. Value range: WRR, LEAST_CONN.
They represent weighted round robin and least connections, respectively. Default value: WRR. This parameter is applicable only to TCP/UDP/TCP_SSL listeners.
     * @param integer $SniSwitch Whether to enable the SNI feature. This parameter is applicable only to HTTPS listeners
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

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = $param["Ports"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ListenerNames",$param) and $param["ListenerNames"] !== null) {
            $this->ListenerNames = $param["ListenerNames"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new HealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new CertificateInput();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("SniSwitch",$param) and $param["SniSwitch"] !== null) {
            $this->SniSwitch = $param["SniSwitch"];
        }
    }
}
