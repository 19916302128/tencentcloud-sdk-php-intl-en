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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSupportedPrivileges response structure.
 *
 * @method array getGlobalSupportedPrivileges() Obtain Global permissions supported by the instance
 * @method void setGlobalSupportedPrivileges(array $GlobalSupportedPrivileges) Set Global permissions supported by the instance
 * @method array getDatabaseSupportedPrivileges() Obtain Database permissions supported by the instance.
 * @method void setDatabaseSupportedPrivileges(array $DatabaseSupportedPrivileges) Set Database permissions supported by the instance.
 * @method array getTableSupportedPrivileges() Obtain Table permissions supported by the instance.
 * @method void setTableSupportedPrivileges(array $TableSupportedPrivileges) Set Table permissions supported by the instance.
 * @method array getColumnSupportedPrivileges() Obtain Column permissions supported by the instance.
 * @method void setColumnSupportedPrivileges(array $ColumnSupportedPrivileges) Set Column permissions supported by the instance.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSupportedPrivilegesResponse extends AbstractModel
{
    /**
     * @var array Global permissions supported by the instance
     */
    public $GlobalSupportedPrivileges;

    /**
     * @var array Database permissions supported by the instance.
     */
    public $DatabaseSupportedPrivileges;

    /**
     * @var array Table permissions supported by the instance.
     */
    public $TableSupportedPrivileges;

    /**
     * @var array Column permissions supported by the instance.
     */
    public $ColumnSupportedPrivileges;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $GlobalSupportedPrivileges Global permissions supported by the instance
     * @param array $DatabaseSupportedPrivileges Database permissions supported by the instance.
     * @param array $TableSupportedPrivileges Table permissions supported by the instance.
     * @param array $ColumnSupportedPrivileges Column permissions supported by the instance.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("GlobalSupportedPrivileges",$param) and $param["GlobalSupportedPrivileges"] !== null) {
            $this->GlobalSupportedPrivileges = $param["GlobalSupportedPrivileges"];
        }

        if (array_key_exists("DatabaseSupportedPrivileges",$param) and $param["DatabaseSupportedPrivileges"] !== null) {
            $this->DatabaseSupportedPrivileges = $param["DatabaseSupportedPrivileges"];
        }

        if (array_key_exists("TableSupportedPrivileges",$param) and $param["TableSupportedPrivileges"] !== null) {
            $this->TableSupportedPrivileges = $param["TableSupportedPrivileges"];
        }

        if (array_key_exists("ColumnSupportedPrivileges",$param) and $param["ColumnSupportedPrivileges"] !== null) {
            $this->ColumnSupportedPrivileges = $param["ColumnSupportedPrivileges"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
