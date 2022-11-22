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

namespace Google\Service\AccessApproval;

class AccessApprovalServiceAccount extends \Google\Model
{
  /** @var string */
  public $accountEmail;
  /** @var string */
  public $name;

  /** @param string */
  public function setAccountEmail($accountEmail)
  {
    $this->accountEmail = $accountEmail;
  }
  /** @return string */
  public function getAccountEmail()
  {
    return $this->accountEmail;
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

class AccessApprovalSettings extends \Google\Collection
{
  /** @var string */
  public $activeKeyVersion;
  /** @var bool */
  public $ancestorHasActiveKeyVersion;
  /** @var bool */
  public $enrolledAncestor;
  /** @var EnrolledService[] */
  public $enrolledServices;
  /** @var bool */
  public $invalidKeyVersion;
  /** @var string */
  public $name;
  /** @var string[] */
  public $notificationEmails;
  protected $collection_key = 'notificationEmails';
  protected $enrolledServicesType = EnrolledService::class;
  protected $enrolledServicesDataType = 'array';
  /** @param string */
  public function setActiveKeyVersion($activeKeyVersion)
  {
    $this->activeKeyVersion = $activeKeyVersion;
  }
  /** @return string */
  public function getActiveKeyVersion()
  {
    return $this->activeKeyVersion;
  }
  /** @param bool */
  public function setAncestorHasActiveKeyVersion($ancestorHasActiveKeyVersion)
  {
    $this->ancestorHasActiveKeyVersion = $ancestorHasActiveKeyVersion;
  }
  /** @return bool */
  public function getAncestorHasActiveKeyVersion()
  {
    return $this->ancestorHasActiveKeyVersion;
  }
  /** @param bool */
  public function setEnrolledAncestor($enrolledAncestor)
  {
    $this->enrolledAncestor = $enrolledAncestor;
  }
  /** @return bool */
  public function getEnrolledAncestor()
  {
    return $this->enrolledAncestor;
  }
  /** @param EnrolledService[] */
  public function setEnrolledServices($enrolledServices)
  {
    $this->enrolledServices = $enrolledServices;
  }
  /** @return EnrolledService[] */
  public function getEnrolledServices()
  {
    return $this->enrolledServices;
  }
  /** @param bool */
  public function setInvalidKeyVersion($invalidKeyVersion)
  {
    $this->invalidKeyVersion = $invalidKeyVersion;
  }
  /** @return bool */
  public function getInvalidKeyVersion()
  {
    return $this->invalidKeyVersion;
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
  public function setNotificationEmails($notificationEmails)
  {
    $this->notificationEmails = $notificationEmails;
  }
  /** @return string[] */
  public function getNotificationEmails()
  {
    return $this->notificationEmails;
  }
}

class AccessLocations extends \Google\Model
{
  /** @var string */
  public $principalOfficeCountry;
  /** @var string */
  public $principalPhysicalLocationCountry;

  /** @param string */
  public function setPrincipalOfficeCountry($principalOfficeCountry)
  {
    $this->principalOfficeCountry = $principalOfficeCountry;
  }
  /** @return string */
  public function getPrincipalOfficeCountry()
  {
    return $this->principalOfficeCountry;
  }
  /** @param string */
  public function setPrincipalPhysicalLocationCountry($principalPhysicalLocationCountry)
  {
    $this->principalPhysicalLocationCountry = $principalPhysicalLocationCountry;
  }
  /** @return string */
  public function getPrincipalPhysicalLocationCountry()
  {
    return $this->principalPhysicalLocationCountry;
  }
}

class AccessReason extends \Google\Model
{
  /** @var string */
  public $detail;
  /** @var string */
  public $type;

  /** @param string */
  public function setDetail($detail)
  {
    $this->detail = $detail;
  }
  /** @return string */
  public function getDetail()
  {
    return $this->detail;
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

class AccessapprovalEmpty extends \Google\Model
{
}

class ApprovalRequest extends \Google\Model
{
  /** @var ApproveDecision */
  public $approve;
  /** @var DismissDecision */
  public $dismiss;
  /** @var string */
  public $name;
  /** @var string */
  public $requestTime;
  /** @var string */
  public $requestedExpiration;
  /** @var AccessLocations */
  public $requestedLocations;
  /** @var AccessReason */
  public $requestedReason;
  /** @var string */
  public $requestedResourceName;
  /** @var ResourceProperties */
  public $requestedResourceProperties;
  protected $approveType = ApproveDecision::class;
  protected $approveDataType = '';
  protected $dismissType = DismissDecision::class;
  protected $dismissDataType = '';
  protected $requestedLocationsType = AccessLocations::class;
  protected $requestedLocationsDataType = '';
  protected $requestedReasonType = AccessReason::class;
  protected $requestedReasonDataType = '';
  protected $requestedResourcePropertiesType = ResourceProperties::class;
  protected $requestedResourcePropertiesDataType = '';
  /** @param ApproveDecision */
  public function setApprove(ApproveDecision $approve)
  {
    $this->approve = $approve;
  }
  /** @return ApproveDecision */
  public function getApprove()
  {
    return $this->approve;
  }
  /** @param DismissDecision */
  public function setDismiss(DismissDecision $dismiss)
  {
    $this->dismiss = $dismiss;
  }
  /** @return DismissDecision */
  public function getDismiss()
  {
    return $this->dismiss;
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
  public function setRequestTime($requestTime)
  {
    $this->requestTime = $requestTime;
  }
  /** @return string */
  public function getRequestTime()
  {
    return $this->requestTime;
  }
  /** @param string */
  public function setRequestedExpiration($requestedExpiration)
  {
    $this->requestedExpiration = $requestedExpiration;
  }
  /** @return string */
  public function getRequestedExpiration()
  {
    return $this->requestedExpiration;
  }
  /** @param AccessLocations */
  public function setRequestedLocations(AccessLocations $requestedLocations)
  {
    $this->requestedLocations = $requestedLocations;
  }
  /** @return AccessLocations */
  public function getRequestedLocations()
  {
    return $this->requestedLocations;
  }
  /** @param AccessReason */
  public function setRequestedReason(AccessReason $requestedReason)
  {
    $this->requestedReason = $requestedReason;
  }
  /** @return AccessReason */
  public function getRequestedReason()
  {
    return $this->requestedReason;
  }
  /** @param string */
  public function setRequestedResourceName($requestedResourceName)
  {
    $this->requestedResourceName = $requestedResourceName;
  }
  /** @return string */
  public function getRequestedResourceName()
  {
    return $this->requestedResourceName;
  }
  /** @param ResourceProperties */
  public function setRequestedResourceProperties(ResourceProperties $requestedResourceProperties)
  {
    $this->requestedResourceProperties = $requestedResourceProperties;
  }
  /** @return ResourceProperties */
  public function getRequestedResourceProperties()
  {
    return $this->requestedResourceProperties;
  }
}

class ApproveApprovalRequestMessage extends \Google\Model
{
  /** @var string */
  public $expireTime;

  /** @param string */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /** @return string */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
}

class ApproveDecision extends \Google\Model
{
  /** @var string */
  public $approveTime;
  /** @var bool */
  public $autoApproved;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $invalidateTime;
  /** @var SignatureInfo */
  public $signatureInfo;
  protected $signatureInfoType = SignatureInfo::class;
  protected $signatureInfoDataType = '';
  /** @param string */
  public function setApproveTime($approveTime)
  {
    $this->approveTime = $approveTime;
  }
  /** @return string */
  public function getApproveTime()
  {
    return $this->approveTime;
  }
  /** @param bool */
  public function setAutoApproved($autoApproved)
  {
    $this->autoApproved = $autoApproved;
  }
  /** @return bool */
  public function getAutoApproved()
  {
    return $this->autoApproved;
  }
  /** @param string */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /** @return string */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /** @param string */
  public function setInvalidateTime($invalidateTime)
  {
    $this->invalidateTime = $invalidateTime;
  }
  /** @return string */
  public function getInvalidateTime()
  {
    return $this->invalidateTime;
  }
  /** @param SignatureInfo */
  public function setSignatureInfo(SignatureInfo $signatureInfo)
  {
    $this->signatureInfo = $signatureInfo;
  }
  /** @return SignatureInfo */
  public function getSignatureInfo()
  {
    return $this->signatureInfo;
  }
}

class DismissApprovalRequestMessage extends \Google\Model
{
}

class DismissDecision extends \Google\Model
{
  /** @var string */
  public $dismissTime;
  /** @var bool */
  public $implicit;

  /** @param string */
  public function setDismissTime($dismissTime)
  {
    $this->dismissTime = $dismissTime;
  }
  /** @return string */
  public function getDismissTime()
  {
    return $this->dismissTime;
  }
  /** @param bool */
  public function setImplicit($implicit)
  {
    $this->implicit = $implicit;
  }
  /** @return bool */
  public function getImplicit()
  {
    return $this->implicit;
  }
}

class EnrolledService extends \Google\Model
{
  /** @var string */
  public $cloudProduct;
  /** @var string */
  public $enrollmentLevel;

  /** @param string */
  public function setCloudProduct($cloudProduct)
  {
    $this->cloudProduct = $cloudProduct;
  }
  /** @return string */
  public function getCloudProduct()
  {
    return $this->cloudProduct;
  }
  /** @param string */
  public function setEnrollmentLevel($enrollmentLevel)
  {
    $this->enrollmentLevel = $enrollmentLevel;
  }
  /** @return string */
  public function getEnrollmentLevel()
  {
    return $this->enrollmentLevel;
  }
}

class InvalidateApprovalRequestMessage extends \Google\Model
{
}

class ListApprovalRequestsResponse extends \Google\Collection
{
  /** @var ApprovalRequest[] */
  public $approvalRequests;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'approvalRequests';
  protected $approvalRequestsType = ApprovalRequest::class;
  protected $approvalRequestsDataType = 'array';
  /** @param ApprovalRequest[] */
  public function setApprovalRequests($approvalRequests)
  {
    $this->approvalRequests = $approvalRequests;
  }
  /** @return ApprovalRequest[] */
  public function getApprovalRequests()
  {
    return $this->approvalRequests;
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

class ResourceProperties extends \Google\Model
{
  /** @var bool */
  public $excludesDescendants;

  /** @param bool */
  public function setExcludesDescendants($excludesDescendants)
  {
    $this->excludesDescendants = $excludesDescendants;
  }
  /** @return bool */
  public function getExcludesDescendants()
  {
    return $this->excludesDescendants;
  }
}

class SignatureInfo extends \Google\Model
{
  /** @var string */
  public $customerKmsKeyVersion;
  /** @var string */
  public $googlePublicKeyPem;
  /** @var string */
  public $signature;

  /** @param string */
  public function setCustomerKmsKeyVersion($customerKmsKeyVersion)
  {
    $this->customerKmsKeyVersion = $customerKmsKeyVersion;
  }
  /** @return string */
  public function getCustomerKmsKeyVersion()
  {
    return $this->customerKmsKeyVersion;
  }
  /** @param string */
  public function setGooglePublicKeyPem($googlePublicKeyPem)
  {
    $this->googlePublicKeyPem = $googlePublicKeyPem;
  }
  /** @return string */
  public function getGooglePublicKeyPem()
  {
    return $this->googlePublicKeyPem;
  }
  /** @param string */
  public function setSignature($signature)
  {
    $this->signature = $signature;
  }
  /** @return string */
  public function getSignature()
  {
    return $this->signature;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccessApprovalServiceAccount::class, 'Google_Service_AccessApproval_AccessApprovalServiceAccount');
class_alias(AccessApprovalSettings::class, 'Google_Service_AccessApproval_AccessApprovalSettings');
class_alias(AccessLocations::class, 'Google_Service_AccessApproval_AccessLocations');
class_alias(AccessReason::class, 'Google_Service_AccessApproval_AccessReason');
class_alias(AccessapprovalEmpty::class, 'Google_Service_AccessApproval_AccessapprovalEmpty');
class_alias(ApprovalRequest::class, 'Google_Service_AccessApproval_ApprovalRequest');
class_alias(ApproveApprovalRequestMessage::class, 'Google_Service_AccessApproval_ApproveApprovalRequestMessage');
class_alias(ApproveDecision::class, 'Google_Service_AccessApproval_ApproveDecision');
class_alias(DismissApprovalRequestMessage::class, 'Google_Service_AccessApproval_DismissApprovalRequestMessage');
class_alias(DismissDecision::class, 'Google_Service_AccessApproval_DismissDecision');
class_alias(EnrolledService::class, 'Google_Service_AccessApproval_EnrolledService');
class_alias(InvalidateApprovalRequestMessage::class, 'Google_Service_AccessApproval_InvalidateApprovalRequestMessage');
class_alias(ListApprovalRequestsResponse::class, 'Google_Service_AccessApproval_ListApprovalRequestsResponse');
class_alias(ResourceProperties::class, 'Google_Service_AccessApproval_ResourceProperties');
class_alias(SignatureInfo::class, 'Google_Service_AccessApproval_SignatureInfo');
