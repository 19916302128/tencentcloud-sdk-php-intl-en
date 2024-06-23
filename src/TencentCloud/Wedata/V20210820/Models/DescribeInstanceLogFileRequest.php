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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceLogFile request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getCurRunDate() Obtain Instance data time
 * @method void setCurRunDate(string $CurRunDate) Set Instance data time
 * @method string getBrokerIp() Obtain Executor IP
 * @method void setBrokerIp(string $BrokerIp) Set Executor IP
 * @method string getOriginFileName() Obtain Log file name
 * @method void setOriginFileName(string $OriginFileName) Set Log file name
 */
class DescribeInstanceLogFileRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Instance data time
     */
    public $CurRunDate;

    /**
     * @var string Executor IP
     */
    public $BrokerIp;

    /**
     * @var string Log file name
     */
    public $OriginFileName;

    /**
     * @param string $ProjectId Project ID
     * @param string $TaskId Task ID
     * @param string $CurRunDate Instance data time
     * @param string $BrokerIp Executor IP
     * @param string $OriginFileName Log file name
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("OriginFileName",$param) and $param["OriginFileName"] !== null) {
            $this->OriginFileName = $param["OriginFileName"];
        }
    }
}
