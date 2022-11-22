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

namespace Google\Service\SecurityCommandCenter;

class Access extends \Google\Collection
{
  /** @var string */
  public $callerIp;
  /** @var Geolocation */
  public $callerIpGeo;
  /** @var string */
  public $methodName;
  /** @var string */
  public $principalEmail;
  /** @var string */
  public $principalSubject;
  /** @var ServiceAccountDelegationInfo[] */
  public $serviceAccountDelegationInfo;
  /** @var string */
  public $serviceAccountKeyName;
  /** @var string */
  public $serviceName;
  /** @var string */
  public $userAgentFamily;
  /** @var string */
  public $userName;
  protected $collection_key = 'serviceAccountDelegationInfo';
  protected $callerIpGeoType = Geolocation::class;
  protected $callerIpGeoDataType = '';
  protected $serviceAccountDelegationInfoType = ServiceAccountDelegationInfo::class;
  protected $serviceAccountDelegationInfoDataType = 'array';
  /** @param string */
  public function setCallerIp($callerIp)
  {
    $this->callerIp = $callerIp;
  }
  /** @return string */
  public function getCallerIp()
  {
    return $this->callerIp;
  }
  /** @param Geolocation */
  public function setCallerIpGeo(Geolocation $callerIpGeo)
  {
    $this->callerIpGeo = $callerIpGeo;
  }
  /** @return Geolocation */
  public function getCallerIpGeo()
  {
    return $this->callerIpGeo;
  }
  /** @param string */
  public function setMethodName($methodName)
  {
    $this->methodName = $methodName;
  }
  /** @return string */
  public function getMethodName()
  {
    return $this->methodName;
  }
  /** @param string */
  public function setPrincipalEmail($principalEmail)
  {
    $this->principalEmail = $principalEmail;
  }
  /** @return string */
  public function getPrincipalEmail()
  {
    return $this->principalEmail;
  }
  /** @param string */
  public function setPrincipalSubject($principalSubject)
  {
    $this->principalSubject = $principalSubject;
  }
  /** @return string */
  public function getPrincipalSubject()
  {
    return $this->principalSubject;
  }
  /** @param ServiceAccountDelegationInfo[] */
  public function setServiceAccountDelegationInfo($serviceAccountDelegationInfo)
  {
    $this->serviceAccountDelegationInfo = $serviceAccountDelegationInfo;
  }
  /** @return ServiceAccountDelegationInfo[] */
  public function getServiceAccountDelegationInfo()
  {
    return $this->serviceAccountDelegationInfo;
  }
  /** @param string */
  public function setServiceAccountKeyName($serviceAccountKeyName)
  {
    $this->serviceAccountKeyName = $serviceAccountKeyName;
  }
  /** @return string */
  public function getServiceAccountKeyName()
  {
    return $this->serviceAccountKeyName;
  }
  /** @param string */
  public function setServiceName($serviceName)
  {
    $this->serviceName = $serviceName;
  }
  /** @return string */
  public function getServiceName()
  {
    return $this->serviceName;
  }
  /** @param string */
  public function setUserAgentFamily($userAgentFamily)
  {
    $this->userAgentFamily = $userAgentFamily;
  }
  /** @return string */
  public function getUserAgentFamily()
  {
    return $this->userAgentFamily;
  }
  /** @param string */
  public function setUserName($userName)
  {
    $this->userName = $userName;
  }
  /** @return string */
  public function getUserName()
  {
    return $this->userName;
  }
}

class AccessReview extends \Google\Model
{
  /** @var string */
  public $group;
  /** @var string */
  public $name;
  /** @var string */
  public $ns;
  /** @var string */
  public $resource;
  /** @var string */
  public $subresource;
  /** @var string */
  public $verb;
  /** @var string */
  public $version;

  /** @param string */
  public function setGroup($group)
  {
    $this->group = $group;
  }
  /** @return string */
  public function getGroup()
  {
    return $this->group;
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
  public function setNs($ns)
  {
    $this->ns = $ns;
  }
  /** @return string */
  public function getNs()
  {
    return $this->ns;
  }
  /** @param string */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return string */
  public function getResource()
  {
    return $this->resource;
  }
  /** @param string */
  public function setSubresource($subresource)
  {
    $this->subresource = $subresource;
  }
  /** @return string */
  public function getSubresource()
  {
    return $this->subresource;
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
  /** @param string */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return string */
  public function getVersion()
  {
    return $this->version;
  }
}

class Asset extends \Google\Model
{
  /** @var string */
  public $canonicalName;
  /** @var string */
  public $createTime;
  /** @var IamPolicy */
  public $iamPolicy;
  /** @var string */
  public $name;
  /** @var array[] */
  public $resourceProperties;
  /** @var SecurityCenterProperties */
  public $securityCenterProperties;
  /** @var SecurityMarks */
  public $securityMarks;
  /** @var string */
  public $updateTime;
  protected $iamPolicyType = IamPolicy::class;
  protected $iamPolicyDataType = '';
  protected $securityCenterPropertiesType = SecurityCenterProperties::class;
  protected $securityCenterPropertiesDataType = '';
  protected $securityMarksType = SecurityMarks::class;
  protected $securityMarksDataType = '';
  /** @param string */
  public function setCanonicalName($canonicalName)
  {
    $this->canonicalName = $canonicalName;
  }
  /** @return string */
  public function getCanonicalName()
  {
    return $this->canonicalName;
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
  /** @param IamPolicy */
  public function setIamPolicy(IamPolicy $iamPolicy)
  {
    $this->iamPolicy = $iamPolicy;
  }
  /** @return IamPolicy */
  public function getIamPolicy()
  {
    return $this->iamPolicy;
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
  public function setResourceProperties($resourceProperties)
  {
    $this->resourceProperties = $resourceProperties;
  }
  /** @return array[] */
  public function getResourceProperties()
  {
    return $this->resourceProperties;
  }
  /** @param SecurityCenterProperties */
  public function setSecurityCenterProperties(SecurityCenterProperties $securityCenterProperties)
  {
    $this->securityCenterProperties = $securityCenterProperties;
  }
  /** @return SecurityCenterProperties */
  public function getSecurityCenterProperties()
  {
    return $this->securityCenterProperties;
  }
  /** @param SecurityMarks */
  public function setSecurityMarks(SecurityMarks $securityMarks)
  {
    $this->securityMarks = $securityMarks;
  }
  /** @return SecurityMarks */
  public function getSecurityMarks()
  {
    return $this->securityMarks;
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

class AssetDiscoveryConfig extends \Google\Collection
{
  /** @var string[] */
  public $folderIds;
  /** @var string */
  public $inclusionMode;
  /** @var string[] */
  public $projectIds;
  protected $collection_key = 'projectIds';
  /** @param string[] */
  public function setFolderIds($folderIds)
  {
    $this->folderIds = $folderIds;
  }
  /** @return string[] */
  public function getFolderIds()
  {
    return $this->folderIds;
  }
  /** @param string */
  public function setInclusionMode($inclusionMode)
  {
    $this->inclusionMode = $inclusionMode;
  }
  /** @return string */
  public function getInclusionMode()
  {
    return $this->inclusionMode;
  }
  /** @param string[] */
  public function setProjectIds($projectIds)
  {
    $this->projectIds = $projectIds;
  }
  /** @return string[] */
  public function getProjectIds()
  {
    return $this->projectIds;
  }
}

class AssociatedFinding extends \Google\Model
{
  /** @var string */
  public $canonicalFindingName;
  /** @var string */
  public $findingCategory;
  /** @var string */
  public $name;

  /** @param string */
  public function setCanonicalFindingName($canonicalFindingName)
  {
    $this->canonicalFindingName = $canonicalFindingName;
  }
  /** @return string */
  public function getCanonicalFindingName()
  {
    return $this->canonicalFindingName;
  }
  /** @param string */
  public function setFindingCategory($findingCategory)
  {
    $this->findingCategory = $findingCategory;
  }
  /** @return string */
  public function getFindingCategory()
  {
    return $this->findingCategory;
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

class BulkMuteFindingsRequest extends \Google\Model
{
  /** @var string */
  public $filter;
  /** @var string */
  public $muteAnnotation;

  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param string */
  public function setMuteAnnotation($muteAnnotation)
  {
    $this->muteAnnotation = $muteAnnotation;
  }
  /** @return string */
  public function getMuteAnnotation()
  {
    return $this->muteAnnotation;
  }
}

class Compliance extends \Google\Collection
{
  /** @var string[] */
  public $ids;
  /** @var string */
  public $standard;
  /** @var string */
  public $version;
  protected $collection_key = 'ids';
  /** @param string[] */
  public function setIds($ids)
  {
    $this->ids = $ids;
  }
  /** @return string[] */
  public function getIds()
  {
    return $this->ids;
  }
  /** @param string */
  public function setStandard($standard)
  {
    $this->standard = $standard;
  }
  /** @return string */
  public function getStandard()
  {
    return $this->standard;
  }
  /** @param string */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return string */
  public function getVersion()
  {
    return $this->version;
  }
}

class Connection extends \Google\Model
{
  /** @var string */
  public $destinationIp;
  /** @var int */
  public $destinationPort;
  /** @var string */
  public $protocol;
  /** @var string */
  public $sourceIp;
  /** @var int */
  public $sourcePort;

  /** @param string */
  public function setDestinationIp($destinationIp)
  {
    $this->destinationIp = $destinationIp;
  }
  /** @return string */
  public function getDestinationIp()
  {
    return $this->destinationIp;
  }
  /** @param int */
  public function setDestinationPort($destinationPort)
  {
    $this->destinationPort = $destinationPort;
  }
  /** @return int */
  public function getDestinationPort()
  {
    return $this->destinationPort;
  }
  /** @param string */
  public function setProtocol($protocol)
  {
    $this->protocol = $protocol;
  }
  /** @return string */
  public function getProtocol()
  {
    return $this->protocol;
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
  /** @param int */
  public function setSourcePort($sourcePort)
  {
    $this->sourcePort = $sourcePort;
  }
  /** @return int */
  public function getSourcePort()
  {
    return $this->sourcePort;
  }
}

class Contact extends \Google\Model
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

class ContactDetails extends \Google\Collection
{
  /** @var Contact[] */
  public $contacts;
  protected $collection_key = 'contacts';
  protected $contactsType = Contact::class;
  protected $contactsDataType = 'array';
  /** @param Contact[] */
  public function setContacts($contacts)
  {
    $this->contacts = $contacts;
  }
  /** @return Contact[] */
  public function getContacts()
  {
    return $this->contacts;
  }
}

class Container extends \Google\Collection
{
  /** @var string */
  public $imageId;
  /** @var Label[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $uri;
  protected $collection_key = 'labels';
  protected $labelsType = Label::class;
  protected $labelsDataType = 'array';
  /** @param string */
  public function setImageId($imageId)
  {
    $this->imageId = $imageId;
  }
  /** @return string */
  public function getImageId()
  {
    return $this->imageId;
  }
  /** @param Label[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return Label[] */
  public function getLabels()
  {
    return $this->labels;
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
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class Cve extends \Google\Collection
{
  /** @var Cvssv3 */
  public $cvssv3;
  /** @var string */
  public $id;
  /** @var Reference[] */
  public $references;
  /** @var bool */
  public $upstreamFixAvailable;
  protected $collection_key = 'references';
  protected $cvssv3Type = Cvssv3::class;
  protected $cvssv3DataType = '';
  protected $referencesType = Reference::class;
  protected $referencesDataType = 'array';
  /** @param Cvssv3 */
  public function setCvssv3(Cvssv3 $cvssv3)
  {
    $this->cvssv3 = $cvssv3;
  }
  /** @return Cvssv3 */
  public function getCvssv3()
  {
    return $this->cvssv3;
  }
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
  /** @param Reference[] */
  public function setReferences($references)
  {
    $this->references = $references;
  }
  /** @return Reference[] */
  public function getReferences()
  {
    return $this->references;
  }
  /** @param bool */
  public function setUpstreamFixAvailable($upstreamFixAvailable)
  {
    $this->upstreamFixAvailable = $upstreamFixAvailable;
  }
  /** @return bool */
  public function getUpstreamFixAvailable()
  {
    return $this->upstreamFixAvailable;
  }
}

class Cvssv3 extends \Google\Model
{
  /** @var string */
  public $attackComplexity;
  /** @var string */
  public $attackVector;
  /** @var string */
  public $availabilityImpact;
  public $baseScore;
  /** @var string */
  public $confidentialityImpact;
  /** @var string */
  public $integrityImpact;
  /** @var string */
  public $privilegesRequired;
  /** @var string */
  public $scope;
  /** @var string */
  public $userInteraction;

  /** @param string */
  public function setAttackComplexity($attackComplexity)
  {
    $this->attackComplexity = $attackComplexity;
  }
  /** @return string */
  public function getAttackComplexity()
  {
    return $this->attackComplexity;
  }
  /** @param string */
  public function setAttackVector($attackVector)
  {
    $this->attackVector = $attackVector;
  }
  /** @return string */
  public function getAttackVector()
  {
    return $this->attackVector;
  }
  /** @param string */
  public function setAvailabilityImpact($availabilityImpact)
  {
    $this->availabilityImpact = $availabilityImpact;
  }
  /** @return string */
  public function getAvailabilityImpact()
  {
    return $this->availabilityImpact;
  }
  public function setBaseScore($baseScore)
  {
    $this->baseScore = $baseScore;
  }
  public function getBaseScore()
  {
    return $this->baseScore;
  }
  /** @param string */
  public function setConfidentialityImpact($confidentialityImpact)
  {
    $this->confidentialityImpact = $confidentialityImpact;
  }
  /** @return string */
  public function getConfidentialityImpact()
  {
    return $this->confidentialityImpact;
  }
  /** @param string */
  public function setIntegrityImpact($integrityImpact)
  {
    $this->integrityImpact = $integrityImpact;
  }
  /** @return string */
  public function getIntegrityImpact()
  {
    return $this->integrityImpact;
  }
  /** @param string */
  public function setPrivilegesRequired($privilegesRequired)
  {
    $this->privilegesRequired = $privilegesRequired;
  }
  /** @return string */
  public function getPrivilegesRequired()
  {
    return $this->privilegesRequired;
  }
  /** @param string */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string */
  public function getScope()
  {
    return $this->scope;
  }
  /** @param string */
  public function setUserInteraction($userInteraction)
  {
    $this->userInteraction = $userInteraction;
  }
  /** @return string */
  public function getUserInteraction()
  {
    return $this->userInteraction;
  }
}

class Database extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $grantees;
  /** @var string */
  public $name;
  /** @var string */
  public $query;
  /** @var string */
  public $userName;
  protected $collection_key = 'grantees';
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
  public function setGrantees($grantees)
  {
    $this->grantees = $grantees;
  }
  /** @return string[] */
  public function getGrantees()
  {
    return $this->grantees;
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
  /** @param string */
  public function setUserName($userName)
  {
    $this->userName = $userName;
  }
  /** @return string */
  public function getUserName()
  {
    return $this->userName;
  }
}

class Detection extends \Google\Model
{
  /** @var string */
  public $binary;
  public $percentPagesMatched;

  /** @param string */
  public function setBinary($binary)
  {
    $this->binary = $binary;
  }
  /** @return string */
  public function getBinary()
  {
    return $this->binary;
  }
  public function setPercentPagesMatched($percentPagesMatched)
  {
    $this->percentPagesMatched = $percentPagesMatched;
  }
  public function getPercentPagesMatched()
  {
    return $this->percentPagesMatched;
  }
}

class Edge extends \Google\Model
{
  /** @var string */
  public $destination;
  /** @var string */
  public $source;

  /** @param string */
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }
  /** @return string */
  public function getDestination()
  {
    return $this->destination;
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
}

class EnvironmentVariable extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $val;

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
  public function setVal($val)
  {
    $this->val = $val;
  }
  /** @return string */
  public function getVal()
  {
    return $this->val;
  }
}

class ExfilResource extends \Google\Collection
{
  /** @var string[] */
  public $components;
  /** @var string */
  public $name;
  protected $collection_key = 'components';
  /** @param string[] */
  public function setComponents($components)
  {
    $this->components = $components;
  }
  /** @return string[] */
  public function getComponents()
  {
    return $this->components;
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

class Exfiltration extends \Google\Collection
{
  /** @var ExfilResource[] */
  public $sources;
  /** @var ExfilResource[] */
  public $targets;
  protected $collection_key = 'targets';
  protected $sourcesType = ExfilResource::class;
  protected $sourcesDataType = 'array';
  protected $targetsType = ExfilResource::class;
  protected $targetsDataType = 'array';
  /** @param ExfilResource[] */
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  /** @return ExfilResource[] */
  public function getSources()
  {
    return $this->sources;
  }
  /** @param ExfilResource[] */
  public function setTargets($targets)
  {
    $this->targets = $targets;
  }
  /** @return ExfilResource[] */
  public function getTargets()
  {
    return $this->targets;
  }
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

class Finding extends \Google\Collection
{
  /** @var Access */
  public $access;
  /** @var string */
  public $canonicalName;
  /** @var string */
  public $category;
  /** @var Compliance[] */
  public $compliances;
  /** @var Connection[] */
  public $connections;
  /** @var ContactDetails[] */
  public $contacts;
  /** @var Container[] */
  public $containers;
  /** @var string */
  public $createTime;
  /** @var Database */
  public $database;
  /** @var string */
  public $description;
  /** @var string */
  public $eventTime;
  /** @var Exfiltration */
  public $exfiltration;
  /** @var GoogleCloudSecuritycenterV1ExternalSystem[] */
  public $externalSystems;
  /** @var string */
  public $externalUri;
  /** @var SecuritycenterFile[] */
  public $files;
  /** @var string */
  public $findingClass;
  /** @var IamBinding[] */
  public $iamBindings;
  /** @var Indicator */
  public $indicator;
  /** @var Kubernetes */
  public $kubernetes;
  /** @var MitreAttack */
  public $mitreAttack;
  /** @var string */
  public $mute;
  /** @var string */
  public $muteInitiator;
  /** @var string */
  public $muteUpdateTime;
  /** @var string */
  public $name;
  /** @var string */
  public $nextSteps;
  /** @var string */
  public $parent;
  /** @var string */
  public $parentDisplayName;
  /** @var Process[] */
  public $processes;
  /** @var string */
  public $resourceName;
  /** @var SecurityMarks */
  public $securityMarks;
  /** @var string */
  public $severity;
  /** @var array[] */
  public $sourceProperties;
  /** @var string */
  public $state;
  /** @var Vulnerability */
  public $vulnerability;
  protected $collection_key = 'processes';
  protected $accessType = Access::class;
  protected $accessDataType = '';
  protected $compliancesType = Compliance::class;
  protected $compliancesDataType = 'array';
  protected $connectionsType = Connection::class;
  protected $connectionsDataType = 'array';
  protected $contactsType = ContactDetails::class;
  protected $contactsDataType = 'map';
  protected $containersType = Container::class;
  protected $containersDataType = 'array';
  protected $databaseType = Database::class;
  protected $databaseDataType = '';
  protected $exfiltrationType = Exfiltration::class;
  protected $exfiltrationDataType = '';
  protected $externalSystemsType = GoogleCloudSecuritycenterV1ExternalSystem::class;
  protected $externalSystemsDataType = 'map';
  protected $filesType = SecuritycenterFile::class;
  protected $filesDataType = 'array';
  protected $iamBindingsType = IamBinding::class;
  protected $iamBindingsDataType = 'array';
  protected $indicatorType = Indicator::class;
  protected $indicatorDataType = '';
  protected $kubernetesType = Kubernetes::class;
  protected $kubernetesDataType = '';
  protected $mitreAttackType = MitreAttack::class;
  protected $mitreAttackDataType = '';
  protected $processesType = Process::class;
  protected $processesDataType = 'array';
  protected $securityMarksType = SecurityMarks::class;
  protected $securityMarksDataType = '';
  protected $vulnerabilityType = Vulnerability::class;
  protected $vulnerabilityDataType = '';
  /** @param Access */
  public function setAccess(Access $access)
  {
    $this->access = $access;
  }
  /** @return Access */
  public function getAccess()
  {
    return $this->access;
  }
  /** @param string */
  public function setCanonicalName($canonicalName)
  {
    $this->canonicalName = $canonicalName;
  }
  /** @return string */
  public function getCanonicalName()
  {
    return $this->canonicalName;
  }
  /** @param string */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /** @return string */
  public function getCategory()
  {
    return $this->category;
  }
  /** @param Compliance[] */
  public function setCompliances($compliances)
  {
    $this->compliances = $compliances;
  }
  /** @return Compliance[] */
  public function getCompliances()
  {
    return $this->compliances;
  }
  /** @param Connection[] */
  public function setConnections($connections)
  {
    $this->connections = $connections;
  }
  /** @return Connection[] */
  public function getConnections()
  {
    return $this->connections;
  }
  /** @param ContactDetails[] */
  public function setContacts($contacts)
  {
    $this->contacts = $contacts;
  }
  /** @return ContactDetails[] */
  public function getContacts()
  {
    return $this->contacts;
  }
  /** @param Container[] */
  public function setContainers($containers)
  {
    $this->containers = $containers;
  }
  /** @return Container[] */
  public function getContainers()
  {
    return $this->containers;
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
  /** @param Database */
  public function setDatabase(Database $database)
  {
    $this->database = $database;
  }
  /** @return Database */
  public function getDatabase()
  {
    return $this->database;
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
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  /** @return string */
  public function getEventTime()
  {
    return $this->eventTime;
  }
  /** @param Exfiltration */
  public function setExfiltration(Exfiltration $exfiltration)
  {
    $this->exfiltration = $exfiltration;
  }
  /** @return Exfiltration */
  public function getExfiltration()
  {
    return $this->exfiltration;
  }
  /** @param GoogleCloudSecuritycenterV1ExternalSystem[] */
  public function setExternalSystems($externalSystems)
  {
    $this->externalSystems = $externalSystems;
  }
  /** @return GoogleCloudSecuritycenterV1ExternalSystem[] */
  public function getExternalSystems()
  {
    return $this->externalSystems;
  }
  /** @param string */
  public function setExternalUri($externalUri)
  {
    $this->externalUri = $externalUri;
  }
  /** @return string */
  public function getExternalUri()
  {
    return $this->externalUri;
  }
  /** @param SecuritycenterFile[] */
  public function setFiles($files)
  {
    $this->files = $files;
  }
  /** @return SecuritycenterFile[] */
  public function getFiles()
  {
    return $this->files;
  }
  /** @param string */
  public function setFindingClass($findingClass)
  {
    $this->findingClass = $findingClass;
  }
  /** @return string */
  public function getFindingClass()
  {
    return $this->findingClass;
  }
  /** @param IamBinding[] */
  public function setIamBindings($iamBindings)
  {
    $this->iamBindings = $iamBindings;
  }
  /** @return IamBinding[] */
  public function getIamBindings()
  {
    return $this->iamBindings;
  }
  /** @param Indicator */
  public function setIndicator(Indicator $indicator)
  {
    $this->indicator = $indicator;
  }
  /** @return Indicator */
  public function getIndicator()
  {
    return $this->indicator;
  }
  /** @param Kubernetes */
  public function setKubernetes(Kubernetes $kubernetes)
  {
    $this->kubernetes = $kubernetes;
  }
  /** @return Kubernetes */
  public function getKubernetes()
  {
    return $this->kubernetes;
  }
  /** @param MitreAttack */
  public function setMitreAttack(MitreAttack $mitreAttack)
  {
    $this->mitreAttack = $mitreAttack;
  }
  /** @return MitreAttack */
  public function getMitreAttack()
  {
    return $this->mitreAttack;
  }
  /** @param string */
  public function setMute($mute)
  {
    $this->mute = $mute;
  }
  /** @return string */
  public function getMute()
  {
    return $this->mute;
  }
  /** @param string */
  public function setMuteInitiator($muteInitiator)
  {
    $this->muteInitiator = $muteInitiator;
  }
  /** @return string */
  public function getMuteInitiator()
  {
    return $this->muteInitiator;
  }
  /** @param string */
  public function setMuteUpdateTime($muteUpdateTime)
  {
    $this->muteUpdateTime = $muteUpdateTime;
  }
  /** @return string */
  public function getMuteUpdateTime()
  {
    return $this->muteUpdateTime;
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
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
  /** @param string */
  public function setParentDisplayName($parentDisplayName)
  {
    $this->parentDisplayName = $parentDisplayName;
  }
  /** @return string */
  public function getParentDisplayName()
  {
    return $this->parentDisplayName;
  }
  /** @param Process[] */
  public function setProcesses($processes)
  {
    $this->processes = $processes;
  }
  /** @return Process[] */
  public function getProcesses()
  {
    return $this->processes;
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
  /** @param SecurityMarks */
  public function setSecurityMarks(SecurityMarks $securityMarks)
  {
    $this->securityMarks = $securityMarks;
  }
  /** @return SecurityMarks */
  public function getSecurityMarks()
  {
    return $this->securityMarks;
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
  /** @param array[] */
  public function setSourceProperties($sourceProperties)
  {
    $this->sourceProperties = $sourceProperties;
  }
  /** @return array[] */
  public function getSourceProperties()
  {
    return $this->sourceProperties;
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
  /** @param Vulnerability */
  public function setVulnerability(Vulnerability $vulnerability)
  {
    $this->vulnerability = $vulnerability;
  }
  /** @return Vulnerability */
  public function getVulnerability()
  {
    return $this->vulnerability;
  }
}

class Folder extends \Google\Model
{
  /** @var string */
  public $resourceFolder;
  /** @var string */
  public $resourceFolderDisplayName;

  /** @param string */
  public function setResourceFolder($resourceFolder)
  {
    $this->resourceFolder = $resourceFolder;
  }
  /** @return string */
  public function getResourceFolder()
  {
    return $this->resourceFolder;
  }
  /** @param string */
  public function setResourceFolderDisplayName($resourceFolderDisplayName)
  {
    $this->resourceFolderDisplayName = $resourceFolderDisplayName;
  }
  /** @return string */
  public function getResourceFolderDisplayName()
  {
    return $this->resourceFolderDisplayName;
  }
}

class Geolocation extends \Google\Model
{
  /** @var string */
  public $regionCode;

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
}

class GetIamPolicyRequest extends \Google\Model
{
  /** @var GetPolicyOptions */
  public $options;
  protected $optionsType = GetPolicyOptions::class;
  protected $optionsDataType = '';
  /** @param GetPolicyOptions */
  public function setOptions(GetPolicyOptions $options)
  {
    $this->options = $options;
  }
  /** @return GetPolicyOptions */
  public function getOptions()
  {
    return $this->options;
  }
}

class GetPolicyOptions extends \Google\Model
{
  /** @var int */
  public $requestedPolicyVersion;

  /** @param int */
  public function setRequestedPolicyVersion($requestedPolicyVersion)
  {
    $this->requestedPolicyVersion = $requestedPolicyVersion;
  }
  /** @return int */
  public function getRequestedPolicyVersion()
  {
    return $this->requestedPolicyVersion;
  }
}

class GoogleCloudSecuritycenterV1BigQueryExport extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $dataset;
  /** @var string */
  public $description;
  /** @var string */
  public $filter;
  /** @var string */
  public $mostRecentEditor;
  /** @var string */
  public $name;
  /** @var string */
  public $principal;
  /** @var string */
  public $updateTime;

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
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
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
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param string */
  public function setMostRecentEditor($mostRecentEditor)
  {
    $this->mostRecentEditor = $mostRecentEditor;
  }
  /** @return string */
  public function getMostRecentEditor()
  {
    return $this->mostRecentEditor;
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
  public function setPrincipal($principal)
  {
    $this->principal = $principal;
  }
  /** @return string */
  public function getPrincipal()
  {
    return $this->principal;
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

class GoogleCloudSecuritycenterV1Binding extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var string */
  public $ns;
  /** @var Role */
  public $role;
  /** @var Subject[] */
  public $subjects;
  protected $collection_key = 'subjects';
  protected $roleType = Role::class;
  protected $roleDataType = '';
  protected $subjectsType = Subject::class;
  protected $subjectsDataType = 'array';
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
  public function setNs($ns)
  {
    $this->ns = $ns;
  }
  /** @return string */
  public function getNs()
  {
    return $this->ns;
  }
  /** @param Role */
  public function setRole(Role $role)
  {
    $this->role = $role;
  }
  /** @return Role */
  public function getRole()
  {
    return $this->role;
  }
  /** @param Subject[] */
  public function setSubjects($subjects)
  {
    $this->subjects = $subjects;
  }
  /** @return Subject[] */
  public function getSubjects()
  {
    return $this->subjects;
  }
}

class GoogleCloudSecuritycenterV1BulkMuteFindingsResponse extends \Google\Model
{
}

class GoogleCloudSecuritycenterV1ExposedResource extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $methods;
  /** @var string */
  public $name;
  /** @var string */
  public $resource;
  /** @var string */
  public $resourceType;
  /** @var string */
  public $resourceValue;
  protected $collection_key = 'methods';
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
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return string */
  public function getResource()
  {
    return $this->resource;
  }
  /** @param string */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /** @return string */
  public function getResourceType()
  {
    return $this->resourceType;
  }
  /** @param string */
  public function setResourceValue($resourceValue)
  {
    $this->resourceValue = $resourceValue;
  }
  /** @return string */
  public function getResourceValue()
  {
    return $this->resourceValue;
  }
}

class GoogleCloudSecuritycenterV1ExposurePath extends \Google\Collection
{
  /** @var Edge[] */
  public $edges;
  /** @var GoogleCloudSecuritycenterV1ExposedResource */
  public $exposedResource;
  /** @var string */
  public $name;
  /** @var PathNode[] */
  public $pathNodes;
  protected $collection_key = 'pathNodes';
  protected $edgesType = Edge::class;
  protected $edgesDataType = 'array';
  protected $exposedResourceType = GoogleCloudSecuritycenterV1ExposedResource::class;
  protected $exposedResourceDataType = '';
  protected $pathNodesType = PathNode::class;
  protected $pathNodesDataType = 'array';
  /** @param Edge[] */
  public function setEdges($edges)
  {
    $this->edges = $edges;
  }
  /** @return Edge[] */
  public function getEdges()
  {
    return $this->edges;
  }
  /** @param GoogleCloudSecuritycenterV1ExposedResource */
  public function setExposedResource(GoogleCloudSecuritycenterV1ExposedResource $exposedResource)
  {
    $this->exposedResource = $exposedResource;
  }
  /** @return GoogleCloudSecuritycenterV1ExposedResource */
  public function getExposedResource()
  {
    return $this->exposedResource;
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
  /** @param PathNode[] */
  public function setPathNodes($pathNodes)
  {
    $this->pathNodes = $pathNodes;
  }
  /** @return PathNode[] */
  public function getPathNodes()
  {
    return $this->pathNodes;
  }
}

class GoogleCloudSecuritycenterV1ExternalSystem extends \Google\Collection
{
  /** @var string[] */
  public $assignees;
  /** @var string */
  public $externalSystemUpdateTime;
  /** @var string */
  public $externalUid;
  /** @var string */
  public $name;
  /** @var string */
  public $status;
  protected $collection_key = 'assignees';
  /** @param string[] */
  public function setAssignees($assignees)
  {
    $this->assignees = $assignees;
  }
  /** @return string[] */
  public function getAssignees()
  {
    return $this->assignees;
  }
  /** @param string */
  public function setExternalSystemUpdateTime($externalSystemUpdateTime)
  {
    $this->externalSystemUpdateTime = $externalSystemUpdateTime;
  }
  /** @return string */
  public function getExternalSystemUpdateTime()
  {
    return $this->externalSystemUpdateTime;
  }
  /** @param string */
  public function setExternalUid($externalUid)
  {
    $this->externalUid = $externalUid;
  }
  /** @return string */
  public function getExternalUid()
  {
    return $this->externalUid;
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

class GoogleCloudSecuritycenterV1MuteConfig extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $filter;
  /** @var string */
  public $mostRecentEditor;
  /** @var string */
  public $name;
  /** @var string */
  public $updateTime;

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
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param string */
  public function setMostRecentEditor($mostRecentEditor)
  {
    $this->mostRecentEditor = $mostRecentEditor;
  }
  /** @return string */
  public function getMostRecentEditor()
  {
    return $this->mostRecentEditor;
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

class GoogleCloudSecuritycenterV1NotificationMessage extends \Google\Model
{
  /** @var Finding */
  public $finding;
  /** @var string */
  public $notificationConfigName;
  /** @var GoogleCloudSecuritycenterV1Resource */
  public $resource;
  protected $findingType = Finding::class;
  protected $findingDataType = '';
  protected $resourceType = GoogleCloudSecuritycenterV1Resource::class;
  protected $resourceDataType = '';
  /** @param Finding */
  public function setFinding(Finding $finding)
  {
    $this->finding = $finding;
  }
  /** @return Finding */
  public function getFinding()
  {
    return $this->finding;
  }
  /** @param string */
  public function setNotificationConfigName($notificationConfigName)
  {
    $this->notificationConfigName = $notificationConfigName;
  }
  /** @return string */
  public function getNotificationConfigName()
  {
    return $this->notificationConfigName;
  }
  /** @param GoogleCloudSecuritycenterV1Resource */
  public function setResource(GoogleCloudSecuritycenterV1Resource $resource)
  {
    $this->resource = $resource;
  }
  /** @return GoogleCloudSecuritycenterV1Resource */
  public function getResource()
  {
    return $this->resource;
  }
}

class GoogleCloudSecuritycenterV1Resource extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var Folder[] */
  public $folders;
  /** @var string */
  public $name;
  /** @var string */
  public $parent;
  /** @var string */
  public $parentDisplayName;
  /** @var string */
  public $project;
  /** @var string */
  public $projectDisplayName;
  /** @var string */
  public $type;
  protected $collection_key = 'folders';
  protected $foldersType = Folder::class;
  protected $foldersDataType = 'array';
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
  /** @param Folder[] */
  public function setFolders($folders)
  {
    $this->folders = $folders;
  }
  /** @return Folder[] */
  public function getFolders()
  {
    return $this->folders;
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
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
  /** @param string */
  public function setParentDisplayName($parentDisplayName)
  {
    $this->parentDisplayName = $parentDisplayName;
  }
  /** @return string */
  public function getParentDisplayName()
  {
    return $this->parentDisplayName;
  }
  /** @param string */
  public function setProject($project)
  {
    $this->project = $project;
  }
  /** @return string */
  public function getProject()
  {
    return $this->project;
  }
  /** @param string */
  public function setProjectDisplayName($projectDisplayName)
  {
    $this->projectDisplayName = $projectDisplayName;
  }
  /** @return string */
  public function getProjectDisplayName()
  {
    return $this->projectDisplayName;
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

class GoogleCloudSecuritycenterV1ResourceValueConfig extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var string */
  public $resourceType;
  /** @var string */
  public $resourceValue;
  /** @var string */
  public $scope;
  /** @var string[] */
  public $tagValues;
  protected $collection_key = 'tagValues';
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
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /** @return string */
  public function getResourceType()
  {
    return $this->resourceType;
  }
  /** @param string */
  public function setResourceValue($resourceValue)
  {
    $this->resourceValue = $resourceValue;
  }
  /** @return string */
  public function getResourceValue()
  {
    return $this->resourceValue;
  }
  /** @param string */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string */
  public function getScope()
  {
    return $this->scope;
  }
  /** @param string[] */
  public function setTagValues($tagValues)
  {
    $this->tagValues = $tagValues;
  }
  /** @return string[] */
  public function getTagValues()
  {
    return $this->tagValues;
  }
}

class GoogleCloudSecuritycenterV1RunAssetDiscoveryResponse extends \Google\Model
{
  /** @var string */
  public $duration;
  /** @var string */
  public $state;

  /** @param string */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /** @return string */
  public function getDuration()
  {
    return $this->duration;
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
}

class GoogleCloudSecuritycenterV1beta1RunAssetDiscoveryResponse extends \Google\Model
{
  /** @var string */
  public $duration;
  /** @var string */
  public $state;

  /** @param string */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /** @return string */
  public function getDuration()
  {
    return $this->duration;
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
}

class GoogleCloudSecuritycenterV1p1beta1Finding extends \Google\Model
{
  /** @var string */
  public $canonicalName;
  /** @var string */
  public $category;
  /** @var string */
  public $createTime;
  /** @var string */
  public $eventTime;
  /** @var string */
  public $externalUri;
  /** @var string */
  public $name;
  /** @var string */
  public $parent;
  /** @var string */
  public $resourceName;
  /** @var GoogleCloudSecuritycenterV1p1beta1SecurityMarks */
  public $securityMarks;
  /** @var string */
  public $severity;
  /** @var array[] */
  public $sourceProperties;
  /** @var string */
  public $state;
  protected $securityMarksType = GoogleCloudSecuritycenterV1p1beta1SecurityMarks::class;
  protected $securityMarksDataType = '';
  /** @param string */
  public function setCanonicalName($canonicalName)
  {
    $this->canonicalName = $canonicalName;
  }
  /** @return string */
  public function getCanonicalName()
  {
    return $this->canonicalName;
  }
  /** @param string */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /** @return string */
  public function getCategory()
  {
    return $this->category;
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
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  /** @return string */
  public function getEventTime()
  {
    return $this->eventTime;
  }
  /** @param string */
  public function setExternalUri($externalUri)
  {
    $this->externalUri = $externalUri;
  }
  /** @return string */
  public function getExternalUri()
  {
    return $this->externalUri;
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
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
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
  /** @param GoogleCloudSecuritycenterV1p1beta1SecurityMarks */
  public function setSecurityMarks(GoogleCloudSecuritycenterV1p1beta1SecurityMarks $securityMarks)
  {
    $this->securityMarks = $securityMarks;
  }
  /** @return GoogleCloudSecuritycenterV1p1beta1SecurityMarks */
  public function getSecurityMarks()
  {
    return $this->securityMarks;
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
  /** @param array[] */
  public function setSourceProperties($sourceProperties)
  {
    $this->sourceProperties = $sourceProperties;
  }
  /** @return array[] */
  public function getSourceProperties()
  {
    return $this->sourceProperties;
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
}

class GoogleCloudSecuritycenterV1p1beta1Folder extends \Google\Model
{
  /** @var string */
  public $resourceFolder;
  /** @var string */
  public $resourceFolderDisplayName;

  /** @param string */
  public function setResourceFolder($resourceFolder)
  {
    $this->resourceFolder = $resourceFolder;
  }
  /** @return string */
  public function getResourceFolder()
  {
    return $this->resourceFolder;
  }
  /** @param string */
  public function setResourceFolderDisplayName($resourceFolderDisplayName)
  {
    $this->resourceFolderDisplayName = $resourceFolderDisplayName;
  }
  /** @return string */
  public function getResourceFolderDisplayName()
  {
    return $this->resourceFolderDisplayName;
  }
}

class GoogleCloudSecuritycenterV1p1beta1NotificationMessage extends \Google\Model
{
  /** @var GoogleCloudSecuritycenterV1p1beta1Finding */
  public $finding;
  /** @var string */
  public $notificationConfigName;
  /** @var GoogleCloudSecuritycenterV1p1beta1Resource */
  public $resource;
  protected $findingType = GoogleCloudSecuritycenterV1p1beta1Finding::class;
  protected $findingDataType = '';
  protected $resourceType = GoogleCloudSecuritycenterV1p1beta1Resource::class;
  protected $resourceDataType = '';
  /** @param GoogleCloudSecuritycenterV1p1beta1Finding */
  public function setFinding(GoogleCloudSecuritycenterV1p1beta1Finding $finding)
  {
    $this->finding = $finding;
  }
  /** @return GoogleCloudSecuritycenterV1p1beta1Finding */
  public function getFinding()
  {
    return $this->finding;
  }
  /** @param string */
  public function setNotificationConfigName($notificationConfigName)
  {
    $this->notificationConfigName = $notificationConfigName;
  }
  /** @return string */
  public function getNotificationConfigName()
  {
    return $this->notificationConfigName;
  }
  /** @param GoogleCloudSecuritycenterV1p1beta1Resource */
  public function setResource(GoogleCloudSecuritycenterV1p1beta1Resource $resource)
  {
    $this->resource = $resource;
  }
  /** @return GoogleCloudSecuritycenterV1p1beta1Resource */
  public function getResource()
  {
    return $this->resource;
  }
}

class GoogleCloudSecuritycenterV1p1beta1Resource extends \Google\Collection
{
  /** @var GoogleCloudSecuritycenterV1p1beta1Folder[] */
  public $folders;
  /** @var string */
  public $name;
  /** @var string */
  public $parent;
  /** @var string */
  public $parentDisplayName;
  /** @var string */
  public $project;
  /** @var string */
  public $projectDisplayName;
  protected $collection_key = 'folders';
  protected $foldersType = GoogleCloudSecuritycenterV1p1beta1Folder::class;
  protected $foldersDataType = 'array';
  /** @param GoogleCloudSecuritycenterV1p1beta1Folder[] */
  public function setFolders($folders)
  {
    $this->folders = $folders;
  }
  /** @return GoogleCloudSecuritycenterV1p1beta1Folder[] */
  public function getFolders()
  {
    return $this->folders;
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
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
  /** @param string */
  public function setParentDisplayName($parentDisplayName)
  {
    $this->parentDisplayName = $parentDisplayName;
  }
  /** @return string */
  public function getParentDisplayName()
  {
    return $this->parentDisplayName;
  }
  /** @param string */
  public function setProject($project)
  {
    $this->project = $project;
  }
  /** @return string */
  public function getProject()
  {
    return $this->project;
  }
  /** @param string */
  public function setProjectDisplayName($projectDisplayName)
  {
    $this->projectDisplayName = $projectDisplayName;
  }
  /** @return string */
  public function getProjectDisplayName()
  {
    return $this->projectDisplayName;
  }
}

class GoogleCloudSecuritycenterV1p1beta1RunAssetDiscoveryResponse extends \Google\Model
{
  /** @var string */
  public $duration;
  /** @var string */
  public $state;

  /** @param string */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /** @return string */
  public function getDuration()
  {
    return $this->duration;
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
}

class GoogleCloudSecuritycenterV1p1beta1SecurityMarks extends \Google\Model
{
  /** @var string */
  public $canonicalName;
  /** @var string[] */
  public $marks;
  /** @var string */
  public $name;

  /** @param string */
  public function setCanonicalName($canonicalName)
  {
    $this->canonicalName = $canonicalName;
  }
  /** @return string */
  public function getCanonicalName()
  {
    return $this->canonicalName;
  }
  /** @param string[] */
  public function setMarks($marks)
  {
    $this->marks = $marks;
  }
  /** @return string[] */
  public function getMarks()
  {
    return $this->marks;
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

class GroupAssetsRequest extends \Google\Model
{
  /** @var string */
  public $compareDuration;
  /** @var string */
  public $filter;
  /** @var string */
  public $groupBy;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var string */
  public $readTime;

  /** @param string */
  public function setCompareDuration($compareDuration)
  {
    $this->compareDuration = $compareDuration;
  }
  /** @return string */
  public function getCompareDuration()
  {
    return $this->compareDuration;
  }
  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param string */
  public function setGroupBy($groupBy)
  {
    $this->groupBy = $groupBy;
  }
  /** @return string */
  public function getGroupBy()
  {
    return $this->groupBy;
  }
  /** @param int */
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  /** @return int */
  public function getPageSize()
  {
    return $this->pageSize;
  }
  /** @param string */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /** @return string */
  public function getPageToken()
  {
    return $this->pageToken;
  }
  /** @param string */
  public function setReadTime($readTime)
  {
    $this->readTime = $readTime;
  }
  /** @return string */
  public function getReadTime()
  {
    return $this->readTime;
  }
}

class GroupAssetsResponse extends \Google\Collection
{
  /** @var GroupResult[] */
  public $groupByResults;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $readTime;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'groupByResults';
  protected $groupByResultsType = GroupResult::class;
  protected $groupByResultsDataType = 'array';
  /** @param GroupResult[] */
  public function setGroupByResults($groupByResults)
  {
    $this->groupByResults = $groupByResults;
  }
  /** @return GroupResult[] */
  public function getGroupByResults()
  {
    return $this->groupByResults;
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
  /** @param string */
  public function setReadTime($readTime)
  {
    $this->readTime = $readTime;
  }
  /** @return string */
  public function getReadTime()
  {
    return $this->readTime;
  }
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class GroupFindingsRequest extends \Google\Model
{
  /** @var string */
  public $compareDuration;
  /** @var string */
  public $filter;
  /** @var string */
  public $groupBy;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var string */
  public $readTime;

  /** @param string */
  public function setCompareDuration($compareDuration)
  {
    $this->compareDuration = $compareDuration;
  }
  /** @return string */
  public function getCompareDuration()
  {
    return $this->compareDuration;
  }
  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param string */
  public function setGroupBy($groupBy)
  {
    $this->groupBy = $groupBy;
  }
  /** @return string */
  public function getGroupBy()
  {
    return $this->groupBy;
  }
  /** @param int */
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  /** @return int */
  public function getPageSize()
  {
    return $this->pageSize;
  }
  /** @param string */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /** @return string */
  public function getPageToken()
  {
    return $this->pageToken;
  }
  /** @param string */
  public function setReadTime($readTime)
  {
    $this->readTime = $readTime;
  }
  /** @return string */
  public function getReadTime()
  {
    return $this->readTime;
  }
}

class GroupFindingsResponse extends \Google\Collection
{
  /** @var GroupResult[] */
  public $groupByResults;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $readTime;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'groupByResults';
  protected $groupByResultsType = GroupResult::class;
  protected $groupByResultsDataType = 'array';
  /** @param GroupResult[] */
  public function setGroupByResults($groupByResults)
  {
    $this->groupByResults = $groupByResults;
  }
  /** @return GroupResult[] */
  public function getGroupByResults()
  {
    return $this->groupByResults;
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
  /** @param string */
  public function setReadTime($readTime)
  {
    $this->readTime = $readTime;
  }
  /** @return string */
  public function getReadTime()
  {
    return $this->readTime;
  }
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class GroupResult extends \Google\Model
{
  /** @var string */
  public $count;
  /** @var array[] */
  public $properties;

  /** @param string */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /** @return string */
  public function getCount()
  {
    return $this->count;
  }
  /** @param array[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return array[] */
  public function getProperties()
  {
    return $this->properties;
  }
}

class IamBinding extends \Google\Model
{
  /** @var string */
  public $action;
  /** @var string */
  public $member;
  /** @var string */
  public $role;

  /** @param string */
  public function setAction($action)
  {
    $this->action = $action;
  }
  /** @return string */
  public function getAction()
  {
    return $this->action;
  }
  /** @param string */
  public function setMember($member)
  {
    $this->member = $member;
  }
  /** @return string */
  public function getMember()
  {
    return $this->member;
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

class IamPolicy extends \Google\Model
{
  /** @var string */
  public $policyBlob;

  /** @param string */
  public function setPolicyBlob($policyBlob)
  {
    $this->policyBlob = $policyBlob;
  }
  /** @return string */
  public function getPolicyBlob()
  {
    return $this->policyBlob;
  }
}

class Indicator extends \Google\Collection
{
  /** @var string[] */
  public $domains;
  /** @var string[] */
  public $ipAddresses;
  /** @var ProcessSignature[] */
  public $signatures;
  /** @var string[] */
  public $uris;
  protected $collection_key = 'uris';
  protected $signaturesType = ProcessSignature::class;
  protected $signaturesDataType = 'array';
  /** @param string[] */
  public function setDomains($domains)
  {
    $this->domains = $domains;
  }
  /** @return string[] */
  public function getDomains()
  {
    return $this->domains;
  }
  /** @param string[] */
  public function setIpAddresses($ipAddresses)
  {
    $this->ipAddresses = $ipAddresses;
  }
  /** @return string[] */
  public function getIpAddresses()
  {
    return $this->ipAddresses;
  }
  /** @param ProcessSignature[] */
  public function setSignatures($signatures)
  {
    $this->signatures = $signatures;
  }
  /** @return ProcessSignature[] */
  public function getSignatures()
  {
    return $this->signatures;
  }
  /** @param string[] */
  public function setUris($uris)
  {
    $this->uris = $uris;
  }
  /** @return string[] */
  public function getUris()
  {
    return $this->uris;
  }
}

class Kubernetes extends \Google\Collection
{
  /** @var AccessReview[] */
  public $accessReviews;
  /** @var GoogleCloudSecuritycenterV1Binding[] */
  public $bindings;
  /** @var NodePool[] */
  public $nodePools;
  /** @var Node[] */
  public $nodes;
  /** @var Pod[] */
  public $pods;
  /** @var Role[] */
  public $roles;
  protected $collection_key = 'roles';
  protected $accessReviewsType = AccessReview::class;
  protected $accessReviewsDataType = 'array';
  protected $bindingsType = GoogleCloudSecuritycenterV1Binding::class;
  protected $bindingsDataType = 'array';
  protected $nodePoolsType = NodePool::class;
  protected $nodePoolsDataType = 'array';
  protected $nodesType = Node::class;
  protected $nodesDataType = 'array';
  protected $podsType = Pod::class;
  protected $podsDataType = 'array';
  protected $rolesType = Role::class;
  protected $rolesDataType = 'array';
  /** @param AccessReview[] */
  public function setAccessReviews($accessReviews)
  {
    $this->accessReviews = $accessReviews;
  }
  /** @return AccessReview[] */
  public function getAccessReviews()
  {
    return $this->accessReviews;
  }
  /** @param GoogleCloudSecuritycenterV1Binding[] */
  public function setBindings($bindings)
  {
    $this->bindings = $bindings;
  }
  /** @return GoogleCloudSecuritycenterV1Binding[] */
  public function getBindings()
  {
    return $this->bindings;
  }
  /** @param NodePool[] */
  public function setNodePools($nodePools)
  {
    $this->nodePools = $nodePools;
  }
  /** @return NodePool[] */
  public function getNodePools()
  {
    return $this->nodePools;
  }
  /** @param Node[] */
  public function setNodes($nodes)
  {
    $this->nodes = $nodes;
  }
  /** @return Node[] */
  public function getNodes()
  {
    return $this->nodes;
  }
  /** @param Pod[] */
  public function setPods($pods)
  {
    $this->pods = $pods;
  }
  /** @return Pod[] */
  public function getPods()
  {
    return $this->pods;
  }
  /** @param Role[] */
  public function setRoles($roles)
  {
    $this->roles = $roles;
  }
  /** @return Role[] */
  public function getRoles()
  {
    return $this->roles;
  }
}

class Label extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $value;

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

class ListAssetsResponse extends \Google\Collection
{
  /** @var ListAssetsResult[] */
  public $listAssetsResults;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $readTime;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'listAssetsResults';
  protected $listAssetsResultsType = ListAssetsResult::class;
  protected $listAssetsResultsDataType = 'array';
  /** @param ListAssetsResult[] */
  public function setListAssetsResults($listAssetsResults)
  {
    $this->listAssetsResults = $listAssetsResults;
  }
  /** @return ListAssetsResult[] */
  public function getListAssetsResults()
  {
    return $this->listAssetsResults;
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
  /** @param string */
  public function setReadTime($readTime)
  {
    $this->readTime = $readTime;
  }
  /** @return string */
  public function getReadTime()
  {
    return $this->readTime;
  }
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class ListAssetsResult extends \Google\Model
{
  /** @var Asset */
  public $asset;
  /** @var string */
  public $stateChange;
  protected $assetType = Asset::class;
  protected $assetDataType = '';
  /** @param Asset */
  public function setAsset(Asset $asset)
  {
    $this->asset = $asset;
  }
  /** @return Asset */
  public function getAsset()
  {
    return $this->asset;
  }
  /** @param string */
  public function setStateChange($stateChange)
  {
    $this->stateChange = $stateChange;
  }
  /** @return string */
  public function getStateChange()
  {
    return $this->stateChange;
  }
}

class ListBigQueryExportsResponse extends \Google\Collection
{
  /** @var GoogleCloudSecuritycenterV1BigQueryExport[] */
  public $bigQueryExports;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'bigQueryExports';
  protected $bigQueryExportsType = GoogleCloudSecuritycenterV1BigQueryExport::class;
  protected $bigQueryExportsDataType = 'array';
  /** @param GoogleCloudSecuritycenterV1BigQueryExport[] */
  public function setBigQueryExports($bigQueryExports)
  {
    $this->bigQueryExports = $bigQueryExports;
  }
  /** @return GoogleCloudSecuritycenterV1BigQueryExport[] */
  public function getBigQueryExports()
  {
    return $this->bigQueryExports;
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

class ListFindingsResponse extends \Google\Collection
{
  /** @var ListFindingsResult[] */
  public $listFindingsResults;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $readTime;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'listFindingsResults';
  protected $listFindingsResultsType = ListFindingsResult::class;
  protected $listFindingsResultsDataType = 'array';
  /** @param ListFindingsResult[] */
  public function setListFindingsResults($listFindingsResults)
  {
    $this->listFindingsResults = $listFindingsResults;
  }
  /** @return ListFindingsResult[] */
  public function getListFindingsResults()
  {
    return $this->listFindingsResults;
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
  /** @param string */
  public function setReadTime($readTime)
  {
    $this->readTime = $readTime;
  }
  /** @return string */
  public function getReadTime()
  {
    return $this->readTime;
  }
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class ListFindingsResult extends \Google\Model
{
  /** @var Finding */
  public $finding;
  /** @var SecuritycenterResource */
  public $resource;
  /** @var string */
  public $stateChange;
  protected $findingType = Finding::class;
  protected $findingDataType = '';
  protected $resourceType = SecuritycenterResource::class;
  protected $resourceDataType = '';
  /** @param Finding */
  public function setFinding(Finding $finding)
  {
    $this->finding = $finding;
  }
  /** @return Finding */
  public function getFinding()
  {
    return $this->finding;
  }
  /** @param SecuritycenterResource */
  public function setResource(SecuritycenterResource $resource)
  {
    $this->resource = $resource;
  }
  /** @return SecuritycenterResource */
  public function getResource()
  {
    return $this->resource;
  }
  /** @param string */
  public function setStateChange($stateChange)
  {
    $this->stateChange = $stateChange;
  }
  /** @return string */
  public function getStateChange()
  {
    return $this->stateChange;
  }
}

class ListMuteConfigsResponse extends \Google\Collection
{
  /** @var GoogleCloudSecuritycenterV1MuteConfig[] */
  public $muteConfigs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'muteConfigs';
  protected $muteConfigsType = GoogleCloudSecuritycenterV1MuteConfig::class;
  protected $muteConfigsDataType = 'array';
  /** @param GoogleCloudSecuritycenterV1MuteConfig[] */
  public function setMuteConfigs($muteConfigs)
  {
    $this->muteConfigs = $muteConfigs;
  }
  /** @return GoogleCloudSecuritycenterV1MuteConfig[] */
  public function getMuteConfigs()
  {
    return $this->muteConfigs;
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

class ListNotificationConfigsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var NotificationConfig[] */
  public $notificationConfigs;
  protected $collection_key = 'notificationConfigs';
  protected $notificationConfigsType = NotificationConfig::class;
  protected $notificationConfigsDataType = 'array';
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
  /** @param NotificationConfig[] */
  public function setNotificationConfigs($notificationConfigs)
  {
    $this->notificationConfigs = $notificationConfigs;
  }
  /** @return NotificationConfig[] */
  public function getNotificationConfigs()
  {
    return $this->notificationConfigs;
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

class ListSourcesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Source[] */
  public $sources;
  protected $collection_key = 'sources';
  protected $sourcesType = Source::class;
  protected $sourcesDataType = 'array';
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
  /** @param Source[] */
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  /** @return Source[] */
  public function getSources()
  {
    return $this->sources;
  }
}

class MemoryHashSignature extends \Google\Collection
{
  /** @var string */
  public $binaryFamily;
  /** @var Detection[] */
  public $detections;
  protected $collection_key = 'detections';
  protected $detectionsType = Detection::class;
  protected $detectionsDataType = 'array';
  /** @param string */
  public function setBinaryFamily($binaryFamily)
  {
    $this->binaryFamily = $binaryFamily;
  }
  /** @return string */
  public function getBinaryFamily()
  {
    return $this->binaryFamily;
  }
  /** @param Detection[] */
  public function setDetections($detections)
  {
    $this->detections = $detections;
  }
  /** @return Detection[] */
  public function getDetections()
  {
    return $this->detections;
  }
}

class MitreAttack extends \Google\Collection
{
  /** @var string[] */
  public $additionalTactics;
  /** @var string[] */
  public $additionalTechniques;
  /** @var string */
  public $primaryTactic;
  /** @var string[] */
  public $primaryTechniques;
  /** @var string */
  public $version;
  protected $collection_key = 'primaryTechniques';
  /** @param string[] */
  public function setAdditionalTactics($additionalTactics)
  {
    $this->additionalTactics = $additionalTactics;
  }
  /** @return string[] */
  public function getAdditionalTactics()
  {
    return $this->additionalTactics;
  }
  /** @param string[] */
  public function setAdditionalTechniques($additionalTechniques)
  {
    $this->additionalTechniques = $additionalTechniques;
  }
  /** @return string[] */
  public function getAdditionalTechniques()
  {
    return $this->additionalTechniques;
  }
  /** @param string */
  public function setPrimaryTactic($primaryTactic)
  {
    $this->primaryTactic = $primaryTactic;
  }
  /** @return string */
  public function getPrimaryTactic()
  {
    return $this->primaryTactic;
  }
  /** @param string[] */
  public function setPrimaryTechniques($primaryTechniques)
  {
    $this->primaryTechniques = $primaryTechniques;
  }
  /** @return string[] */
  public function getPrimaryTechniques()
  {
    return $this->primaryTechniques;
  }
  /** @param string */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return string */
  public function getVersion()
  {
    return $this->version;
  }
}

class Node extends \Google\Model
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

class NodePool extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var Node[] */
  public $nodes;
  protected $collection_key = 'nodes';
  protected $nodesType = Node::class;
  protected $nodesDataType = 'array';
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
  /** @param Node[] */
  public function setNodes($nodes)
  {
    $this->nodes = $nodes;
  }
  /** @return Node[] */
  public function getNodes()
  {
    return $this->nodes;
  }
}

class NotificationConfig extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $name;
  /** @var string */
  public $pubsubTopic;
  /** @var string */
  public $serviceAccount;
  /** @var StreamingConfig */
  public $streamingConfig;
  protected $streamingConfigType = StreamingConfig::class;
  protected $streamingConfigDataType = '';
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
  public function setPubsubTopic($pubsubTopic)
  {
    $this->pubsubTopic = $pubsubTopic;
  }
  /** @return string */
  public function getPubsubTopic()
  {
    return $this->pubsubTopic;
  }
  /** @param string */
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /** @return string */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
  /** @param StreamingConfig */
  public function setStreamingConfig(StreamingConfig $streamingConfig)
  {
    $this->streamingConfig = $streamingConfig;
  }
  /** @return StreamingConfig */
  public function getStreamingConfig()
  {
    return $this->streamingConfig;
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

class OrganizationSettings extends \Google\Model
{
  /** @var AssetDiscoveryConfig */
  public $assetDiscoveryConfig;
  /** @var bool */
  public $enableAssetDiscovery;
  /** @var string */
  public $name;
  protected $assetDiscoveryConfigType = AssetDiscoveryConfig::class;
  protected $assetDiscoveryConfigDataType = '';
  /** @param AssetDiscoveryConfig */
  public function setAssetDiscoveryConfig(AssetDiscoveryConfig $assetDiscoveryConfig)
  {
    $this->assetDiscoveryConfig = $assetDiscoveryConfig;
  }
  /** @return AssetDiscoveryConfig */
  public function getAssetDiscoveryConfig()
  {
    return $this->assetDiscoveryConfig;
  }
  /** @param bool */
  public function setEnableAssetDiscovery($enableAssetDiscovery)
  {
    $this->enableAssetDiscovery = $enableAssetDiscovery;
  }
  /** @return bool */
  public function getEnableAssetDiscovery()
  {
    return $this->enableAssetDiscovery;
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

class PathNode extends \Google\Collection
{
  /** @var AssociatedFinding[] */
  public $associatedFindings;
  /** @var string */
  public $displayName;
  /** @var string */
  public $resource;
  /** @var string */
  public $resourceType;
  protected $collection_key = 'associatedFindings';
  protected $associatedFindingsType = AssociatedFinding::class;
  protected $associatedFindingsDataType = 'array';
  /** @param AssociatedFinding[] */
  public function setAssociatedFindings($associatedFindings)
  {
    $this->associatedFindings = $associatedFindings;
  }
  /** @return AssociatedFinding[] */
  public function getAssociatedFindings()
  {
    return $this->associatedFindings;
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
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return string */
  public function getResource()
  {
    return $this->resource;
  }
  /** @param string */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /** @return string */
  public function getResourceType()
  {
    return $this->resourceType;
  }
}

class Pod extends \Google\Collection
{
  /** @var Container[] */
  public $containers;
  /** @var Label[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $ns;
  protected $collection_key = 'labels';
  protected $containersType = Container::class;
  protected $containersDataType = 'array';
  protected $labelsType = Label::class;
  protected $labelsDataType = 'array';
  /** @param Container[] */
  public function setContainers($containers)
  {
    $this->containers = $containers;
  }
  /** @return Container[] */
  public function getContainers()
  {
    return $this->containers;
  }
  /** @param Label[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return Label[] */
  public function getLabels()
  {
    return $this->labels;
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
  public function setNs($ns)
  {
    $this->ns = $ns;
  }
  /** @return string */
  public function getNs()
  {
    return $this->ns;
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

class Process extends \Google\Collection
{
  /** @var string[] */
  public $args;
  /** @var bool */
  public $argumentsTruncated;
  /** @var SecuritycenterFile */
  public $binary;
  /** @var EnvironmentVariable[] */
  public $envVariables;
  /** @var bool */
  public $envVariablesTruncated;
  /** @var SecuritycenterFile[] */
  public $libraries;
  /** @var string */
  public $name;
  /** @var string */
  public $parentPid;
  /** @var string */
  public $pid;
  /** @var SecuritycenterFile */
  public $script;
  protected $collection_key = 'libraries';
  protected $binaryType = SecuritycenterFile::class;
  protected $binaryDataType = '';
  protected $envVariablesType = EnvironmentVariable::class;
  protected $envVariablesDataType = 'array';
  protected $librariesType = SecuritycenterFile::class;
  protected $librariesDataType = 'array';
  protected $scriptType = SecuritycenterFile::class;
  protected $scriptDataType = '';
  /** @param string[] */
  public function setArgs($args)
  {
    $this->args = $args;
  }
  /** @return string[] */
  public function getArgs()
  {
    return $this->args;
  }
  /** @param bool */
  public function setArgumentsTruncated($argumentsTruncated)
  {
    $this->argumentsTruncated = $argumentsTruncated;
  }
  /** @return bool */
  public function getArgumentsTruncated()
  {
    return $this->argumentsTruncated;
  }
  /** @param SecuritycenterFile */
  public function setBinary(SecuritycenterFile $binary)
  {
    $this->binary = $binary;
  }
  /** @return SecuritycenterFile */
  public function getBinary()
  {
    return $this->binary;
  }
  /** @param EnvironmentVariable[] */
  public function setEnvVariables($envVariables)
  {
    $this->envVariables = $envVariables;
  }
  /** @return EnvironmentVariable[] */
  public function getEnvVariables()
  {
    return $this->envVariables;
  }
  /** @param bool */
  public function setEnvVariablesTruncated($envVariablesTruncated)
  {
    $this->envVariablesTruncated = $envVariablesTruncated;
  }
  /** @return bool */
  public function getEnvVariablesTruncated()
  {
    return $this->envVariablesTruncated;
  }
  /** @param SecuritycenterFile[] */
  public function setLibraries($libraries)
  {
    $this->libraries = $libraries;
  }
  /** @return SecuritycenterFile[] */
  public function getLibraries()
  {
    return $this->libraries;
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
  public function setParentPid($parentPid)
  {
    $this->parentPid = $parentPid;
  }
  /** @return string */
  public function getParentPid()
  {
    return $this->parentPid;
  }
  /** @param string */
  public function setPid($pid)
  {
    $this->pid = $pid;
  }
  /** @return string */
  public function getPid()
  {
    return $this->pid;
  }
  /** @param SecuritycenterFile */
  public function setScript(SecuritycenterFile $script)
  {
    $this->script = $script;
  }
  /** @return SecuritycenterFile */
  public function getScript()
  {
    return $this->script;
  }
}

class ProcessSignature extends \Google\Model
{
  /** @var MemoryHashSignature */
  public $memoryHashSignature;
  /** @var YaraRuleSignature */
  public $yaraRuleSignature;
  protected $memoryHashSignatureType = MemoryHashSignature::class;
  protected $memoryHashSignatureDataType = '';
  protected $yaraRuleSignatureType = YaraRuleSignature::class;
  protected $yaraRuleSignatureDataType = '';
  /** @param MemoryHashSignature */
  public function setMemoryHashSignature(MemoryHashSignature $memoryHashSignature)
  {
    $this->memoryHashSignature = $memoryHashSignature;
  }
  /** @return MemoryHashSignature */
  public function getMemoryHashSignature()
  {
    return $this->memoryHashSignature;
  }
  /** @param YaraRuleSignature */
  public function setYaraRuleSignature(YaraRuleSignature $yaraRuleSignature)
  {
    $this->yaraRuleSignature = $yaraRuleSignature;
  }
  /** @return YaraRuleSignature */
  public function getYaraRuleSignature()
  {
    return $this->yaraRuleSignature;
  }
}

class Reference extends \Google\Model
{
  /** @var string */
  public $source;
  /** @var string */
  public $uri;

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
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class Role extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $ns;

  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  public function setNs($ns)
  {
    $this->ns = $ns;
  }
  /** @return string */
  public function getNs()
  {
    return $this->ns;
  }
}

class RunAssetDiscoveryRequest extends \Google\Model
{
}

class SecurityCenterProperties extends \Google\Collection
{
  /** @var Folder[] */
  public $folders;
  /** @var string */
  public $resourceDisplayName;
  /** @var string */
  public $resourceName;
  /** @var string[] */
  public $resourceOwners;
  /** @var string */
  public $resourceParent;
  /** @var string */
  public $resourceParentDisplayName;
  /** @var string */
  public $resourceProject;
  /** @var string */
  public $resourceProjectDisplayName;
  /** @var string */
  public $resourceType;
  protected $collection_key = 'resourceOwners';
  protected $foldersType = Folder::class;
  protected $foldersDataType = 'array';
  /** @param Folder[] */
  public function setFolders($folders)
  {
    $this->folders = $folders;
  }
  /** @return Folder[] */
  public function getFolders()
  {
    return $this->folders;
  }
  /** @param string */
  public function setResourceDisplayName($resourceDisplayName)
  {
    $this->resourceDisplayName = $resourceDisplayName;
  }
  /** @return string */
  public function getResourceDisplayName()
  {
    return $this->resourceDisplayName;
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
  /** @param string[] */
  public function setResourceOwners($resourceOwners)
  {
    $this->resourceOwners = $resourceOwners;
  }
  /** @return string[] */
  public function getResourceOwners()
  {
    return $this->resourceOwners;
  }
  /** @param string */
  public function setResourceParent($resourceParent)
  {
    $this->resourceParent = $resourceParent;
  }
  /** @return string */
  public function getResourceParent()
  {
    return $this->resourceParent;
  }
  /** @param string */
  public function setResourceParentDisplayName($resourceParentDisplayName)
  {
    $this->resourceParentDisplayName = $resourceParentDisplayName;
  }
  /** @return string */
  public function getResourceParentDisplayName()
  {
    return $this->resourceParentDisplayName;
  }
  /** @param string */
  public function setResourceProject($resourceProject)
  {
    $this->resourceProject = $resourceProject;
  }
  /** @return string */
  public function getResourceProject()
  {
    return $this->resourceProject;
  }
  /** @param string */
  public function setResourceProjectDisplayName($resourceProjectDisplayName)
  {
    $this->resourceProjectDisplayName = $resourceProjectDisplayName;
  }
  /** @return string */
  public function getResourceProjectDisplayName()
  {
    return $this->resourceProjectDisplayName;
  }
  /** @param string */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /** @return string */
  public function getResourceType()
  {
    return $this->resourceType;
  }
}

class SecurityMarks extends \Google\Model
{
  /** @var string */
  public $canonicalName;
  /** @var string[] */
  public $marks;
  /** @var string */
  public $name;

  /** @param string */
  public function setCanonicalName($canonicalName)
  {
    $this->canonicalName = $canonicalName;
  }
  /** @return string */
  public function getCanonicalName()
  {
    return $this->canonicalName;
  }
  /** @param string[] */
  public function setMarks($marks)
  {
    $this->marks = $marks;
  }
  /** @return string[] */
  public function getMarks()
  {
    return $this->marks;
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

class SecuritycenterEmpty extends \Google\Model
{
}

class SecuritycenterFile extends \Google\Model
{
  /** @var string */
  public $contents;
  /** @var string */
  public $hashedSize;
  /** @var bool */
  public $partiallyHashed;
  /** @var string */
  public $path;
  /** @var string */
  public $sha256;
  /** @var string */
  public $size;

  /** @param string */
  public function setContents($contents)
  {
    $this->contents = $contents;
  }
  /** @return string */
  public function getContents()
  {
    return $this->contents;
  }
  /** @param string */
  public function setHashedSize($hashedSize)
  {
    $this->hashedSize = $hashedSize;
  }
  /** @return string */
  public function getHashedSize()
  {
    return $this->hashedSize;
  }
  /** @param bool */
  public function setPartiallyHashed($partiallyHashed)
  {
    $this->partiallyHashed = $partiallyHashed;
  }
  /** @return bool */
  public function getPartiallyHashed()
  {
    return $this->partiallyHashed;
  }
  /** @param string */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
  /** @param string */
  public function setSha256($sha256)
  {
    $this->sha256 = $sha256;
  }
  /** @return string */
  public function getSha256()
  {
    return $this->sha256;
  }
  /** @param string */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /** @return string */
  public function getSize()
  {
    return $this->size;
  }
}

class SecuritycenterResource extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var Folder[] */
  public $folders;
  /** @var string */
  public $name;
  /** @var string */
  public $parentDisplayName;
  /** @var string */
  public $parentName;
  /** @var string */
  public $projectDisplayName;
  /** @var string */
  public $projectName;
  /** @var string */
  public $type;
  protected $collection_key = 'folders';
  protected $foldersType = Folder::class;
  protected $foldersDataType = 'array';
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
  /** @param Folder[] */
  public function setFolders($folders)
  {
    $this->folders = $folders;
  }
  /** @return Folder[] */
  public function getFolders()
  {
    return $this->folders;
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
  public function setParentDisplayName($parentDisplayName)
  {
    $this->parentDisplayName = $parentDisplayName;
  }
  /** @return string */
  public function getParentDisplayName()
  {
    return $this->parentDisplayName;
  }
  /** @param string */
  public function setParentName($parentName)
  {
    $this->parentName = $parentName;
  }
  /** @return string */
  public function getParentName()
  {
    return $this->parentName;
  }
  /** @param string */
  public function setProjectDisplayName($projectDisplayName)
  {
    $this->projectDisplayName = $projectDisplayName;
  }
  /** @return string */
  public function getProjectDisplayName()
  {
    return $this->projectDisplayName;
  }
  /** @param string */
  public function setProjectName($projectName)
  {
    $this->projectName = $projectName;
  }
  /** @return string */
  public function getProjectName()
  {
    return $this->projectName;
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

class ServiceAccountDelegationInfo extends \Google\Model
{
  /** @var string */
  public $principalEmail;
  /** @var string */
  public $principalSubject;

  /** @param string */
  public function setPrincipalEmail($principalEmail)
  {
    $this->principalEmail = $principalEmail;
  }
  /** @return string */
  public function getPrincipalEmail()
  {
    return $this->principalEmail;
  }
  /** @param string */
  public function setPrincipalSubject($principalSubject)
  {
    $this->principalSubject = $principalSubject;
  }
  /** @return string */
  public function getPrincipalSubject()
  {
    return $this->principalSubject;
  }
}

class SetFindingStateRequest extends \Google\Model
{
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;

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
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
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

class SetMuteRequest extends \Google\Model
{
  /** @var string */
  public $mute;

  /** @param string */
  public function setMute($mute)
  {
    $this->mute = $mute;
  }
  /** @return string */
  public function getMute()
  {
    return $this->mute;
  }
}

class Source extends \Google\Model
{
  /** @var string */
  public $canonicalName;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;

  /** @param string */
  public function setCanonicalName($canonicalName)
  {
    $this->canonicalName = $canonicalName;
  }
  /** @return string */
  public function getCanonicalName()
  {
    return $this->canonicalName;
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

class StreamingConfig extends \Google\Model
{
  /** @var string */
  public $filter;

  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
}

class Subject extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $ns;

  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  public function setNs($ns)
  {
    $this->ns = $ns;
  }
  /** @return string */
  public function getNs()
  {
    return $this->ns;
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

class Vulnerability extends \Google\Model
{
  /** @var Cve */
  public $cve;
  protected $cveType = Cve::class;
  protected $cveDataType = '';
  /** @param Cve */
  public function setCve(Cve $cve)
  {
    $this->cve = $cve;
  }
  /** @return Cve */
  public function getCve()
  {
    return $this->cve;
  }
}

class YaraRuleSignature extends \Google\Model
{
  /** @var string */
  public $yaraRule;

  /** @param string */
  public function setYaraRule($yaraRule)
  {
    $this->yaraRule = $yaraRule;
  }
  /** @return string */
  public function getYaraRule()
  {
    return $this->yaraRule;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Access::class, 'Google_Service_SecurityCommandCenter_Access');
class_alias(AccessReview::class, 'Google_Service_SecurityCommandCenter_AccessReview');
class_alias(Asset::class, 'Google_Service_SecurityCommandCenter_Asset');
class_alias(AssetDiscoveryConfig::class, 'Google_Service_SecurityCommandCenter_AssetDiscoveryConfig');
class_alias(AssociatedFinding::class, 'Google_Service_SecurityCommandCenter_AssociatedFinding');
class_alias(AuditConfig::class, 'Google_Service_SecurityCommandCenter_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_SecurityCommandCenter_AuditLogConfig');
class_alias(Binding::class, 'Google_Service_SecurityCommandCenter_Binding');
class_alias(BulkMuteFindingsRequest::class, 'Google_Service_SecurityCommandCenter_BulkMuteFindingsRequest');
class_alias(Compliance::class, 'Google_Service_SecurityCommandCenter_Compliance');
class_alias(Connection::class, 'Google_Service_SecurityCommandCenter_Connection');
class_alias(Contact::class, 'Google_Service_SecurityCommandCenter_Contact');
class_alias(ContactDetails::class, 'Google_Service_SecurityCommandCenter_ContactDetails');
class_alias(Container::class, 'Google_Service_SecurityCommandCenter_Container');
class_alias(Cve::class, 'Google_Service_SecurityCommandCenter_Cve');
class_alias(Cvssv3::class, 'Google_Service_SecurityCommandCenter_Cvssv3');
class_alias(Database::class, 'Google_Service_SecurityCommandCenter_Database');
class_alias(Detection::class, 'Google_Service_SecurityCommandCenter_Detection');
class_alias(Edge::class, 'Google_Service_SecurityCommandCenter_Edge');
class_alias(EnvironmentVariable::class, 'Google_Service_SecurityCommandCenter_EnvironmentVariable');
class_alias(ExfilResource::class, 'Google_Service_SecurityCommandCenter_ExfilResource');
class_alias(Exfiltration::class, 'Google_Service_SecurityCommandCenter_Exfiltration');
class_alias(Expr::class, 'Google_Service_SecurityCommandCenter_Expr');
class_alias(Finding::class, 'Google_Service_SecurityCommandCenter_Finding');
class_alias(Folder::class, 'Google_Service_SecurityCommandCenter_Folder');
class_alias(Geolocation::class, 'Google_Service_SecurityCommandCenter_Geolocation');
class_alias(GetIamPolicyRequest::class, 'Google_Service_SecurityCommandCenter_GetIamPolicyRequest');
class_alias(GetPolicyOptions::class, 'Google_Service_SecurityCommandCenter_GetPolicyOptions');
class_alias(GoogleCloudSecuritycenterV1BigQueryExport::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1BigQueryExport');
class_alias(GoogleCloudSecuritycenterV1Binding::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1Binding');
class_alias(GoogleCloudSecuritycenterV1BulkMuteFindingsResponse::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1BulkMuteFindingsResponse');
class_alias(GoogleCloudSecuritycenterV1ExposedResource::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1ExposedResource');
class_alias(GoogleCloudSecuritycenterV1ExposurePath::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1ExposurePath');
class_alias(GoogleCloudSecuritycenterV1ExternalSystem::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1ExternalSystem');
class_alias(GoogleCloudSecuritycenterV1MuteConfig::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1MuteConfig');
class_alias(GoogleCloudSecuritycenterV1NotificationMessage::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1NotificationMessage');
class_alias(GoogleCloudSecuritycenterV1Resource::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1Resource');
class_alias(GoogleCloudSecuritycenterV1ResourceValueConfig::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1ResourceValueConfig');
class_alias(GoogleCloudSecuritycenterV1RunAssetDiscoveryResponse::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1RunAssetDiscoveryResponse');
class_alias(GoogleCloudSecuritycenterV1beta1RunAssetDiscoveryResponse::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1beta1RunAssetDiscoveryResponse');
class_alias(GoogleCloudSecuritycenterV1p1beta1Finding::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1p1beta1Finding');
class_alias(GoogleCloudSecuritycenterV1p1beta1Folder::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1p1beta1Folder');
class_alias(GoogleCloudSecuritycenterV1p1beta1NotificationMessage::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1p1beta1NotificationMessage');
class_alias(GoogleCloudSecuritycenterV1p1beta1Resource::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1p1beta1Resource');
class_alias(GoogleCloudSecuritycenterV1p1beta1RunAssetDiscoveryResponse::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1p1beta1RunAssetDiscoveryResponse');
class_alias(GoogleCloudSecuritycenterV1p1beta1SecurityMarks::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1p1beta1SecurityMarks');
class_alias(GroupAssetsRequest::class, 'Google_Service_SecurityCommandCenter_GroupAssetsRequest');
class_alias(GroupAssetsResponse::class, 'Google_Service_SecurityCommandCenter_GroupAssetsResponse');
class_alias(GroupFindingsRequest::class, 'Google_Service_SecurityCommandCenter_GroupFindingsRequest');
class_alias(GroupFindingsResponse::class, 'Google_Service_SecurityCommandCenter_GroupFindingsResponse');
class_alias(GroupResult::class, 'Google_Service_SecurityCommandCenter_GroupResult');
class_alias(IamBinding::class, 'Google_Service_SecurityCommandCenter_IamBinding');
class_alias(IamPolicy::class, 'Google_Service_SecurityCommandCenter_IamPolicy');
class_alias(Indicator::class, 'Google_Service_SecurityCommandCenter_Indicator');
class_alias(Kubernetes::class, 'Google_Service_SecurityCommandCenter_Kubernetes');
class_alias(Label::class, 'Google_Service_SecurityCommandCenter_Label');
class_alias(ListAssetsResponse::class, 'Google_Service_SecurityCommandCenter_ListAssetsResponse');
class_alias(ListAssetsResult::class, 'Google_Service_SecurityCommandCenter_ListAssetsResult');
class_alias(ListBigQueryExportsResponse::class, 'Google_Service_SecurityCommandCenter_ListBigQueryExportsResponse');
class_alias(ListFindingsResponse::class, 'Google_Service_SecurityCommandCenter_ListFindingsResponse');
class_alias(ListFindingsResult::class, 'Google_Service_SecurityCommandCenter_ListFindingsResult');
class_alias(ListMuteConfigsResponse::class, 'Google_Service_SecurityCommandCenter_ListMuteConfigsResponse');
class_alias(ListNotificationConfigsResponse::class, 'Google_Service_SecurityCommandCenter_ListNotificationConfigsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_SecurityCommandCenter_ListOperationsResponse');
class_alias(ListSourcesResponse::class, 'Google_Service_SecurityCommandCenter_ListSourcesResponse');
class_alias(MemoryHashSignature::class, 'Google_Service_SecurityCommandCenter_MemoryHashSignature');
class_alias(MitreAttack::class, 'Google_Service_SecurityCommandCenter_MitreAttack');
class_alias(Node::class, 'Google_Service_SecurityCommandCenter_Node');
class_alias(NodePool::class, 'Google_Service_SecurityCommandCenter_NodePool');
class_alias(NotificationConfig::class, 'Google_Service_SecurityCommandCenter_NotificationConfig');
class_alias(Operation::class, 'Google_Service_SecurityCommandCenter_Operation');
class_alias(OrganizationSettings::class, 'Google_Service_SecurityCommandCenter_OrganizationSettings');
class_alias(PathNode::class, 'Google_Service_SecurityCommandCenter_PathNode');
class_alias(Pod::class, 'Google_Service_SecurityCommandCenter_Pod');
class_alias(Policy::class, 'Google_Service_SecurityCommandCenter_Policy');
class_alias(Process::class, 'Google_Service_SecurityCommandCenter_Process');
class_alias(ProcessSignature::class, 'Google_Service_SecurityCommandCenter_ProcessSignature');
class_alias(Reference::class, 'Google_Service_SecurityCommandCenter_Reference');
class_alias(Role::class, 'Google_Service_SecurityCommandCenter_Role');
class_alias(RunAssetDiscoveryRequest::class, 'Google_Service_SecurityCommandCenter_RunAssetDiscoveryRequest');
class_alias(SecurityCenterProperties::class, 'Google_Service_SecurityCommandCenter_SecurityCenterProperties');
class_alias(SecurityMarks::class, 'Google_Service_SecurityCommandCenter_SecurityMarks');
class_alias(SecuritycenterEmpty::class, 'Google_Service_SecurityCommandCenter_SecuritycenterEmpty');
class_alias(SecuritycenterFile::class, 'Google_Service_SecurityCommandCenter_SecuritycenterFile');
class_alias(SecuritycenterResource::class, 'Google_Service_SecurityCommandCenter_SecuritycenterResource');
class_alias(ServiceAccountDelegationInfo::class, 'Google_Service_SecurityCommandCenter_ServiceAccountDelegationInfo');
class_alias(SetFindingStateRequest::class, 'Google_Service_SecurityCommandCenter_SetFindingStateRequest');
class_alias(SetIamPolicyRequest::class, 'Google_Service_SecurityCommandCenter_SetIamPolicyRequest');
class_alias(SetMuteRequest::class, 'Google_Service_SecurityCommandCenter_SetMuteRequest');
class_alias(Source::class, 'Google_Service_SecurityCommandCenter_Source');
class_alias(Status::class, 'Google_Service_SecurityCommandCenter_Status');
class_alias(StreamingConfig::class, 'Google_Service_SecurityCommandCenter_StreamingConfig');
class_alias(Subject::class, 'Google_Service_SecurityCommandCenter_Subject');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_SecurityCommandCenter_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_SecurityCommandCenter_TestIamPermissionsResponse');
class_alias(Vulnerability::class, 'Google_Service_SecurityCommandCenter_Vulnerability');
class_alias(YaraRuleSignature::class, 'Google_Service_SecurityCommandCenter_YaraRuleSignature');
