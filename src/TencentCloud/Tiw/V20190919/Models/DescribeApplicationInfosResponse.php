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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplicationInfos response structure.
 *
 * @method array getApplicationInfos() Obtain Application list.
 * @method void setApplicationInfos(array $ApplicationInfos) Set Application list.
 * @method integer getAllOption() Obtain Specifies whether all applications are included. The value 0 indicates no and 1 indicates yes.
 * @method void setAllOption(integer $AllOption) Set Specifies whether all applications are included. The value 0 indicates no and 1 indicates yes.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeApplicationInfosResponse extends AbstractModel
{
    /**
     * @var array Application list.
     */
    public $ApplicationInfos;

    /**
     * @var integer Specifies whether all applications are included. The value 0 indicates no and 1 indicates yes.
     */
    public $AllOption;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $ApplicationInfos Application list.
     * @param integer $AllOption Specifies whether all applications are included. The value 0 indicates no and 1 indicates yes.
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
        if (array_key_exists("ApplicationInfos",$param) and $param["ApplicationInfos"] !== null) {
            $this->ApplicationInfos = [];
            foreach ($param["ApplicationInfos"] as $key => $value){
                $obj = new ApplicationItem();
                $obj->deserialize($value);
                array_push($this->ApplicationInfos, $obj);
            }
        }

        if (array_key_exists("AllOption",$param) and $param["AllOption"] !== null) {
            $this->AllOption = $param["AllOption"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
