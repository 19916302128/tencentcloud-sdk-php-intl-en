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
 * DescribeWhiteboardPushSearch response structure.
 *
 * @method array getWhiteboardPushTaskSet() Obtain The set of queried push tasks.
 * @method void setWhiteboardPushTaskSet(array $WhiteboardPushTaskSet) Set The set of queried push tasks.
 * @method integer getTotalCount() Obtain Number of push tasks.
 * @method void setTotalCount(integer $TotalCount) Set Number of push tasks.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeWhiteboardPushSearchResponse extends AbstractModel
{
    /**
     * @var array The set of queried push tasks.
     */
    public $WhiteboardPushTaskSet;

    /**
     * @var integer Number of push tasks.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $WhiteboardPushTaskSet The set of queried push tasks.
     * @param integer $TotalCount Number of push tasks.
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
        if (array_key_exists("WhiteboardPushTaskSet",$param) and $param["WhiteboardPushTaskSet"] !== null) {
            $this->WhiteboardPushTaskSet = [];
            foreach ($param["WhiteboardPushTaskSet"] as $key => $value){
                $obj = new WhiteboardPushTaskSearchResult();
                $obj->deserialize($value);
                array_push($this->WhiteboardPushTaskSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
