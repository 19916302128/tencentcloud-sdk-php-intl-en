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
 * @method string getResourceType() 获取Resource types:
`Proxy`: connections;
`ProxyGroup`: connection groups;
`RealServer`: origin servers.
 * @method void setResourceType(string $ResourceType) 设置Resource types:
`Proxy`: connections;
`ProxyGroup`: connection groups;
`RealServer`: origin servers.
 * @method string getResourceId() 获取Resource ID
 * @method void setResourceId(string $ResourceId) 设置Resource ID
 */

/**
 *Resource information of the tag
 */
class TagResourceInfo extends AbstractModel
{
    /**
     * @var string Resource types:
`Proxy`: connections;
`ProxyGroup`: connection groups;
`RealServer`: origin servers.
     */
    public $ResourceType;

    /**
     * @var string Resource ID
     */
    public $ResourceId;
    /**
     * @param string $ResourceType Resource types:
`Proxy`: connections;
`ProxyGroup`: connection groups;
`RealServer`: origin servers.
     * @param string $ResourceId Resource ID
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
