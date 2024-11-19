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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamPackageLinearAssemblyProgramSchedules response structure.
 *
 * @method array getInfos() Obtain Program's scheduling list.
 * @method void setInfos(array $Infos) Set Program's scheduling list.
 * @method integer getPageNum() Obtain Number of pages.
 * @method void setPageNum(integer $PageNum) Set Number of pages.
 * @method integer getPageSize() Obtain Size per page.
 * @method void setPageSize(integer $PageSize) Set Size per page.
 * @method integer getTotalNum() Obtain The total amount.
 * @method void setTotalNum(integer $TotalNum) Set The total amount.
 * @method integer getTotalPage() Obtain Total pages.
 * @method void setTotalPage(integer $TotalPage) Set Total pages.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeStreamPackageLinearAssemblyProgramSchedulesResponse extends AbstractModel
{
    /**
     * @var array Program's scheduling list.
     */
    public $Infos;

    /**
     * @var integer Number of pages.
     */
    public $PageNum;

    /**
     * @var integer Size per page.
     */
    public $PageSize;

    /**
     * @var integer The total amount.
     */
    public $TotalNum;

    /**
     * @var integer Total pages.
     */
    public $TotalPage;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Infos Program's scheduling list.
     * @param integer $PageNum Number of pages.
     * @param integer $PageSize Size per page.
     * @param integer $TotalNum The total amount.
     * @param integer $TotalPage Total pages.
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
        if (array_key_exists("Infos",$param) and $param["Infos"] !== null) {
            $this->Infos = [];
            foreach ($param["Infos"] as $key => $value){
                $obj = new LinearAssemblyProgramInfo();
                $obj->deserialize($value);
                array_push($this->Infos, $obj);
            }
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("TotalPage",$param) and $param["TotalPage"] !== null) {
            $this->TotalPage = $param["TotalPage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
