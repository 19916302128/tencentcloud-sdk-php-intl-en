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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMediaInfos response structure.
 *
 * @method array getMediaInfoSet() Obtain Media file information list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMediaInfoSet(array $MediaInfoSet) Set Media file information list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getNotExistFileIdSet() Obtain List of IDs of files that do not exist.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNotExistFileIdSet(array $NotExistFileIdSet) Set List of IDs of files that do not exist.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeMediaInfosResponse extends AbstractModel
{
    /**
     * @var array Media file information list.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MediaInfoSet;

    /**
     * @var array List of IDs of files that do not exist.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NotExistFileIdSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $MediaInfoSet Media file information list.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $NotExistFileIdSet List of IDs of files that do not exist.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("MediaInfoSet",$param) and $param["MediaInfoSet"] !== null) {
            $this->MediaInfoSet = [];
            foreach ($param["MediaInfoSet"] as $key => $value){
                $obj = new MediaInfo();
                $obj->deserialize($value);
                array_push($this->MediaInfoSet, $obj);
            }
        }

        if (array_key_exists("NotExistFileIdSet",$param) and $param["NotExistFileIdSet"] !== null) {
            $this->NotExistFileIdSet = $param["NotExistFileIdSet"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
