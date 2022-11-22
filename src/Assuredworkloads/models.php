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

namespace Google\Service\Assuredworkloads;

class GoogleCloudAssuredworkloadsV1AcknowledgeViolationRequest extends \Google\Model
{
  /** @var string */
  public $comment;
  /** @var string */
  public $nonCompliantOrgPolicy;

  /** @param string */
  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  /** @return string */
  public function getComment()
  {
    return $this->comment;
  }
  /** @param string */
  public function setNonCompliantOrgPolicy($nonCompliantOrgPolicy)
  {
    $this->nonCompliantOrgPolicy = $nonCompliantOrgPolicy;
  }
  /** @return string */
  public function getNonCompliantOrgPolicy()
  {
    return $this->nonCompliantOrgPolicy;
  }
}

class GoogleCloudAssuredworkloadsV1AcknowledgeViolationResponse extends \Google\Model
{
}

class GoogleCloudAssuredworkloadsV1CreateWorkloadOperationMetadata extends \Google\Model
{
  /** @var string */
  public $complianceRegime;
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var string */
  public $parent;

  /** @param string */
  public function setComplianceRegime($complianceRegime)
  {
    $this->complianceRegime = $complianceRegime;
  }
  /** @return string */
  public function getComplianceRegime()
  {
    return $this->complianceRegime;
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

class GoogleCloudAssuredworkloadsV1ListViolationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudAssuredworkloadsV1Violation[] */
  public $violations;
  protected $collection_key = 'violations';
  protected $violationsType = GoogleCloudAssuredworkloadsV1Violation::class;
  protected $violationsDataType = 'array';
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
  /** @param GoogleCloudAssuredworkloadsV1Violation[] */
  public function setViolations($violations)
  {
    $this->violations = $violations;
  }
  /** @return GoogleCloudAssuredworkloadsV1Violation[] */
  public function getViolations()
  {
    return $this->violations;
  }
}

class GoogleCloudAssuredworkloadsV1ListWorkloadsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudAssuredworkloadsV1Workload[] */
  public $workloads;
  protected $collection_key = 'workloads';
  protected $workloadsType = GoogleCloudAssuredworkloadsV1Workload::class;
  protected $workloadsDataType = 'array';
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
  /** @param GoogleCloudAssuredworkloadsV1Workload[] */
  public function setWorkloads($workloads)
  {
    $this->workloads = $workloads;
  }
  /** @return GoogleCloudAssuredworkloadsV1Workload[] */
  public function getWorkloads()
  {
    return $this->workloads;
  }
}

class GoogleCloudAssuredworkloadsV1RestrictAllowedResourcesRequest extends \Google\Model
{
  /** @var string */
  public $restrictionType;

  /** @param string */
  public function setRestrictionType($restrictionType)
  {
    $this->restrictionType = $restrictionType;
  }
  /** @return string */
  public function getRestrictionType()
  {
    return $this->restrictionType;
  }
}

class GoogleCloudAssuredworkloadsV1RestrictAllowedResourcesResponse extends \Google\Model
{
}

class GoogleCloudAssuredworkloadsV1Violation extends \Google\Model
{
  /** @var bool */
  public $acknowledged;
  /** @var string */
  public $acknowledgementTime;
  /** @var string */
  public $auditLogLink;
  /** @var string */
  public $beginTime;
  /** @var string */
  public $category;
  /** @var string */
  public $description;
  /** @var string */
  public $exceptionAuditLogLink;
  /** @var string */
  public $name;
  /** @var string */
  public $nonCompliantOrgPolicy;
  /** @var string */
  public $orgPolicyConstraint;
  /** @var GoogleCloudAssuredworkloadsV1ViolationRemediation */
  public $remediation;
  /** @var string */
  public $resolveTime;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  protected $remediationType = GoogleCloudAssuredworkloadsV1ViolationRemediation::class;
  protected $remediationDataType = '';
  /** @param bool */
  public function setAcknowledged($acknowledged)
  {
    $this->acknowledged = $acknowledged;
  }
  /** @return bool */
  public function getAcknowledged()
  {
    return $this->acknowledged;
  }
  /** @param string */
  public function setAcknowledgementTime($acknowledgementTime)
  {
    $this->acknowledgementTime = $acknowledgementTime;
  }
  /** @return string */
  public function getAcknowledgementTime()
  {
    return $this->acknowledgementTime;
  }
  /** @param string */
  public function setAuditLogLink($auditLogLink)
  {
    $this->auditLogLink = $auditLogLink;
  }
  /** @return string */
  public function getAuditLogLink()
  {
    return $this->auditLogLink;
  }
  /** @param string */
  public function setBeginTime($beginTime)
  {
    $this->beginTime = $beginTime;
  }
  /** @return string */
  public function getBeginTime()
  {
    return $this->beginTime;
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
  public function setExceptionAuditLogLink($exceptionAuditLogLink)
  {
    $this->exceptionAuditLogLink = $exceptionAuditLogLink;
  }
  /** @return string */
  public function getExceptionAuditLogLink()
  {
    return $this->exceptionAuditLogLink;
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
  public function setNonCompliantOrgPolicy($nonCompliantOrgPolicy)
  {
    $this->nonCompliantOrgPolicy = $nonCompliantOrgPolicy;
  }
  /** @return string */
  public function getNonCompliantOrgPolicy()
  {
    return $this->nonCompliantOrgPolicy;
  }
  /** @param string */
  public function setOrgPolicyConstraint($orgPolicyConstraint)
  {
    $this->orgPolicyConstraint = $orgPolicyConstraint;
  }
  /** @return string */
  public function getOrgPolicyConstraint()
  {
    return $this->orgPolicyConstraint;
  }
  /** @param GoogleCloudAssuredworkloadsV1ViolationRemediation */
  public function setRemediation(GoogleCloudAssuredworkloadsV1ViolationRemediation $remediation)
  {
    $this->remediation = $remediation;
  }
  /** @return GoogleCloudAssuredworkloadsV1ViolationRemediation */
  public function getRemediation()
  {
    return $this->remediation;
  }
  /** @param string */
  public function setResolveTime($resolveTime)
  {
    $this->resolveTime = $resolveTime;
  }
  /** @return string */
  public function getResolveTime()
  {
    return $this->resolveTime;
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

class GoogleCloudAssuredworkloadsV1ViolationRemediation extends \Google\Collection
{
  /** @var string[] */
  public $compliantValues;
  /** @var GoogleCloudAssuredworkloadsV1ViolationRemediationInstructions */
  public $instructions;
  /** @var string */
  public $remediationType;
  protected $collection_key = 'compliantValues';
  protected $instructionsType = GoogleCloudAssuredworkloadsV1ViolationRemediationInstructions::class;
  protected $instructionsDataType = '';
  /** @param string[] */
  public function setCompliantValues($compliantValues)
  {
    $this->compliantValues = $compliantValues;
  }
  /** @return string[] */
  public function getCompliantValues()
  {
    return $this->compliantValues;
  }
  /** @param GoogleCloudAssuredworkloadsV1ViolationRemediationInstructions */
  public function setInstructions(GoogleCloudAssuredworkloadsV1ViolationRemediationInstructions $instructions)
  {
    $this->instructions = $instructions;
  }
  /** @return GoogleCloudAssuredworkloadsV1ViolationRemediationInstructions */
  public function getInstructions()
  {
    return $this->instructions;
  }
  /** @param string */
  public function setRemediationType($remediationType)
  {
    $this->remediationType = $remediationType;
  }
  /** @return string */
  public function getRemediationType()
  {
    return $this->remediationType;
  }
}

class GoogleCloudAssuredworkloadsV1ViolationRemediationInstructions extends \Google\Model
{
  /** @var GoogleCloudAssuredworkloadsV1ViolationRemediationInstructionsConsole */
  public $consoleInstructions;
  /** @var GoogleCloudAssuredworkloadsV1ViolationRemediationInstructionsGcloud */
  public $gcloudInstructions;
  protected $consoleInstructionsType = GoogleCloudAssuredworkloadsV1ViolationRemediationInstructionsConsole::class;
  protected $consoleInstructionsDataType = '';
  protected $gcloudInstructionsType = GoogleCloudAssuredworkloadsV1ViolationRemediationInstructionsGcloud::class;
  protected $gcloudInstructionsDataType = '';
  /** @param GoogleCloudAssuredworkloadsV1ViolationRemediationInstructionsConsole */
  public function setConsoleInstructions(GoogleCloudAssuredworkloadsV1ViolationRemediationInstructionsConsole $consoleInstructions)
  {
    $this->consoleInstructions = $consoleInstructions;
  }
  /** @return GoogleCloudAssuredworkloadsV1ViolationRemediationInstructionsConsole */
  public function getConsoleInstructions()
  {
    return $this->consoleInstructions;
  }
  /** @param GoogleCloudAssuredworkloadsV1ViolationRemediationInstructionsGcloud */
  public function setGcloudInstructions(GoogleCloudAssuredworkloadsV1ViolationRemediationInstructionsGcloud $gcloudInstructions)
  {
    $this->gcloudInstructions = $gcloudInstructions;
  }
  /** @return GoogleCloudAssuredworkloadsV1ViolationRemediationInstructionsGcloud */
  public function getGcloudInstructions()
  {
    return $this->gcloudInstructions;
  }
}

class GoogleCloudAssuredworkloadsV1ViolationRemediationInstructionsConsole extends \Google\Collection
{
  /** @var string[] */
  public $additionalLinks;
  /** @var string[] */
  public $consoleUris;
  /** @var string[] */
  public $steps;
  protected $collection_key = 'steps';
  /** @param string[] */
  public function setAdditionalLinks($additionalLinks)
  {
    $this->additionalLinks = $additionalLinks;
  }
  /** @return string[] */
  public function getAdditionalLinks()
  {
    return $this->additionalLinks;
  }
  /** @param string[] */
  public function setConsoleUris($consoleUris)
  {
    $this->consoleUris = $consoleUris;
  }
  /** @return string[] */
  public function getConsoleUris()
  {
    return $this->consoleUris;
  }
  /** @param string[] */
  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
  /** @return string[] */
  public function getSteps()
  {
    return $this->steps;
  }
}

class GoogleCloudAssuredworkloadsV1ViolationRemediationInstructionsGcloud extends \Google\Collection
{
  /** @var string[] */
  public $additionalLinks;
  /** @var string[] */
  public $gcloudCommands;
  /** @var string[] */
  public $steps;
  protected $collection_key = 'steps';
  /** @param string[] */
  public function setAdditionalLinks($additionalLinks)
  {
    $this->additionalLinks = $additionalLinks;
  }
  /** @return string[] */
  public function getAdditionalLinks()
  {
    return $this->additionalLinks;
  }
  /** @param string[] */
  public function setGcloudCommands($gcloudCommands)
  {
    $this->gcloudCommands = $gcloudCommands;
  }
  /** @return string[] */
  public function getGcloudCommands()
  {
    return $this->gcloudCommands;
  }
  /** @param string[] */
  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
  /** @return string[] */
  public function getSteps()
  {
    return $this->steps;
  }
}

class GoogleCloudAssuredworkloadsV1Workload extends \Google\Collection
{
  /** @var string */
  public $billingAccount;
  /** @var string */
  public $complianceRegime;
  /** @var GoogleCloudAssuredworkloadsV1WorkloadComplianceStatus */
  public $complianceStatus;
  /** @var string[] */
  public $compliantButDisallowedServices;
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $enableSovereignControls;
  /** @var string */
  public $etag;
  /** @var string */
  public $kajEnrollmentState;
  /** @var GoogleCloudAssuredworkloadsV1WorkloadKMSSettings */
  public $kmsSettings;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $partner;
  /** @var string */
  public $provisionedResourcesParent;
  /** @var GoogleCloudAssuredworkloadsV1WorkloadResourceSettings[] */
  public $resourceSettings;
  /** @var GoogleCloudAssuredworkloadsV1WorkloadResourceInfo[] */
  public $resources;
  /** @var GoogleCloudAssuredworkloadsV1WorkloadSaaEnrollmentResponse */
  public $saaEnrollmentResponse;
  protected $collection_key = 'resources';
  protected $complianceStatusType = GoogleCloudAssuredworkloadsV1WorkloadComplianceStatus::class;
  protected $complianceStatusDataType = '';
  protected $kmsSettingsType = GoogleCloudAssuredworkloadsV1WorkloadKMSSettings::class;
  protected $kmsSettingsDataType = '';
  protected $resourceSettingsType = GoogleCloudAssuredworkloadsV1WorkloadResourceSettings::class;
  protected $resourceSettingsDataType = 'array';
  protected $resourcesType = GoogleCloudAssuredworkloadsV1WorkloadResourceInfo::class;
  protected $resourcesDataType = 'array';
  protected $saaEnrollmentResponseType = GoogleCloudAssuredworkloadsV1WorkloadSaaEnrollmentResponse::class;
  protected $saaEnrollmentResponseDataType = '';
  /** @param string */
  public function setBillingAccount($billingAccount)
  {
    $this->billingAccount = $billingAccount;
  }
  /** @return string */
  public function getBillingAccount()
  {
    return $this->billingAccount;
  }
  /** @param string */
  public function setComplianceRegime($complianceRegime)
  {
    $this->complianceRegime = $complianceRegime;
  }
  /** @return string */
  public function getComplianceRegime()
  {
    return $this->complianceRegime;
  }
  /** @param GoogleCloudAssuredworkloadsV1WorkloadComplianceStatus */
  public function setComplianceStatus(GoogleCloudAssuredworkloadsV1WorkloadComplianceStatus $complianceStatus)
  {
    $this->complianceStatus = $complianceStatus;
  }
  /** @return GoogleCloudAssuredworkloadsV1WorkloadComplianceStatus */
  public function getComplianceStatus()
  {
    return $this->complianceStatus;
  }
  /** @param string[] */
  public function setCompliantButDisallowedServices($compliantButDisallowedServices)
  {
    $this->compliantButDisallowedServices = $compliantButDisallowedServices;
  }
  /** @return string[] */
  public function getCompliantButDisallowedServices()
  {
    return $this->compliantButDisallowedServices;
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
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /** @return string */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /** @param bool */
  public function setEnableSovereignControls($enableSovereignControls)
  {
    $this->enableSovereignControls = $enableSovereignControls;
  }
  /** @return bool */
  public function getEnableSovereignControls()
  {
    return $this->enableSovereignControls;
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
  public function setKajEnrollmentState($kajEnrollmentState)
  {
    $this->kajEnrollmentState = $kajEnrollmentState;
  }
  /** @return string */
  public function getKajEnrollmentState()
  {
    return $this->kajEnrollmentState;
  }
  /** @param GoogleCloudAssuredworkloadsV1WorkloadKMSSettings */
  public function setKmsSettings(GoogleCloudAssuredworkloadsV1WorkloadKMSSettings $kmsSettings)
  {
    $this->kmsSettings = $kmsSettings;
  }
  /** @return GoogleCloudAssuredworkloadsV1WorkloadKMSSettings */
  public function getKmsSettings()
  {
    return $this->kmsSettings;
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
  public function setPartner($partner)
  {
    $this->partner = $partner;
  }
  /** @return string */
  public function getPartner()
  {
    return $this->partner;
  }
  /** @param string */
  public function setProvisionedResourcesParent($provisionedResourcesParent)
  {
    $this->provisionedResourcesParent = $provisionedResourcesParent;
  }
  /** @return string */
  public function getProvisionedResourcesParent()
  {
    return $this->provisionedResourcesParent;
  }
  /** @param GoogleCloudAssuredworkloadsV1WorkloadResourceSettings[] */
  public function setResourceSettings($resourceSettings)
  {
    $this->resourceSettings = $resourceSettings;
  }
  /** @return GoogleCloudAssuredworkloadsV1WorkloadResourceSettings[] */
  public function getResourceSettings()
  {
    return $this->resourceSettings;
  }
  /** @param GoogleCloudAssuredworkloadsV1WorkloadResourceInfo[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return GoogleCloudAssuredworkloadsV1WorkloadResourceInfo[] */
  public function getResources()
  {
    return $this->resources;
  }
  /** @param GoogleCloudAssuredworkloadsV1WorkloadSaaEnrollmentResponse */
  public function setSaaEnrollmentResponse(GoogleCloudAssuredworkloadsV1WorkloadSaaEnrollmentResponse $saaEnrollmentResponse)
  {
    $this->saaEnrollmentResponse = $saaEnrollmentResponse;
  }
  /** @return GoogleCloudAssuredworkloadsV1WorkloadSaaEnrollmentResponse */
  public function getSaaEnrollmentResponse()
  {
    return $this->saaEnrollmentResponse;
  }
}

class GoogleCloudAssuredworkloadsV1WorkloadComplianceStatus extends \Google\Model
{
  /** @var int */
  public $acknowledgedViolationCount;
  /** @var int */
  public $activeViolationCount;

  /** @param int */
  public function setAcknowledgedViolationCount($acknowledgedViolationCount)
  {
    $this->acknowledgedViolationCount = $acknowledgedViolationCount;
  }
  /** @return int */
  public function getAcknowledgedViolationCount()
  {
    return $this->acknowledgedViolationCount;
  }
  /** @param int */
  public function setActiveViolationCount($activeViolationCount)
  {
    $this->activeViolationCount = $activeViolationCount;
  }
  /** @return int */
  public function getActiveViolationCount()
  {
    return $this->activeViolationCount;
  }
}

class GoogleCloudAssuredworkloadsV1WorkloadKMSSettings extends \Google\Model
{
  /** @var string */
  public $nextRotationTime;
  /** @var string */
  public $rotationPeriod;

  /** @param string */
  public function setNextRotationTime($nextRotationTime)
  {
    $this->nextRotationTime = $nextRotationTime;
  }
  /** @return string */
  public function getNextRotationTime()
  {
    return $this->nextRotationTime;
  }
  /** @param string */
  public function setRotationPeriod($rotationPeriod)
  {
    $this->rotationPeriod = $rotationPeriod;
  }
  /** @return string */
  public function getRotationPeriod()
  {
    return $this->rotationPeriod;
  }
}

class GoogleCloudAssuredworkloadsV1WorkloadResourceInfo extends \Google\Model
{
  /** @var string */
  public $resourceId;
  /** @var string */
  public $resourceType;

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

class GoogleCloudAssuredworkloadsV1WorkloadResourceSettings extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $resourceId;
  /** @var string */
  public $resourceType;

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

class GoogleCloudAssuredworkloadsV1WorkloadSaaEnrollmentResponse extends \Google\Collection
{
  /** @var string[] */
  public $setupErrors;
  /** @var string */
  public $setupStatus;
  protected $collection_key = 'setupErrors';
  /** @param string[] */
  public function setSetupErrors($setupErrors)
  {
    $this->setupErrors = $setupErrors;
  }
  /** @return string[] */
  public function getSetupErrors()
  {
    return $this->setupErrors;
  }
  /** @param string */
  public function setSetupStatus($setupStatus)
  {
    $this->setupStatus = $setupStatus;
  }
  /** @return string */
  public function getSetupStatus()
  {
    return $this->setupStatus;
  }
}

class GoogleLongrunningListOperationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleLongrunningOperation[] */
  public $operations;
  protected $collection_key = 'operations';
  protected $operationsType = GoogleLongrunningOperation::class;
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
  /** @param GoogleLongrunningOperation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return GoogleLongrunningOperation[] */
  public function getOperations()
  {
    return $this->operations;
  }
}

class GoogleLongrunningOperation extends \Google\Model
{
  /** @var bool */
  public $done;
  /** @var GoogleRpcStatus */
  public $error;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var array[] */
  public $response;
  protected $errorType = GoogleRpcStatus::class;
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
  /** @param GoogleRpcStatus */
  public function setError(GoogleRpcStatus $error)
  {
    $this->error = $error;
  }
  /** @return GoogleRpcStatus */
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

class GoogleProtobufEmpty extends \Google\Model
{
}

class GoogleRpcStatus extends \Google\Collection
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1AcknowledgeViolationRequest::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1AcknowledgeViolationRequest');
class_alias(GoogleCloudAssuredworkloadsV1AcknowledgeViolationResponse::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1AcknowledgeViolationResponse');
class_alias(GoogleCloudAssuredworkloadsV1CreateWorkloadOperationMetadata::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1CreateWorkloadOperationMetadata');
class_alias(GoogleCloudAssuredworkloadsV1ListViolationsResponse::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1ListViolationsResponse');
class_alias(GoogleCloudAssuredworkloadsV1ListWorkloadsResponse::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1ListWorkloadsResponse');
class_alias(GoogleCloudAssuredworkloadsV1RestrictAllowedResourcesRequest::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1RestrictAllowedResourcesRequest');
class_alias(GoogleCloudAssuredworkloadsV1RestrictAllowedResourcesResponse::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1RestrictAllowedResourcesResponse');
class_alias(GoogleCloudAssuredworkloadsV1Violation::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1Violation');
class_alias(GoogleCloudAssuredworkloadsV1ViolationRemediation::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1ViolationRemediation');
class_alias(GoogleCloudAssuredworkloadsV1ViolationRemediationInstructions::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1ViolationRemediationInstructions');
class_alias(GoogleCloudAssuredworkloadsV1ViolationRemediationInstructionsConsole::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1ViolationRemediationInstructionsConsole');
class_alias(GoogleCloudAssuredworkloadsV1ViolationRemediationInstructionsGcloud::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1ViolationRemediationInstructionsGcloud');
class_alias(GoogleCloudAssuredworkloadsV1Workload::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1Workload');
class_alias(GoogleCloudAssuredworkloadsV1WorkloadComplianceStatus::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1WorkloadComplianceStatus');
class_alias(GoogleCloudAssuredworkloadsV1WorkloadKMSSettings::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1WorkloadKMSSettings');
class_alias(GoogleCloudAssuredworkloadsV1WorkloadResourceInfo::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1WorkloadResourceInfo');
class_alias(GoogleCloudAssuredworkloadsV1WorkloadResourceSettings::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1WorkloadResourceSettings');
class_alias(GoogleCloudAssuredworkloadsV1WorkloadSaaEnrollmentResponse::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1WorkloadSaaEnrollmentResponse');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_Assuredworkloads_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_Assuredworkloads_GoogleLongrunningOperation');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_Assuredworkloads_GoogleProtobufEmpty');
class_alias(GoogleRpcStatus::class, 'Google_Service_Assuredworkloads_GoogleRpcStatus');
