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
 * InsertDatasToTable request structure.
 *
 * @method string getDatabase() Obtain Database name
 * @method void setDatabase(string $Database) Set Database name
 * @method string getTable() Obtain Table name
 * @method void setTable(string $Table) Set Table name
 * @method boolean getStrict() Obtain Whether to use the strict mode
 * @method void setStrict(boolean $Strict) Set Whether to use the strict mode
 * @method float getMaxFilterRatio() Obtain Maximum filtration ratio, ranging from 0 to 1.0
 * @method void setMaxFilterRatio(float $MaxFilterRatio) Set Maximum filtration ratio, ranging from 0 to 1.0
 * @method array getColumns() Obtain Array of column names
 * @method void setColumns(array $Columns) Set Array of column names
 * @method array getRows() Obtain Data line
 * @method void setRows(array $Rows) Set Data line
 * @method string getLabel() Obtain Tags for inserting data
 * @method void setLabel(string $Label) Set Tags for inserting data
 * @method string getUserName() Obtain Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method void setUserName(string $UserName) Set Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method string getPassWord() Obtain Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method void setPassWord(string $PassWord) Set Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method string getColumnTypes() Obtain Column type
 * @method void setColumnTypes(string $ColumnTypes) Set Column type
 */
class InsertDatasToTableRequest extends AbstractModel
{
    /**
     * @var string Database name
     */
    public $Database;

    /**
     * @var string Table name
     */
    public $Table;

    /**
     * @var boolean Whether to use the strict mode
     */
    public $Strict;

    /**
     * @var float Maximum filtration ratio, ranging from 0 to 1.0
     */
    public $MaxFilterRatio;

    /**
     * @var array Array of column names
     */
    public $Columns;

    /**
     * @var array Data line
     */
    public $Rows;

    /**
     * @var string Tags for inserting data
     */
    public $Label;

    /**
     * @var string Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     */
    public $UserName;

    /**
     * @var string Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     */
    public $PassWord;

    /**
     * @var string Column type
     */
    public $ColumnTypes;

    /**
     * @param string $Database Database name
     * @param string $Table Table name
     * @param boolean $Strict Whether to use the strict mode
     * @param float $MaxFilterRatio Maximum filtration ratio, ranging from 0 to 1.0
     * @param array $Columns Array of column names
     * @param array $Rows Data line
     * @param string $Label Tags for inserting data
     * @param string $UserName Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     * @param string $PassWord Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     * @param string $ColumnTypes Column type
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
        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Strict",$param) and $param["Strict"] !== null) {
            $this->Strict = $param["Strict"];
        }

        if (array_key_exists("MaxFilterRatio",$param) and $param["MaxFilterRatio"] !== null) {
            $this->MaxFilterRatio = $param["MaxFilterRatio"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = $param["Columns"];
        }

        if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
            $this->Rows = [];
            foreach ($param["Rows"] as $key => $value){
                $obj = new Rows();
                $obj->deserialize($value);
                array_push($this->Rows, $obj);
            }
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PassWord",$param) and $param["PassWord"] !== null) {
            $this->PassWord = $param["PassWord"];
        }

        if (array_key_exists("ColumnTypes",$param) and $param["ColumnTypes"] !== null) {
            $this->ColumnTypes = $param["ColumnTypes"];
        }
    }
}
