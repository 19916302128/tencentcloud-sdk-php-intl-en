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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterSummary response structure.
 *
 * @method integer getTotalCount() Obtain Total number of clusters
 * @method void setTotalCount(integer $TotalCount) Set Total number of clusters
 * @method integer getRiskClusterCount() Obtain Number of clusters at risk
 * @method void setRiskClusterCount(integer $RiskClusterCount) Set Number of clusters at risk
 * @method integer getUncheckClusterCount() Obtain Number of clusters not checked
 * @method void setUncheckClusterCount(integer $UncheckClusterCount) Set Number of clusters not checked
 * @method integer getManagedClusterCount() Obtain Number of managed clusters
 * @method void setManagedClusterCount(integer $ManagedClusterCount) Set Number of managed clusters
 * @method integer getIndependentClusterCount() Obtain Number of self-deployed clusters
 * @method void setIndependentClusterCount(integer $IndependentClusterCount) Set Number of self-deployed clusters
 * @method integer getNoRiskClusterCount() Obtain Number of clusters involving no risks
 * @method void setNoRiskClusterCount(integer $NoRiskClusterCount) Set Number of clusters involving no risks
 * @method integer getCheckedClusterCount() Obtain Number of checked clusters
 * @method void setCheckedClusterCount(integer $CheckedClusterCount) Set Number of checked clusters
 * @method integer getAutoCheckClusterCount() Obtain Number of clusters automatically checked
 * @method void setAutoCheckClusterCount(integer $AutoCheckClusterCount) Set Number of clusters automatically checked
 * @method integer getManualCheckClusterCount() Obtain Number of clusters manually checked
 * @method void setManualCheckClusterCount(integer $ManualCheckClusterCount) Set Number of clusters manually checked
 * @method integer getFailedClusterCount() Obtain Number of clusters that failed the check
 * @method void setFailedClusterCount(integer $FailedClusterCount) Set Number of clusters that failed the check
 * @method integer getNotImportedClusterCount() Obtain Number of clusters not imported
 * @method void setNotImportedClusterCount(integer $NotImportedClusterCount) Set Number of clusters not imported
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeClusterSummaryResponse extends AbstractModel
{
    /**
     * @var integer Total number of clusters
     */
    public $TotalCount;

    /**
     * @var integer Number of clusters at risk
     */
    public $RiskClusterCount;

    /**
     * @var integer Number of clusters not checked
     */
    public $UncheckClusterCount;

    /**
     * @var integer Number of managed clusters
     */
    public $ManagedClusterCount;

    /**
     * @var integer Number of self-deployed clusters
     */
    public $IndependentClusterCount;

    /**
     * @var integer Number of clusters involving no risks
     */
    public $NoRiskClusterCount;

    /**
     * @var integer Number of checked clusters
     */
    public $CheckedClusterCount;

    /**
     * @var integer Number of clusters automatically checked
     */
    public $AutoCheckClusterCount;

    /**
     * @var integer Number of clusters manually checked
     */
    public $ManualCheckClusterCount;

    /**
     * @var integer Number of clusters that failed the check
     */
    public $FailedClusterCount;

    /**
     * @var integer Number of clusters not imported
     */
    public $NotImportedClusterCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number of clusters
     * @param integer $RiskClusterCount Number of clusters at risk
     * @param integer $UncheckClusterCount Number of clusters not checked
     * @param integer $ManagedClusterCount Number of managed clusters
     * @param integer $IndependentClusterCount Number of self-deployed clusters
     * @param integer $NoRiskClusterCount Number of clusters involving no risks
     * @param integer $CheckedClusterCount Number of checked clusters
     * @param integer $AutoCheckClusterCount Number of clusters automatically checked
     * @param integer $ManualCheckClusterCount Number of clusters manually checked
     * @param integer $FailedClusterCount Number of clusters that failed the check
     * @param integer $NotImportedClusterCount Number of clusters not imported
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RiskClusterCount",$param) and $param["RiskClusterCount"] !== null) {
            $this->RiskClusterCount = $param["RiskClusterCount"];
        }

        if (array_key_exists("UncheckClusterCount",$param) and $param["UncheckClusterCount"] !== null) {
            $this->UncheckClusterCount = $param["UncheckClusterCount"];
        }

        if (array_key_exists("ManagedClusterCount",$param) and $param["ManagedClusterCount"] !== null) {
            $this->ManagedClusterCount = $param["ManagedClusterCount"];
        }

        if (array_key_exists("IndependentClusterCount",$param) and $param["IndependentClusterCount"] !== null) {
            $this->IndependentClusterCount = $param["IndependentClusterCount"];
        }

        if (array_key_exists("NoRiskClusterCount",$param) and $param["NoRiskClusterCount"] !== null) {
            $this->NoRiskClusterCount = $param["NoRiskClusterCount"];
        }

        if (array_key_exists("CheckedClusterCount",$param) and $param["CheckedClusterCount"] !== null) {
            $this->CheckedClusterCount = $param["CheckedClusterCount"];
        }

        if (array_key_exists("AutoCheckClusterCount",$param) and $param["AutoCheckClusterCount"] !== null) {
            $this->AutoCheckClusterCount = $param["AutoCheckClusterCount"];
        }

        if (array_key_exists("ManualCheckClusterCount",$param) and $param["ManualCheckClusterCount"] !== null) {
            $this->ManualCheckClusterCount = $param["ManualCheckClusterCount"];
        }

        if (array_key_exists("FailedClusterCount",$param) and $param["FailedClusterCount"] !== null) {
            $this->FailedClusterCount = $param["FailedClusterCount"];
        }

        if (array_key_exists("NotImportedClusterCount",$param) and $param["NotImportedClusterCount"] !== null) {
            $this->NotImportedClusterCount = $param["NotImportedClusterCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
