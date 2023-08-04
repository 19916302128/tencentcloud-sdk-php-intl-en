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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application proxy rule
 *
 * @method string getProto() Obtain The protocol. Values:
<li>`TCP`: TCP protocol.</li>
<li>`UDP`: UDP protocol.</li>
 * @method void setProto(string $Proto) Set The protocol. Values:
<li>`TCP`: TCP protocol.</li>
<li>`UDP`: UDP protocol.</li>
 * @method array getPort() Obtain The access port, which can be:
<li>A single port, such as 80</li>
<li>A port range, such as 81-82</li>
Note that each rule can have up to 20 ports.
 * @method void setPort(array $Port) Set The access port, which can be:
<li>A single port, such as 80</li>
<li>A port range, such as 81-82</li>
Note that each rule can have up to 20 ports.
 * @method string getOriginType() Obtain The origin type. Values:
<li>`custom`: Specified origins</li>
<li>`origins`: Origin group</li>
 * @method void setOriginType(string $OriginType) Set The origin type. Values:
<li>`custom`: Specified origins</li>
<li>`origins`: Origin group</li>
 * @method array getOriginValue() Obtain Origin server information:
<li>When `OriginType=custom`, it indicates one or more origin servers, such as ["8.8.8.8","9.9.9.9"] or ["test.com"].</li>
<li>When `OriginType=origins`, it indicates an origin group ID, such as ["origin-537f5b41-162a-11ed-abaa-525400c5da15"].</li>
 * @method void setOriginValue(array $OriginValue) Set Origin server information:
<li>When `OriginType=custom`, it indicates one or more origin servers, such as ["8.8.8.8","9.9.9.9"] or ["test.com"].</li>
<li>When `OriginType=origins`, it indicates an origin group ID, such as ["origin-537f5b41-162a-11ed-abaa-525400c5da15"].</li>
 * @method string getRuleId() Obtain The rule ID.
 * @method void setRuleId(string $RuleId) Set The rule ID.
 * @method string getStatus() Obtain The rule status. Values:
<li>`online`: Enabled.</li>
<li>`offline`: Disabled.</li>
<li>`progress`: Deploying</li>
<li>`stopping`: Disabling</li>
<li>`fail`: Failed to deploy or disable</li>
 * @method void setStatus(string $Status) Set The rule status. Values:
<li>`online`: Enabled.</li>
<li>`offline`: Disabled.</li>
<li>`progress`: Deploying</li>
<li>`stopping`: Disabling</li>
<li>`fail`: Failed to deploy or disable</li>
 * @method string getForwardClientIp() Obtain Passes the client IP. Values:
<li>`TOA`: Pass the client IP via TOA (available only when `Proto=TCP`).</li>
<li>`PPV1`: Pass the client IP via Proxy Protocol V1 (available only when `Proto=TCP`).</li>
<li>`PPV2`: Pass the client IP via Proxy Protocol V2.</li>
<li>`OFF`: Not pass the client IP.</li>Default value: OFF.
 * @method void setForwardClientIp(string $ForwardClientIp) Set Passes the client IP. Values:
<li>`TOA`: Pass the client IP via TOA (available only when `Proto=TCP`).</li>
<li>`PPV1`: Pass the client IP via Proxy Protocol V1 (available only when `Proto=TCP`).</li>
<li>`PPV2`: Pass the client IP via Proxy Protocol V2.</li>
<li>`OFF`: Not pass the client IP.</li>Default value: OFF.
 * @method boolean getSessionPersist() Obtain Whether to enable session persistence. Values:
<li>`true`: Enable</li>
<li>`false`: Disable</li>Default value: false
 * @method void setSessionPersist(boolean $SessionPersist) Set Whether to enable session persistence. Values:
<li>`true`: Enable</li>
<li>`false`: Disable</li>Default value: false
 * @method integer getSessionPersistTime() Obtain Duration for the persistent session. The value takes effect only when `SessionPersist = true`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setSessionPersistTime(integer $SessionPersistTime) Set Duration for the persistent session. The value takes effect only when `SessionPersist = true`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getOriginPort() Obtain The origin port, which can be:
<li>A single port, such as 80</li>
<li>A port range, such as 81-82</li>
 * @method void setOriginPort(string $OriginPort) Set The origin port, which can be:
<li>A single port, such as 80</li>
<li>A port range, such as 81-82</li>
 */
class ApplicationProxyRule extends AbstractModel
{
    /**
     * @var string The protocol. Values:
<li>`TCP`: TCP protocol.</li>
<li>`UDP`: UDP protocol.</li>
     */
    public $Proto;

    /**
     * @var array The access port, which can be:
<li>A single port, such as 80</li>
<li>A port range, such as 81-82</li>
Note that each rule can have up to 20 ports.
     */
    public $Port;

    /**
     * @var string The origin type. Values:
<li>`custom`: Specified origins</li>
<li>`origins`: Origin group</li>
     */
    public $OriginType;

    /**
     * @var array Origin server information:
<li>When `OriginType=custom`, it indicates one or more origin servers, such as ["8.8.8.8","9.9.9.9"] or ["test.com"].</li>
<li>When `OriginType=origins`, it indicates an origin group ID, such as ["origin-537f5b41-162a-11ed-abaa-525400c5da15"].</li>
     */
    public $OriginValue;

    /**
     * @var string The rule ID.
     */
    public $RuleId;

    /**
     * @var string The rule status. Values:
<li>`online`: Enabled.</li>
<li>`offline`: Disabled.</li>
<li>`progress`: Deploying</li>
<li>`stopping`: Disabling</li>
<li>`fail`: Failed to deploy or disable</li>
     */
    public $Status;

    /**
     * @var string Passes the client IP. Values:
<li>`TOA`: Pass the client IP via TOA (available only when `Proto=TCP`).</li>
<li>`PPV1`: Pass the client IP via Proxy Protocol V1 (available only when `Proto=TCP`).</li>
<li>`PPV2`: Pass the client IP via Proxy Protocol V2.</li>
<li>`OFF`: Not pass the client IP.</li>Default value: OFF.
     */
    public $ForwardClientIp;

    /**
     * @var boolean Whether to enable session persistence. Values:
<li>`true`: Enable</li>
<li>`false`: Disable</li>Default value: false
     */
    public $SessionPersist;

    /**
     * @var integer Duration for the persistent session. The value takes effect only when `SessionPersist = true`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $SessionPersistTime;

    /**
     * @var string The origin port, which can be:
<li>A single port, such as 80</li>
<li>A port range, such as 81-82</li>
     */
    public $OriginPort;

    /**
     * @param string $Proto The protocol. Values:
<li>`TCP`: TCP protocol.</li>
<li>`UDP`: UDP protocol.</li>
     * @param array $Port The access port, which can be:
<li>A single port, such as 80</li>
<li>A port range, such as 81-82</li>
Note that each rule can have up to 20 ports.
     * @param string $OriginType The origin type. Values:
<li>`custom`: Specified origins</li>
<li>`origins`: Origin group</li>
     * @param array $OriginValue Origin server information:
<li>When `OriginType=custom`, it indicates one or more origin servers, such as ["8.8.8.8","9.9.9.9"] or ["test.com"].</li>
<li>When `OriginType=origins`, it indicates an origin group ID, such as ["origin-537f5b41-162a-11ed-abaa-525400c5da15"].</li>
     * @param string $RuleId The rule ID.
     * @param string $Status The rule status. Values:
<li>`online`: Enabled.</li>
<li>`offline`: Disabled.</li>
<li>`progress`: Deploying</li>
<li>`stopping`: Disabling</li>
<li>`fail`: Failed to deploy or disable</li>
     * @param string $ForwardClientIp Passes the client IP. Values:
<li>`TOA`: Pass the client IP via TOA (available only when `Proto=TCP`).</li>
<li>`PPV1`: Pass the client IP via Proxy Protocol V1 (available only when `Proto=TCP`).</li>
<li>`PPV2`: Pass the client IP via Proxy Protocol V2.</li>
<li>`OFF`: Not pass the client IP.</li>Default value: OFF.
     * @param boolean $SessionPersist Whether to enable session persistence. Values:
<li>`true`: Enable</li>
<li>`false`: Disable</li>Default value: false
     * @param integer $SessionPersistTime Duration for the persistent session. The value takes effect only when `SessionPersist = true`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $OriginPort The origin port, which can be:
<li>A single port, such as 80</li>
<li>A port range, such as 81-82</li>
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
        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("OriginValue",$param) and $param["OriginValue"] !== null) {
            $this->OriginValue = $param["OriginValue"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ForwardClientIp",$param) and $param["ForwardClientIp"] !== null) {
            $this->ForwardClientIp = $param["ForwardClientIp"];
        }

        if (array_key_exists("SessionPersist",$param) and $param["SessionPersist"] !== null) {
            $this->SessionPersist = $param["SessionPersist"];
        }

        if (array_key_exists("SessionPersistTime",$param) and $param["SessionPersistTime"] !== null) {
            $this->SessionPersistTime = $param["SessionPersistTime"];
        }

        if (array_key_exists("OriginPort",$param) and $param["OriginPort"] !== null) {
            $this->OriginPort = $param["OriginPort"];
        }
    }
}
