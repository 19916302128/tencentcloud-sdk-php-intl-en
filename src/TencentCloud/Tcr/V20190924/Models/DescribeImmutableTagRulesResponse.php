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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImmutableTagRules response structure.
 *
 * @method array getRules() Obtain Rule list
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setRules(array $Rules) Set Rule list
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method array getEmptyNs() Obtain Namespace with no rules created
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setEmptyNs(array $EmptyNs) Set Namespace with no rules created
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method integer getTotal() Obtain Total rules
 * @method void setTotal(integer $Total) Set Total rules
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeImmutableTagRulesResponse extends AbstractModel
{
    /**
     * @var array Rule list
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $Rules;

    /**
     * @var array Namespace with no rules created
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $EmptyNs;

    /**
     * @var integer Total rules
     */
    public $Total;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Rules Rule list
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param array $EmptyNs Namespace with no rules created
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param integer $Total Total rules
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
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new ImmutableTagRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("EmptyNs",$param) and $param["EmptyNs"] !== null) {
            $this->EmptyNs = $param["EmptyNs"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
