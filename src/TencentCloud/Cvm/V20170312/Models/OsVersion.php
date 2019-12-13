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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getOsName() 获取Operating system type
 * @method void setOsName(string $OsName) 设置Operating system type
 * @method array getOsVersions() 获取Supported operating system versions
 * @method void setOsVersions(array $OsVersions) 设置Supported operating system versions
 * @method array getArchitecture() 获取Supported operating system architecture
 * @method void setArchitecture(array $Architecture) 设置Supported operating system architecture
 */

/**
 *Supported operating system types.
 */
class OsVersion extends AbstractModel
{
    /**
     * @var string Operating system type
     */
    public $OsName;

    /**
     * @var array Supported operating system versions
     */
    public $OsVersions;

    /**
     * @var array Supported operating system architecture
     */
    public $Architecture;
    /**
     * @param string $OsName Operating system type
     * @param array $OsVersions Supported operating system versions
     * @param array $Architecture Supported operating system architecture
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
        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("OsVersions",$param) and $param["OsVersions"] !== null) {
            $this->OsVersions = $param["OsVersions"];
        }

        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }
    }
}
