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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAreaRegion request structure.
 *
 * @method boolean getIsInternationalSite() Obtain Whether it is an international site
 * @method void setIsInternationalSite(boolean $IsInternationalSite) Set Whether it is an international site
 */
class DescribeAreaRegionRequest extends AbstractModel
{
    /**
     * @var boolean Whether it is an international site
     */
    public $IsInternationalSite;

    /**
     * @param boolean $IsInternationalSite Whether it is an international site
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
        if (array_key_exists("IsInternationalSite",$param) and $param["IsInternationalSite"] !== null) {
            $this->IsInternationalSite = $param["IsInternationalSite"];
        }
    }
}
