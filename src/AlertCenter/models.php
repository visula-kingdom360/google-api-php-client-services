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

namespace Google\Service\AlertCenter;

class AbuseDetected extends \Google\Model
{
  /** @var EntityList */
  public $additionalDetails;
  /** @var string */
  public $alertDescriptor;
  /** @var string */
  public $nextSteps;
  /** @var string */
  public $product;
  /** @var string */
  public $subAlertId;
  /** @var string */
  public $summary;
  protected $additionalDetailsType = EntityList::class;
  protected $additionalDetailsDataType = '';
  /** @param EntityList */
  public function setAdditionalDetails(EntityList $additionalDetails)
  {
    $this->additionalDetails = $additionalDetails;
  }
  /** @return EntityList */
  public function getAdditionalDetails()
  {
    return $this->additionalDetails;
  }
  /** @param string */
  public function setAlertDescriptor($alertDescriptor)
  {
    $this->alertDescriptor = $alertDescriptor;
  }
  /** @return string */
  public function getAlertDescriptor()
  {
    return $this->alertDescriptor;
  }
  /** @param string */
  public function setNextSteps($nextSteps)
  {
    $this->nextSteps = $nextSteps;
  }
  /** @return string */
  public function getNextSteps()
  {
    return $this->nextSteps;
  }
  /** @param string */
  public function setProduct($product)
  {
    $this->product = $product;
  }
  /** @return string */
  public function getProduct()
  {
    return $this->product;
  }
  /** @param string */
  public function setSubAlertId($subAlertId)
  {
    $this->subAlertId = $subAlertId;
  }
  /** @return string */
  public function getSubAlertId()
  {
    return $this->subAlertId;
  }
  /** @param string */
  public function setSummary($summary)
  {
    $this->summary = $summary;
  }
  /** @return string */
  public function getSummary()
  {
    return $this->summary;
  }
}

class AccountSuspensionDetails extends \Google\Model
{
  /** @var string */
  public $abuseReason;
  /** @var string */
  public $productName;

  /** @param string */
  public function setAbuseReason($abuseReason)
  {
    $this->abuseReason = $abuseReason;
  }
  /** @return string */
  public function getAbuseReason()
  {
    return $this->abuseReason;
  }
  /** @param string */
  public function setProductName($productName)
  {
    $this->productName = $productName;
  }
  /** @return string */
  public function getProductName()
  {
    return $this->productName;
  }
}

class AccountSuspensionWarning extends \Google\Collection
{
  /** @var string */
  public $appealWindow;
  /** @var string */
  public $state;
  /** @var AccountSuspensionDetails[] */
  public $suspensionDetails;
  protected $collection_key = 'suspensionDetails';
  protected $suspensionDetailsType = AccountSuspensionDetails::class;
  protected $suspensionDetailsDataType = 'array';
  /** @param string */
  public function setAppealWindow($appealWindow)
  {
    $this->appealWindow = $appealWindow;
  }
  /** @return string */
  public function getAppealWindow()
  {
    return $this->appealWindow;
  }
  /** @param string */
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
  }
  /** @param AccountSuspensionDetails[] */
  public function setSuspensionDetails($suspensionDetails)
  {
    $this->suspensionDetails = $suspensionDetails;
  }
  /** @return AccountSuspensionDetails[] */
  public function getSuspensionDetails()
  {
    return $this->suspensionDetails;
  }
}

class AccountWarning extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var LoginDetails */
  public $loginDetails;
  protected $loginDetailsType = LoginDetails::class;
  protected $loginDetailsDataType = '';
  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param LoginDetails */
  public function setLoginDetails(LoginDetails $loginDetails)
  {
    $this->loginDetails = $loginDetails;
  }
  /** @return LoginDetails */
  public function getLoginDetails()
  {
    return $this->loginDetails;
  }
}

class ActionInfo extends \Google\Model
{
}

class ActivityRule extends \Google\Collection
{
  /** @var string[] */
  public $actionNames;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $query;
  /** @var string[] */
  public $supersededAlerts;
  /** @var string */
  public $supersedingAlert;
  /** @var string */
  public $threshold;
  /** @var string */
  public $triggerSource;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $windowSize;
  protected $collection_key = 'supersededAlerts';
  /** @param string[] */
  public function setActionNames($actionNames)
  {
    $this->actionNames = $actionNames;
  }
  /** @return string[] */
  public function getActionNames()
  {
    return $this->actionNames;
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
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string */
  public function getDescription()
  {
    return $this->description;
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
  public function setQuery($query)
  {
    $this->query = $query;
  }
  /** @return string */
  public function getQuery()
  {
    return $this->query;
  }
  /** @param string[] */
  public function setSupersededAlerts($supersededAlerts)
  {
    $this->supersededAlerts = $supersededAlerts;
  }
  /** @return string[] */
  public function getSupersededAlerts()
  {
    return $this->supersededAlerts;
  }
  /** @param string */
  public function setSupersedingAlert($supersedingAlert)
  {
    $this->supersedingAlert = $supersedingAlert;
  }
  /** @return string */
  public function getSupersedingAlert()
  {
    return $this->supersedingAlert;
  }
  /** @param string */
  public function setThreshold($threshold)
  {
    $this->threshold = $threshold;
  }
  /** @return string */
  public function getThreshold()
  {
    return $this->threshold;
  }
  /** @param string */
  public function setTriggerSource($triggerSource)
  {
    $this->triggerSource = $triggerSource;
  }
  /** @return string */
  public function getTriggerSource()
  {
    return $this->triggerSource;
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
  /** @param string */
  public function setWindowSize($windowSize)
  {
    $this->windowSize = $windowSize;
  }
  /** @return string */
  public function getWindowSize()
  {
    return $this->windowSize;
  }
}

class Alert extends \Google\Model
{
  /** @var string */
  public $alertId;
  /** @var string */
  public $createTime;
  /** @var string */
  public $customerId;
  /** @var array[] */
  public $data;
  /** @var bool */
  public $deleted;
  /** @var string */
  public $endTime;
  /** @var string */
  public $etag;
  /** @var AlertMetadata */
  public $metadata;
  /** @var string */
  public $securityInvestigationToolLink;
  /** @var string */
  public $source;
  /** @var string */
  public $startTime;
  /** @var string */
  public $type;
  /** @var string */
  public $updateTime;
  protected $metadataType = AlertMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setAlertId($alertId)
  {
    $this->alertId = $alertId;
  }
  /** @return string */
  public function getAlertId()
  {
    return $this->alertId;
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
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /** @return string */
  public function getCustomerId()
  {
    return $this->customerId;
  }
  /** @param array[] */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return array[] */
  public function getData()
  {
    return $this->data;
  }
  /** @param bool */
  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  /** @return bool */
  public function getDeleted()
  {
    return $this->deleted;
  }
  /** @param string */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
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
  /** @param AlertMetadata */
  public function setMetadata(AlertMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return AlertMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setSecurityInvestigationToolLink($securityInvestigationToolLink)
  {
    $this->securityInvestigationToolLink = $securityInvestigationToolLink;
  }
  /** @return string */
  public function getSecurityInvestigationToolLink()
  {
    return $this->securityInvestigationToolLink;
  }
  /** @param string */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return string */
  public function getSource()
  {
    return $this->source;
  }
  /** @param string */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return string */
  public function getStartTime()
  {
    return $this->startTime;
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

class AlertFeedback extends \Google\Model
{
  /** @var string */
  public $alertId;
  /** @var string */
  public $createTime;
  /** @var string */
  public $customerId;
  /** @var string */
  public $email;
  /** @var string */
  public $feedbackId;
  /** @var string */
  public $type;

  /** @param string */
  public function setAlertId($alertId)
  {
    $this->alertId = $alertId;
  }
  /** @return string */
  public function getAlertId()
  {
    return $this->alertId;
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
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /** @return string */
  public function getCustomerId()
  {
    return $this->customerId;
  }
  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param string */
  public function setFeedbackId($feedbackId)
  {
    $this->feedbackId = $feedbackId;
  }
  /** @return string */
  public function getFeedbackId()
  {
    return $this->feedbackId;
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

class AlertMetadata extends \Google\Model
{
  /** @var string */
  public $alertId;
  /** @var string */
  public $assignee;
  /** @var string */
  public $customerId;
  /** @var string */
  public $etag;
  /** @var string */
  public $severity;
  /** @var string */
  public $status;
  /** @var string */
  public $updateTime;

  /** @param string */
  public function setAlertId($alertId)
  {
    $this->alertId = $alertId;
  }
  /** @return string */
  public function getAlertId()
  {
    return $this->alertId;
  }
  /** @param string */
  public function setAssignee($assignee)
  {
    $this->assignee = $assignee;
  }
  /** @return string */
  public function getAssignee()
  {
    return $this->assignee;
  }
  /** @param string */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /** @return string */
  public function getCustomerId()
  {
    return $this->customerId;
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
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /** @return string */
  public function getSeverity()
  {
    return $this->severity;
  }
  /** @param string */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
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

class AlertcenterEmpty extends \Google\Model
{
}

class ApnsCertificateExpirationInfo extends \Google\Model
{
  /** @var string */
  public $appleId;
  /** @var string */
  public $expirationTime;
  /** @var string */
  public $uid;

  /** @param string */
  public function setAppleId($appleId)
  {
    $this->appleId = $appleId;
  }
  /** @return string */
  public function getAppleId()
  {
    return $this->appleId;
  }
  /** @param string */
  public function setExpirationTime($expirationTime)
  {
    $this->expirationTime = $expirationTime;
  }
  /** @return string */
  public function getExpirationTime()
  {
    return $this->expirationTime;
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
}

class AppMakerSqlSetupNotification extends \Google\Collection
{
  /** @var RequestInfo[] */
  public $requestInfo;
  protected $collection_key = 'requestInfo';
  protected $requestInfoType = RequestInfo::class;
  protected $requestInfoDataType = 'array';
  /** @param RequestInfo[] */
  public function setRequestInfo($requestInfo)
  {
    $this->requestInfo = $requestInfo;
  }
  /** @return RequestInfo[] */
  public function getRequestInfo()
  {
    return $this->requestInfo;
  }
}

class AppSettingsChanged extends \Google\Model
{
  /** @var string */
  public $alertDetails;
  /** @var string */
  public $name;

  /** @param string */
  public function setAlertDetails($alertDetails)
  {
    $this->alertDetails = $alertDetails;
  }
  /** @return string */
  public function getAlertDetails()
  {
    return $this->alertDetails;
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
}

class AppsOutage extends \Google\Collection
{
  /** @var string */
  public $dashboardUri;
  /** @var string */
  public $incidentTrackingId;
  /** @var MergeInfo */
  public $mergeInfo;
  /** @var string */
  public $nextUpdateTime;
  /** @var string[] */
  public $products;
  /** @var string */
  public $resolutionTime;
  /** @var string */
  public $status;
  protected $collection_key = 'products';
  protected $mergeInfoType = MergeInfo::class;
  protected $mergeInfoDataType = '';
  /** @param string */
  public function setDashboardUri($dashboardUri)
  {
    $this->dashboardUri = $dashboardUri;
  }
  /** @return string */
  public function getDashboardUri()
  {
    return $this->dashboardUri;
  }
  /** @param string */
  public function setIncidentTrackingId($incidentTrackingId)
  {
    $this->incidentTrackingId = $incidentTrackingId;
  }
  /** @return string */
  public function getIncidentTrackingId()
  {
    return $this->incidentTrackingId;
  }
  /** @param MergeInfo */
  public function setMergeInfo(MergeInfo $mergeInfo)
  {
    $this->mergeInfo = $mergeInfo;
  }
  /** @return MergeInfo */
  public function getMergeInfo()
  {
    return $this->mergeInfo;
  }
  /** @param string */
  public function setNextUpdateTime($nextUpdateTime)
  {
    $this->nextUpdateTime = $nextUpdateTime;
  }
  /** @return string */
  public function getNextUpdateTime()
  {
    return $this->nextUpdateTime;
  }
  /** @param string[] */
  public function setProducts($products)
  {
    $this->products = $products;
  }
  /** @return string[] */
  public function getProducts()
  {
    return $this->products;
  }
  /** @param string */
  public function setResolutionTime($resolutionTime)
  {
    $this->resolutionTime = $resolutionTime;
  }
  /** @return string */
  public function getResolutionTime()
  {
    return $this->resolutionTime;
  }
  /** @param string */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
  }
}

class Attachment extends \Google\Model
{
  /** @var Csv */
  public $csv;
  protected $csvType = Csv::class;
  protected $csvDataType = '';
  /** @param Csv */
  public function setCsv(Csv $csv)
  {
    $this->csv = $csv;
  }
  /** @return Csv */
  public function getCsv()
  {
    return $this->csv;
  }
}

class BadWhitelist extends \Google\Collection
{
  /** @var DomainId */
  public $domainId;
  /** @var MaliciousEntity */
  public $maliciousEntity;
  /** @var GmailMessageInfo[] */
  public $messages;
  /** @var string */
  public $sourceIp;
  protected $collection_key = 'messages';
  protected $domainIdType = DomainId::class;
  protected $domainIdDataType = '';
  protected $maliciousEntityType = MaliciousEntity::class;
  protected $maliciousEntityDataType = '';
  protected $messagesType = GmailMessageInfo::class;
  protected $messagesDataType = 'array';
  /** @param DomainId */
  public function setDomainId(DomainId $domainId)
  {
    $this->domainId = $domainId;
  }
  /** @return DomainId */
  public function getDomainId()
  {
    return $this->domainId;
  }
  /** @param MaliciousEntity */
  public function setMaliciousEntity(MaliciousEntity $maliciousEntity)
  {
    $this->maliciousEntity = $maliciousEntity;
  }
  /** @return MaliciousEntity */
  public function getMaliciousEntity()
  {
    return $this->maliciousEntity;
  }
  /** @param GmailMessageInfo[] */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /** @return GmailMessageInfo[] */
  public function getMessages()
  {
    return $this->messages;
  }
  /** @param string */
  public function setSourceIp($sourceIp)
  {
    $this->sourceIp = $sourceIp;
  }
  /** @return string */
  public function getSourceIp()
  {
    return $this->sourceIp;
  }
}

class BatchDeleteAlertsRequest extends \Google\Collection
{
  /** @var string[] */
  public $alertId;
  /** @var string */
  public $customerId;
  protected $collection_key = 'alertId';
  /** @param string[] */
  public function setAlertId($alertId)
  {
    $this->alertId = $alertId;
  }
  /** @return string[] */
  public function getAlertId()
  {
    return $this->alertId;
  }
  /** @param string */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /** @return string */
  public function getCustomerId()
  {
    return $this->customerId;
  }
}

class BatchDeleteAlertsResponse extends \Google\Collection
{
  /** @var Status[] */
  public $failedAlertStatus;
  /** @var string[] */
  public $successAlertIds;
  protected $collection_key = 'successAlertIds';
  protected $failedAlertStatusType = Status::class;
  protected $failedAlertStatusDataType = 'map';
  /** @param Status[] */
  public function setFailedAlertStatus($failedAlertStatus)
  {
    $this->failedAlertStatus = $failedAlertStatus;
  }
  /** @return Status[] */
  public function getFailedAlertStatus()
  {
    return $this->failedAlertStatus;
  }
  /** @param string[] */
  public function setSuccessAlertIds($successAlertIds)
  {
    $this->successAlertIds = $successAlertIds;
  }
  /** @return string[] */
  public function getSuccessAlertIds()
  {
    return $this->successAlertIds;
  }
}

class BatchUndeleteAlertsRequest extends \Google\Collection
{
  /** @var string[] */
  public $alertId;
  /** @var string */
  public $customerId;
  protected $collection_key = 'alertId';
  /** @param string[] */
  public function setAlertId($alertId)
  {
    $this->alertId = $alertId;
  }
  /** @return string[] */
  public function getAlertId()
  {
    return $this->alertId;
  }
  /** @param string */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /** @return string */
  public function getCustomerId()
  {
    return $this->customerId;
  }
}

class BatchUndeleteAlertsResponse extends \Google\Collection
{
  /** @var Status[] */
  public $failedAlertStatus;
  /** @var string[] */
  public $successAlertIds;
  protected $collection_key = 'successAlertIds';
  protected $failedAlertStatusType = Status::class;
  protected $failedAlertStatusDataType = 'map';
  /** @param Status[] */
  public function setFailedAlertStatus($failedAlertStatus)
  {
    $this->failedAlertStatus = $failedAlertStatus;
  }
  /** @return Status[] */
  public function getFailedAlertStatus()
  {
    return $this->failedAlertStatus;
  }
  /** @param string[] */
  public function setSuccessAlertIds($successAlertIds)
  {
    $this->successAlertIds = $successAlertIds;
  }
  /** @return string[] */
  public function getSuccessAlertIds()
  {
    return $this->successAlertIds;
  }
}

class CloudPubsubTopic extends \Google\Model
{
  /** @var string */
  public $payloadFormat;
  /** @var string */
  public $topicName;

  /** @param string */
  public function setPayloadFormat($payloadFormat)
  {
    $this->payloadFormat = $payloadFormat;
  }
  /** @return string */
  public function getPayloadFormat()
  {
    return $this->payloadFormat;
  }
  /** @param string */
  public function setTopicName($topicName)
  {
    $this->topicName = $topicName;
  }
  /** @return string */
  public function getTopicName()
  {
    return $this->topicName;
  }
}

class Csv extends \Google\Collection
{
  /** @var CsvRow[] */
  public $dataRows;
  /** @var string[] */
  public $headers;
  protected $collection_key = 'headers';
  protected $dataRowsType = CsvRow::class;
  protected $dataRowsDataType = 'array';
  /** @param CsvRow[] */
  public function setDataRows($dataRows)
  {
    $this->dataRows = $dataRows;
  }
  /** @return CsvRow[] */
  public function getDataRows()
  {
    return $this->dataRows;
  }
  /** @param string[] */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /** @return string[] */
  public function getHeaders()
  {
    return $this->headers;
  }
}

class CsvRow extends \Google\Collection
{
  /** @var string[] */
  public $entries;
  protected $collection_key = 'entries';
  /** @param string[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return string[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class DeviceCompromised extends \Google\Collection
{
  /** @var string */
  public $email;
  /** @var DeviceCompromisedSecurityDetail[] */
  public $events;
  protected $collection_key = 'events';
  protected $eventsType = DeviceCompromisedSecurityDetail::class;
  protected $eventsDataType = 'array';
  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param DeviceCompromisedSecurityDetail[] */
  public function setEvents($events)
  {
    $this->events = $events;
  }
  /** @return DeviceCompromisedSecurityDetail[] */
  public function getEvents()
  {
    return $this->events;
  }
}

class DeviceCompromisedSecurityDetail extends \Google\Model
{
  /** @var string */
  public $deviceCompromisedState;
  /** @var string */
  public $deviceId;
  /** @var string */
  public $deviceModel;
  /** @var string */
  public $deviceType;
  /** @var string */
  public $iosVendorId;
  /** @var string */
  public $resourceId;
  /** @var string */
  public $serialNumber;

  /** @param string */
  public function setDeviceCompromisedState($deviceCompromisedState)
  {
    $this->deviceCompromisedState = $deviceCompromisedState;
  }
  /** @return string */
  public function getDeviceCompromisedState()
  {
    return $this->deviceCompromisedState;
  }
  /** @param string */
  public function setDeviceId($deviceId)
  {
    $this->deviceId = $deviceId;
  }
  /** @return string */
  public function getDeviceId()
  {
    return $this->deviceId;
  }
  /** @param string */
  public function setDeviceModel($deviceModel)
  {
    $this->deviceModel = $deviceModel;
  }
  /** @return string */
  public function getDeviceModel()
  {
    return $this->deviceModel;
  }
  /** @param string */
  public function setDeviceType($deviceType)
  {
    $this->deviceType = $deviceType;
  }
  /** @return string */
  public function getDeviceType()
  {
    return $this->deviceType;
  }
  /** @param string */
  public function setIosVendorId($iosVendorId)
  {
    $this->iosVendorId = $iosVendorId;
  }
  /** @return string */
  public function getIosVendorId()
  {
    return $this->iosVendorId;
  }
  /** @param string */
  public function setResourceId($resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return string */
  public function getResourceId()
  {
    return $this->resourceId;
  }
  /** @param string */
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  /** @return string */
  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
}

class DlpRuleViolation extends \Google\Model
{
  /** @var RuleViolationInfo */
  public $ruleViolationInfo;
  protected $ruleViolationInfoType = RuleViolationInfo::class;
  protected $ruleViolationInfoDataType = '';
  /** @param RuleViolationInfo */
  public function setRuleViolationInfo(RuleViolationInfo $ruleViolationInfo)
  {
    $this->ruleViolationInfo = $ruleViolationInfo;
  }
  /** @return RuleViolationInfo */
  public function getRuleViolationInfo()
  {
    return $this->ruleViolationInfo;
  }
}

class DomainId extends \Google\Model
{
  /** @var string */
  public $customerPrimaryDomain;

  /** @param string */
  public function setCustomerPrimaryDomain($customerPrimaryDomain)
  {
    $this->customerPrimaryDomain = $customerPrimaryDomain;
  }
  /** @return string */
  public function getCustomerPrimaryDomain()
  {
    return $this->customerPrimaryDomain;
  }
}

class DomainWideTakeoutInitiated extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var string */
  public $takeoutRequestId;

  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param string */
  public function setTakeoutRequestId($takeoutRequestId)
  {
    $this->takeoutRequestId = $takeoutRequestId;
  }
  /** @return string */
  public function getTakeoutRequestId()
  {
    return $this->takeoutRequestId;
  }
}

class Entity extends \Google\Collection
{
  /** @var string */
  public $link;
  /** @var string */
  public $name;
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
  /** @param string */
  public function setLink($link)
  {
    $this->link = $link;
  }
  /** @return string */
  public function getLink()
  {
    return $this->link;
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
  /** @param string[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return string[] */
  public function getValues()
  {
    return $this->values;
  }
}

class EntityList extends \Google\Collection
{
  /** @var Entity[] */
  public $entities;
  /** @var string[] */
  public $headers;
  /** @var string */
  public $name;
  protected $collection_key = 'headers';
  protected $entitiesType = Entity::class;
  protected $entitiesDataType = 'array';
  /** @param Entity[] */
  public function setEntities($entities)
  {
    $this->entities = $entities;
  }
  /** @return Entity[] */
  public function getEntities()
  {
    return $this->entities;
  }
  /** @param string[] */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /** @return string[] */
  public function getHeaders()
  {
    return $this->headers;
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
}

class GmailMessageInfo extends \Google\Collection
{
  /** @var string[] */
  public $attachmentsSha256Hash;
  /** @var string */
  public $date;
  /** @var string */
  public $md5HashMessageBody;
  /** @var string */
  public $md5HashSubject;
  /** @var string */
  public $messageBodySnippet;
  /** @var string */
  public $messageId;
  /** @var string */
  public $recipient;
  /** @var string */
  public $subjectText;
  protected $collection_key = 'attachmentsSha256Hash';
  /** @param string[] */
  public function setAttachmentsSha256Hash($attachmentsSha256Hash)
  {
    $this->attachmentsSha256Hash = $attachmentsSha256Hash;
  }
  /** @return string[] */
  public function getAttachmentsSha256Hash()
  {
    return $this->attachmentsSha256Hash;
  }
  /** @param string */
  public function setDate($date)
  {
    $this->date = $date;
  }
  /** @return string */
  public function getDate()
  {
    return $this->date;
  }
  /** @param string */
  public function setMd5HashMessageBody($md5HashMessageBody)
  {
    $this->md5HashMessageBody = $md5HashMessageBody;
  }
  /** @return string */
  public function getMd5HashMessageBody()
  {
    return $this->md5HashMessageBody;
  }
  /** @param string */
  public function setMd5HashSubject($md5HashSubject)
  {
    $this->md5HashSubject = $md5HashSubject;
  }
  /** @return string */
  public function getMd5HashSubject()
  {
    return $this->md5HashSubject;
  }
  /** @param string */
  public function setMessageBodySnippet($messageBodySnippet)
  {
    $this->messageBodySnippet = $messageBodySnippet;
  }
  /** @return string */
  public function getMessageBodySnippet()
  {
    return $this->messageBodySnippet;
  }
  /** @param string */
  public function setMessageId($messageId)
  {
    $this->messageId = $messageId;
  }
  /** @return string */
  public function getMessageId()
  {
    return $this->messageId;
  }
  /** @param string */
  public function setRecipient($recipient)
  {
    $this->recipient = $recipient;
  }
  /** @return string */
  public function getRecipient()
  {
    return $this->recipient;
  }
  /** @param string */
  public function setSubjectText($subjectText)
  {
    $this->subjectText = $subjectText;
  }
  /** @return string */
  public function getSubjectText()
  {
    return $this->subjectText;
  }
}

class GoogleOperations extends \Google\Collection
{
  /** @var string[] */
  public $affectedUserEmails;
  /** @var Attachment */
  public $attachmentData;
  /** @var string */
  public $description;
  /** @var string */
  public $domain;
  /** @var string */
  public $header;
  /** @var string */
  public $title;
  protected $collection_key = 'affectedUserEmails';
  protected $attachmentDataType = Attachment::class;
  protected $attachmentDataDataType = '';
  /** @param string[] */
  public function setAffectedUserEmails($affectedUserEmails)
  {
    $this->affectedUserEmails = $affectedUserEmails;
  }
  /** @return string[] */
  public function getAffectedUserEmails()
  {
    return $this->affectedUserEmails;
  }
  /** @param Attachment */
  public function setAttachmentData(Attachment $attachmentData)
  {
    $this->attachmentData = $attachmentData;
  }
  /** @return Attachment */
  public function getAttachmentData()
  {
    return $this->attachmentData;
  }
  /** @param string */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string */
  public function getDescription()
  {
    return $this->description;
  }
  /** @param string */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /** @return string */
  public function getDomain()
  {
    return $this->domain;
  }
  /** @param string */
  public function setHeader($header)
  {
    $this->header = $header;
  }
  /** @return string */
  public function getHeader()
  {
    return $this->header;
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

class ListAlertFeedbackResponse extends \Google\Collection
{
  /** @var AlertFeedback[] */
  public $feedback;
  protected $collection_key = 'feedback';
  protected $feedbackType = AlertFeedback::class;
  protected $feedbackDataType = 'array';
  /** @param AlertFeedback[] */
  public function setFeedback($feedback)
  {
    $this->feedback = $feedback;
  }
  /** @return AlertFeedback[] */
  public function getFeedback()
  {
    return $this->feedback;
  }
}

class ListAlertsResponse extends \Google\Collection
{
  /** @var Alert[] */
  public $alerts;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'alerts';
  protected $alertsType = Alert::class;
  protected $alertsDataType = 'array';
  /** @param Alert[] */
  public function setAlerts($alerts)
  {
    $this->alerts = $alerts;
  }
  /** @return Alert[] */
  public function getAlerts()
  {
    return $this->alerts;
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

class LoginDetails extends \Google\Model
{
  /** @var string */
  public $ipAddress;
  /** @var string */
  public $loginTime;

  /** @param string */
  public function setIpAddress($ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }
  /** @return string */
  public function getIpAddress()
  {
    return $this->ipAddress;
  }
  /** @param string */
  public function setLoginTime($loginTime)
  {
    $this->loginTime = $loginTime;
  }
  /** @return string */
  public function getLoginTime()
  {
    return $this->loginTime;
  }
}

class MailPhishing extends \Google\Collection
{
  /** @var DomainId */
  public $domainId;
  /** @var bool */
  public $isInternal;
  /** @var MaliciousEntity */
  public $maliciousEntity;
  /** @var GmailMessageInfo[] */
  public $messages;
  /** @var string */
  public $systemActionType;
  protected $collection_key = 'messages';
  protected $domainIdType = DomainId::class;
  protected $domainIdDataType = '';
  protected $maliciousEntityType = MaliciousEntity::class;
  protected $maliciousEntityDataType = '';
  protected $messagesType = GmailMessageInfo::class;
  protected $messagesDataType = 'array';
  /** @param DomainId */
  public function setDomainId(DomainId $domainId)
  {
    $this->domainId = $domainId;
  }
  /** @return DomainId */
  public function getDomainId()
  {
    return $this->domainId;
  }
  /** @param bool */
  public function setIsInternal($isInternal)
  {
    $this->isInternal = $isInternal;
  }
  /** @return bool */
  public function getIsInternal()
  {
    return $this->isInternal;
  }
  /** @param MaliciousEntity */
  public function setMaliciousEntity(MaliciousEntity $maliciousEntity)
  {
    $this->maliciousEntity = $maliciousEntity;
  }
  /** @return MaliciousEntity */
  public function getMaliciousEntity()
  {
    return $this->maliciousEntity;
  }
  /** @param GmailMessageInfo[] */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /** @return GmailMessageInfo[] */
  public function getMessages()
  {
    return $this->messages;
  }
  /** @param string */
  public function setSystemActionType($systemActionType)
  {
    $this->systemActionType = $systemActionType;
  }
  /** @return string */
  public function getSystemActionType()
  {
    return $this->systemActionType;
  }
}

class MaliciousEntity extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var User */
  public $entity;
  /** @var string */
  public $fromHeader;
  protected $entityType = User::class;
  protected $entityDataType = '';
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
  /** @param User */
  public function setEntity(User $entity)
  {
    $this->entity = $entity;
  }
  /** @return User */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param string */
  public function setFromHeader($fromHeader)
  {
    $this->fromHeader = $fromHeader;
  }
  /** @return string */
  public function getFromHeader()
  {
    return $this->fromHeader;
  }
}

class MandatoryServiceAnnouncement extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $title;

  /** @param string */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string */
  public function getDescription()
  {
    return $this->description;
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

class MatchInfo extends \Google\Model
{
  /** @var PredefinedDetectorInfo */
  public $predefinedDetector;
  /** @var UserDefinedDetectorInfo */
  public $userDefinedDetector;
  protected $predefinedDetectorType = PredefinedDetectorInfo::class;
  protected $predefinedDetectorDataType = '';
  protected $userDefinedDetectorType = UserDefinedDetectorInfo::class;
  protected $userDefinedDetectorDataType = '';
  /** @param PredefinedDetectorInfo */
  public function setPredefinedDetector(PredefinedDetectorInfo $predefinedDetector)
  {
    $this->predefinedDetector = $predefinedDetector;
  }
  /** @return PredefinedDetectorInfo */
  public function getPredefinedDetector()
  {
    return $this->predefinedDetector;
  }
  /** @param UserDefinedDetectorInfo */
  public function setUserDefinedDetector(UserDefinedDetectorInfo $userDefinedDetector)
  {
    $this->userDefinedDetector = $userDefinedDetector;
  }
  /** @return UserDefinedDetectorInfo */
  public function getUserDefinedDetector()
  {
    return $this->userDefinedDetector;
  }
}

class MergeInfo extends \Google\Model
{
  /** @var string */
  public $newAlertId;
  /** @var string */
  public $newIncidentTrackingId;

  /** @param string */
  public function setNewAlertId($newAlertId)
  {
    $this->newAlertId = $newAlertId;
  }
  /** @return string */
  public function getNewAlertId()
  {
    return $this->newAlertId;
  }
  /** @param string */
  public function setNewIncidentTrackingId($newIncidentTrackingId)
  {
    $this->newIncidentTrackingId = $newIncidentTrackingId;
  }
  /** @return string */
  public function getNewIncidentTrackingId()
  {
    return $this->newIncidentTrackingId;
  }
}

class Notification extends \Google\Model
{
  /** @var CloudPubsubTopic */
  public $cloudPubsubTopic;
  protected $cloudPubsubTopicType = CloudPubsubTopic::class;
  protected $cloudPubsubTopicDataType = '';
  /** @param CloudPubsubTopic */
  public function setCloudPubsubTopic(CloudPubsubTopic $cloudPubsubTopic)
  {
    $this->cloudPubsubTopic = $cloudPubsubTopic;
  }
  /** @return CloudPubsubTopic */
  public function getCloudPubsubTopic()
  {
    return $this->cloudPubsubTopic;
  }
}

class PhishingSpike extends \Google\Collection
{
  /** @var DomainId */
  public $domainId;
  /** @var bool */
  public $isInternal;
  /** @var MaliciousEntity */
  public $maliciousEntity;
  /** @var GmailMessageInfo[] */
  public $messages;
  protected $collection_key = 'messages';
  protected $domainIdType = DomainId::class;
  protected $domainIdDataType = '';
  protected $maliciousEntityType = MaliciousEntity::class;
  protected $maliciousEntityDataType = '';
  protected $messagesType = GmailMessageInfo::class;
  protected $messagesDataType = 'array';
  /** @param DomainId */
  public function setDomainId(DomainId $domainId)
  {
    $this->domainId = $domainId;
  }
  /** @return DomainId */
  public function getDomainId()
  {
    return $this->domainId;
  }
  /** @param bool */
  public function setIsInternal($isInternal)
  {
    $this->isInternal = $isInternal;
  }
  /** @return bool */
  public function getIsInternal()
  {
    return $this->isInternal;
  }
  /** @param MaliciousEntity */
  public function setMaliciousEntity(MaliciousEntity $maliciousEntity)
  {
    $this->maliciousEntity = $maliciousEntity;
  }
  /** @return MaliciousEntity */
  public function getMaliciousEntity()
  {
    return $this->maliciousEntity;
  }
  /** @param GmailMessageInfo[] */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /** @return GmailMessageInfo[] */
  public function getMessages()
  {
    return $this->messages;
  }
}

class PredefinedDetectorInfo extends \Google\Model
{
  /** @var string */
  public $detectorName;

  /** @param string */
  public function setDetectorName($detectorName)
  {
    $this->detectorName = $detectorName;
  }
  /** @return string */
  public function getDetectorName()
  {
    return $this->detectorName;
  }
}

class PrimaryAdminChangedEvent extends \Google\Model
{
  /** @var string */
  public $domain;
  /** @var string */
  public $previousAdminEmail;
  /** @var string */
  public $updatedAdminEmail;

  /** @param string */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /** @return string */
  public function getDomain()
  {
    return $this->domain;
  }
  /** @param string */
  public function setPreviousAdminEmail($previousAdminEmail)
  {
    $this->previousAdminEmail = $previousAdminEmail;
  }
  /** @return string */
  public function getPreviousAdminEmail()
  {
    return $this->previousAdminEmail;
  }
  /** @param string */
  public function setUpdatedAdminEmail($updatedAdminEmail)
  {
    $this->updatedAdminEmail = $updatedAdminEmail;
  }
  /** @return string */
  public function getUpdatedAdminEmail()
  {
    return $this->updatedAdminEmail;
  }
}

class ReportingRule extends \Google\Model
{
  /** @var string */
  public $alertDetails;
  /** @var string */
  public $name;
  /** @var string */
  public $query;

  /** @param string */
  public function setAlertDetails($alertDetails)
  {
    $this->alertDetails = $alertDetails;
  }
  /** @return string */
  public function getAlertDetails()
  {
    return $this->alertDetails;
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
  public function setQuery($query)
  {
    $this->query = $query;
  }
  /** @return string */
  public function getQuery()
  {
    return $this->query;
  }
}

class RequestInfo extends \Google\Collection
{
  /** @var string[] */
  public $appDeveloperEmail;
  /** @var string */
  public $appKey;
  /** @var string */
  public $numberOfRequests;
  protected $collection_key = 'appDeveloperEmail';
  /** @param string[] */
  public function setAppDeveloperEmail($appDeveloperEmail)
  {
    $this->appDeveloperEmail = $appDeveloperEmail;
  }
  /** @return string[] */
  public function getAppDeveloperEmail()
  {
    return $this->appDeveloperEmail;
  }
  /** @param string */
  public function setAppKey($appKey)
  {
    $this->appKey = $appKey;
  }
  /** @return string */
  public function getAppKey()
  {
    return $this->appKey;
  }
  /** @param string */
  public function setNumberOfRequests($numberOfRequests)
  {
    $this->numberOfRequests = $numberOfRequests;
  }
  /** @return string */
  public function getNumberOfRequests()
  {
    return $this->numberOfRequests;
  }
}

class ResourceInfo extends \Google\Model
{
  /** @var string */
  public $documentId;
  /** @var string */
  public $resourceTitle;

  /** @param string */
  public function setDocumentId($documentId)
  {
    $this->documentId = $documentId;
  }
  /** @return string */
  public function getDocumentId()
  {
    return $this->documentId;
  }
  /** @param string */
  public function setResourceTitle($resourceTitle)
  {
    $this->resourceTitle = $resourceTitle;
  }
  /** @return string */
  public function getResourceTitle()
  {
    return $this->resourceTitle;
  }
}

class RuleInfo extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $resourceName;

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
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /** @return string */
  public function getResourceName()
  {
    return $this->resourceName;
  }
}

class RuleViolationInfo extends \Google\Collection
{
  /** @var string */
  public $dataSource;
  /** @var MatchInfo[] */
  public $matchInfo;
  /** @var string[] */
  public $recipients;
  /** @var ResourceInfo */
  public $resourceInfo;
  /** @var RuleInfo */
  public $ruleInfo;
  /** @var string[] */
  public $suppressedActionTypes;
  /** @var string */
  public $trigger;
  /** @var ActionInfo[] */
  public $triggeredActionInfo;
  /** @var string[] */
  public $triggeredActionTypes;
  /** @var string */
  public $triggeringUserEmail;
  protected $collection_key = 'triggeredActionTypes';
  protected $matchInfoType = MatchInfo::class;
  protected $matchInfoDataType = 'array';
  protected $resourceInfoType = ResourceInfo::class;
  protected $resourceInfoDataType = '';
  protected $ruleInfoType = RuleInfo::class;
  protected $ruleInfoDataType = '';
  protected $triggeredActionInfoType = ActionInfo::class;
  protected $triggeredActionInfoDataType = 'array';
  /** @param string */
  public function setDataSource($dataSource)
  {
    $this->dataSource = $dataSource;
  }
  /** @return string */
  public function getDataSource()
  {
    return $this->dataSource;
  }
  /** @param MatchInfo[] */
  public function setMatchInfo($matchInfo)
  {
    $this->matchInfo = $matchInfo;
  }
  /** @return MatchInfo[] */
  public function getMatchInfo()
  {
    return $this->matchInfo;
  }
  /** @param string[] */
  public function setRecipients($recipients)
  {
    $this->recipients = $recipients;
  }
  /** @return string[] */
  public function getRecipients()
  {
    return $this->recipients;
  }
  /** @param ResourceInfo */
  public function setResourceInfo(ResourceInfo $resourceInfo)
  {
    $this->resourceInfo = $resourceInfo;
  }
  /** @return ResourceInfo */
  public function getResourceInfo()
  {
    return $this->resourceInfo;
  }
  /** @param RuleInfo */
  public function setRuleInfo(RuleInfo $ruleInfo)
  {
    $this->ruleInfo = $ruleInfo;
  }
  /** @return RuleInfo */
  public function getRuleInfo()
  {
    return $this->ruleInfo;
  }
  /** @param string[] */
  public function setSuppressedActionTypes($suppressedActionTypes)
  {
    $this->suppressedActionTypes = $suppressedActionTypes;
  }
  /** @return string[] */
  public function getSuppressedActionTypes()
  {
    return $this->suppressedActionTypes;
  }
  /** @param string */
  public function setTrigger($trigger)
  {
    $this->trigger = $trigger;
  }
  /** @return string */
  public function getTrigger()
  {
    return $this->trigger;
  }
  /** @param ActionInfo[] */
  public function setTriggeredActionInfo($triggeredActionInfo)
  {
    $this->triggeredActionInfo = $triggeredActionInfo;
  }
  /** @return ActionInfo[] */
  public function getTriggeredActionInfo()
  {
    return $this->triggeredActionInfo;
  }
  /** @param string[] */
  public function setTriggeredActionTypes($triggeredActionTypes)
  {
    $this->triggeredActionTypes = $triggeredActionTypes;
  }
  /** @return string[] */
  public function getTriggeredActionTypes()
  {
    return $this->triggeredActionTypes;
  }
  /** @param string */
  public function setTriggeringUserEmail($triggeringUserEmail)
  {
    $this->triggeringUserEmail = $triggeringUserEmail;
  }
  /** @return string */
  public function getTriggeringUserEmail()
  {
    return $this->triggeringUserEmail;
  }
}

class SSOProfileCreatedEvent extends \Google\Model
{
  /** @var string */
  public $inboundSsoProfileName;

  /** @param string */
  public function setInboundSsoProfileName($inboundSsoProfileName)
  {
    $this->inboundSsoProfileName = $inboundSsoProfileName;
  }
  /** @return string */
  public function getInboundSsoProfileName()
  {
    return $this->inboundSsoProfileName;
  }
}

class SSOProfileDeletedEvent extends \Google\Model
{
  /** @var string */
  public $inboundSsoProfileName;

  /** @param string */
  public function setInboundSsoProfileName($inboundSsoProfileName)
  {
    $this->inboundSsoProfileName = $inboundSsoProfileName;
  }
  /** @return string */
  public function getInboundSsoProfileName()
  {
    return $this->inboundSsoProfileName;
  }
}

class SSOProfileUpdatedEvent extends \Google\Model
{
  /** @var string */
  public $inboundSsoProfileChanges;
  /** @var string */
  public $inboundSsoProfileName;

  /** @param string */
  public function setInboundSsoProfileChanges($inboundSsoProfileChanges)
  {
    $this->inboundSsoProfileChanges = $inboundSsoProfileChanges;
  }
  /** @return string */
  public function getInboundSsoProfileChanges()
  {
    return $this->inboundSsoProfileChanges;
  }
  /** @param string */
  public function setInboundSsoProfileName($inboundSsoProfileName)
  {
    $this->inboundSsoProfileName = $inboundSsoProfileName;
  }
  /** @return string */
  public function getInboundSsoProfileName()
  {
    return $this->inboundSsoProfileName;
  }
}

class SensitiveAdminAction extends \Google\Model
{
  /** @var string */
  public $actorEmail;
  /** @var string */
  public $eventTime;
  /** @var PrimaryAdminChangedEvent */
  public $primaryAdminChangedEvent;
  /** @var SSOProfileCreatedEvent */
  public $ssoProfileCreatedEvent;
  /** @var SSOProfileDeletedEvent */
  public $ssoProfileDeletedEvent;
  /** @var SSOProfileUpdatedEvent */
  public $ssoProfileUpdatedEvent;
  /** @var SuperAdminPasswordResetEvent */
  public $superAdminPasswordResetEvent;
  protected $primaryAdminChangedEventType = PrimaryAdminChangedEvent::class;
  protected $primaryAdminChangedEventDataType = '';
  protected $ssoProfileCreatedEventType = SSOProfileCreatedEvent::class;
  protected $ssoProfileCreatedEventDataType = '';
  protected $ssoProfileDeletedEventType = SSOProfileDeletedEvent::class;
  protected $ssoProfileDeletedEventDataType = '';
  protected $ssoProfileUpdatedEventType = SSOProfileUpdatedEvent::class;
  protected $ssoProfileUpdatedEventDataType = '';
  protected $superAdminPasswordResetEventType = SuperAdminPasswordResetEvent::class;
  protected $superAdminPasswordResetEventDataType = '';
  /** @param string */
  public function setActorEmail($actorEmail)
  {
    $this->actorEmail = $actorEmail;
  }
  /** @return string */
  public function getActorEmail()
  {
    return $this->actorEmail;
  }
  /** @param string */
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  /** @return string */
  public function getEventTime()
  {
    return $this->eventTime;
  }
  /** @param PrimaryAdminChangedEvent */
  public function setPrimaryAdminChangedEvent(PrimaryAdminChangedEvent $primaryAdminChangedEvent)
  {
    $this->primaryAdminChangedEvent = $primaryAdminChangedEvent;
  }
  /** @return PrimaryAdminChangedEvent */
  public function getPrimaryAdminChangedEvent()
  {
    return $this->primaryAdminChangedEvent;
  }
  /** @param SSOProfileCreatedEvent */
  public function setSsoProfileCreatedEvent(SSOProfileCreatedEvent $ssoProfileCreatedEvent)
  {
    $this->ssoProfileCreatedEvent = $ssoProfileCreatedEvent;
  }
  /** @return SSOProfileCreatedEvent */
  public function getSsoProfileCreatedEvent()
  {
    return $this->ssoProfileCreatedEvent;
  }
  /** @param SSOProfileDeletedEvent */
  public function setSsoProfileDeletedEvent(SSOProfileDeletedEvent $ssoProfileDeletedEvent)
  {
    $this->ssoProfileDeletedEvent = $ssoProfileDeletedEvent;
  }
  /** @return SSOProfileDeletedEvent */
  public function getSsoProfileDeletedEvent()
  {
    return $this->ssoProfileDeletedEvent;
  }
  /** @param SSOProfileUpdatedEvent */
  public function setSsoProfileUpdatedEvent(SSOProfileUpdatedEvent $ssoProfileUpdatedEvent)
  {
    $this->ssoProfileUpdatedEvent = $ssoProfileUpdatedEvent;
  }
  /** @return SSOProfileUpdatedEvent */
  public function getSsoProfileUpdatedEvent()
  {
    return $this->ssoProfileUpdatedEvent;
  }
  /** @param SuperAdminPasswordResetEvent */
  public function setSuperAdminPasswordResetEvent(SuperAdminPasswordResetEvent $superAdminPasswordResetEvent)
  {
    $this->superAdminPasswordResetEvent = $superAdminPasswordResetEvent;
  }
  /** @return SuperAdminPasswordResetEvent */
  public function getSuperAdminPasswordResetEvent()
  {
    return $this->superAdminPasswordResetEvent;
  }
}

class Settings extends \Google\Collection
{
  /** @var Notification[] */
  public $notifications;
  protected $collection_key = 'notifications';
  protected $notificationsType = Notification::class;
  protected $notificationsDataType = 'array';
  /** @param Notification[] */
  public function setNotifications($notifications)
  {
    $this->notifications = $notifications;
  }
  /** @return Notification[] */
  public function getNotifications()
  {
    return $this->notifications;
  }
}

class StateSponsoredAttack extends \Google\Model
{
  /** @var string */
  public $email;

  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
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

class SuperAdminPasswordResetEvent extends \Google\Model
{
  /** @var string */
  public $userEmail;

  /** @param string */
  public function setUserEmail($userEmail)
  {
    $this->userEmail = $userEmail;
  }
  /** @return string */
  public function getUserEmail()
  {
    return $this->userEmail;
  }
}

class SuspiciousActivity extends \Google\Collection
{
  /** @var string */
  public $email;
  /** @var SuspiciousActivitySecurityDetail[] */
  public $events;
  protected $collection_key = 'events';
  protected $eventsType = SuspiciousActivitySecurityDetail::class;
  protected $eventsDataType = 'array';
  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param SuspiciousActivitySecurityDetail[] */
  public function setEvents($events)
  {
    $this->events = $events;
  }
  /** @return SuspiciousActivitySecurityDetail[] */
  public function getEvents()
  {
    return $this->events;
  }
}

class SuspiciousActivitySecurityDetail extends \Google\Model
{
  /** @var string */
  public $deviceId;
  /** @var string */
  public $deviceModel;
  /** @var string */
  public $deviceProperty;
  /** @var string */
  public $deviceType;
  /** @var string */
  public $iosVendorId;
  /** @var string */
  public $newValue;
  /** @var string */
  public $oldValue;
  /** @var string */
  public $resourceId;
  /** @var string */
  public $serialNumber;

  /** @param string */
  public function setDeviceId($deviceId)
  {
    $this->deviceId = $deviceId;
  }
  /** @return string */
  public function getDeviceId()
  {
    return $this->deviceId;
  }
  /** @param string */
  public function setDeviceModel($deviceModel)
  {
    $this->deviceModel = $deviceModel;
  }
  /** @return string */
  public function getDeviceModel()
  {
    return $this->deviceModel;
  }
  /** @param string */
  public function setDeviceProperty($deviceProperty)
  {
    $this->deviceProperty = $deviceProperty;
  }
  /** @return string */
  public function getDeviceProperty()
  {
    return $this->deviceProperty;
  }
  /** @param string */
  public function setDeviceType($deviceType)
  {
    $this->deviceType = $deviceType;
  }
  /** @return string */
  public function getDeviceType()
  {
    return $this->deviceType;
  }
  /** @param string */
  public function setIosVendorId($iosVendorId)
  {
    $this->iosVendorId = $iosVendorId;
  }
  /** @return string */
  public function getIosVendorId()
  {
    return $this->iosVendorId;
  }
  /** @param string */
  public function setNewValue($newValue)
  {
    $this->newValue = $newValue;
  }
  /** @return string */
  public function getNewValue()
  {
    return $this->newValue;
  }
  /** @param string */
  public function setOldValue($oldValue)
  {
    $this->oldValue = $oldValue;
  }
  /** @return string */
  public function getOldValue()
  {
    return $this->oldValue;
  }
  /** @param string */
  public function setResourceId($resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return string */
  public function getResourceId()
  {
    return $this->resourceId;
  }
  /** @param string */
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  /** @return string */
  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
}

class UndeleteAlertRequest extends \Google\Model
{
  /** @var string */
  public $customerId;

  /** @param string */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /** @return string */
  public function getCustomerId()
  {
    return $this->customerId;
  }
}

class User extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $emailAddress;

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
  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  /** @return string */
  public function getEmailAddress()
  {
    return $this->emailAddress;
  }
}

class UserChanges extends \Google\Model
{
  /** @var string */
  public $name;

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
}

class UserDefinedDetectorInfo extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $resourceName;

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
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /** @return string */
  public function getResourceName()
  {
    return $this->resourceName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AbuseDetected::class, 'Google_Service_AlertCenter_AbuseDetected');
class_alias(AccountSuspensionDetails::class, 'Google_Service_AlertCenter_AccountSuspensionDetails');
class_alias(AccountSuspensionWarning::class, 'Google_Service_AlertCenter_AccountSuspensionWarning');
class_alias(AccountWarning::class, 'Google_Service_AlertCenter_AccountWarning');
class_alias(ActionInfo::class, 'Google_Service_AlertCenter_ActionInfo');
class_alias(ActivityRule::class, 'Google_Service_AlertCenter_ActivityRule');
class_alias(Alert::class, 'Google_Service_AlertCenter_Alert');
class_alias(AlertFeedback::class, 'Google_Service_AlertCenter_AlertFeedback');
class_alias(AlertMetadata::class, 'Google_Service_AlertCenter_AlertMetadata');
class_alias(AlertcenterEmpty::class, 'Google_Service_AlertCenter_AlertcenterEmpty');
class_alias(ApnsCertificateExpirationInfo::class, 'Google_Service_AlertCenter_ApnsCertificateExpirationInfo');
class_alias(AppMakerSqlSetupNotification::class, 'Google_Service_AlertCenter_AppMakerSqlSetupNotification');
class_alias(AppSettingsChanged::class, 'Google_Service_AlertCenter_AppSettingsChanged');
class_alias(AppsOutage::class, 'Google_Service_AlertCenter_AppsOutage');
class_alias(Attachment::class, 'Google_Service_AlertCenter_Attachment');
class_alias(BadWhitelist::class, 'Google_Service_AlertCenter_BadWhitelist');
class_alias(BatchDeleteAlertsRequest::class, 'Google_Service_AlertCenter_BatchDeleteAlertsRequest');
class_alias(BatchDeleteAlertsResponse::class, 'Google_Service_AlertCenter_BatchDeleteAlertsResponse');
class_alias(BatchUndeleteAlertsRequest::class, 'Google_Service_AlertCenter_BatchUndeleteAlertsRequest');
class_alias(BatchUndeleteAlertsResponse::class, 'Google_Service_AlertCenter_BatchUndeleteAlertsResponse');
class_alias(CloudPubsubTopic::class, 'Google_Service_AlertCenter_CloudPubsubTopic');
class_alias(Csv::class, 'Google_Service_AlertCenter_Csv');
class_alias(CsvRow::class, 'Google_Service_AlertCenter_CsvRow');
class_alias(DeviceCompromised::class, 'Google_Service_AlertCenter_DeviceCompromised');
class_alias(DeviceCompromisedSecurityDetail::class, 'Google_Service_AlertCenter_DeviceCompromisedSecurityDetail');
class_alias(DlpRuleViolation::class, 'Google_Service_AlertCenter_DlpRuleViolation');
class_alias(DomainId::class, 'Google_Service_AlertCenter_DomainId');
class_alias(DomainWideTakeoutInitiated::class, 'Google_Service_AlertCenter_DomainWideTakeoutInitiated');
class_alias(Entity::class, 'Google_Service_AlertCenter_Entity');
class_alias(EntityList::class, 'Google_Service_AlertCenter_EntityList');
class_alias(GmailMessageInfo::class, 'Google_Service_AlertCenter_GmailMessageInfo');
class_alias(GoogleOperations::class, 'Google_Service_AlertCenter_GoogleOperations');
class_alias(ListAlertFeedbackResponse::class, 'Google_Service_AlertCenter_ListAlertFeedbackResponse');
class_alias(ListAlertsResponse::class, 'Google_Service_AlertCenter_ListAlertsResponse');
class_alias(LoginDetails::class, 'Google_Service_AlertCenter_LoginDetails');
class_alias(MailPhishing::class, 'Google_Service_AlertCenter_MailPhishing');
class_alias(MaliciousEntity::class, 'Google_Service_AlertCenter_MaliciousEntity');
class_alias(MandatoryServiceAnnouncement::class, 'Google_Service_AlertCenter_MandatoryServiceAnnouncement');
class_alias(MatchInfo::class, 'Google_Service_AlertCenter_MatchInfo');
class_alias(MergeInfo::class, 'Google_Service_AlertCenter_MergeInfo');
class_alias(Notification::class, 'Google_Service_AlertCenter_Notification');
class_alias(PhishingSpike::class, 'Google_Service_AlertCenter_PhishingSpike');
class_alias(PredefinedDetectorInfo::class, 'Google_Service_AlertCenter_PredefinedDetectorInfo');
class_alias(PrimaryAdminChangedEvent::class, 'Google_Service_AlertCenter_PrimaryAdminChangedEvent');
class_alias(ReportingRule::class, 'Google_Service_AlertCenter_ReportingRule');
class_alias(RequestInfo::class, 'Google_Service_AlertCenter_RequestInfo');
class_alias(ResourceInfo::class, 'Google_Service_AlertCenter_ResourceInfo');
class_alias(RuleInfo::class, 'Google_Service_AlertCenter_RuleInfo');
class_alias(RuleViolationInfo::class, 'Google_Service_AlertCenter_RuleViolationInfo');
class_alias(SSOProfileCreatedEvent::class, 'Google_Service_AlertCenter_SSOProfileCreatedEvent');
class_alias(SSOProfileDeletedEvent::class, 'Google_Service_AlertCenter_SSOProfileDeletedEvent');
class_alias(SSOProfileUpdatedEvent::class, 'Google_Service_AlertCenter_SSOProfileUpdatedEvent');
class_alias(SensitiveAdminAction::class, 'Google_Service_AlertCenter_SensitiveAdminAction');
class_alias(Settings::class, 'Google_Service_AlertCenter_Settings');
class_alias(StateSponsoredAttack::class, 'Google_Service_AlertCenter_StateSponsoredAttack');
class_alias(Status::class, 'Google_Service_AlertCenter_Status');
class_alias(SuperAdminPasswordResetEvent::class, 'Google_Service_AlertCenter_SuperAdminPasswordResetEvent');
class_alias(SuspiciousActivity::class, 'Google_Service_AlertCenter_SuspiciousActivity');
class_alias(SuspiciousActivitySecurityDetail::class, 'Google_Service_AlertCenter_SuspiciousActivitySecurityDetail');
class_alias(UndeleteAlertRequest::class, 'Google_Service_AlertCenter_UndeleteAlertRequest');
class_alias(User::class, 'Google_Service_AlertCenter_User');
class_alias(UserChanges::class, 'Google_Service_AlertCenter_UserChanges');
class_alias(UserDefinedDetectorInfo::class, 'Google_Service_AlertCenter_UserDefinedDetectorInfo');
