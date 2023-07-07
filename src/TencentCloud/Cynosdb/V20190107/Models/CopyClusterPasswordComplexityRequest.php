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
 * CopyClusterPasswordComplexity request structure.
 *
 * @method array getClusterIds() Obtain A parameter used to replicate the array of cluster IDs
 * @method void setClusterIds(array $ClusterIds) Set A parameter used to replicate the array of cluster IDs
 * @method string getSourceClusterId() Obtain Cluster ID
 * @method void setSourceClusterId(string $SourceClusterId) Set Cluster ID
 */
class CopyClusterPasswordComplexityRequest extends AbstractModel
{
    /**
     * @var array A parameter used to replicate the array of cluster IDs
     */
    public $ClusterIds;

    /**
     * @var string Cluster ID
     */
    public $SourceClusterId;

    /**
     * @param array $ClusterIds A parameter used to replicate the array of cluster IDs
     * @param string $SourceClusterId Cluster ID
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
        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("SourceClusterId",$param) and $param["SourceClusterId"] !== null) {
            $this->SourceClusterId = $param["SourceClusterId"];
        }
    }
}
