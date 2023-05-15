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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupStorageLocations response structure.
 *
 * @method array getBackupStorageLocationSet() Obtain Detailed information of the backup repository 
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setBackupStorageLocationSet(array $BackupStorageLocationSet) Set Detailed information of the backup repository 
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeBackupStorageLocationsResponse extends AbstractModel
{
    /**
     * @var array Detailed information of the backup repository 
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $BackupStorageLocationSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $BackupStorageLocationSet Detailed information of the backup repository 
Note: This parameter may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("BackupStorageLocationSet",$param) and $param["BackupStorageLocationSet"] !== null) {
            $this->BackupStorageLocationSet = [];
            foreach ($param["BackupStorageLocationSet"] as $key => $value){
                $obj = new BackupStorageLocation();
                $obj->deserialize($value);
                array_push($this->BackupStorageLocationSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
