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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListRoleConfigurations response structure.
 *
 * @method integer getTotalCounts() Obtain Total number of data entries that meet the request parameter conditions.
 * @method void setTotalCounts(integer $TotalCounts) Set Total number of data entries that meet the request parameter conditions.
 * @method integer getMaxResults() Obtain Maximum number of data entries per page.
 * @method void setMaxResults(integer $MaxResults) Set Maximum number of data entries per page.
 * @method boolean getIsTruncated() Obtain Whether the returned result is truncated. Valid values: true: truncated; false: not truncated.
 * @method void setIsTruncated(boolean $IsTruncated) Set Whether the returned result is truncated. Valid values: true: truncated; false: not truncated.
 * @method string getNextToken() Obtain Token for querying the next page of returned results. Note: This parameter is displayed only when IsTruncated is true.
 * @method void setNextToken(string $NextToken) Set Token for querying the next page of returned results. Note: This parameter is displayed only when IsTruncated is true.
 * @method array getRoleConfigurations() Obtain Permission configuration list.
 * @method void setRoleConfigurations(array $RoleConfigurations) Set Permission configuration list.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class ListRoleConfigurationsResponse extends AbstractModel
{
    /**
     * @var integer Total number of data entries that meet the request parameter conditions.
     */
    public $TotalCounts;

    /**
     * @var integer Maximum number of data entries per page.
     */
    public $MaxResults;

    /**
     * @var boolean Whether the returned result is truncated. Valid values: true: truncated; false: not truncated.
     */
    public $IsTruncated;

    /**
     * @var string Token for querying the next page of returned results. Note: This parameter is displayed only when IsTruncated is true.
     */
    public $NextToken;

    /**
     * @var array Permission configuration list.
     */
    public $RoleConfigurations;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCounts Total number of data entries that meet the request parameter conditions.
     * @param integer $MaxResults Maximum number of data entries per page.
     * @param boolean $IsTruncated Whether the returned result is truncated. Valid values: true: truncated; false: not truncated.
     * @param string $NextToken Token for querying the next page of returned results. Note: This parameter is displayed only when IsTruncated is true.
     * @param array $RoleConfigurations Permission configuration list.
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
        if (array_key_exists("TotalCounts",$param) and $param["TotalCounts"] !== null) {
            $this->TotalCounts = $param["TotalCounts"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("IsTruncated",$param) and $param["IsTruncated"] !== null) {
            $this->IsTruncated = $param["IsTruncated"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("RoleConfigurations",$param) and $param["RoleConfigurations"] !== null) {
            $this->RoleConfigurations = [];
            foreach ($param["RoleConfigurations"] as $key => $value){
                $obj = new RoleConfiguration();
                $obj->deserialize($value);
                array_push($this->RoleConfigurations, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
