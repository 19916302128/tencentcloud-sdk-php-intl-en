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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTables request structure.
 *
 * @method string getClusterId() Obtain ID of the cluster where the table to be modified resides
 * @method void setClusterId(string $ClusterId) Set ID of the cluster where the table to be modified resides
 * @method array getIdlFiles() Obtain Selected table modification IDL files
 * @method void setIdlFiles(array $IdlFiles) Set Selected table modification IDL files
 * @method array getSelectedTables() Obtain List of tables to be modified
 * @method void setSelectedTables(array $SelectedTables) Set List of tables to be modified
 */
class ModifyTablesRequest extends AbstractModel
{
    /**
     * @var string ID of the cluster where the table to be modified resides
     */
    public $ClusterId;

    /**
     * @var array Selected table modification IDL files
     */
    public $IdlFiles;

    /**
     * @var array List of tables to be modified
     */
    public $SelectedTables;

    /**
     * @param string $ClusterId ID of the cluster where the table to be modified resides
     * @param array $IdlFiles Selected table modification IDL files
     * @param array $SelectedTables List of tables to be modified
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("IdlFiles",$param) and $param["IdlFiles"] !== null) {
            $this->IdlFiles = [];
            foreach ($param["IdlFiles"] as $key => $value){
                $obj = new IdlFileInfo();
                $obj->deserialize($value);
                array_push($this->IdlFiles, $obj);
            }
        }

        if (array_key_exists("SelectedTables",$param) and $param["SelectedTables"] !== null) {
            $this->SelectedTables = [];
            foreach ($param["SelectedTables"] as $key => $value){
                $obj = new SelectedTableInfoNew();
                $obj->deserialize($value);
                array_push($this->SelectedTables, $obj);
            }
        }
    }
}
