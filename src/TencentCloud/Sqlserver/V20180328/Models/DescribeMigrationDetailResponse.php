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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMigrationDetail response structure.
 *
 * @method integer getMigrateId() Obtain Migration task ID
 * @method void setMigrateId(integer $MigrateId) Set Migration task ID
 * @method string getMigrateName() Obtain Migration task name
 * @method void setMigrateName(string $MigrateName) Set Migration task name
 * @method integer getAppId() Obtain User ID of migration task
 * @method void setAppId(integer $AppId) Set User ID of migration task
 * @method string getRegion() Obtain Migration task region
 * @method void setRegion(string $Region) Set Migration task region
 * @method integer getSourceType() Obtain Migration source type. 1: TencentDB for SQL Server, 2: CVM-based self-created SQL Server database; 3: SQL Server backup restoration, 4: SQL Server backup restoration (in COS mode)
 * @method void setSourceType(integer $SourceType) Set Migration source type. 1: TencentDB for SQL Server, 2: CVM-based self-created SQL Server database; 3: SQL Server backup restoration, 4: SQL Server backup restoration (in COS mode)
 * @method string getCreateTime() Obtain Migration task creation time
 * @method void setCreateTime(string $CreateTime) Set Migration task creation time
 * @method string getStartTime() Obtain Migration task start time
 * @method void setStartTime(string $StartTime) Set Migration task start time
 * @method string getEndTime() Obtain Migration task end time
 * @method void setEndTime(string $EndTime) Set Migration task end time
 * @method integer getStatus() Obtain Migration task status (1: initializing, 4: migrating, 5: migration failed, 6: migration succeeded)
 * @method void setStatus(integer $Status) Set Migration task status (1: initializing, 4: migrating, 5: migration failed, 6: migration succeeded)
 * @method integer getProgress() Obtain Migration task progress
 * @method void setProgress(integer $Progress) Set Migration task progress
 * @method integer getMigrateType() Obtain Migration type (1: structure migration, 2: data migration, 3: incremental sync)
 * @method void setMigrateType(integer $MigrateType) Set Migration type (1: structure migration, 2: data migration, 3: incremental sync)
 * @method MigrateSource getSource() Obtain Migration source
 * @method void setSource(MigrateSource $Source) Set Migration source
 * @method MigrateTarget getTarget() Obtain Migration target
 * @method void setTarget(MigrateTarget $Target) Set Migration target
 * @method array getMigrateDBSet() Obtain Database objects to be migrated. This parameter is not used for offline migration (SourceType=4 or SourceType=5)
 * @method void setMigrateDBSet(array $MigrateDBSet) Set Database objects to be migrated. This parameter is not used for offline migration (SourceType=4 or SourceType=5)
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeMigrationDetailResponse extends AbstractModel
{
    /**
     * @var integer Migration task ID
     */
    public $MigrateId;

    /**
     * @var string Migration task name
     */
    public $MigrateName;

    /**
     * @var integer User ID of migration task
     */
    public $AppId;

    /**
     * @var string Migration task region
     */
    public $Region;

    /**
     * @var integer Migration source type. 1: TencentDB for SQL Server, 2: CVM-based self-created SQL Server database; 3: SQL Server backup restoration, 4: SQL Server backup restoration (in COS mode)
     */
    public $SourceType;

    /**
     * @var string Migration task creation time
     */
    public $CreateTime;

    /**
     * @var string Migration task start time
     */
    public $StartTime;

    /**
     * @var string Migration task end time
     */
    public $EndTime;

    /**
     * @var integer Migration task status (1: initializing, 4: migrating, 5: migration failed, 6: migration succeeded)
     */
    public $Status;

    /**
     * @var integer Migration task progress
     */
    public $Progress;

    /**
     * @var integer Migration type (1: structure migration, 2: data migration, 3: incremental sync)
     */
    public $MigrateType;

    /**
     * @var MigrateSource Migration source
     */
    public $Source;

    /**
     * @var MigrateTarget Migration target
     */
    public $Target;

    /**
     * @var array Database objects to be migrated. This parameter is not used for offline migration (SourceType=4 or SourceType=5)
     */
    public $MigrateDBSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $MigrateId Migration task ID
     * @param string $MigrateName Migration task name
     * @param integer $AppId User ID of migration task
     * @param string $Region Migration task region
     * @param integer $SourceType Migration source type. 1: TencentDB for SQL Server, 2: CVM-based self-created SQL Server database; 3: SQL Server backup restoration, 4: SQL Server backup restoration (in COS mode)
     * @param string $CreateTime Migration task creation time
     * @param string $StartTime Migration task start time
     * @param string $EndTime Migration task end time
     * @param integer $Status Migration task status (1: initializing, 4: migrating, 5: migration failed, 6: migration succeeded)
     * @param integer $Progress Migration task progress
     * @param integer $MigrateType Migration type (1: structure migration, 2: data migration, 3: incremental sync)
     * @param MigrateSource $Source Migration source
     * @param MigrateTarget $Target Migration target
     * @param array $MigrateDBSet Database objects to be migrated. This parameter is not used for offline migration (SourceType=4 or SourceType=5)
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
        if (array_key_exists("MigrateId",$param) and $param["MigrateId"] !== null) {
            $this->MigrateId = $param["MigrateId"];
        }

        if (array_key_exists("MigrateName",$param) and $param["MigrateName"] !== null) {
            $this->MigrateName = $param["MigrateName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("MigrateType",$param) and $param["MigrateType"] !== null) {
            $this->MigrateType = $param["MigrateType"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = new MigrateSource();
            $this->Source->deserialize($param["Source"]);
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = new MigrateTarget();
            $this->Target->deserialize($param["Target"]);
        }

        if (array_key_exists("MigrateDBSet",$param) and $param["MigrateDBSet"] !== null) {
            $this->MigrateDBSet = [];
            foreach ($param["MigrateDBSet"] as $key => $value){
                $obj = new MigrateDB();
                $obj->deserialize($value);
                array_push($this->MigrateDBSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
