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

namespace Google\Service\PostmasterTools;

class DeliveryError extends \Google\Model
{
  /** @var string */
  public $errorClass;
  public $errorRatio;
  /** @var string */
  public $errorType;

  /** @param string */
  public function setErrorClass($errorClass)
  {
    $this->errorClass = $errorClass;
  }
  /** @return string */
  public function getErrorClass()
  {
    return $this->errorClass;
  }
  public function setErrorRatio($errorRatio)
  {
    $this->errorRatio = $errorRatio;
  }
  public function getErrorRatio()
  {
    return $this->errorRatio;
  }
  /** @param string */
  public function setErrorType($errorType)
  {
    $this->errorType = $errorType;
  }
  /** @return string */
  public function getErrorType()
  {
    return $this->errorType;
  }
}

class Domain extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $name;
  /** @var string */
  public $permission;

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
  public function setPermission($permission)
  {
    $this->permission = $permission;
  }
  /** @return string */
  public function getPermission()
  {
    return $this->permission;
  }
}

class FeedbackLoop extends \Google\Model
{
  /** @var string */
  public $id;
  public $spamRatio;

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
  public function setSpamRatio($spamRatio)
  {
    $this->spamRatio = $spamRatio;
  }
  public function getSpamRatio()
  {
    return $this->spamRatio;
  }
}

class IpReputation extends \Google\Collection
{
  /** @var string */
  public $ipCount;
  /** @var string */
  public $reputation;
  /** @var string[] */
  public $sampleIps;
  protected $collection_key = 'sampleIps';
  /** @param string */
  public function setIpCount($ipCount)
  {
    $this->ipCount = $ipCount;
  }
  /** @return string */
  public function getIpCount()
  {
    return $this->ipCount;
  }
  /** @param string */
  public function setReputation($reputation)
  {
    $this->reputation = $reputation;
  }
  /** @return string */
  public function getReputation()
  {
    return $this->reputation;
  }
  /** @param string[] */
  public function setSampleIps($sampleIps)
  {
    $this->sampleIps = $sampleIps;
  }
  /** @return string[] */
  public function getSampleIps()
  {
    return $this->sampleIps;
  }
}

class ListDomainsResponse extends \Google\Collection
{
  /** @var Domain[] */
  public $domains;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'domains';
  protected $domainsType = Domain::class;
  protected $domainsDataType = 'array';
  /** @param Domain[] */
  public function setDomains($domains)
  {
    $this->domains = $domains;
  }
  /** @return Domain[] */
  public function getDomains()
  {
    return $this->domains;
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

class ListTrafficStatsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var TrafficStats[] */
  public $trafficStats;
  protected $collection_key = 'trafficStats';
  protected $trafficStatsType = TrafficStats::class;
  protected $trafficStatsDataType = 'array';
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
  /** @param TrafficStats[] */
  public function setTrafficStats($trafficStats)
  {
    $this->trafficStats = $trafficStats;
  }
  /** @return TrafficStats[] */
  public function getTrafficStats()
  {
    return $this->trafficStats;
  }
}

class TrafficStats extends \Google\Collection
{
  /** @var DeliveryError[] */
  public $deliveryErrors;
  public $dkimSuccessRatio;
  public $dmarcSuccessRatio;
  /** @var string */
  public $domainReputation;
  public $inboundEncryptionRatio;
  /** @var IpReputation[] */
  public $ipReputations;
  /** @var string */
  public $name;
  public $outboundEncryptionRatio;
  /** @var FeedbackLoop[] */
  public $spammyFeedbackLoops;
  public $spfSuccessRatio;
  public $userReportedSpamRatio;
  protected $collection_key = 'spammyFeedbackLoops';
  protected $deliveryErrorsType = DeliveryError::class;
  protected $deliveryErrorsDataType = 'array';
  protected $ipReputationsType = IpReputation::class;
  protected $ipReputationsDataType = 'array';
  protected $spammyFeedbackLoopsType = FeedbackLoop::class;
  protected $spammyFeedbackLoopsDataType = 'array';
  /** @param DeliveryError[] */
  public function setDeliveryErrors($deliveryErrors)
  {
    $this->deliveryErrors = $deliveryErrors;
  }
  /** @return DeliveryError[] */
  public function getDeliveryErrors()
  {
    return $this->deliveryErrors;
  }
  public function setDkimSuccessRatio($dkimSuccessRatio)
  {
    $this->dkimSuccessRatio = $dkimSuccessRatio;
  }
  public function getDkimSuccessRatio()
  {
    return $this->dkimSuccessRatio;
  }
  public function setDmarcSuccessRatio($dmarcSuccessRatio)
  {
    $this->dmarcSuccessRatio = $dmarcSuccessRatio;
  }
  public function getDmarcSuccessRatio()
  {
    return $this->dmarcSuccessRatio;
  }
  /** @param string */
  public function setDomainReputation($domainReputation)
  {
    $this->domainReputation = $domainReputation;
  }
  /** @return string */
  public function getDomainReputation()
  {
    return $this->domainReputation;
  }
  public function setInboundEncryptionRatio($inboundEncryptionRatio)
  {
    $this->inboundEncryptionRatio = $inboundEncryptionRatio;
  }
  public function getInboundEncryptionRatio()
  {
    return $this->inboundEncryptionRatio;
  }
  /** @param IpReputation[] */
  public function setIpReputations($ipReputations)
  {
    $this->ipReputations = $ipReputations;
  }
  /** @return IpReputation[] */
  public function getIpReputations()
  {
    return $this->ipReputations;
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
  public function setOutboundEncryptionRatio($outboundEncryptionRatio)
  {
    $this->outboundEncryptionRatio = $outboundEncryptionRatio;
  }
  public function getOutboundEncryptionRatio()
  {
    return $this->outboundEncryptionRatio;
  }
  /** @param FeedbackLoop[] */
  public function setSpammyFeedbackLoops($spammyFeedbackLoops)
  {
    $this->spammyFeedbackLoops = $spammyFeedbackLoops;
  }
  /** @return FeedbackLoop[] */
  public function getSpammyFeedbackLoops()
  {
    return $this->spammyFeedbackLoops;
  }
  public function setSpfSuccessRatio($spfSuccessRatio)
  {
    $this->spfSuccessRatio = $spfSuccessRatio;
  }
  public function getSpfSuccessRatio()
  {
    return $this->spfSuccessRatio;
  }
  public function setUserReportedSpamRatio($userReportedSpamRatio)
  {
    $this->userReportedSpamRatio = $userReportedSpamRatio;
  }
  public function getUserReportedSpamRatio()
  {
    return $this->userReportedSpamRatio;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeliveryError::class, 'Google_Service_PostmasterTools_DeliveryError');
class_alias(Domain::class, 'Google_Service_PostmasterTools_Domain');
class_alias(FeedbackLoop::class, 'Google_Service_PostmasterTools_FeedbackLoop');
class_alias(IpReputation::class, 'Google_Service_PostmasterTools_IpReputation');
class_alias(ListDomainsResponse::class, 'Google_Service_PostmasterTools_ListDomainsResponse');
class_alias(ListTrafficStatsResponse::class, 'Google_Service_PostmasterTools_ListTrafficStatsResponse');
class_alias(TrafficStats::class, 'Google_Service_PostmasterTools_TrafficStats');
