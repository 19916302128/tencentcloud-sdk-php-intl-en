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
 * @method integer getAutoBackupType() 获取Auto backup type: 1 "scheduled rollback"
 * @method void setAutoBackupType(integer $AutoBackupType) 设置Auto backup type: 1 "scheduled rollback"
 * @method array getWeekDays() 获取Date. Value range: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday.
 * @method void setWeekDays(array $WeekDays) 设置Date. Value range: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday.
 * @method string getTimePeriod() 获取Time period. Value range: 00:00-01:00, 01:00-02:00...... 23:00-00:00
 * @method void setTimePeriod(string $TimePeriod) 设置Time period. Value range: 00:00-01:00, 01:00-02:00...... 23:00-00:00
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *ModifyAutoBackupConfig response structure.
 */
class ModifyAutoBackupConfigResponse extends AbstractModel
{
    /**
     * @var integer Auto backup type: 1 "scheduled rollback"
     */
    public $AutoBackupType;

    /**
     * @var array Date. Value range: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday.
     */
    public $WeekDays;

    /**
     * @var string Time period. Value range: 00:00-01:00, 01:00-02:00...... 23:00-00:00
     */
    public $TimePeriod;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param integer $AutoBackupType Auto backup type: 1 "scheduled rollback"
     * @param array $WeekDays Date. Value range: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday.
     * @param string $TimePeriod Time period. Value range: 00:00-01:00, 01:00-02:00...... 23:00-00:00
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("AutoBackupType",$param) and $param["AutoBackupType"] !== null) {
            $this->AutoBackupType = $param["AutoBackupType"];
        }

        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }

        if (array_key_exists("TimePeriod",$param) and $param["TimePeriod"] !== null) {
            $this->TimePeriod = $param["TimePeriod"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
