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
 * DescribeAssetHostDetail response structure.
 *
 * @method string getUUID() Obtain TCSS UUID
 * @method void setUUID(string $UUID) Set TCSS UUID
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getHostName() Obtain Server name
 * @method void setHostName(string $HostName) Set Server name
 * @method string getGroup() Obtain Server group
 * @method void setGroup(string $Group) Set Server group
 * @method string getHostIP() Obtain Server IP
 * @method void setHostIP(string $HostIP) Set Server IP
 * @method string getOsName() Obtain OS
 * @method void setOsName(string $OsName) Set OS
 * @method string getAgentVersion() Obtain Agent version
 * @method void setAgentVersion(string $AgentVersion) Set Agent version
 * @method string getKernelVersion() Obtain Kernel version
 * @method void setKernelVersion(string $KernelVersion) Set Kernel version
 * @method string getDockerVersion() Obtain Docker version
 * @method void setDockerVersion(string $DockerVersion) Set Docker version
 * @method string getDockerAPIVersion() Obtain Docker API version
 * @method void setDockerAPIVersion(string $DockerAPIVersion) Set Docker API version
 * @method string getDockerGoVersion() Obtain Docker version for Go
 * @method void setDockerGoVersion(string $DockerGoVersion) Set Docker version for Go
 * @method string getDockerFileSystemDriver() Obtain Docker file system type
 * @method void setDockerFileSystemDriver(string $DockerFileSystemDriver) Set Docker file system type
 * @method string getDockerRootDir() Obtain Docker root directory
 * @method void setDockerRootDir(string $DockerRootDir) Set Docker root directory
 * @method integer getImageCnt() Obtain Number of images
 * @method void setImageCnt(integer $ImageCnt) Set Number of images
 * @method integer getContainerCnt() Obtain Number of containers
 * @method void setContainerCnt(integer $ContainerCnt) Set Number of containers
 * @method string getK8sMasterIP() Obtain K8s IP
 * @method void setK8sMasterIP(string $K8sMasterIP) Set K8s IP
 * @method string getK8sVersion() Obtain K8s version
 * @method void setK8sVersion(string $K8sVersion) Set K8s version
 * @method string getKubeProxyVersion() Obtain kube proxy
 * @method void setKubeProxyVersion(string $KubeProxyVersion) Set kube proxy
 * @method string getStatus() Obtain Valid values: `UNINSTALL` (not installed); `OFFLINE` (offline); `ONLINE` (defended).
 * @method void setStatus(string $Status) Set Valid values: `UNINSTALL` (not installed); `OFFLINE` (offline); `ONLINE` (defended).
 * @method boolean getIsContainerd() Obtain Whether it is Containerd
 * @method void setIsContainerd(boolean $IsContainerd) Set Whether it is Containerd
 * @method string getMachineType() Obtain Server source. Valid values: `TENCENTCLOUD` (Tencent Cloud instance); `OTHERCLOUD` (non-Tencent Cloud instance).
 * @method void setMachineType(string $MachineType) Set Server source. Valid values: `TENCENTCLOUD` (Tencent Cloud instance); `OTHERCLOUD` (non-Tencent Cloud instance).
 * @method string getPublicIp() Obtain Public IP
 * @method void setPublicIp(string $PublicIp) Set Public IP
 * @method string getInstanceID() Obtain Server instance ID
 * @method void setInstanceID(string $InstanceID) Set Server instance ID
 * @method integer getRegionID() Obtain Region ID
 * @method void setRegionID(integer $RegionID) Set Region ID
 * @method ProjectInfo getProject() Obtain Project
 * @method void setProject(ProjectInfo $Project) Set Project
 * @method array getTags() Obtain Tags
 * @method void setTags(array $Tags) Set Tags
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAssetHostDetailResponse extends AbstractModel
{
    /**
     * @var string TCSS UUID
     */
    public $UUID;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Server name
     */
    public $HostName;

    /**
     * @var string Server group
     */
    public $Group;

    /**
     * @var string Server IP
     */
    public $HostIP;

    /**
     * @var string OS
     */
    public $OsName;

    /**
     * @var string Agent version
     */
    public $AgentVersion;

    /**
     * @var string Kernel version
     */
    public $KernelVersion;

    /**
     * @var string Docker version
     */
    public $DockerVersion;

    /**
     * @var string Docker API version
     */
    public $DockerAPIVersion;

    /**
     * @var string Docker version for Go
     */
    public $DockerGoVersion;

    /**
     * @var string Docker file system type
     */
    public $DockerFileSystemDriver;

    /**
     * @var string Docker root directory
     */
    public $DockerRootDir;

    /**
     * @var integer Number of images
     */
    public $ImageCnt;

    /**
     * @var integer Number of containers
     */
    public $ContainerCnt;

    /**
     * @var string K8s IP
     */
    public $K8sMasterIP;

    /**
     * @var string K8s version
     */
    public $K8sVersion;

    /**
     * @var string kube proxy
     */
    public $KubeProxyVersion;

    /**
     * @var string Valid values: `UNINSTALL` (not installed); `OFFLINE` (offline); `ONLINE` (defended).
     */
    public $Status;

    /**
     * @var boolean Whether it is Containerd
     */
    public $IsContainerd;

    /**
     * @var string Server source. Valid values: `TENCENTCLOUD` (Tencent Cloud instance); `OTHERCLOUD` (non-Tencent Cloud instance).
     */
    public $MachineType;

    /**
     * @var string Public IP
     */
    public $PublicIp;

    /**
     * @var string Server instance ID
     */
    public $InstanceID;

    /**
     * @var integer Region ID
     */
    public $RegionID;

    /**
     * @var ProjectInfo Project
     */
    public $Project;

    /**
     * @var array Tags
     */
    public $Tags;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $UUID TCSS UUID
     * @param string $UpdateTime Update time
     * @param string $HostName Server name
     * @param string $Group Server group
     * @param string $HostIP Server IP
     * @param string $OsName OS
     * @param string $AgentVersion Agent version
     * @param string $KernelVersion Kernel version
     * @param string $DockerVersion Docker version
     * @param string $DockerAPIVersion Docker API version
     * @param string $DockerGoVersion Docker version for Go
     * @param string $DockerFileSystemDriver Docker file system type
     * @param string $DockerRootDir Docker root directory
     * @param integer $ImageCnt Number of images
     * @param integer $ContainerCnt Number of containers
     * @param string $K8sMasterIP K8s IP
     * @param string $K8sVersion K8s version
     * @param string $KubeProxyVersion kube proxy
     * @param string $Status Valid values: `UNINSTALL` (not installed); `OFFLINE` (offline); `ONLINE` (defended).
     * @param boolean $IsContainerd Whether it is Containerd
     * @param string $MachineType Server source. Valid values: `TENCENTCLOUD` (Tencent Cloud instance); `OTHERCLOUD` (non-Tencent Cloud instance).
     * @param string $PublicIp Public IP
     * @param string $InstanceID Server instance ID
     * @param integer $RegionID Region ID
     * @param ProjectInfo $Project Project
     * @param array $Tags Tags
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
        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("AgentVersion",$param) and $param["AgentVersion"] !== null) {
            $this->AgentVersion = $param["AgentVersion"];
        }

        if (array_key_exists("KernelVersion",$param) and $param["KernelVersion"] !== null) {
            $this->KernelVersion = $param["KernelVersion"];
        }

        if (array_key_exists("DockerVersion",$param) and $param["DockerVersion"] !== null) {
            $this->DockerVersion = $param["DockerVersion"];
        }

        if (array_key_exists("DockerAPIVersion",$param) and $param["DockerAPIVersion"] !== null) {
            $this->DockerAPIVersion = $param["DockerAPIVersion"];
        }

        if (array_key_exists("DockerGoVersion",$param) and $param["DockerGoVersion"] !== null) {
            $this->DockerGoVersion = $param["DockerGoVersion"];
        }

        if (array_key_exists("DockerFileSystemDriver",$param) and $param["DockerFileSystemDriver"] !== null) {
            $this->DockerFileSystemDriver = $param["DockerFileSystemDriver"];
        }

        if (array_key_exists("DockerRootDir",$param) and $param["DockerRootDir"] !== null) {
            $this->DockerRootDir = $param["DockerRootDir"];
        }

        if (array_key_exists("ImageCnt",$param) and $param["ImageCnt"] !== null) {
            $this->ImageCnt = $param["ImageCnt"];
        }

        if (array_key_exists("ContainerCnt",$param) and $param["ContainerCnt"] !== null) {
            $this->ContainerCnt = $param["ContainerCnt"];
        }

        if (array_key_exists("K8sMasterIP",$param) and $param["K8sMasterIP"] !== null) {
            $this->K8sMasterIP = $param["K8sMasterIP"];
        }

        if (array_key_exists("K8sVersion",$param) and $param["K8sVersion"] !== null) {
            $this->K8sVersion = $param["K8sVersion"];
        }

        if (array_key_exists("KubeProxyVersion",$param) and $param["KubeProxyVersion"] !== null) {
            $this->KubeProxyVersion = $param["KubeProxyVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsContainerd",$param) and $param["IsContainerd"] !== null) {
            $this->IsContainerd = $param["IsContainerd"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("RegionID",$param) and $param["RegionID"] !== null) {
            $this->RegionID = $param["RegionID"];
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = new ProjectInfo();
            $this->Project->deserialize($param["Project"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
