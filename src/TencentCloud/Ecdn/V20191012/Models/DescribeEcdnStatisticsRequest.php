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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEcdnStatistics request structure.
 *
 * @method string getStartTime() Obtain Query start time, such as 2019-12-13 00:00:00
 * @method void setStartTime(string $StartTime) Set Query start time, such as 2019-12-13 00:00:00
 * @method string getEndTime() Obtain Query end time, such as 2019-12-13 23:59:59
 * @method void setEndTime(string $EndTime) Set Query end time, such as 2019-12-13 23:59:59
 * @method array getMetrics() Obtain Specifies the query metric, which can be:
flux: traffic in bytes
bandwidth: bandwidth in bps
request: number of requests
delay: response time in ms
2xx: returns the number of 2xx status codes or details of status codes starting with 2
3xx: returns the number of 3xx status codes or details of status codes starting with 3
4xx: returns the number of 4xx status codes or details of status codes starting with 4
5xx: returns the number of 5xx status codes or details of status codes starting with 5
static_request: number of static requests
static_flux: static traffic in bytes
static_bandwidth: static bandwidth in bps
dynamic_request: number of dynamic requests
dynamic_flux: dynamic traffic in bytes
dynamic_bandwidth: dynamic bandwidth in bps
 * @method void setMetrics(array $Metrics) Set Specifies the query metric, which can be:
flux: traffic in bytes
bandwidth: bandwidth in bps
request: number of requests
delay: response time in ms
2xx: returns the number of 2xx status codes or details of status codes starting with 2
3xx: returns the number of 3xx status codes or details of status codes starting with 3
4xx: returns the number of 4xx status codes or details of status codes starting with 4
5xx: returns the number of 5xx status codes or details of status codes starting with 5
static_request: number of static requests
static_flux: static traffic in bytes
static_bandwidth: static bandwidth in bps
dynamic_request: number of dynamic requests
dynamic_flux: dynamic traffic in bytes
dynamic_bandwidth: dynamic bandwidth in bps
 * @method integer getInterval() Obtain Time granularity, which can be:
1 day	 1, 5, 15, 30, 60, 120, 240, 1440 
2-3 days 15, 30, 60, 120, 240, 1440
4-7 days 30, 60, 120, 240, 1440
8-90 days	 60, 120, 240, 1440
 * @method void setInterval(integer $Interval) Set Time granularity, which can be:
1 day	 1, 5, 15, 30, 60, 120, 240, 1440 
2-3 days 15, 30, 60, 120, 240, 1440
4-7 days 30, 60, 120, 240, 1440
8-90 days	 60, 120, 240, 1440
 * @method array getDomains() Obtain Specifies the list of domain names to be queried

Up to 30 acceleration domain names can be queried at a time.
 * @method void setDomains(array $Domains) Set Specifies the list of domain names to be queried

Up to 30 acceleration domain names can be queried at a time.
 * @method array getProjects() Obtain Specifies the project ID to be queried, which can be viewed [here](https://console.cloud.tencent.com/project)
If no domain name is entered, the specified project will be queried; otherwise, the domain name will prevail
 * @method void setProjects(array $Projects) Set Specifies the project ID to be queried, which can be viewed [here](https://console.cloud.tencent.com/project)
If no domain name is entered, the specified project will be queried; otherwise, the domain name will prevail
 */
class DescribeEcdnStatisticsRequest extends AbstractModel
{
    /**
     * @var string Query start time, such as 2019-12-13 00:00:00
     */
    public $StartTime;

    /**
     * @var string Query end time, such as 2019-12-13 23:59:59
     */
    public $EndTime;

    /**
     * @var array Specifies the query metric, which can be:
flux: traffic in bytes
bandwidth: bandwidth in bps
request: number of requests
delay: response time in ms
2xx: returns the number of 2xx status codes or details of status codes starting with 2
3xx: returns the number of 3xx status codes or details of status codes starting with 3
4xx: returns the number of 4xx status codes or details of status codes starting with 4
5xx: returns the number of 5xx status codes or details of status codes starting with 5
static_request: number of static requests
static_flux: static traffic in bytes
static_bandwidth: static bandwidth in bps
dynamic_request: number of dynamic requests
dynamic_flux: dynamic traffic in bytes
dynamic_bandwidth: dynamic bandwidth in bps
     */
    public $Metrics;

    /**
     * @var integer Time granularity, which can be:
1 day	 1, 5, 15, 30, 60, 120, 240, 1440 
2-3 days 15, 30, 60, 120, 240, 1440
4-7 days 30, 60, 120, 240, 1440
8-90 days	 60, 120, 240, 1440
     */
    public $Interval;

    /**
     * @var array Specifies the list of domain names to be queried

Up to 30 acceleration domain names can be queried at a time.
     */
    public $Domains;

    /**
     * @var array Specifies the project ID to be queried, which can be viewed [here](https://console.cloud.tencent.com/project)
If no domain name is entered, the specified project will be queried; otherwise, the domain name will prevail
     */
    public $Projects;

    /**
     * @param string $StartTime Query start time, such as 2019-12-13 00:00:00
     * @param string $EndTime Query end time, such as 2019-12-13 23:59:59
     * @param array $Metrics Specifies the query metric, which can be:
flux: traffic in bytes
bandwidth: bandwidth in bps
request: number of requests
delay: response time in ms
2xx: returns the number of 2xx status codes or details of status codes starting with 2
3xx: returns the number of 3xx status codes or details of status codes starting with 3
4xx: returns the number of 4xx status codes or details of status codes starting with 4
5xx: returns the number of 5xx status codes or details of status codes starting with 5
static_request: number of static requests
static_flux: static traffic in bytes
static_bandwidth: static bandwidth in bps
dynamic_request: number of dynamic requests
dynamic_flux: dynamic traffic in bytes
dynamic_bandwidth: dynamic bandwidth in bps
     * @param integer $Interval Time granularity, which can be:
1 day	 1, 5, 15, 30, 60, 120, 240, 1440 
2-3 days 15, 30, 60, 120, 240, 1440
4-7 days 30, 60, 120, 240, 1440
8-90 days	 60, 120, 240, 1440
     * @param array $Domains Specifies the list of domain names to be queried

Up to 30 acceleration domain names can be queried at a time.
     * @param array $Projects Specifies the project ID to be queried, which can be viewed [here](https://console.cloud.tencent.com/project)
If no domain name is entered, the specified project will be queried; otherwise, the domain name will prevail
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = $param["Metrics"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Projects",$param) and $param["Projects"] !== null) {
            $this->Projects = $param["Projects"];
        }
    }
}
