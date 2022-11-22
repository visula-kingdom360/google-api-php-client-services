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

namespace Google\Service\Acceleratedmobilepageurl;

class AmpUrl extends \Google\Model
{
  /** @var string */
  public $ampUrl;
  /** @var string */
  public $cdnAmpUrl;
  /** @var string */
  public $originalUrl;

  /** @param string */
  public function setAmpUrl($ampUrl)
  {
    $this->ampUrl = $ampUrl;
  }
  /** @return string */
  public function getAmpUrl()
  {
    return $this->ampUrl;
  }
  /** @param string */
  public function setCdnAmpUrl($cdnAmpUrl)
  {
    $this->cdnAmpUrl = $cdnAmpUrl;
  }
  /** @return string */
  public function getCdnAmpUrl()
  {
    return $this->cdnAmpUrl;
  }
  /** @param string */
  public function setOriginalUrl($originalUrl)
  {
    $this->originalUrl = $originalUrl;
  }
  /** @return string */
  public function getOriginalUrl()
  {
    return $this->originalUrl;
  }
}

class AmpUrlError extends \Google\Model
{
  /** @var string */
  public $errorCode;
  /** @var string */
  public $errorMessage;
  /** @var string */
  public $originalUrl;

  /** @param string */
  public function setErrorCode($errorCode)
  {
    $this->errorCode = $errorCode;
  }
  /** @return string */
  public function getErrorCode()
  {
    return $this->errorCode;
  }
  /** @param string */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /** @return string */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /** @param string */
  public function setOriginalUrl($originalUrl)
  {
    $this->originalUrl = $originalUrl;
  }
  /** @return string */
  public function getOriginalUrl()
  {
    return $this->originalUrl;
  }
}

class BatchGetAmpUrlsRequest extends \Google\Collection
{
  /** @var string */
  public $lookupStrategy;
  /** @var string[] */
  public $urls;
  protected $collection_key = 'urls';
  /** @param string */
  public function setLookupStrategy($lookupStrategy)
  {
    $this->lookupStrategy = $lookupStrategy;
  }
  /** @return string */
  public function getLookupStrategy()
  {
    return $this->lookupStrategy;
  }
  /** @param string[] */
  public function setUrls($urls)
  {
    $this->urls = $urls;
  }
  /** @return string[] */
  public function getUrls()
  {
    return $this->urls;
  }
}

class BatchGetAmpUrlsResponse extends \Google\Collection
{
  /** @var AmpUrl[] */
  public $ampUrls;
  /** @var AmpUrlError[] */
  public $urlErrors;
  protected $collection_key = 'urlErrors';
  protected $ampUrlsType = AmpUrl::class;
  protected $ampUrlsDataType = 'array';
  protected $urlErrorsType = AmpUrlError::class;
  protected $urlErrorsDataType = 'array';
  /** @param AmpUrl[] */
  public function setAmpUrls($ampUrls)
  {
    $this->ampUrls = $ampUrls;
  }
  /** @return AmpUrl[] */
  public function getAmpUrls()
  {
    return $this->ampUrls;
  }
  /** @param AmpUrlError[] */
  public function setUrlErrors($urlErrors)
  {
    $this->urlErrors = $urlErrors;
  }
  /** @return AmpUrlError[] */
  public function getUrlErrors()
  {
    return $this->urlErrors;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AmpUrl::class, 'Google_Service_Acceleratedmobilepageurl_AmpUrl');
class_alias(AmpUrlError::class, 'Google_Service_Acceleratedmobilepageurl_AmpUrlError');
class_alias(BatchGetAmpUrlsRequest::class, 'Google_Service_Acceleratedmobilepageurl_BatchGetAmpUrlsRequest');
class_alias(BatchGetAmpUrlsResponse::class, 'Google_Service_Acceleratedmobilepageurl_BatchGetAmpUrlsResponse');
