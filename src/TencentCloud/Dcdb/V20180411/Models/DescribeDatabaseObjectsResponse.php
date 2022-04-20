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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabaseObjects response structure.
 *
 * @method string getInstanceId() Obtain Passed through from input parameters.
 * @method void setInstanceId(string $InstanceId) Set Passed through from input parameters.
 * @method string getDbName() Obtain Database name.
 * @method void setDbName(string $DbName) Set Database name.
 * @method array getTables() Obtain Table list.
 * @method void setTables(array $Tables) Set Table list.
 * @method array getViews() Obtain View list.
 * @method void setViews(array $Views) Set View list.
 * @method array getProcs() Obtain Stored procedure list.
 * @method void setProcs(array $Procs) Set Stored procedure list.
 * @method array getFuncs() Obtain Function list.
 * @method void setFuncs(array $Funcs) Set Function list.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDatabaseObjectsResponse extends AbstractModel
{
    /**
     * @var string Passed through from input parameters.
     */
    public $InstanceId;

    /**
     * @var string Database name.
     */
    public $DbName;

    /**
     * @var array Table list.
     */
    public $Tables;

    /**
     * @var array View list.
     */
    public $Views;

    /**
     * @var array Stored procedure list.
     */
    public $Procs;

    /**
     * @var array Function list.
     */
    public $Funcs;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $InstanceId Passed through from input parameters.
     * @param string $DbName Database name.
     * @param array $Tables Table list.
     * @param array $Views View list.
     * @param array $Procs Stored procedure list.
     * @param array $Funcs Function list.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = [];
            foreach ($param["Tables"] as $key => $value){
                $obj = new DatabaseTable();
                $obj->deserialize($value);
                array_push($this->Tables, $obj);
            }
        }

        if (array_key_exists("Views",$param) and $param["Views"] !== null) {
            $this->Views = [];
            foreach ($param["Views"] as $key => $value){
                $obj = new DatabaseView();
                $obj->deserialize($value);
                array_push($this->Views, $obj);
            }
        }

        if (array_key_exists("Procs",$param) and $param["Procs"] !== null) {
            $this->Procs = [];
            foreach ($param["Procs"] as $key => $value){
                $obj = new DatabaseProcedure();
                $obj->deserialize($value);
                array_push($this->Procs, $obj);
            }
        }

        if (array_key_exists("Funcs",$param) and $param["Funcs"] !== null) {
            $this->Funcs = [];
            foreach ($param["Funcs"] as $key => $value){
                $obj = new DatabaseFunction();
                $obj->deserialize($value);
                array_push($this->Funcs, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
