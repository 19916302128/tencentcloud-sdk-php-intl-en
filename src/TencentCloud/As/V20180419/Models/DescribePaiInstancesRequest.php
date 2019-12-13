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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getInstanceIds() 获取Queries by PAI instance ID.
 * @method void setInstanceIds(array $InstanceIds) 设置Queries by PAI instance ID.
 * @method array getFilters() 获取Filter.
 * @method void setFilters(array $Filters) 设置Filter.
 * @method integer getLimit() 获取Number of returned results. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) 设置Number of returned results. Default value: 20. Maximum value: 100.
 * @method integer getOffset() 获取Offset. Default value: 0.
 * @method void setOffset(integer $Offset) 设置Offset. Default value: 0.
 */

/**
 *DescribePaiInstances request structure.
 */
class DescribePaiInstancesRequest extends AbstractModel
{
    /**
     * @var array Queries by PAI instance ID.
     */
    public $InstanceIds;

    /**
     * @var array Filter.
     */
    public $Filters;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;
    /**
     * @param array $InstanceIds Queries by PAI instance ID.
     * @param array $Filters Filter.
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0.
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
