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

namespace Google\Service\DomainsRDAP;

class HttpBody extends \Google\Collection
{
  /** @var string */
  public $contentType;
  /** @var string */
  public $data;
  /** @var array[] */
  public $extensions;
  protected $collection_key = 'extensions';
  /** @param string */
  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }
  /** @return string */
  public function getContentType()
  {
    return $this->contentType;
  }
  /** @param string */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string */
  public function getData()
  {
    return $this->data;
  }
  /** @param array[] */
  public function setExtensions($extensions)
  {
    $this->extensions = $extensions;
  }
  /** @return array[] */
  public function getExtensions()
  {
    return $this->extensions;
  }
}

class Link extends \Google\Model
{
  /** @var string */
  public $href;
  /** @var string */
  public $hreflang;
  /** @var string */
  public $media;
  /** @var string */
  public $rel;
  /** @var string */
  public $title;
  /** @var string */
  public $type;
  /** @var string */
  public $value;

  /** @param string */
  public function setHref($href)
  {
    $this->href = $href;
  }
  /** @return string */
  public function getHref()
  {
    return $this->href;
  }
  /** @param string */
  public function setHreflang($hreflang)
  {
    $this->hreflang = $hreflang;
  }
  /** @return string */
  public function getHreflang()
  {
    return $this->hreflang;
  }
  /** @param string */
  public function setMedia($media)
  {
    $this->media = $media;
  }
  /** @return string */
  public function getMedia()
  {
    return $this->media;
  }
  /** @param string */
  public function setRel($rel)
  {
    $this->rel = $rel;
  }
  /** @return string */
  public function getRel()
  {
    return $this->rel;
  }
  /** @param string */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /** @return string */
  public function getTitle()
  {
    return $this->title;
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
  /** @param string */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class Notice extends \Google\Collection
{
  /** @var string[] */
  public $description;
  /** @var Link[] */
  public $links;
  /** @var string */
  public $title;
  /** @var string */
  public $type;
  protected $collection_key = 'links';
  protected $linksType = Link::class;
  protected $linksDataType = 'array';
  /** @param string[] */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string[] */
  public function getDescription()
  {
    return $this->description;
  }
  /** @param Link[] */
  public function setLinks($links)
  {
    $this->links = $links;
  }
  /** @return Link[] */
  public function getLinks()
  {
    return $this->links;
  }
  /** @param string */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /** @return string */
  public function getTitle()
  {
    return $this->title;
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

class RdapResponse extends \Google\Collection
{
  /** @var string[] */
  public $description;
  /** @var int */
  public $errorCode;
  /** @var HttpBody */
  public $jsonResponse;
  /** @var string */
  public $lang;
  /** @var Notice[] */
  public $notices;
  /** @var string[] */
  public $rdapConformance;
  /** @var string */
  public $title;
  protected $collection_key = 'rdapConformance';
  protected $jsonResponseType = HttpBody::class;
  protected $jsonResponseDataType = '';
  protected $noticesType = Notice::class;
  protected $noticesDataType = 'array';
  /** @param string[] */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string[] */
  public function getDescription()
  {
    return $this->description;
  }
  /** @param int */
  public function setErrorCode($errorCode)
  {
    $this->errorCode = $errorCode;
  }
  /** @return int */
  public function getErrorCode()
  {
    return $this->errorCode;
  }
  /** @param HttpBody */
  public function setJsonResponse(HttpBody $jsonResponse)
  {
    $this->jsonResponse = $jsonResponse;
  }
  /** @return HttpBody */
  public function getJsonResponse()
  {
    return $this->jsonResponse;
  }
  /** @param string */
  public function setLang($lang)
  {
    $this->lang = $lang;
  }
  /** @return string */
  public function getLang()
  {
    return $this->lang;
  }
  /** @param Notice[] */
  public function setNotices($notices)
  {
    $this->notices = $notices;
  }
  /** @return Notice[] */
  public function getNotices()
  {
    return $this->notices;
  }
  /** @param string[] */
  public function setRdapConformance($rdapConformance)
  {
    $this->rdapConformance = $rdapConformance;
  }
  /** @return string[] */
  public function getRdapConformance()
  {
    return $this->rdapConformance;
  }
  /** @param string */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /** @return string */
  public function getTitle()
  {
    return $this->title;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HttpBody::class, 'Google_Service_DomainsRDAP_HttpBody');
class_alias(Link::class, 'Google_Service_DomainsRDAP_Link');
class_alias(Notice::class, 'Google_Service_DomainsRDAP_Notice');
class_alias(RdapResponse::class, 'Google_Service_DomainsRDAP_RdapResponse');
