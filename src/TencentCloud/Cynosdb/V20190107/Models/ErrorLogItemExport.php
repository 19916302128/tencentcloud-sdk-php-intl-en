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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The export format for an error log
 *
 * @method string getTimestamp() Obtain Time Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimestamp(string $Timestamp) Set Time Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLevel() Obtain Log level. Valid values: `error`, `warning`, `note`. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLevel(string $Level) Set Log level. Valid values: `error`, `warning`, `note`. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContent() Obtain Log content Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContent(string $Content) Set Log content Note: This field may return null, indicating that no valid values can be obtained.
 */
class ErrorLogItemExport extends AbstractModel
{
    /**
     * @var string Time Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Timestamp;

    /**
     * @var string Log level. Valid values: `error`, `warning`, `note`. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Level;

    /**
     * @var string Log content Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Content;

    /**
     * @param string $Timestamp Time Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Level Log level. Valid values: `error`, `warning`, `note`. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Content Log content Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
