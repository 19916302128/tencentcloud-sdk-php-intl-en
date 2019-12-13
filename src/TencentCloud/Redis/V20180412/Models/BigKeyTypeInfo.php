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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getType() 获取Type
 * @method void setType(string $Type) 设置Type
 * @method integer getCount() 获取Count
 * @method void setCount(integer $Count) 设置Count
 * @method integer getSize() 获取Size
 * @method void setSize(integer $Size) 设置Size
 * @method integer getUpdatetime() 获取Timestamp
 * @method void setUpdatetime(integer $Updatetime) 设置Timestamp
 */

/**
 *Big key type distribution details
 */
class BigKeyTypeInfo extends AbstractModel
{
    /**
     * @var string Type
     */
    public $Type;

    /**
     * @var integer Count
     */
    public $Count;

    /**
     * @var integer Size
     */
    public $Size;

    /**
     * @var integer Timestamp
     */
    public $Updatetime;
    /**
     * @param string $Type Type
     * @param integer $Count Count
     * @param integer $Size Size
     * @param integer $Updatetime Timestamp
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Updatetime",$param) and $param["Updatetime"] !== null) {
            $this->Updatetime = $param["Updatetime"];
        }
    }
}
