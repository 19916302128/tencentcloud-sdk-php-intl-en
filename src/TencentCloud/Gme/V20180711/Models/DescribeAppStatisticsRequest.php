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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getBizId() 获取GME application ID
 * @method void setBizId(integer $BizId) 设置GME application ID
 * @method string getStartDate() 获取Data start date (GMT+8) in the format of yyyy-mm-dd, such as 2018-07-13
 * @method void setStartDate(string $StartDate) 设置Data start date (GMT+8) in the format of yyyy-mm-dd, such as 2018-07-13
 * @method string getEndDate() 获取Data end date (GMT+8) in the format of yyyy-mm-dd, such as 2018-07-13
 * @method void setEndDate(string $EndDate) 设置Data end date (GMT+8) in the format of yyyy-mm-dd, such as 2018-07-13
 * @method array getServices() 获取List of services to be queried. Valid values: RealTimeSpeech, VoiceMessage, VoiceFilter
 * @method void setServices(array $Services) 设置List of services to be queried. Valid values: RealTimeSpeech, VoiceMessage, VoiceFilter
 */

/**
 *DescribeAppStatistics request structure.
 */
class DescribeAppStatisticsRequest extends AbstractModel
{
    /**
     * @var integer GME application ID
     */
    public $BizId;

    /**
     * @var string Data start date (GMT+8) in the format of yyyy-mm-dd, such as 2018-07-13
     */
    public $StartDate;

    /**
     * @var string Data end date (GMT+8) in the format of yyyy-mm-dd, such as 2018-07-13
     */
    public $EndDate;

    /**
     * @var array List of services to be queried. Valid values: RealTimeSpeech, VoiceMessage, VoiceFilter
     */
    public $Services;
    /**
     * @param integer $BizId GME application ID
     * @param string $StartDate Data start date (GMT+8) in the format of yyyy-mm-dd, such as 2018-07-13
     * @param string $EndDate Data end date (GMT+8) in the format of yyyy-mm-dd, such as 2018-07-13
     * @param array $Services List of services to be queried. Valid values: RealTimeSpeech, VoiceMessage, VoiceFilter
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("Services",$param) and $param["Services"] !== null) {
            $this->Services = $param["Services"];
        }
    }
}
