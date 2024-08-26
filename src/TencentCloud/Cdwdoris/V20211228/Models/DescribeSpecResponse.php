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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSpec response structure.
 *
 * @method array getMasterSpec() Obtain Zookeeper node specification description
 * @method void setMasterSpec(array $MasterSpec) Set Zookeeper node specification description
 * @method array getCoreSpec() Obtain Data node specification description
 * @method void setCoreSpec(array $CoreSpec) Set Data node specification description
 * @method array getAttachCBSSpec() Obtain Cloud disk list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttachCBSSpec(array $AttachCBSSpec) Set Cloud disk list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeSpecResponse extends AbstractModel
{
    /**
     * @var array Zookeeper node specification description
     */
    public $MasterSpec;

    /**
     * @var array Data node specification description
     */
    public $CoreSpec;

    /**
     * @var array Cloud disk list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttachCBSSpec;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $MasterSpec Zookeeper node specification description
     * @param array $CoreSpec Data node specification description
     * @param array $AttachCBSSpec Cloud disk list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("MasterSpec",$param) and $param["MasterSpec"] !== null) {
            $this->MasterSpec = [];
            foreach ($param["MasterSpec"] as $key => $value){
                $obj = new ResourceSpec();
                $obj->deserialize($value);
                array_push($this->MasterSpec, $obj);
            }
        }

        if (array_key_exists("CoreSpec",$param) and $param["CoreSpec"] !== null) {
            $this->CoreSpec = [];
            foreach ($param["CoreSpec"] as $key => $value){
                $obj = new ResourceSpec();
                $obj->deserialize($value);
                array_push($this->CoreSpec, $obj);
            }
        }

        if (array_key_exists("AttachCBSSpec",$param) and $param["AttachCBSSpec"] !== null) {
            $this->AttachCBSSpec = [];
            foreach ($param["AttachCBSSpec"] as $key => $value){
                $obj = new DiskSpec();
                $obj->deserialize($value);
                array_push($this->AttachCBSSpec, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
