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
 * DescribeTable response structure.
 *
 * @method string getKeysType() Obtain Table data model: 
AGG_KEY: aggregation model; 
UNI_KEY: primary key model; 
DUP_KEY: detail model
 * @method void setKeysType(string $KeysType) Set Table data model: 
AGG_KEY: aggregation model; 
UNI_KEY: primary key model; 
DUP_KEY: detail model
 * @method array getColumns() Obtain Table column information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColumns(array $Columns) Set Table column information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getIndexInfos() Obtain Index information. The inverted index and N-Gram index can be viewed through this parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIndexInfos(array $IndexInfos) Set Index information. The inverted index and N-Gram index can be viewed through this parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Partition getPartition() Obtain Partition information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPartition(Partition $Partition) Set Partition information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Distribution getDistribution() Obtain Bucket information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDistribution(Distribution $Distribution) Set Bucket information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableComment() Obtain Table description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableComment(string $TableComment) Set Table description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getProperties() Obtain Table attributes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProperties(array $Properties) Set Table attributes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeTableResponse extends AbstractModel
{
    /**
     * @var string Table data model: 
AGG_KEY: aggregation model; 
UNI_KEY: primary key model; 
DUP_KEY: detail model
     */
    public $KeysType;

    /**
     * @var array Table column information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Columns;

    /**
     * @var array Index information. The inverted index and N-Gram index can be viewed through this parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IndexInfos;

    /**
     * @var Partition Partition information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Partition;

    /**
     * @var Distribution Bucket information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Distribution;

    /**
     * @var string Table description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableComment;

    /**
     * @var array Table attributes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Properties;

    /**
     * @var string Error message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $KeysType Table data model: 
AGG_KEY: aggregation model; 
UNI_KEY: primary key model; 
DUP_KEY: detail model
     * @param array $Columns Table column information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $IndexInfos Index information. The inverted index and N-Gram index can be viewed through this parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Partition $Partition Partition information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Distribution $Distribution Bucket information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableComment Table description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Properties Table attributes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Message Error message
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("KeysType",$param) and $param["KeysType"] !== null) {
            $this->KeysType = $param["KeysType"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new Column();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("IndexInfos",$param) and $param["IndexInfos"] !== null) {
            $this->IndexInfos = [];
            foreach ($param["IndexInfos"] as $key => $value){
                $obj = new IndexInfo();
                $obj->deserialize($value);
                array_push($this->IndexInfos, $obj);
            }
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = new Partition();
            $this->Partition->deserialize($param["Partition"]);
        }

        if (array_key_exists("Distribution",$param) and $param["Distribution"] !== null) {
            $this->Distribution = new Distribution();
            $this->Distribution->deserialize($param["Distribution"]);
        }

        if (array_key_exists("TableComment",$param) and $param["TableComment"] !== null) {
            $this->TableComment = $param["TableComment"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
