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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserInfo request structure.
 *
 * @method string getUserId() Obtain User ID
 * @method void setUserId(string $UserId) Set User ID
 * @method string getType() Obtain Type of queried information. Group: working group; DataAuth: data permission; EngineAuth: engine permission
 * @method void setType(string $Type) Set Type of queried information. Group: working group; DataAuth: data permission; EngineAuth: engine permission
 * @method array getFilters() Obtain Filter criteria that are queried

When the type is Group, the fuzzy search is supported as the key is workgroup-name.

When the type is DataAuth, the keys supported are:

policy-type: types of permissions;

policy-source: data sources;

data-name: fuzzy search of the database and table.

When the type is EngineAuth, the keys supported are:

policy-type: types of permissions;

policy-source: data sources;

engine-name: fuzzy search of the database and table.
 * @method void setFilters(array $Filters) Set Filter criteria that are queried

When the type is Group, the fuzzy search is supported as the key is workgroup-name.

When the type is DataAuth, the keys supported are:

policy-type: types of permissions;

policy-source: data sources;

data-name: fuzzy search of the database and table.

When the type is EngineAuth, the keys supported are:

policy-type: types of permissions;

policy-source: data sources;

engine-name: fuzzy search of the database and table.
 * @method string getSortBy() Obtain Sort fields.

When the type is Group, the create-time and group-name are supported.

When the type is DataAuth, create-time is supported.

When the type is EngineAuth, create-time is supported.
 * @method void setSortBy(string $SortBy) Set Sort fields.

When the type is Group, the create-time and group-name are supported.

When the type is DataAuth, create-time is supported.

When the type is EngineAuth, create-time is supported.
 * @method string getSorting() Obtain Sorting methods: desc means in order; asc means in reverse order; it is asc by default.
 * @method void setSorting(string $Sorting) Set Sorting methods: desc means in order; asc means in reverse order; it is asc by default.
 * @method integer getLimit() Obtain Quantity of returns. It is 20 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Quantity of returns. It is 20 by default, and the maximum value is 100.
 * @method integer getOffset() Obtain Offset, which is 0 by default.
 * @method void setOffset(integer $Offset) Set Offset, which is 0 by default.
 */
class DescribeUserInfoRequest extends AbstractModel
{
    /**
     * @var string User ID
     */
    public $UserId;

    /**
     * @var string Type of queried information. Group: working group; DataAuth: data permission; EngineAuth: engine permission
     */
    public $Type;

    /**
     * @var array Filter criteria that are queried

When the type is Group, the fuzzy search is supported as the key is workgroup-name.

When the type is DataAuth, the keys supported are:

policy-type: types of permissions;

policy-source: data sources;

data-name: fuzzy search of the database and table.

When the type is EngineAuth, the keys supported are:

policy-type: types of permissions;

policy-source: data sources;

engine-name: fuzzy search of the database and table.
     */
    public $Filters;

    /**
     * @var string Sort fields.

When the type is Group, the create-time and group-name are supported.

When the type is DataAuth, create-time is supported.

When the type is EngineAuth, create-time is supported.
     */
    public $SortBy;

    /**
     * @var string Sorting methods: desc means in order; asc means in reverse order; it is asc by default.
     */
    public $Sorting;

    /**
     * @var integer Quantity of returns. It is 20 by default, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Offset, which is 0 by default.
     */
    public $Offset;

    /**
     * @param string $UserId User ID
     * @param string $Type Type of queried information. Group: working group; DataAuth: data permission; EngineAuth: engine permission
     * @param array $Filters Filter criteria that are queried

When the type is Group, the fuzzy search is supported as the key is workgroup-name.

When the type is DataAuth, the keys supported are:

policy-type: types of permissions;

policy-source: data sources;

data-name: fuzzy search of the database and table.

When the type is EngineAuth, the keys supported are:

policy-type: types of permissions;

policy-source: data sources;

engine-name: fuzzy search of the database and table.
     * @param string $SortBy Sort fields.

When the type is Group, the create-time and group-name are supported.

When the type is DataAuth, create-time is supported.

When the type is EngineAuth, create-time is supported.
     * @param string $Sorting Sorting methods: desc means in order; asc means in reverse order; it is asc by default.
     * @param integer $Limit Quantity of returns. It is 20 by default, and the maximum value is 100.
     * @param integer $Offset Offset, which is 0 by default.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("Sorting",$param) and $param["Sorting"] !== null) {
            $this->Sorting = $param["Sorting"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
