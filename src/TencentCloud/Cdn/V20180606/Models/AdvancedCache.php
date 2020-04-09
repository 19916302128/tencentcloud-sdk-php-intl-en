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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Advanced cache expiration configuration (This feature is in beta and not generally available yet.)
Note: this version does not support setting homepage cache rules.
 *
 * @method array getCacheRules() Obtain Cache expiration rule
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCacheRules(array $CacheRules) Set Cache expiration rule
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIgnoreCacheControl() Obtain Forced cache configuration
on: enabled
off: disabled
When this is enabled, if the origin server returns no-cache, no-store headers, node caching will still be performed according to the cache expiration rules.
This is disabled by default
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIgnoreCacheControl(string $IgnoreCacheControl) Set Forced cache configuration
on: enabled
off: disabled
When this is enabled, if the origin server returns no-cache, no-store headers, node caching will still be performed according to the cache expiration rules.
This is disabled by default
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIgnoreSetCookie() Obtain Ignore the Set-Cookie header of an origin server
on: enabled
off: disabled
This is disabled by default
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIgnoreSetCookie(string $IgnoreSetCookie) Set Ignore the Set-Cookie header of an origin server
on: enabled
off: disabled
This is disabled by default
Note: this field may return null, indicating that no valid values can be obtained.
 */
class AdvancedCache extends AbstractModel
{
    /**
     * @var array Cache expiration rule
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CacheRules;

    /**
     * @var string Forced cache configuration
on: enabled
off: disabled
When this is enabled, if the origin server returns no-cache, no-store headers, node caching will still be performed according to the cache expiration rules.
This is disabled by default
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IgnoreCacheControl;

    /**
     * @var string Ignore the Set-Cookie header of an origin server
on: enabled
off: disabled
This is disabled by default
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IgnoreSetCookie;

    /**
     * @param array $CacheRules Cache expiration rule
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $IgnoreCacheControl Forced cache configuration
on: enabled
off: disabled
When this is enabled, if the origin server returns no-cache, no-store headers, node caching will still be performed according to the cache expiration rules.
This is disabled by default
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $IgnoreSetCookie Ignore the Set-Cookie header of an origin server
on: enabled
off: disabled
This is disabled by default
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("CacheRules",$param) and $param["CacheRules"] !== null) {
            $this->CacheRules = [];
            foreach ($param["CacheRules"] as $key => $value){
                $obj = new AdvanceCacheRule();
                $obj->deserialize($value);
                array_push($this->CacheRules, $obj);
            }
        }

        if (array_key_exists("IgnoreCacheControl",$param) and $param["IgnoreCacheControl"] !== null) {
            $this->IgnoreCacheControl = $param["IgnoreCacheControl"];
        }

        if (array_key_exists("IgnoreSetCookie",$param) and $param["IgnoreSetCookie"] !== null) {
            $this->IgnoreSetCookie = $param["IgnoreSetCookie"];
        }
    }
}
