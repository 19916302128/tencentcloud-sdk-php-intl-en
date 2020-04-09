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
 * DescribeDBLogFiles response structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of dcdbt-ow728lmc.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of dcdbt-ow728lmc.
 * @method integer getType() Obtain Requested log type. Valid values: 1 (binlog); 2 (cold backup); 3 (errlog); 4 (slowlog).
 * @method void setType(integer $Type) Set Requested log type. Valid values: 1 (binlog); 2 (cold backup); 3 (errlog); 4 (slowlog).
 * @method integer getTotal() Obtain Total number of requested logs
 * @method void setTotal(integer $Total) Set Total number of requested logs
 * @method array getFiles() Obtain List of log files
 * @method void setFiles(array $Files) Set List of log files
 * @method string getVpcPrefix() Obtain For an instance in a VPC, this prefix plus URI can be used as the download address
 * @method void setVpcPrefix(string $VpcPrefix) Set For an instance in a VPC, this prefix plus URI can be used as the download address
 * @method string getNormalPrefix() Obtain For an instance in a common network, this prefix plus URI can be used as the download address
 * @method void setNormalPrefix(string $NormalPrefix) Set For an instance in a common network, this prefix plus URI can be used as the download address
 * @method string getShardId() Obtain Shard ID in the format of shard-7noic7tv
 * @method void setShardId(string $ShardId) Set Shard ID in the format of shard-7noic7tv
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDBLogFilesResponse extends AbstractModel
{
    /**
     * @var string Instance ID in the format of dcdbt-ow728lmc.
     */
    public $InstanceId;

    /**
     * @var integer Requested log type. Valid values: 1 (binlog); 2 (cold backup); 3 (errlog); 4 (slowlog).
     */
    public $Type;

    /**
     * @var integer Total number of requested logs
     */
    public $Total;

    /**
     * @var array List of log files
     */
    public $Files;

    /**
     * @var string For an instance in a VPC, this prefix plus URI can be used as the download address
     */
    public $VpcPrefix;

    /**
     * @var string For an instance in a common network, this prefix plus URI can be used as the download address
     */
    public $NormalPrefix;

    /**
     * @var string Shard ID in the format of shard-7noic7tv
     */
    public $ShardId;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $InstanceId Instance ID in the format of dcdbt-ow728lmc.
     * @param integer $Type Requested log type. Valid values: 1 (binlog); 2 (cold backup); 3 (errlog); 4 (slowlog).
     * @param integer $Total Total number of requested logs
     * @param array $Files List of log files
     * @param string $VpcPrefix For an instance in a VPC, this prefix plus URI can be used as the download address
     * @param string $NormalPrefix For an instance in a common network, this prefix plus URI can be used as the download address
     * @param string $ShardId Shard ID in the format of shard-7noic7tv
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Files",$param) and $param["Files"] !== null) {
            $this->Files = [];
            foreach ($param["Files"] as $key => $value){
                $obj = new LogFileInfo();
                $obj->deserialize($value);
                array_push($this->Files, $obj);
            }
        }

        if (array_key_exists("VpcPrefix",$param) and $param["VpcPrefix"] !== null) {
            $this->VpcPrefix = $param["VpcPrefix"];
        }

        if (array_key_exists("NormalPrefix",$param) and $param["NormalPrefix"] !== null) {
            $this->NormalPrefix = $param["NormalPrefix"];
        }

        if (array_key_exists("ShardId",$param) and $param["ShardId"] !== null) {
            $this->ShardId = $param["ShardId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
