<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\ApiKeysService;

class Operation extends \Google\Model
{
  /** @var bool */
  public $done;
  /** @var Status */
  public $error;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var array[] */
  public $response;
  protected $errorType = Status::class;
  protected $errorDataType = '';
  /** @param bool */
  public function setDone($done)
  {
    $this->done = $done;
  }
  /** @return bool */
  public function getDone()
  {
    return $this->done;
  }
  /** @param Status */
  public function setError(Status $error)
  {
    $this->error = $error;
  }
  /** @return Status */
  public function getError()
  {
    return $this->error;
  }
  /** @param array[] */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return array[] */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param array[] */
  public function setResponse($response)
  {
    $this->response = $response;
  }
  /** @return array[] */
  public function getResponse()
  {
    return $this->response;
  }
}

class Status extends \Google\Collection
{
  /** @var int */
  public $code;
  /** @var array[] */
  public $details;
  /** @var string */
  public $message;
  protected $collection_key = 'details';
  /** @param int */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return int */
  public function getCode()
  {
    return $this->code;
  }
  /** @param array[] */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return array[] */
  public function getDetails()
  {
    return $this->details;
  }
  /** @param string */
  public function setMessage($message)
  {
    $this->message = $message;
  }
  /** @return string */
  public function getMessage()
  {
    return $this->message;
  }
}

class V2AndroidApplication extends \Google\Model
{
  /** @var string */
  public $packageName;
  /** @var string */
  public $sha1Fingerprint;

  /** @param string */
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
  }
  /** @param string */
  public function setSha1Fingerprint($sha1Fingerprint)
  {
    $this->sha1Fingerprint = $sha1Fingerprint;
  }
  /** @return string */
  public function getSha1Fingerprint()
  {
    return $this->sha1Fingerprint;
  }
}

class V2AndroidKeyRestrictions extends \Google\Collection
{
  /** @var V2AndroidApplication[] */
  public $allowedApplications;
  protected $collection_key = 'allowedApplications';
  protected $allowedApplicationsType = V2AndroidApplication::class;
  protected $allowedApplicationsDataType = 'array';
  /** @param V2AndroidApplication[] */
  public function setAllowedApplications($allowedApplications)
  {
    $this->allowedApplications = $allowedApplications;
  }
  /** @return V2AndroidApplication[] */
  public function getAllowedApplications()
  {
    return $this->allowedApplications;
  }
}

class V2ApiTarget extends \Google\Collection
{
  /** @var string[] */
  public $methods;
  /** @var string */
  public $service;
  protected $collection_key = 'methods';
  /** @param string[] */
  public function setMethods($methods)
  {
    $this->methods = $methods;
  }
  /** @return string[] */
  public function getMethods()
  {
    return $this->methods;
  }
  /** @param string */
  public function setService($service)
  {
    $this->service = $service;
  }
  /** @return string */
  public function getService()
  {
    return $this->service;
  }
}

class V2BrowserKeyRestrictions extends \Google\Collection
{
  /** @var string[] */
  public $allowedReferrers;
  protected $collection_key = 'allowedReferrers';
  /** @param string[] */
  public function setAllowedReferrers($allowedReferrers)
  {
    $this->allowedReferrers = $allowedReferrers;
  }
  /** @return string[] */
  public function getAllowedReferrers()
  {
    return $this->allowedReferrers;
  }
}

class V2GetKeyStringResponse extends \Google\Model
{
  /** @var string */
  public $keyString;

  /** @param string */
  public function setKeyString($keyString)
  {
    $this->keyString = $keyString;
  }
  /** @return string */
  public function getKeyString()
  {
    return $this->keyString;
  }
}

class V2IosKeyRestrictions extends \Google\Collection
{
  /** @var string[] */
  public $allowedBundleIds;
  protected $collection_key = 'allowedBundleIds';
  /** @param string[] */
  public function setAllowedBundleIds($allowedBundleIds)
  {
    $this->allowedBundleIds = $allowedBundleIds;
  }
  /** @return string[] */
  public function getAllowedBundleIds()
  {
    return $this->allowedBundleIds;
  }
}

class V2Key extends \Google\Model
{
  /** @var string[] */
  public $annotations;
  /** @var string */
  public $createTime;
  /** @var string */
  public $deleteTime;
  /** @var string */
  public $displayName;
  /** @var string */
  public $etag;
  /** @var string */
  public $keyString;
  /** @var string */
  public $name;
  /** @var V2Restrictions */
  public $restrictions;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $restrictionsType = V2Restrictions::class;
  protected $restrictionsDataType = '';
  /** @param string[] */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /** @return string[] */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /** @param string */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /** @return string */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /** @param string */
  public function setDeleteTime($deleteTime)
  {
    $this->deleteTime = $deleteTime;
  }
  /** @return string */
  public function getDeleteTime()
  {
    return $this->deleteTime;
  }
  /** @param string */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /** @return string */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /** @param string */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
  }
  /** @param string */
  public function setKeyString($keyString)
  {
    $this->keyString = $keyString;
  }
  /** @return string */
  public function getKeyString()
  {
    return $this->keyString;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param V2Restrictions */
  public function setRestrictions(V2Restrictions $restrictions)
  {
    $this->restrictions = $restrictions;
  }
  /** @return V2Restrictions */
  public function getRestrictions()
  {
    return $this->restrictions;
  }
  /** @param string */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /** @return string */
  public function getUid()
  {
    return $this->uid;
  }
  /** @param string */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

class V2ListKeysResponse extends \Google\Collection
{
  /** @var V2Key[] */
  public $keys;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'keys';
  protected $keysType = V2Key::class;
  protected $keysDataType = 'array';
  /** @param V2Key[] */
  public function setKeys($keys)
  {
    $this->keys = $keys;
  }
  /** @return V2Key[] */
  public function getKeys()
  {
    return $this->keys;
  }
  /** @param string */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /** @return string */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class V2LookupKeyResponse extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $parent;

  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param string */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
}

class V2Restrictions extends \Google\Collection
{
  /** @var V2AndroidKeyRestrictions */
  public $androidKeyRestrictions;
  /** @var V2ApiTarget[] */
  public $apiTargets;
  /** @var V2BrowserKeyRestrictions */
  public $browserKeyRestrictions;
  /** @var V2IosKeyRestrictions */
  public $iosKeyRestrictions;
  /** @var V2ServerKeyRestrictions */
  public $serverKeyRestrictions;
  protected $collection_key = 'apiTargets';
  protected $androidKeyRestrictionsType = V2AndroidKeyRestrictions::class;
  protected $androidKeyRestrictionsDataType = '';
  protected $apiTargetsType = V2ApiTarget::class;
  protected $apiTargetsDataType = 'array';
  protected $browserKeyRestrictionsType = V2BrowserKeyRestrictions::class;
  protected $browserKeyRestrictionsDataType = '';
  protected $iosKeyRestrictionsType = V2IosKeyRestrictions::class;
  protected $iosKeyRestrictionsDataType = '';
  protected $serverKeyRestrictionsType = V2ServerKeyRestrictions::class;
  protected $serverKeyRestrictionsDataType = '';
  /** @param V2AndroidKeyRestrictions */
  public function setAndroidKeyRestrictions(V2AndroidKeyRestrictions $androidKeyRestrictions)
  {
    $this->androidKeyRestrictions = $androidKeyRestrictions;
  }
  /** @return V2AndroidKeyRestrictions */
  public function getAndroidKeyRestrictions()
  {
    return $this->androidKeyRestrictions;
  }
  /** @param V2ApiTarget[] */
  public function setApiTargets($apiTargets)
  {
    $this->apiTargets = $apiTargets;
  }
  /** @return V2ApiTarget[] */
  public function getApiTargets()
  {
    return $this->apiTargets;
  }
  /** @param V2BrowserKeyRestrictions */
  public function setBrowserKeyRestrictions(V2BrowserKeyRestrictions $browserKeyRestrictions)
  {
    $this->browserKeyRestrictions = $browserKeyRestrictions;
  }
  /** @return V2BrowserKeyRestrictions */
  public function getBrowserKeyRestrictions()
  {
    return $this->browserKeyRestrictions;
  }
  /** @param V2IosKeyRestrictions */
  public function setIosKeyRestrictions(V2IosKeyRestrictions $iosKeyRestrictions)
  {
    $this->iosKeyRestrictions = $iosKeyRestrictions;
  }
  /** @return V2IosKeyRestrictions */
  public function getIosKeyRestrictions()
  {
    return $this->iosKeyRestrictions;
  }
  /** @param V2ServerKeyRestrictions */
  public function setServerKeyRestrictions(V2ServerKeyRestrictions $serverKeyRestrictions)
  {
    $this->serverKeyRestrictions = $serverKeyRestrictions;
  }
  /** @return V2ServerKeyRestrictions */
  public function getServerKeyRestrictions()
  {
    return $this->serverKeyRestrictions;
  }
}

class V2ServerKeyRestrictions extends \Google\Collection
{
  /** @var string[] */
  public $allowedIps;
  protected $collection_key = 'allowedIps';
  /** @param string[] */
  public function setAllowedIps($allowedIps)
  {
    $this->allowedIps = $allowedIps;
  }
  /** @return string[] */
  public function getAllowedIps()
  {
    return $this->allowedIps;
  }
}

class V2UndeleteKeyRequest extends \Google\Model
{
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Operation::class, 'Google_Service_ApiKeysService_Operation');
class_alias(Status::class, 'Google_Service_ApiKeysService_Status');
class_alias(V2AndroidApplication::class, 'Google_Service_ApiKeysService_V2AndroidApplication');
class_alias(V2AndroidKeyRestrictions::class, 'Google_Service_ApiKeysService_V2AndroidKeyRestrictions');
class_alias(V2ApiTarget::class, 'Google_Service_ApiKeysService_V2ApiTarget');
class_alias(V2BrowserKeyRestrictions::class, 'Google_Service_ApiKeysService_V2BrowserKeyRestrictions');
class_alias(V2GetKeyStringResponse::class, 'Google_Service_ApiKeysService_V2GetKeyStringResponse');
class_alias(V2IosKeyRestrictions::class, 'Google_Service_ApiKeysService_V2IosKeyRestrictions');
class_alias(V2Key::class, 'Google_Service_ApiKeysService_V2Key');
class_alias(V2ListKeysResponse::class, 'Google_Service_ApiKeysService_V2ListKeysResponse');
class_alias(V2LookupKeyResponse::class, 'Google_Service_ApiKeysService_V2LookupKeyResponse');
class_alias(V2Restrictions::class, 'Google_Service_ApiKeysService_V2Restrictions');
class_alias(V2ServerKeyRestrictions::class, 'Google_Service_ApiKeysService_V2ServerKeyRestrictions');
class_alias(V2UndeleteKeyRequest::class, 'Google_Service_ApiKeysService_V2UndeleteKeyRequest');
