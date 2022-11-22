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

namespace Google\Service\CloudDomains;

class AuditConfig extends \Google\Collection
{
  /** @var AuditLogConfig[] */
  public $auditLogConfigs;
  /** @var string */
  public $service;
  protected $collection_key = 'auditLogConfigs';
  protected $auditLogConfigsType = AuditLogConfig::class;
  protected $auditLogConfigsDataType = 'array';
  /** @param AuditLogConfig[] */
  public function setAuditLogConfigs($auditLogConfigs)
  {
    $this->auditLogConfigs = $auditLogConfigs;
  }
  /** @return AuditLogConfig[] */
  public function getAuditLogConfigs()
  {
    return $this->auditLogConfigs;
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

class AuditLogConfig extends \Google\Collection
{
  /** @var string[] */
  public $exemptedMembers;
  /** @var string */
  public $logType;
  protected $collection_key = 'exemptedMembers';
  /** @param string[] */
  public function setExemptedMembers($exemptedMembers)
  {
    $this->exemptedMembers = $exemptedMembers;
  }
  /** @return string[] */
  public function getExemptedMembers()
  {
    return $this->exemptedMembers;
  }
  /** @param string */
  public function setLogType($logType)
  {
    $this->logType = $logType;
  }
  /** @return string */
  public function getLogType()
  {
    return $this->logType;
  }
}

class AuthorizationCode extends \Google\Model
{
  /** @var string */
  public $code;

  /** @param string */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return string */
  public function getCode()
  {
    return $this->code;
  }
}

class Binding extends \Google\Collection
{
  /** @var Expr */
  public $condition;
  /** @var string[] */
  public $members;
  /** @var string */
  public $role;
  protected $collection_key = 'members';
  protected $conditionType = Expr::class;
  protected $conditionDataType = '';
  /** @param Expr */
  public function setCondition(Expr $condition)
  {
    $this->condition = $condition;
  }
  /** @return Expr */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param string[] */
  public function setMembers($members)
  {
    $this->members = $members;
  }
  /** @return string[] */
  public function getMembers()
  {
    return $this->members;
  }
  /** @param string */
  public function setRole($role)
  {
    $this->role = $role;
  }
  /** @return string */
  public function getRole()
  {
    return $this->role;
  }
}

class ConfigureContactSettingsRequest extends \Google\Collection
{
  /** @var string[] */
  public $contactNotices;
  /** @var ContactSettings */
  public $contactSettings;
  /** @var string */
  public $updateMask;
  /** @var bool */
  public $validateOnly;
  protected $collection_key = 'contactNotices';
  protected $contactSettingsType = ContactSettings::class;
  protected $contactSettingsDataType = '';
  /** @param string[] */
  public function setContactNotices($contactNotices)
  {
    $this->contactNotices = $contactNotices;
  }
  /** @return string[] */
  public function getContactNotices()
  {
    return $this->contactNotices;
  }
  /** @param ContactSettings */
  public function setContactSettings(ContactSettings $contactSettings)
  {
    $this->contactSettings = $contactSettings;
  }
  /** @return ContactSettings */
  public function getContactSettings()
  {
    return $this->contactSettings;
  }
  /** @param string */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /** @return string */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
  /** @param bool */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /** @return bool */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

class ConfigureDnsSettingsRequest extends \Google\Model
{
  /** @var DnsSettings */
  public $dnsSettings;
  /** @var string */
  public $updateMask;
  /** @var bool */
  public $validateOnly;
  protected $dnsSettingsType = DnsSettings::class;
  protected $dnsSettingsDataType = '';
  /** @param DnsSettings */
  public function setDnsSettings(DnsSettings $dnsSettings)
  {
    $this->dnsSettings = $dnsSettings;
  }
  /** @return DnsSettings */
  public function getDnsSettings()
  {
    return $this->dnsSettings;
  }
  /** @param string */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /** @return string */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
  /** @param bool */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /** @return bool */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

class ConfigureManagementSettingsRequest extends \Google\Model
{
  /** @var ManagementSettings */
  public $managementSettings;
  /** @var string */
  public $updateMask;
  protected $managementSettingsType = ManagementSettings::class;
  protected $managementSettingsDataType = '';
  /** @param ManagementSettings */
  public function setManagementSettings(ManagementSettings $managementSettings)
  {
    $this->managementSettings = $managementSettings;
  }
  /** @return ManagementSettings */
  public function getManagementSettings()
  {
    return $this->managementSettings;
  }
  /** @param string */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /** @return string */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
}

class Contact extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var string */
  public $faxNumber;
  /** @var string */
  public $phoneNumber;
  /** @var PostalAddress */
  public $postalAddress;
  protected $postalAddressType = PostalAddress::class;
  protected $postalAddressDataType = '';
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
  public function setFaxNumber($faxNumber)
  {
    $this->faxNumber = $faxNumber;
  }
  /** @return string */
  public function getFaxNumber()
  {
    return $this->faxNumber;
  }
  /** @param string */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /** @return string */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  /** @param PostalAddress */
  public function setPostalAddress(PostalAddress $postalAddress)
  {
    $this->postalAddress = $postalAddress;
  }
  /** @return PostalAddress */
  public function getPostalAddress()
  {
    return $this->postalAddress;
  }
}

class ContactSettings extends \Google\Model
{
  /** @var Contact */
  public $adminContact;
  /** @var string */
  public $privacy;
  /** @var Contact */
  public $registrantContact;
  /** @var Contact */
  public $technicalContact;
  protected $adminContactType = Contact::class;
  protected $adminContactDataType = '';
  protected $registrantContactType = Contact::class;
  protected $registrantContactDataType = '';
  protected $technicalContactType = Contact::class;
  protected $technicalContactDataType = '';
  /** @param Contact */
  public function setAdminContact(Contact $adminContact)
  {
    $this->adminContact = $adminContact;
  }
  /** @return Contact */
  public function getAdminContact()
  {
    return $this->adminContact;
  }
  /** @param string */
  public function setPrivacy($privacy)
  {
    $this->privacy = $privacy;
  }
  /** @return string */
  public function getPrivacy()
  {
    return $this->privacy;
  }
  /** @param Contact */
  public function setRegistrantContact(Contact $registrantContact)
  {
    $this->registrantContact = $registrantContact;
  }
  /** @return Contact */
  public function getRegistrantContact()
  {
    return $this->registrantContact;
  }
  /** @param Contact */
  public function setTechnicalContact(Contact $technicalContact)
  {
    $this->technicalContact = $technicalContact;
  }
  /** @return Contact */
  public function getTechnicalContact()
  {
    return $this->technicalContact;
  }
}

class CustomDns extends \Google\Collection
{
  /** @var DsRecord[] */
  public $dsRecords;
  /** @var string[] */
  public $nameServers;
  protected $collection_key = 'nameServers';
  protected $dsRecordsType = DsRecord::class;
  protected $dsRecordsDataType = 'array';
  /** @param DsRecord[] */
  public function setDsRecords($dsRecords)
  {
    $this->dsRecords = $dsRecords;
  }
  /** @return DsRecord[] */
  public function getDsRecords()
  {
    return $this->dsRecords;
  }
  /** @param string[] */
  public function setNameServers($nameServers)
  {
    $this->nameServers = $nameServers;
  }
  /** @return string[] */
  public function getNameServers()
  {
    return $this->nameServers;
  }
}

class DnsSettings extends \Google\Collection
{
  /** @var CustomDns */
  public $customDns;
  /** @var GlueRecord[] */
  public $glueRecords;
  /** @var GoogleDomainsDns */
  public $googleDomainsDns;
  protected $collection_key = 'glueRecords';
  protected $customDnsType = CustomDns::class;
  protected $customDnsDataType = '';
  protected $glueRecordsType = GlueRecord::class;
  protected $glueRecordsDataType = 'array';
  protected $googleDomainsDnsType = GoogleDomainsDns::class;
  protected $googleDomainsDnsDataType = '';
  /** @param CustomDns */
  public function setCustomDns(CustomDns $customDns)
  {
    $this->customDns = $customDns;
  }
  /** @return CustomDns */
  public function getCustomDns()
  {
    return $this->customDns;
  }
  /** @param GlueRecord[] */
  public function setGlueRecords($glueRecords)
  {
    $this->glueRecords = $glueRecords;
  }
  /** @return GlueRecord[] */
  public function getGlueRecords()
  {
    return $this->glueRecords;
  }
  /** @param GoogleDomainsDns */
  public function setGoogleDomainsDns(GoogleDomainsDns $googleDomainsDns)
  {
    $this->googleDomainsDns = $googleDomainsDns;
  }
  /** @return GoogleDomainsDns */
  public function getGoogleDomainsDns()
  {
    return $this->googleDomainsDns;
  }
}

class Domain extends \Google\Model
{
  /** @var string */
  public $domainName;
  /** @var string */
  public $resourceState;
  /** @var Money */
  public $yearlyPrice;
  protected $yearlyPriceType = Money::class;
  protected $yearlyPriceDataType = '';
  /** @param string */
  public function setDomainName($domainName)
  {
    $this->domainName = $domainName;
  }
  /** @return string */
  public function getDomainName()
  {
    return $this->domainName;
  }
  /** @param string */
  public function setResourceState($resourceState)
  {
    $this->resourceState = $resourceState;
  }
  /** @return string */
  public function getResourceState()
  {
    return $this->resourceState;
  }
  /** @param Money */
  public function setYearlyPrice(Money $yearlyPrice)
  {
    $this->yearlyPrice = $yearlyPrice;
  }
  /** @return Money */
  public function getYearlyPrice()
  {
    return $this->yearlyPrice;
  }
}

class DsRecord extends \Google\Model
{
  /** @var string */
  public $algorithm;
  /** @var string */
  public $digest;
  /** @var string */
  public $digestType;
  /** @var int */
  public $keyTag;

  /** @param string */
  public function setAlgorithm($algorithm)
  {
    $this->algorithm = $algorithm;
  }
  /** @return string */
  public function getAlgorithm()
  {
    return $this->algorithm;
  }
  /** @param string */
  public function setDigest($digest)
  {
    $this->digest = $digest;
  }
  /** @return string */
  public function getDigest()
  {
    return $this->digest;
  }
  /** @param string */
  public function setDigestType($digestType)
  {
    $this->digestType = $digestType;
  }
  /** @return string */
  public function getDigestType()
  {
    return $this->digestType;
  }
  /** @param int */
  public function setKeyTag($keyTag)
  {
    $this->keyTag = $keyTag;
  }
  /** @return int */
  public function getKeyTag()
  {
    return $this->keyTag;
  }
}

class ExportRegistrationRequest extends \Google\Model
{
}

class Expr extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $expression;
  /** @var string */
  public $location;
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
  public function setExpression($expression)
  {
    $this->expression = $expression;
  }
  /** @return string */
  public function getExpression()
  {
    return $this->expression;
  }
  /** @param string */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /** @return string */
  public function getLocation()
  {
    return $this->location;
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

class GlueRecord extends \Google\Collection
{
  /** @var string */
  public $hostName;
  /** @var string[] */
  public $ipv4Addresses;
  /** @var string[] */
  public $ipv6Addresses;
  protected $collection_key = 'ipv6Addresses';
  /** @param string */
  public function setHostName($hostName)
  {
    $this->hostName = $hostName;
  }
  /** @return string */
  public function getHostName()
  {
    return $this->hostName;
  }
  /** @param string[] */
  public function setIpv4Addresses($ipv4Addresses)
  {
    $this->ipv4Addresses = $ipv4Addresses;
  }
  /** @return string[] */
  public function getIpv4Addresses()
  {
    return $this->ipv4Addresses;
  }
  /** @param string[] */
  public function setIpv6Addresses($ipv6Addresses)
  {
    $this->ipv6Addresses = $ipv6Addresses;
  }
  /** @return string[] */
  public function getIpv6Addresses()
  {
    return $this->ipv6Addresses;
  }
}

class GoogleDomainsDns extends \Google\Collection
{
  /** @var DsRecord[] */
  public $dsRecords;
  /** @var string */
  public $dsState;
  /** @var string[] */
  public $nameServers;
  protected $collection_key = 'nameServers';
  protected $dsRecordsType = DsRecord::class;
  protected $dsRecordsDataType = 'array';
  /** @param DsRecord[] */
  public function setDsRecords($dsRecords)
  {
    $this->dsRecords = $dsRecords;
  }
  /** @return DsRecord[] */
  public function getDsRecords()
  {
    return $this->dsRecords;
  }
  /** @param string */
  public function setDsState($dsState)
  {
    $this->dsState = $dsState;
  }
  /** @return string */
  public function getDsState()
  {
    return $this->dsState;
  }
  /** @param string[] */
  public function setNameServers($nameServers)
  {
    $this->nameServers = $nameServers;
  }
  /** @return string[] */
  public function getNameServers()
  {
    return $this->nameServers;
  }
}

class ImportDomainRequest extends \Google\Model
{
  /** @var string */
  public $domainName;
  /** @var string[] */
  public $labels;

  /** @param string */
  public function setDomainName($domainName)
  {
    $this->domainName = $domainName;
  }
  /** @return string */
  public function getDomainName()
  {
    return $this->domainName;
  }
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
  }
}

class ListLocationsResponse extends \Google\Collection
{
  /** @var Location[] */
  public $locations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'locations';
  protected $locationsType = Location::class;
  protected $locationsDataType = 'array';
  /** @param Location[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return Location[] */
  public function getLocations()
  {
    return $this->locations;
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

class ListOperationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Operation[] */
  public $operations;
  protected $collection_key = 'operations';
  protected $operationsType = Operation::class;
  protected $operationsDataType = 'array';
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
  /** @param Operation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return Operation[] */
  public function getOperations()
  {
    return $this->operations;
  }
}

class ListRegistrationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Registration[] */
  public $registrations;
  protected $collection_key = 'registrations';
  protected $registrationsType = Registration::class;
  protected $registrationsDataType = 'array';
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
  /** @param Registration[] */
  public function setRegistrations($registrations)
  {
    $this->registrations = $registrations;
  }
  /** @return Registration[] */
  public function getRegistrations()
  {
    return $this->registrations;
  }
}

class Location extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $locationId;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;

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
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string */
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
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
}

class ManagementSettings extends \Google\Model
{
  /** @var string */
  public $renewalMethod;
  /** @var string */
  public $transferLockState;

  /** @param string */
  public function setRenewalMethod($renewalMethod)
  {
    $this->renewalMethod = $renewalMethod;
  }
  /** @return string */
  public function getRenewalMethod()
  {
    return $this->renewalMethod;
  }
  /** @param string */
  public function setTransferLockState($transferLockState)
  {
    $this->transferLockState = $transferLockState;
  }
  /** @return string */
  public function getTransferLockState()
  {
    return $this->transferLockState;
  }
}

class Money extends \Google\Model
{
  /** @var string */
  public $currencyCode;
  /** @var int */
  public $nanos;
  /** @var string */
  public $units;

  /** @param string */
  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }
  /** @return string */
  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }
  /** @param int */
  public function setNanos($nanos)
  {
    $this->nanos = $nanos;
  }
  /** @return int */
  public function getNanos()
  {
    return $this->nanos;
  }
  /** @param string */
  public function setUnits($units)
  {
    $this->units = $units;
  }
  /** @return string */
  public function getUnits()
  {
    return $this->units;
  }
}

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

class OperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var string */
  public $statusDetail;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;

  /** @param string */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /** @return string */
  public function getApiVersion()
  {
    return $this->apiVersion;
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
  public function setStatusDetail($statusDetail)
  {
    $this->statusDetail = $statusDetail;
  }
  /** @return string */
  public function getStatusDetail()
  {
    return $this->statusDetail;
  }
  /** @param string */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param string */
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  /** @return string */
  public function getVerb()
  {
    return $this->verb;
  }
}

class Policy extends \Google\Collection
{
  /** @var AuditConfig[] */
  public $auditConfigs;
  /** @var Binding[] */
  public $bindings;
  /** @var string */
  public $etag;
  /** @var int */
  public $version;
  protected $collection_key = 'bindings';
  protected $auditConfigsType = AuditConfig::class;
  protected $auditConfigsDataType = 'array';
  protected $bindingsType = Binding::class;
  protected $bindingsDataType = 'array';
  /** @param AuditConfig[] */
  public function setAuditConfigs($auditConfigs)
  {
    $this->auditConfigs = $auditConfigs;
  }
  /** @return AuditConfig[] */
  public function getAuditConfigs()
  {
    return $this->auditConfigs;
  }
  /** @param Binding[] */
  public function setBindings($bindings)
  {
    $this->bindings = $bindings;
  }
  /** @return Binding[] */
  public function getBindings()
  {
    return $this->bindings;
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
  /** @param int */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return int */
  public function getVersion()
  {
    return $this->version;
  }
}

class PostalAddress extends \Google\Collection
{
  /** @var string[] */
  public $addressLines;
  /** @var string */
  public $administrativeArea;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $locality;
  /** @var string */
  public $organization;
  /** @var string */
  public $postalCode;
  /** @var string[] */
  public $recipients;
  /** @var string */
  public $regionCode;
  /** @var int */
  public $revision;
  /** @var string */
  public $sortingCode;
  /** @var string */
  public $sublocality;
  protected $collection_key = 'recipients';
  /** @param string[] */
  public function setAddressLines($addressLines)
  {
    $this->addressLines = $addressLines;
  }
  /** @return string[] */
  public function getAddressLines()
  {
    return $this->addressLines;
  }
  /** @param string */
  public function setAdministrativeArea($administrativeArea)
  {
    $this->administrativeArea = $administrativeArea;
  }
  /** @return string */
  public function getAdministrativeArea()
  {
    return $this->administrativeArea;
  }
  /** @param string */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /** @param string */
  public function setLocality($locality)
  {
    $this->locality = $locality;
  }
  /** @return string */
  public function getLocality()
  {
    return $this->locality;
  }
  /** @param string */
  public function setOrganization($organization)
  {
    $this->organization = $organization;
  }
  /** @return string */
  public function getOrganization()
  {
    return $this->organization;
  }
  /** @param string */
  public function setPostalCode($postalCode)
  {
    $this->postalCode = $postalCode;
  }
  /** @return string */
  public function getPostalCode()
  {
    return $this->postalCode;
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
  /** @param string */
  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }
  /** @return string */
  public function getRegionCode()
  {
    return $this->regionCode;
  }
  /** @param int */
  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  /** @return int */
  public function getRevision()
  {
    return $this->revision;
  }
  /** @param string */
  public function setSortingCode($sortingCode)
  {
    $this->sortingCode = $sortingCode;
  }
  /** @return string */
  public function getSortingCode()
  {
    return $this->sortingCode;
  }
  /** @param string */
  public function setSublocality($sublocality)
  {
    $this->sublocality = $sublocality;
  }
  /** @return string */
  public function getSublocality()
  {
    return $this->sublocality;
  }
}

class RegisterDomainRequest extends \Google\Collection
{
  /** @var string[] */
  public $contactNotices;
  /** @var string[] */
  public $domainNotices;
  /** @var Registration */
  public $registration;
  /** @var bool */
  public $validateOnly;
  /** @var Money */
  public $yearlyPrice;
  protected $collection_key = 'domainNotices';
  protected $registrationType = Registration::class;
  protected $registrationDataType = '';
  protected $yearlyPriceType = Money::class;
  protected $yearlyPriceDataType = '';
  /** @param string[] */
  public function setContactNotices($contactNotices)
  {
    $this->contactNotices = $contactNotices;
  }
  /** @return string[] */
  public function getContactNotices()
  {
    return $this->contactNotices;
  }
  /** @param string[] */
  public function setDomainNotices($domainNotices)
  {
    $this->domainNotices = $domainNotices;
  }
  /** @return string[] */
  public function getDomainNotices()
  {
    return $this->domainNotices;
  }
  /** @param Registration */
  public function setRegistration(Registration $registration)
  {
    $this->registration = $registration;
  }
  /** @return Registration */
  public function getRegistration()
  {
    return $this->registration;
  }
  /** @param bool */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /** @return bool */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
  /** @param Money */
  public function setYearlyPrice(Money $yearlyPrice)
  {
    $this->yearlyPrice = $yearlyPrice;
  }
  /** @return Money */
  public function getYearlyPrice()
  {
    return $this->yearlyPrice;
  }
}

class RegisterParameters extends \Google\Collection
{
  /** @var string */
  public $availability;
  /** @var string */
  public $domainName;
  /** @var string[] */
  public $domainNotices;
  /** @var string[] */
  public $supportedPrivacy;
  /** @var Money */
  public $yearlyPrice;
  protected $collection_key = 'supportedPrivacy';
  protected $yearlyPriceType = Money::class;
  protected $yearlyPriceDataType = '';
  /** @param string */
  public function setAvailability($availability)
  {
    $this->availability = $availability;
  }
  /** @return string */
  public function getAvailability()
  {
    return $this->availability;
  }
  /** @param string */
  public function setDomainName($domainName)
  {
    $this->domainName = $domainName;
  }
  /** @return string */
  public function getDomainName()
  {
    return $this->domainName;
  }
  /** @param string[] */
  public function setDomainNotices($domainNotices)
  {
    $this->domainNotices = $domainNotices;
  }
  /** @return string[] */
  public function getDomainNotices()
  {
    return $this->domainNotices;
  }
  /** @param string[] */
  public function setSupportedPrivacy($supportedPrivacy)
  {
    $this->supportedPrivacy = $supportedPrivacy;
  }
  /** @return string[] */
  public function getSupportedPrivacy()
  {
    return $this->supportedPrivacy;
  }
  /** @param Money */
  public function setYearlyPrice(Money $yearlyPrice)
  {
    $this->yearlyPrice = $yearlyPrice;
  }
  /** @return Money */
  public function getYearlyPrice()
  {
    return $this->yearlyPrice;
  }
}

class Registration extends \Google\Collection
{
  /** @var ContactSettings */
  public $contactSettings;
  /** @var string */
  public $createTime;
  /** @var DnsSettings */
  public $dnsSettings;
  /** @var string */
  public $domainName;
  /** @var string */
  public $expireTime;
  /** @var string[] */
  public $issues;
  /** @var string[] */
  public $labels;
  /** @var ManagementSettings */
  public $managementSettings;
  /** @var string */
  public $name;
  /** @var ContactSettings */
  public $pendingContactSettings;
  /** @var string */
  public $registerFailureReason;
  /** @var string */
  public $state;
  /** @var string[] */
  public $supportedPrivacy;
  /** @var string */
  public $transferFailureReason;
  protected $collection_key = 'supportedPrivacy';
  protected $contactSettingsType = ContactSettings::class;
  protected $contactSettingsDataType = '';
  protected $dnsSettingsType = DnsSettings::class;
  protected $dnsSettingsDataType = '';
  protected $managementSettingsType = ManagementSettings::class;
  protected $managementSettingsDataType = '';
  protected $pendingContactSettingsType = ContactSettings::class;
  protected $pendingContactSettingsDataType = '';
  /** @param ContactSettings */
  public function setContactSettings(ContactSettings $contactSettings)
  {
    $this->contactSettings = $contactSettings;
  }
  /** @return ContactSettings */
  public function getContactSettings()
  {
    return $this->contactSettings;
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
  /** @param DnsSettings */
  public function setDnsSettings(DnsSettings $dnsSettings)
  {
    $this->dnsSettings = $dnsSettings;
  }
  /** @return DnsSettings */
  public function getDnsSettings()
  {
    return $this->dnsSettings;
  }
  /** @param string */
  public function setDomainName($domainName)
  {
    $this->domainName = $domainName;
  }
  /** @return string */
  public function getDomainName()
  {
    return $this->domainName;
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
  /** @param string[] */
  public function setIssues($issues)
  {
    $this->issues = $issues;
  }
  /** @return string[] */
  public function getIssues()
  {
    return $this->issues;
  }
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param ManagementSettings */
  public function setManagementSettings(ManagementSettings $managementSettings)
  {
    $this->managementSettings = $managementSettings;
  }
  /** @return ManagementSettings */
  public function getManagementSettings()
  {
    return $this->managementSettings;
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
  /** @param ContactSettings */
  public function setPendingContactSettings(ContactSettings $pendingContactSettings)
  {
    $this->pendingContactSettings = $pendingContactSettings;
  }
  /** @return ContactSettings */
  public function getPendingContactSettings()
  {
    return $this->pendingContactSettings;
  }
  /** @param string */
  public function setRegisterFailureReason($registerFailureReason)
  {
    $this->registerFailureReason = $registerFailureReason;
  }
  /** @return string */
  public function getRegisterFailureReason()
  {
    return $this->registerFailureReason;
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
  /** @param string[] */
  public function setSupportedPrivacy($supportedPrivacy)
  {
    $this->supportedPrivacy = $supportedPrivacy;
  }
  /** @return string[] */
  public function getSupportedPrivacy()
  {
    return $this->supportedPrivacy;
  }
  /** @param string */
  public function setTransferFailureReason($transferFailureReason)
  {
    $this->transferFailureReason = $transferFailureReason;
  }
  /** @return string */
  public function getTransferFailureReason()
  {
    return $this->transferFailureReason;
  }
}

class ResetAuthorizationCodeRequest extends \Google\Model
{
}

class RetrieveImportableDomainsResponse extends \Google\Collection
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

class RetrieveRegisterParametersResponse extends \Google\Model
{
  /** @var RegisterParameters */
  public $registerParameters;
  protected $registerParametersType = RegisterParameters::class;
  protected $registerParametersDataType = '';
  /** @param RegisterParameters */
  public function setRegisterParameters(RegisterParameters $registerParameters)
  {
    $this->registerParameters = $registerParameters;
  }
  /** @return RegisterParameters */
  public function getRegisterParameters()
  {
    return $this->registerParameters;
  }
}

class RetrieveTransferParametersResponse extends \Google\Model
{
  /** @var TransferParameters */
  public $transferParameters;
  protected $transferParametersType = TransferParameters::class;
  protected $transferParametersDataType = '';
  /** @param TransferParameters */
  public function setTransferParameters(TransferParameters $transferParameters)
  {
    $this->transferParameters = $transferParameters;
  }
  /** @return TransferParameters */
  public function getTransferParameters()
  {
    return $this->transferParameters;
  }
}

class SearchDomainsResponse extends \Google\Collection
{
  /** @var RegisterParameters[] */
  public $registerParameters;
  protected $collection_key = 'registerParameters';
  protected $registerParametersType = RegisterParameters::class;
  protected $registerParametersDataType = 'array';
  /** @param RegisterParameters[] */
  public function setRegisterParameters($registerParameters)
  {
    $this->registerParameters = $registerParameters;
  }
  /** @return RegisterParameters[] */
  public function getRegisterParameters()
  {
    return $this->registerParameters;
  }
}

class SetIamPolicyRequest extends \Google\Model
{
  /** @var Policy */
  public $policy;
  /** @var string */
  public $updateMask;
  protected $policyType = Policy::class;
  protected $policyDataType = '';
  /** @param Policy */
  public function setPolicy(Policy $policy)
  {
    $this->policy = $policy;
  }
  /** @return Policy */
  public function getPolicy()
  {
    return $this->policy;
  }
  /** @param string */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /** @return string */
  public function getUpdateMask()
  {
    return $this->updateMask;
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

class TestIamPermissionsRequest extends \Google\Collection
{
  /** @var string[] */
  public $permissions;
  protected $collection_key = 'permissions';
  /** @param string[] */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return string[] */
  public function getPermissions()
  {
    return $this->permissions;
  }
}

class TestIamPermissionsResponse extends \Google\Collection
{
  /** @var string[] */
  public $permissions;
  protected $collection_key = 'permissions';
  /** @param string[] */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return string[] */
  public function getPermissions()
  {
    return $this->permissions;
  }
}

class TransferDomainRequest extends \Google\Collection
{
  /** @var AuthorizationCode */
  public $authorizationCode;
  /** @var string[] */
  public $contactNotices;
  /** @var Registration */
  public $registration;
  /** @var bool */
  public $validateOnly;
  /** @var Money */
  public $yearlyPrice;
  protected $collection_key = 'contactNotices';
  protected $authorizationCodeType = AuthorizationCode::class;
  protected $authorizationCodeDataType = '';
  protected $registrationType = Registration::class;
  protected $registrationDataType = '';
  protected $yearlyPriceType = Money::class;
  protected $yearlyPriceDataType = '';
  /** @param AuthorizationCode */
  public function setAuthorizationCode(AuthorizationCode $authorizationCode)
  {
    $this->authorizationCode = $authorizationCode;
  }
  /** @return AuthorizationCode */
  public function getAuthorizationCode()
  {
    return $this->authorizationCode;
  }
  /** @param string[] */
  public function setContactNotices($contactNotices)
  {
    $this->contactNotices = $contactNotices;
  }
  /** @return string[] */
  public function getContactNotices()
  {
    return $this->contactNotices;
  }
  /** @param Registration */
  public function setRegistration(Registration $registration)
  {
    $this->registration = $registration;
  }
  /** @return Registration */
  public function getRegistration()
  {
    return $this->registration;
  }
  /** @param bool */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /** @return bool */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
  /** @param Money */
  public function setYearlyPrice(Money $yearlyPrice)
  {
    $this->yearlyPrice = $yearlyPrice;
  }
  /** @return Money */
  public function getYearlyPrice()
  {
    return $this->yearlyPrice;
  }
}

class TransferParameters extends \Google\Collection
{
  /** @var string */
  public $currentRegistrar;
  /** @var string */
  public $currentRegistrarUri;
  /** @var string */
  public $domainName;
  /** @var string[] */
  public $nameServers;
  /** @var string[] */
  public $supportedPrivacy;
  /** @var string */
  public $transferLockState;
  /** @var Money */
  public $yearlyPrice;
  protected $collection_key = 'supportedPrivacy';
  protected $yearlyPriceType = Money::class;
  protected $yearlyPriceDataType = '';
  /** @param string */
  public function setCurrentRegistrar($currentRegistrar)
  {
    $this->currentRegistrar = $currentRegistrar;
  }
  /** @return string */
  public function getCurrentRegistrar()
  {
    return $this->currentRegistrar;
  }
  /** @param string */
  public function setCurrentRegistrarUri($currentRegistrarUri)
  {
    $this->currentRegistrarUri = $currentRegistrarUri;
  }
  /** @return string */
  public function getCurrentRegistrarUri()
  {
    return $this->currentRegistrarUri;
  }
  /** @param string */
  public function setDomainName($domainName)
  {
    $this->domainName = $domainName;
  }
  /** @return string */
  public function getDomainName()
  {
    return $this->domainName;
  }
  /** @param string[] */
  public function setNameServers($nameServers)
  {
    $this->nameServers = $nameServers;
  }
  /** @return string[] */
  public function getNameServers()
  {
    return $this->nameServers;
  }
  /** @param string[] */
  public function setSupportedPrivacy($supportedPrivacy)
  {
    $this->supportedPrivacy = $supportedPrivacy;
  }
  /** @return string[] */
  public function getSupportedPrivacy()
  {
    return $this->supportedPrivacy;
  }
  /** @param string */
  public function setTransferLockState($transferLockState)
  {
    $this->transferLockState = $transferLockState;
  }
  /** @return string */
  public function getTransferLockState()
  {
    return $this->transferLockState;
  }
  /** @param Money */
  public function setYearlyPrice(Money $yearlyPrice)
  {
    $this->yearlyPrice = $yearlyPrice;
  }
  /** @return Money */
  public function getYearlyPrice()
  {
    return $this->yearlyPrice;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuditConfig::class, 'Google_Service_CloudDomains_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_CloudDomains_AuditLogConfig');
class_alias(AuthorizationCode::class, 'Google_Service_CloudDomains_AuthorizationCode');
class_alias(Binding::class, 'Google_Service_CloudDomains_Binding');
class_alias(ConfigureContactSettingsRequest::class, 'Google_Service_CloudDomains_ConfigureContactSettingsRequest');
class_alias(ConfigureDnsSettingsRequest::class, 'Google_Service_CloudDomains_ConfigureDnsSettingsRequest');
class_alias(ConfigureManagementSettingsRequest::class, 'Google_Service_CloudDomains_ConfigureManagementSettingsRequest');
class_alias(Contact::class, 'Google_Service_CloudDomains_Contact');
class_alias(ContactSettings::class, 'Google_Service_CloudDomains_ContactSettings');
class_alias(CustomDns::class, 'Google_Service_CloudDomains_CustomDns');
class_alias(DnsSettings::class, 'Google_Service_CloudDomains_DnsSettings');
class_alias(Domain::class, 'Google_Service_CloudDomains_Domain');
class_alias(DsRecord::class, 'Google_Service_CloudDomains_DsRecord');
class_alias(ExportRegistrationRequest::class, 'Google_Service_CloudDomains_ExportRegistrationRequest');
class_alias(Expr::class, 'Google_Service_CloudDomains_Expr');
class_alias(GlueRecord::class, 'Google_Service_CloudDomains_GlueRecord');
class_alias(GoogleDomainsDns::class, 'Google_Service_CloudDomains_GoogleDomainsDns');
class_alias(ImportDomainRequest::class, 'Google_Service_CloudDomains_ImportDomainRequest');
class_alias(ListLocationsResponse::class, 'Google_Service_CloudDomains_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_CloudDomains_ListOperationsResponse');
class_alias(ListRegistrationsResponse::class, 'Google_Service_CloudDomains_ListRegistrationsResponse');
class_alias(Location::class, 'Google_Service_CloudDomains_Location');
class_alias(ManagementSettings::class, 'Google_Service_CloudDomains_ManagementSettings');
class_alias(Money::class, 'Google_Service_CloudDomains_Money');
class_alias(Operation::class, 'Google_Service_CloudDomains_Operation');
class_alias(OperationMetadata::class, 'Google_Service_CloudDomains_OperationMetadata');
class_alias(Policy::class, 'Google_Service_CloudDomains_Policy');
class_alias(PostalAddress::class, 'Google_Service_CloudDomains_PostalAddress');
class_alias(RegisterDomainRequest::class, 'Google_Service_CloudDomains_RegisterDomainRequest');
class_alias(RegisterParameters::class, 'Google_Service_CloudDomains_RegisterParameters');
class_alias(Registration::class, 'Google_Service_CloudDomains_Registration');
class_alias(ResetAuthorizationCodeRequest::class, 'Google_Service_CloudDomains_ResetAuthorizationCodeRequest');
class_alias(RetrieveImportableDomainsResponse::class, 'Google_Service_CloudDomains_RetrieveImportableDomainsResponse');
class_alias(RetrieveRegisterParametersResponse::class, 'Google_Service_CloudDomains_RetrieveRegisterParametersResponse');
class_alias(RetrieveTransferParametersResponse::class, 'Google_Service_CloudDomains_RetrieveTransferParametersResponse');
class_alias(SearchDomainsResponse::class, 'Google_Service_CloudDomains_SearchDomainsResponse');
class_alias(SetIamPolicyRequest::class, 'Google_Service_CloudDomains_SetIamPolicyRequest');
class_alias(Status::class, 'Google_Service_CloudDomains_Status');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_CloudDomains_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_CloudDomains_TestIamPermissionsResponse');
class_alias(TransferDomainRequest::class, 'Google_Service_CloudDomains_TransferDomainRequest');
class_alias(TransferParameters::class, 'Google_Service_CloudDomains_TransferParameters');
