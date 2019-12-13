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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getNationCountryInnerList() 获取Nearest access region
 * @method void setNationCountryInnerList(array $NationCountryInnerList) 设置Nearest access region
 * @method array getProxyList() 获取Acceleration region connection list
 * @method void setProxyList(array $ProxyList) 设置Acceleration region connection list
 * @method string getRegionId() 获取Acceleration region ID
 * @method void setRegionId(string $RegionId) 设置Acceleration region ID
 * @method string getGeographicalZoneInnerCode() 获取Acceleration region internal code
 * @method void setGeographicalZoneInnerCode(string $GeographicalZoneInnerCode) 设置Acceleration region internal code
 * @method string getContinentInnerCode() 获取Internal code of the continent to which the acceleration region belongs
 * @method void setContinentInnerCode(string $ContinentInnerCode) 设置Internal code of the continent to which the acceleration region belongs
 * @method string getRegionName() 获取Acceleration region alias
 * @method void setRegionName(string $RegionName) 设置Acceleration region alias
 */

/**
 *Nearest access configuration details of domain name resolution
 */
class DomainAccessRegionDict extends AbstractModel
{
    /**
     * @var array Nearest access region
     */
    public $NationCountryInnerList;

    /**
     * @var array Acceleration region connection list
     */
    public $ProxyList;

    /**
     * @var string Acceleration region ID
     */
    public $RegionId;

    /**
     * @var string Acceleration region internal code
     */
    public $GeographicalZoneInnerCode;

    /**
     * @var string Internal code of the continent to which the acceleration region belongs
     */
    public $ContinentInnerCode;

    /**
     * @var string Acceleration region alias
     */
    public $RegionName;
    /**
     * @param array $NationCountryInnerList Nearest access region
     * @param array $ProxyList Acceleration region connection list
     * @param string $RegionId Acceleration region ID
     * @param string $GeographicalZoneInnerCode Acceleration region internal code
     * @param string $ContinentInnerCode Internal code of the continent to which the acceleration region belongs
     * @param string $RegionName Acceleration region alias
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("NationCountryInnerList",$param) and $param["NationCountryInnerList"] !== null) {
            $this->NationCountryInnerList = [];
            foreach ($param["NationCountryInnerList"] as $key => $value){
                $obj = new NationCountryInnerInfo();
                $obj->deserialize($value);
                array_push($this->NationCountryInnerList, $obj);
            }
        }

        if (array_key_exists("ProxyList",$param) and $param["ProxyList"] !== null) {
            $this->ProxyList = [];
            foreach ($param["ProxyList"] as $key => $value){
                $obj = new ProxyIdDict();
                $obj->deserialize($value);
                array_push($this->ProxyList, $obj);
            }
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("GeographicalZoneInnerCode",$param) and $param["GeographicalZoneInnerCode"] !== null) {
            $this->GeographicalZoneInnerCode = $param["GeographicalZoneInnerCode"];
        }

        if (array_key_exists("ContinentInnerCode",$param) and $param["ContinentInnerCode"] !== null) {
            $this->ContinentInnerCode = $param["ContinentInnerCode"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }
    }
}
