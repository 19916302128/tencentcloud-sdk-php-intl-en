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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTP header setting rules. Up to 100 entries can be set.
 *
 * @method string getHeaderMode() Obtain HTTP header setting methods: <li>set: sets a value for an existing header parameter, a new header parameter, or multiple header parameters. Multiple header parameters will be merged into one.</li> <li>del: deletes a header parameter.</li> <li>add: adds a header parameter. By default, you can repeat the same action to add the same header parameter, which may affect browser response. Please consider the set operation first.</li>
 * @method void setHeaderMode(string $HeaderMode) Set HTTP header setting methods: <li>set: sets a value for an existing header parameter, a new header parameter, or multiple header parameters. Multiple header parameters will be merged into one.</li> <li>del: deletes a header parameter.</li> <li>add: adds a header parameter. By default, you can repeat the same action to add the same header parameter, which may affect browser response. Please consider the set operation first.</li>
 * @method string getHeaderName() Obtain HTTP header name. Up to 100 characters can be set.
 * @method void setHeaderName(string $HeaderName) Set HTTP header name. Up to 100 characters can be set.
 * @method string getHeaderValue() Obtain HTTP header value. Up to 1000 characters can be set.<li>Not required when Mode is del.</li> <li>Required when Mode is add/set.</li>
 * @method void setHeaderValue(string $HeaderValue) Set HTTP header value. Up to 1000 characters can be set.<li>Not required when Mode is del.</li> <li>Required when Mode is add/set.</li>
 * @method string getRuleType() Obtain Rule types:<li>all: Apply to all files.</li> <li>file: Apply to files with the specified suffixes.</li> <li>directory: Apply to specified paths.</li> <li>path: Apply to specified absolute paths.</li>
 * @method void setRuleType(string $RuleType) Set Rule types:<li>all: Apply to all files.</li> <li>file: Apply to files with the specified suffixes.</li> <li>directory: Apply to specified paths.</li> <li>path: Apply to specified absolute paths.</li>
 * @method array getRulePaths() Obtain Content for each RuleType:<li>For all, enter a wildcard *.</li> <li>For file, enter a suffix, e.g., jpg or txt.</li> <li>For directory, enter a path, e.g., /xxx/test/.</li> <li>For path, enter an absolute path, e.g., /xxx/test.html.</li>
 * @method void setRulePaths(array $RulePaths) Set Content for each RuleType:<li>For all, enter a wildcard *.</li> <li>For file, enter a suffix, e.g., jpg or txt.</li> <li>For directory, enter a path, e.g., /xxx/test/.</li> <li>For path, enter an absolute path, e.g., /xxx/test.html.</li>
 */
class HttpHeaderPathRule extends AbstractModel
{
    /**
     * @var string HTTP header setting methods: <li>set: sets a value for an existing header parameter, a new header parameter, or multiple header parameters. Multiple header parameters will be merged into one.</li> <li>del: deletes a header parameter.</li> <li>add: adds a header parameter. By default, you can repeat the same action to add the same header parameter, which may affect browser response. Please consider the set operation first.</li>
     */
    public $HeaderMode;

    /**
     * @var string HTTP header name. Up to 100 characters can be set.
     */
    public $HeaderName;

    /**
     * @var string HTTP header value. Up to 1000 characters can be set.<li>Not required when Mode is del.</li> <li>Required when Mode is add/set.</li>
     */
    public $HeaderValue;

    /**
     * @var string Rule types:<li>all: Apply to all files.</li> <li>file: Apply to files with the specified suffixes.</li> <li>directory: Apply to specified paths.</li> <li>path: Apply to specified absolute paths.</li>
     */
    public $RuleType;

    /**
     * @var array Content for each RuleType:<li>For all, enter a wildcard *.</li> <li>For file, enter a suffix, e.g., jpg or txt.</li> <li>For directory, enter a path, e.g., /xxx/test/.</li> <li>For path, enter an absolute path, e.g., /xxx/test.html.</li>
     */
    public $RulePaths;

    /**
     * @param string $HeaderMode HTTP header setting methods: <li>set: sets a value for an existing header parameter, a new header parameter, or multiple header parameters. Multiple header parameters will be merged into one.</li> <li>del: deletes a header parameter.</li> <li>add: adds a header parameter. By default, you can repeat the same action to add the same header parameter, which may affect browser response. Please consider the set operation first.</li>
     * @param string $HeaderName HTTP header name. Up to 100 characters can be set.
     * @param string $HeaderValue HTTP header value. Up to 1000 characters can be set.<li>Not required when Mode is del.</li> <li>Required when Mode is add/set.</li>
     * @param string $RuleType Rule types:<li>all: Apply to all files.</li> <li>file: Apply to files with the specified suffixes.</li> <li>directory: Apply to specified paths.</li> <li>path: Apply to specified absolute paths.</li>
     * @param array $RulePaths Content for each RuleType:<li>For all, enter a wildcard *.</li> <li>For file, enter a suffix, e.g., jpg or txt.</li> <li>For directory, enter a path, e.g., /xxx/test/.</li> <li>For path, enter an absolute path, e.g., /xxx/test.html.</li>
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
        if (array_key_exists("HeaderMode",$param) and $param["HeaderMode"] !== null) {
            $this->HeaderMode = $param["HeaderMode"];
        }

        if (array_key_exists("HeaderName",$param) and $param["HeaderName"] !== null) {
            $this->HeaderName = $param["HeaderName"];
        }

        if (array_key_exists("HeaderValue",$param) and $param["HeaderValue"] !== null) {
            $this->HeaderValue = $param["HeaderValue"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RulePaths",$param) and $param["RulePaths"] !== null) {
            $this->RulePaths = $param["RulePaths"];
        }
    }
}
