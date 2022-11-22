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

namespace Google\Service\SiteVerification;

class SiteVerificationWebResourceGettokenRequest extends \Google\Model
{
  /** @var SiteVerificationWebResourceGettokenRequestSite */
  public $site;
  /** @var string */
  public $verificationMethod;
  protected $siteType = SiteVerificationWebResourceGettokenRequestSite::class;
  protected $siteDataType = '';
  /** @param SiteVerificationWebResourceGettokenRequestSite */
  public function setSite(SiteVerificationWebResourceGettokenRequestSite $site)
  {
    $this->site = $site;
  }
  /** @return SiteVerificationWebResourceGettokenRequestSite */
  public function getSite()
  {
    return $this->site;
  }
  /** @param string */
  public function setVerificationMethod($verificationMethod)
  {
    $this->verificationMethod = $verificationMethod;
  }
  /** @return string */
  public function getVerificationMethod()
  {
    return $this->verificationMethod;
  }
}

class SiteVerificationWebResourceGettokenRequestSite extends \Google\Model
{
  /** @var string */
  public $identifier;
  /** @var string */
  public $type;

  /** @param string */
  public function setIdentifier($identifier)
  {
    $this->identifier = $identifier;
  }
  /** @return string */
  public function getIdentifier()
  {
    return $this->identifier;
  }
  /** @param string */
  public function setType($type)
  {
    $this->type = $type;
  }
  /** @return string */
  public function getType()
  {
    return $this->type;
  }
}

class SiteVerificationWebResourceGettokenResponse extends \Google\Model
{
  /** @var string */
  public $method;
  /** @var string */
  public $token;

  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
  /** @param string */
  public function setToken($token)
  {
    $this->token = $token;
  }
  /** @return string */
  public function getToken()
  {
    return $this->token;
  }
}

class SiteVerificationWebResourceListResponse extends \Google\Collection
{
  /** @var SiteVerificationWebResourceResource[] */
  public $items;
  protected $collection_key = 'items';
  protected $itemsType = SiteVerificationWebResourceResource::class;
  protected $itemsDataType = 'array';
  /** @param SiteVerificationWebResourceResource[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return SiteVerificationWebResourceResource[] */
  public function getItems()
  {
    return $this->items;
  }
}

class SiteVerificationWebResourceResource extends \Google\Collection
{
  /** @var string */
  public $id;
  /** @var string[] */
  public $owners;
  /** @var SiteVerificationWebResourceResourceSite */
  public $site;
  protected $collection_key = 'owners';
  protected $siteType = SiteVerificationWebResourceResourceSite::class;
  protected $siteDataType = '';
  /** @param string */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param string[] */
  public function setOwners($owners)
  {
    $this->owners = $owners;
  }
  /** @return string[] */
  public function getOwners()
  {
    return $this->owners;
  }
  /** @param SiteVerificationWebResourceResourceSite */
  public function setSite(SiteVerificationWebResourceResourceSite $site)
  {
    $this->site = $site;
  }
  /** @return SiteVerificationWebResourceResourceSite */
  public function getSite()
  {
    return $this->site;
  }
}

class SiteVerificationWebResourceResourceSite extends \Google\Model
{
  /** @var string */
  public $identifier;
  /** @var string */
  public $type;

  /** @param string */
  public function setIdentifier($identifier)
  {
    $this->identifier = $identifier;
  }
  /** @return string */
  public function getIdentifier()
  {
    return $this->identifier;
  }
  /** @param string */
  public function setType($type)
  {
    $this->type = $type;
  }
  /** @return string */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SiteVerificationWebResourceGettokenRequest::class, 'Google_Service_SiteVerification_SiteVerificationWebResourceGettokenRequest');
class_alias(SiteVerificationWebResourceGettokenRequestSite::class, 'Google_Service_SiteVerification_SiteVerificationWebResourceGettokenRequestSite');
class_alias(SiteVerificationWebResourceGettokenResponse::class, 'Google_Service_SiteVerification_SiteVerificationWebResourceGettokenResponse');
class_alias(SiteVerificationWebResourceListResponse::class, 'Google_Service_SiteVerification_SiteVerificationWebResourceListResponse');
class_alias(SiteVerificationWebResourceResource::class, 'Google_Service_SiteVerification_SiteVerificationWebResourceResource');
class_alias(SiteVerificationWebResourceResourceSite::class, 'Google_Service_SiteVerification_SiteVerificationWebResourceResourceSite');
