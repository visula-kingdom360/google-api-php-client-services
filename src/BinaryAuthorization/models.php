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

namespace Google\Service\BinaryAuthorization;

class AdmissionRule extends \Google\Collection
{
  /** @var string */
  public $enforcementMode;
  /** @var string */
  public $evaluationMode;
  /** @var string[] */
  public $requireAttestationsBy;
  protected $collection_key = 'requireAttestationsBy';
  /** @param string */
  public function setEnforcementMode($enforcementMode)
  {
    $this->enforcementMode = $enforcementMode;
  }
  /** @return string */
  public function getEnforcementMode()
  {
    return $this->enforcementMode;
  }
  /** @param string */
  public function setEvaluationMode($evaluationMode)
  {
    $this->evaluationMode = $evaluationMode;
  }
  /** @return string */
  public function getEvaluationMode()
  {
    return $this->evaluationMode;
  }
  /** @param string[] */
  public function setRequireAttestationsBy($requireAttestationsBy)
  {
    $this->requireAttestationsBy = $requireAttestationsBy;
  }
  /** @return string[] */
  public function getRequireAttestationsBy()
  {
    return $this->requireAttestationsBy;
  }
}

class AdmissionWhitelistPattern extends \Google\Model
{
  /** @var string */
  public $namePattern;

  /** @param string */
  public function setNamePattern($namePattern)
  {
    $this->namePattern = $namePattern;
  }
  /** @return string */
  public function getNamePattern()
  {
    return $this->namePattern;
  }
}

class AttestationOccurrence extends \Google\Collection
{
  /** @var Jwt[] */
  public $jwts;
  /** @var string */
  public $serializedPayload;
  /** @var Signature[] */
  public $signatures;
  protected $collection_key = 'signatures';
  protected $jwtsType = Jwt::class;
  protected $jwtsDataType = 'array';
  protected $signaturesType = Signature::class;
  protected $signaturesDataType = 'array';
  /** @param Jwt[] */
  public function setJwts($jwts)
  {
    $this->jwts = $jwts;
  }
  /** @return Jwt[] */
  public function getJwts()
  {
    return $this->jwts;
  }
  /** @param string */
  public function setSerializedPayload($serializedPayload)
  {
    $this->serializedPayload = $serializedPayload;
  }
  /** @return string */
  public function getSerializedPayload()
  {
    return $this->serializedPayload;
  }
  /** @param Signature[] */
  public function setSignatures($signatures)
  {
    $this->signatures = $signatures;
  }
  /** @return Signature[] */
  public function getSignatures()
  {
    return $this->signatures;
  }
}

class Attestor extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var string */
  public $name;
  /** @var string */
  public $updateTime;
  /** @var UserOwnedGrafeasNote */
  public $userOwnedGrafeasNote;
  protected $userOwnedGrafeasNoteType = UserOwnedGrafeasNote::class;
  protected $userOwnedGrafeasNoteDataType = '';
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
  /** @param UserOwnedGrafeasNote */
  public function setUserOwnedGrafeasNote(UserOwnedGrafeasNote $userOwnedGrafeasNote)
  {
    $this->userOwnedGrafeasNote = $userOwnedGrafeasNote;
  }
  /** @return UserOwnedGrafeasNote */
  public function getUserOwnedGrafeasNote()
  {
    return $this->userOwnedGrafeasNote;
  }
}

class AttestorPublicKey extends \Google\Model
{
  /** @var string */
  public $asciiArmoredPgpPublicKey;
  /** @var string */
  public $comment;
  /** @var string */
  public $id;
  /** @var PkixPublicKey */
  public $pkixPublicKey;
  protected $pkixPublicKeyType = PkixPublicKey::class;
  protected $pkixPublicKeyDataType = '';
  /** @param string */
  public function setAsciiArmoredPgpPublicKey($asciiArmoredPgpPublicKey)
  {
    $this->asciiArmoredPgpPublicKey = $asciiArmoredPgpPublicKey;
  }
  /** @return string */
  public function getAsciiArmoredPgpPublicKey()
  {
    return $this->asciiArmoredPgpPublicKey;
  }
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
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param PkixPublicKey */
  public function setPkixPublicKey(PkixPublicKey $pkixPublicKey)
  {
    $this->pkixPublicKey = $pkixPublicKey;
  }
  /** @return PkixPublicKey */
  public function getPkixPublicKey()
  {
    return $this->pkixPublicKey;
  }
}

class BinaryauthorizationEmpty extends \Google\Model
{
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

class IamPolicy extends \Google\Collection
{
  /** @var Binding[] */
  public $bindings;
  /** @var string */
  public $etag;
  /** @var int */
  public $version;
  protected $collection_key = 'bindings';
  protected $bindingsType = Binding::class;
  protected $bindingsDataType = 'array';
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

class Jwt extends \Google\Model
{
  /** @var string */
  public $compactJwt;

  /** @param string */
  public function setCompactJwt($compactJwt)
  {
    $this->compactJwt = $compactJwt;
  }
  /** @return string */
  public function getCompactJwt()
  {
    return $this->compactJwt;
  }
}

class ListAttestorsResponse extends \Google\Collection
{
  /** @var Attestor[] */
  public $attestors;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'attestors';
  protected $attestorsType = Attestor::class;
  protected $attestorsDataType = 'array';
  /** @param Attestor[] */
  public function setAttestors($attestors)
  {
    $this->attestors = $attestors;
  }
  /** @return Attestor[] */
  public function getAttestors()
  {
    return $this->attestors;
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

class PkixPublicKey extends \Google\Model
{
  /** @var string */
  public $publicKeyPem;
  /** @var string */
  public $signatureAlgorithm;

  /** @param string */
  public function setPublicKeyPem($publicKeyPem)
  {
    $this->publicKeyPem = $publicKeyPem;
  }
  /** @return string */
  public function getPublicKeyPem()
  {
    return $this->publicKeyPem;
  }
  /** @param string */
  public function setSignatureAlgorithm($signatureAlgorithm)
  {
    $this->signatureAlgorithm = $signatureAlgorithm;
  }
  /** @return string */
  public function getSignatureAlgorithm()
  {
    return $this->signatureAlgorithm;
  }
}

class Policy extends \Google\Collection
{
  /** @var AdmissionWhitelistPattern[] */
  public $admissionWhitelistPatterns;
  /** @var AdmissionRule[] */
  public $clusterAdmissionRules;
  /** @var AdmissionRule */
  public $defaultAdmissionRule;
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var string */
  public $globalPolicyEvaluationMode;
  /** @var AdmissionRule[] */
  public $istioServiceIdentityAdmissionRules;
  /** @var AdmissionRule[] */
  public $kubernetesNamespaceAdmissionRules;
  /** @var AdmissionRule[] */
  public $kubernetesServiceAccountAdmissionRules;
  /** @var string */
  public $name;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'admissionWhitelistPatterns';
  protected $admissionWhitelistPatternsType = AdmissionWhitelistPattern::class;
  protected $admissionWhitelistPatternsDataType = 'array';
  protected $clusterAdmissionRulesType = AdmissionRule::class;
  protected $clusterAdmissionRulesDataType = 'map';
  protected $defaultAdmissionRuleType = AdmissionRule::class;
  protected $defaultAdmissionRuleDataType = '';
  protected $istioServiceIdentityAdmissionRulesType = AdmissionRule::class;
  protected $istioServiceIdentityAdmissionRulesDataType = 'map';
  protected $kubernetesNamespaceAdmissionRulesType = AdmissionRule::class;
  protected $kubernetesNamespaceAdmissionRulesDataType = 'map';
  protected $kubernetesServiceAccountAdmissionRulesType = AdmissionRule::class;
  protected $kubernetesServiceAccountAdmissionRulesDataType = 'map';
  /** @param AdmissionWhitelistPattern[] */
  public function setAdmissionWhitelistPatterns($admissionWhitelistPatterns)
  {
    $this->admissionWhitelistPatterns = $admissionWhitelistPatterns;
  }
  /** @return AdmissionWhitelistPattern[] */
  public function getAdmissionWhitelistPatterns()
  {
    return $this->admissionWhitelistPatterns;
  }
  /** @param AdmissionRule[] */
  public function setClusterAdmissionRules($clusterAdmissionRules)
  {
    $this->clusterAdmissionRules = $clusterAdmissionRules;
  }
  /** @return AdmissionRule[] */
  public function getClusterAdmissionRules()
  {
    return $this->clusterAdmissionRules;
  }
  /** @param AdmissionRule */
  public function setDefaultAdmissionRule(AdmissionRule $defaultAdmissionRule)
  {
    $this->defaultAdmissionRule = $defaultAdmissionRule;
  }
  /** @return AdmissionRule */
  public function getDefaultAdmissionRule()
  {
    return $this->defaultAdmissionRule;
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
  public function setGlobalPolicyEvaluationMode($globalPolicyEvaluationMode)
  {
    $this->globalPolicyEvaluationMode = $globalPolicyEvaluationMode;
  }
  /** @return string */
  public function getGlobalPolicyEvaluationMode()
  {
    return $this->globalPolicyEvaluationMode;
  }
  /** @param AdmissionRule[] */
  public function setIstioServiceIdentityAdmissionRules($istioServiceIdentityAdmissionRules)
  {
    $this->istioServiceIdentityAdmissionRules = $istioServiceIdentityAdmissionRules;
  }
  /** @return AdmissionRule[] */
  public function getIstioServiceIdentityAdmissionRules()
  {
    return $this->istioServiceIdentityAdmissionRules;
  }
  /** @param AdmissionRule[] */
  public function setKubernetesNamespaceAdmissionRules($kubernetesNamespaceAdmissionRules)
  {
    $this->kubernetesNamespaceAdmissionRules = $kubernetesNamespaceAdmissionRules;
  }
  /** @return AdmissionRule[] */
  public function getKubernetesNamespaceAdmissionRules()
  {
    return $this->kubernetesNamespaceAdmissionRules;
  }
  /** @param AdmissionRule[] */
  public function setKubernetesServiceAccountAdmissionRules($kubernetesServiceAccountAdmissionRules)
  {
    $this->kubernetesServiceAccountAdmissionRules = $kubernetesServiceAccountAdmissionRules;
  }
  /** @return AdmissionRule[] */
  public function getKubernetesServiceAccountAdmissionRules()
  {
    return $this->kubernetesServiceAccountAdmissionRules;
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

class SetIamPolicyRequest extends \Google\Model
{
  /** @var IamPolicy */
  public $policy;
  protected $policyType = IamPolicy::class;
  protected $policyDataType = '';
  /** @param IamPolicy */
  public function setPolicy(IamPolicy $policy)
  {
    $this->policy = $policy;
  }
  /** @return IamPolicy */
  public function getPolicy()
  {
    return $this->policy;
  }
}

class Signature extends \Google\Model
{
  /** @var string */
  public $publicKeyId;
  /** @var string */
  public $signature;

  /** @param string */
  public function setPublicKeyId($publicKeyId)
  {
    $this->publicKeyId = $publicKeyId;
  }
  /** @return string */
  public function getPublicKeyId()
  {
    return $this->publicKeyId;
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

class UserOwnedGrafeasNote extends \Google\Collection
{
  /** @var string */
  public $delegationServiceAccountEmail;
  /** @var string */
  public $noteReference;
  /** @var AttestorPublicKey[] */
  public $publicKeys;
  protected $collection_key = 'publicKeys';
  protected $publicKeysType = AttestorPublicKey::class;
  protected $publicKeysDataType = 'array';
  /** @param string */
  public function setDelegationServiceAccountEmail($delegationServiceAccountEmail)
  {
    $this->delegationServiceAccountEmail = $delegationServiceAccountEmail;
  }
  /** @return string */
  public function getDelegationServiceAccountEmail()
  {
    return $this->delegationServiceAccountEmail;
  }
  /** @param string */
  public function setNoteReference($noteReference)
  {
    $this->noteReference = $noteReference;
  }
  /** @return string */
  public function getNoteReference()
  {
    return $this->noteReference;
  }
  /** @param AttestorPublicKey[] */
  public function setPublicKeys($publicKeys)
  {
    $this->publicKeys = $publicKeys;
  }
  /** @return AttestorPublicKey[] */
  public function getPublicKeys()
  {
    return $this->publicKeys;
  }
}

class ValidateAttestationOccurrenceRequest extends \Google\Model
{
  /** @var AttestationOccurrence */
  public $attestation;
  /** @var string */
  public $occurrenceNote;
  /** @var string */
  public $occurrenceResourceUri;
  protected $attestationType = AttestationOccurrence::class;
  protected $attestationDataType = '';
  /** @param AttestationOccurrence */
  public function setAttestation(AttestationOccurrence $attestation)
  {
    $this->attestation = $attestation;
  }
  /** @return AttestationOccurrence */
  public function getAttestation()
  {
    return $this->attestation;
  }
  /** @param string */
  public function setOccurrenceNote($occurrenceNote)
  {
    $this->occurrenceNote = $occurrenceNote;
  }
  /** @return string */
  public function getOccurrenceNote()
  {
    return $this->occurrenceNote;
  }
  /** @param string */
  public function setOccurrenceResourceUri($occurrenceResourceUri)
  {
    $this->occurrenceResourceUri = $occurrenceResourceUri;
  }
  /** @return string */
  public function getOccurrenceResourceUri()
  {
    return $this->occurrenceResourceUri;
  }
}

class ValidateAttestationOccurrenceResponse extends \Google\Model
{
  /** @var string */
  public $denialReason;
  /** @var string */
  public $result;

  /** @param string */
  public function setDenialReason($denialReason)
  {
    $this->denialReason = $denialReason;
  }
  /** @return string */
  public function getDenialReason()
  {
    return $this->denialReason;
  }
  /** @param string */
  public function setResult($result)
  {
    $this->result = $result;
  }
  /** @return string */
  public function getResult()
  {
    return $this->result;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdmissionRule::class, 'Google_Service_BinaryAuthorization_AdmissionRule');
class_alias(AdmissionWhitelistPattern::class, 'Google_Service_BinaryAuthorization_AdmissionWhitelistPattern');
class_alias(AttestationOccurrence::class, 'Google_Service_BinaryAuthorization_AttestationOccurrence');
class_alias(Attestor::class, 'Google_Service_BinaryAuthorization_Attestor');
class_alias(AttestorPublicKey::class, 'Google_Service_BinaryAuthorization_AttestorPublicKey');
class_alias(BinaryauthorizationEmpty::class, 'Google_Service_BinaryAuthorization_BinaryauthorizationEmpty');
class_alias(Binding::class, 'Google_Service_BinaryAuthorization_Binding');
class_alias(Expr::class, 'Google_Service_BinaryAuthorization_Expr');
class_alias(IamPolicy::class, 'Google_Service_BinaryAuthorization_IamPolicy');
class_alias(Jwt::class, 'Google_Service_BinaryAuthorization_Jwt');
class_alias(ListAttestorsResponse::class, 'Google_Service_BinaryAuthorization_ListAttestorsResponse');
class_alias(PkixPublicKey::class, 'Google_Service_BinaryAuthorization_PkixPublicKey');
class_alias(Policy::class, 'Google_Service_BinaryAuthorization_Policy');
class_alias(SetIamPolicyRequest::class, 'Google_Service_BinaryAuthorization_SetIamPolicyRequest');
class_alias(Signature::class, 'Google_Service_BinaryAuthorization_Signature');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_BinaryAuthorization_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_BinaryAuthorization_TestIamPermissionsResponse');
class_alias(UserOwnedGrafeasNote::class, 'Google_Service_BinaryAuthorization_UserOwnedGrafeasNote');
class_alias(ValidateAttestationOccurrenceRequest::class, 'Google_Service_BinaryAuthorization_ValidateAttestationOccurrenceRequest');
class_alias(ValidateAttestationOccurrenceResponse::class, 'Google_Service_BinaryAuthorization_ValidateAttestationOccurrenceResponse');
