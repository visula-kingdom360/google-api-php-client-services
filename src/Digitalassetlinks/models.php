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

namespace Google\Service\Digitalassetlinks;

class AndroidAppAsset extends \Google\Model
{
  /** @var CertificateInfo */
  public $certificate;
  /** @var string */
  public $packageName;
  protected $certificateType = CertificateInfo::class;
  protected $certificateDataType = '';
  /** @param CertificateInfo */
  public function setCertificate(CertificateInfo $certificate)
  {
    $this->certificate = $certificate;
  }
  /** @return CertificateInfo */
  public function getCertificate()
  {
    return $this->certificate;
  }
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
}

class Asset extends \Google\Model
{
  /** @var AndroidAppAsset */
  public $androidApp;
  /** @var WebAsset */
  public $web;
  protected $androidAppType = AndroidAppAsset::class;
  protected $androidAppDataType = '';
  protected $webType = WebAsset::class;
  protected $webDataType = '';
  /** @param AndroidAppAsset */
  public function setAndroidApp(AndroidAppAsset $androidApp)
  {
    $this->androidApp = $androidApp;
  }
  /** @return AndroidAppAsset */
  public function getAndroidApp()
  {
    return $this->androidApp;
  }
  /** @param WebAsset */
  public function setWeb(WebAsset $web)
  {
    $this->web = $web;
  }
  /** @return WebAsset */
  public function getWeb()
  {
    return $this->web;
  }
}

class BulkCheckRequest extends \Google\Collection
{
  /** @var bool */
  public $allowGoogleInternalDataSources;
  /** @var string */
  public $defaultRelation;
  /** @var Asset */
  public $defaultSource;
  /** @var Asset */
  public $defaultTarget;
  /** @var bool */
  public $skipCacheLookup;
  /** @var StatementTemplate[] */
  public $statements;
  protected $collection_key = 'statements';
  protected $defaultSourceType = Asset::class;
  protected $defaultSourceDataType = '';
  protected $defaultTargetType = Asset::class;
  protected $defaultTargetDataType = '';
  protected $statementsType = StatementTemplate::class;
  protected $statementsDataType = 'array';
  /** @param bool */
  public function setAllowGoogleInternalDataSources($allowGoogleInternalDataSources)
  {
    $this->allowGoogleInternalDataSources = $allowGoogleInternalDataSources;
  }
  /** @return bool */
  public function getAllowGoogleInternalDataSources()
  {
    return $this->allowGoogleInternalDataSources;
  }
  /** @param string */
  public function setDefaultRelation($defaultRelation)
  {
    $this->defaultRelation = $defaultRelation;
  }
  /** @return string */
  public function getDefaultRelation()
  {
    return $this->defaultRelation;
  }
  /** @param Asset */
  public function setDefaultSource(Asset $defaultSource)
  {
    $this->defaultSource = $defaultSource;
  }
  /** @return Asset */
  public function getDefaultSource()
  {
    return $this->defaultSource;
  }
  /** @param Asset */
  public function setDefaultTarget(Asset $defaultTarget)
  {
    $this->defaultTarget = $defaultTarget;
  }
  /** @return Asset */
  public function getDefaultTarget()
  {
    return $this->defaultTarget;
  }
  /** @param bool */
  public function setSkipCacheLookup($skipCacheLookup)
  {
    $this->skipCacheLookup = $skipCacheLookup;
  }
  /** @return bool */
  public function getSkipCacheLookup()
  {
    return $this->skipCacheLookup;
  }
  /** @param StatementTemplate[] */
  public function setStatements($statements)
  {
    $this->statements = $statements;
  }
  /** @return StatementTemplate[] */
  public function getStatements()
  {
    return $this->statements;
  }
}

class BulkCheckResponse extends \Google\Collection
{
  /** @var string */
  public $bulkErrorCode;
  /** @var CheckResponse[] */
  public $checkResults;
  protected $collection_key = 'checkResults';
  protected $checkResultsType = CheckResponse::class;
  protected $checkResultsDataType = 'array';
  /** @param string */
  public function setBulkErrorCode($bulkErrorCode)
  {
    $this->bulkErrorCode = $bulkErrorCode;
  }
  /** @return string */
  public function getBulkErrorCode()
  {
    return $this->bulkErrorCode;
  }
  /** @param CheckResponse[] */
  public function setCheckResults($checkResults)
  {
    $this->checkResults = $checkResults;
  }
  /** @return CheckResponse[] */
  public function getCheckResults()
  {
    return $this->checkResults;
  }
}

class CertificateInfo extends \Google\Model
{
  /** @var string */
  public $sha256Fingerprint;

  /** @param string */
  public function setSha256Fingerprint($sha256Fingerprint)
  {
    $this->sha256Fingerprint = $sha256Fingerprint;
  }
  /** @return string */
  public function getSha256Fingerprint()
  {
    return $this->sha256Fingerprint;
  }
}

class CheckResponse extends \Google\Collection
{
  /** @var string */
  public $debugString;
  /** @var string[] */
  public $errorCode;
  /** @var bool */
  public $linked;
  /** @var string */
  public $maxAge;
  protected $collection_key = 'errorCode';
  /** @param string */
  public function setDebugString($debugString)
  {
    $this->debugString = $debugString;
  }
  /** @return string */
  public function getDebugString()
  {
    return $this->debugString;
  }
  /** @param string[] */
  public function setErrorCode($errorCode)
  {
    $this->errorCode = $errorCode;
  }
  /** @return string[] */
  public function getErrorCode()
  {
    return $this->errorCode;
  }
  /** @param bool */
  public function setLinked($linked)
  {
    $this->linked = $linked;
  }
  /** @return bool */
  public function getLinked()
  {
    return $this->linked;
  }
  /** @param string */
  public function setMaxAge($maxAge)
  {
    $this->maxAge = $maxAge;
  }
  /** @return string */
  public function getMaxAge()
  {
    return $this->maxAge;
  }
}

class ListResponse extends \Google\Collection
{
  /** @var string */
  public $debugString;
  /** @var string[] */
  public $errorCode;
  /** @var string */
  public $maxAge;
  /** @var Statement[] */
  public $statements;
  protected $collection_key = 'statements';
  protected $statementsType = Statement::class;
  protected $statementsDataType = 'array';
  /** @param string */
  public function setDebugString($debugString)
  {
    $this->debugString = $debugString;
  }
  /** @return string */
  public function getDebugString()
  {
    return $this->debugString;
  }
  /** @param string[] */
  public function setErrorCode($errorCode)
  {
    $this->errorCode = $errorCode;
  }
  /** @return string[] */
  public function getErrorCode()
  {
    return $this->errorCode;
  }
  /** @param string */
  public function setMaxAge($maxAge)
  {
    $this->maxAge = $maxAge;
  }
  /** @return string */
  public function getMaxAge()
  {
    return $this->maxAge;
  }
  /** @param Statement[] */
  public function setStatements($statements)
  {
    $this->statements = $statements;
  }
  /** @return Statement[] */
  public function getStatements()
  {
    return $this->statements;
  }
}

class Statement extends \Google\Model
{
  /** @var string */
  public $relation;
  /** @var Asset */
  public $source;
  /** @var Asset */
  public $target;
  protected $sourceType = Asset::class;
  protected $sourceDataType = '';
  protected $targetType = Asset::class;
  protected $targetDataType = '';
  /** @param string */
  public function setRelation($relation)
  {
    $this->relation = $relation;
  }
  /** @return string */
  public function getRelation()
  {
    return $this->relation;
  }
  /** @param Asset */
  public function setSource(Asset $source)
  {
    $this->source = $source;
  }
  /** @return Asset */
  public function getSource()
  {
    return $this->source;
  }
  /** @param Asset */
  public function setTarget(Asset $target)
  {
    $this->target = $target;
  }
  /** @return Asset */
  public function getTarget()
  {
    return $this->target;
  }
}

class StatementTemplate extends \Google\Model
{
  /** @var string */
  public $relation;
  /** @var Asset */
  public $source;
  /** @var Asset */
  public $target;
  protected $sourceType = Asset::class;
  protected $sourceDataType = '';
  protected $targetType = Asset::class;
  protected $targetDataType = '';
  /** @param string */
  public function setRelation($relation)
  {
    $this->relation = $relation;
  }
  /** @return string */
  public function getRelation()
  {
    return $this->relation;
  }
  /** @param Asset */
  public function setSource(Asset $source)
  {
    $this->source = $source;
  }
  /** @return Asset */
  public function getSource()
  {
    return $this->source;
  }
  /** @param Asset */
  public function setTarget(Asset $target)
  {
    $this->target = $target;
  }
  /** @return Asset */
  public function getTarget()
  {
    return $this->target;
  }
}

class WebAsset extends \Google\Model
{
  /** @var string */
  public $site;

  /** @param string */
  public function setSite($site)
  {
    $this->site = $site;
  }
  /** @return string */
  public function getSite()
  {
    return $this->site;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AndroidAppAsset::class, 'Google_Service_Digitalassetlinks_AndroidAppAsset');
class_alias(Asset::class, 'Google_Service_Digitalassetlinks_Asset');
class_alias(BulkCheckRequest::class, 'Google_Service_Digitalassetlinks_BulkCheckRequest');
class_alias(BulkCheckResponse::class, 'Google_Service_Digitalassetlinks_BulkCheckResponse');
class_alias(CertificateInfo::class, 'Google_Service_Digitalassetlinks_CertificateInfo');
class_alias(CheckResponse::class, 'Google_Service_Digitalassetlinks_CheckResponse');
class_alias(ListResponse::class, 'Google_Service_Digitalassetlinks_ListResponse');
class_alias(Statement::class, 'Google_Service_Digitalassetlinks_Statement');
class_alias(StatementTemplate::class, 'Google_Service_Digitalassetlinks_StatementTemplate');
class_alias(WebAsset::class, 'Google_Service_Digitalassetlinks_WebAsset');
