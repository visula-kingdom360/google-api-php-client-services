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

namespace Google\Service\CloudSecurityToken;

class GoogleIamV1Binding extends \Google\Collection
{
  /** @var GoogleTypeExpr */
  public $condition;
  /** @var string[] */
  public $members;
  /** @var string */
  public $role;
  protected $collection_key = 'members';
  protected $conditionType = GoogleTypeExpr::class;
  protected $conditionDataType = '';
  /** @param GoogleTypeExpr */
  public function setCondition(GoogleTypeExpr $condition)
  {
    $this->condition = $condition;
  }
  /** @return GoogleTypeExpr */
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

class GoogleIdentityStsV1AccessBoundary extends \Google\Collection
{
  /** @var GoogleIdentityStsV1AccessBoundaryRule[] */
  public $accessBoundaryRules;
  protected $collection_key = 'accessBoundaryRules';
  protected $accessBoundaryRulesType = GoogleIdentityStsV1AccessBoundaryRule::class;
  protected $accessBoundaryRulesDataType = 'array';
  /** @param GoogleIdentityStsV1AccessBoundaryRule[] */
  public function setAccessBoundaryRules($accessBoundaryRules)
  {
    $this->accessBoundaryRules = $accessBoundaryRules;
  }
  /** @return GoogleIdentityStsV1AccessBoundaryRule[] */
  public function getAccessBoundaryRules()
  {
    return $this->accessBoundaryRules;
  }
}

class GoogleIdentityStsV1AccessBoundaryRule extends \Google\Collection
{
  /** @var GoogleTypeExpr */
  public $availabilityCondition;
  /** @var string[] */
  public $availablePermissions;
  /** @var string */
  public $availableResource;
  protected $collection_key = 'availablePermissions';
  protected $availabilityConditionType = GoogleTypeExpr::class;
  protected $availabilityConditionDataType = '';
  /** @param GoogleTypeExpr */
  public function setAvailabilityCondition(GoogleTypeExpr $availabilityCondition)
  {
    $this->availabilityCondition = $availabilityCondition;
  }
  /** @return GoogleTypeExpr */
  public function getAvailabilityCondition()
  {
    return $this->availabilityCondition;
  }
  /** @param string[] */
  public function setAvailablePermissions($availablePermissions)
  {
    $this->availablePermissions = $availablePermissions;
  }
  /** @return string[] */
  public function getAvailablePermissions()
  {
    return $this->availablePermissions;
  }
  /** @param string */
  public function setAvailableResource($availableResource)
  {
    $this->availableResource = $availableResource;
  }
  /** @return string */
  public function getAvailableResource()
  {
    return $this->availableResource;
  }
}

class GoogleIdentityStsV1ExchangeTokenRequest extends \Google\Model
{
  /** @var string */
  public $audience;
  /** @var string */
  public $grantType;
  /** @var string */
  public $options;
  /** @var string */
  public $requestedTokenType;
  /** @var string */
  public $scope;
  /** @var string */
  public $subjectToken;
  /** @var string */
  public $subjectTokenType;

  /** @param string */
  public function setAudience($audience)
  {
    $this->audience = $audience;
  }
  /** @return string */
  public function getAudience()
  {
    return $this->audience;
  }
  /** @param string */
  public function setGrantType($grantType)
  {
    $this->grantType = $grantType;
  }
  /** @return string */
  public function getGrantType()
  {
    return $this->grantType;
  }
  /** @param string */
  public function setOptions($options)
  {
    $this->options = $options;
  }
  /** @return string */
  public function getOptions()
  {
    return $this->options;
  }
  /** @param string */
  public function setRequestedTokenType($requestedTokenType)
  {
    $this->requestedTokenType = $requestedTokenType;
  }
  /** @return string */
  public function getRequestedTokenType()
  {
    return $this->requestedTokenType;
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
  public function setSubjectToken($subjectToken)
  {
    $this->subjectToken = $subjectToken;
  }
  /** @return string */
  public function getSubjectToken()
  {
    return $this->subjectToken;
  }
  /** @param string */
  public function setSubjectTokenType($subjectTokenType)
  {
    $this->subjectTokenType = $subjectTokenType;
  }
  /** @return string */
  public function getSubjectTokenType()
  {
    return $this->subjectTokenType;
  }
}

class GoogleIdentityStsV1ExchangeTokenResponse extends \Google\Model
{
  /** @var string */
  public $accessToken;
  /** @var int */
  public $expiresIn;
  /** @var string */
  public $issuedTokenType;
  /** @var string */
  public $tokenType;
  protected $internal_gapi_mappings = [
        "accessToken" => "access_token",
        "expiresIn" => "expires_in",
        "issuedTokenType" => "issued_token_type",
        "tokenType" => "token_type",
  ];
  /** @param string */
  public function setAccessToken($accessToken)
  {
    $this->accessToken = $accessToken;
  }
  /** @return string */
  public function getAccessToken()
  {
    return $this->accessToken;
  }
  /** @param int */
  public function setExpiresIn($expiresIn)
  {
    $this->expiresIn = $expiresIn;
  }
  /** @return int */
  public function getExpiresIn()
  {
    return $this->expiresIn;
  }
  /** @param string */
  public function setIssuedTokenType($issuedTokenType)
  {
    $this->issuedTokenType = $issuedTokenType;
  }
  /** @return string */
  public function getIssuedTokenType()
  {
    return $this->issuedTokenType;
  }
  /** @param string */
  public function setTokenType($tokenType)
  {
    $this->tokenType = $tokenType;
  }
  /** @return string */
  public function getTokenType()
  {
    return $this->tokenType;
  }
}

class GoogleIdentityStsV1IntrospectTokenRequest extends \Google\Model
{
  /** @var string */
  public $token;
  /** @var string */
  public $tokenTypeHint;

  /** @param string */
  public function setToken($token)
  {
    $this->token = $token;
  }
  /** @return string */
  public function getToken()
  {
    return $this->token;
  }
  /** @param string */
  public function setTokenTypeHint($tokenTypeHint)
  {
    $this->tokenTypeHint = $tokenTypeHint;
  }
  /** @return string */
  public function getTokenTypeHint()
  {
    return $this->tokenTypeHint;
  }
}

class GoogleIdentityStsV1IntrospectTokenResponse extends \Google\Model
{
  /** @var bool */
  public $active;
  /** @var string */
  public $clientId;
  /** @var string */
  public $exp;
  /** @var string */
  public $iat;
  /** @var string */
  public $iss;
  /** @var string */
  public $scope;
  /** @var string */
  public $sub;
  /** @var string */
  public $username;
  protected $internal_gapi_mappings = [
        "clientId" => "client_id",
  ];
  /** @param bool */
  public function setActive($active)
  {
    $this->active = $active;
  }
  /** @return bool */
  public function getActive()
  {
    return $this->active;
  }
  /** @param string */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /** @return string */
  public function getClientId()
  {
    return $this->clientId;
  }
  /** @param string */
  public function setExp($exp)
  {
    $this->exp = $exp;
  }
  /** @return string */
  public function getExp()
  {
    return $this->exp;
  }
  /** @param string */
  public function setIat($iat)
  {
    $this->iat = $iat;
  }
  /** @return string */
  public function getIat()
  {
    return $this->iat;
  }
  /** @param string */
  public function setIss($iss)
  {
    $this->iss = $iss;
  }
  /** @return string */
  public function getIss()
  {
    return $this->iss;
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
  public function setSub($sub)
  {
    $this->sub = $sub;
  }
  /** @return string */
  public function getSub()
  {
    return $this->sub;
  }
  /** @param string */
  public function setUsername($username)
  {
    $this->username = $username;
  }
  /** @return string */
  public function getUsername()
  {
    return $this->username;
  }
}

class GoogleIdentityStsV1Options extends \Google\Collection
{
  /** @var GoogleIdentityStsV1AccessBoundary */
  public $accessBoundary;
  /** @var string[] */
  public $audiences;
  /** @var string */
  public $userProject;
  protected $collection_key = 'audiences';
  protected $accessBoundaryType = GoogleIdentityStsV1AccessBoundary::class;
  protected $accessBoundaryDataType = '';
  /** @param GoogleIdentityStsV1AccessBoundary */
  public function setAccessBoundary(GoogleIdentityStsV1AccessBoundary $accessBoundary)
  {
    $this->accessBoundary = $accessBoundary;
  }
  /** @return GoogleIdentityStsV1AccessBoundary */
  public function getAccessBoundary()
  {
    return $this->accessBoundary;
  }
  /** @param string[] */
  public function setAudiences($audiences)
  {
    $this->audiences = $audiences;
  }
  /** @return string[] */
  public function getAudiences()
  {
    return $this->audiences;
  }
  /** @param string */
  public function setUserProject($userProject)
  {
    $this->userProject = $userProject;
  }
  /** @return string */
  public function getUserProject()
  {
    return $this->userProject;
  }
}

class GoogleIdentityStsV1betaAccessBoundary extends \Google\Collection
{
  /** @var GoogleIdentityStsV1betaAccessBoundaryRule[] */
  public $accessBoundaryRules;
  protected $collection_key = 'accessBoundaryRules';
  protected $accessBoundaryRulesType = GoogleIdentityStsV1betaAccessBoundaryRule::class;
  protected $accessBoundaryRulesDataType = 'array';
  /** @param GoogleIdentityStsV1betaAccessBoundaryRule[] */
  public function setAccessBoundaryRules($accessBoundaryRules)
  {
    $this->accessBoundaryRules = $accessBoundaryRules;
  }
  /** @return GoogleIdentityStsV1betaAccessBoundaryRule[] */
  public function getAccessBoundaryRules()
  {
    return $this->accessBoundaryRules;
  }
}

class GoogleIdentityStsV1betaAccessBoundaryRule extends \Google\Collection
{
  /** @var GoogleTypeExpr */
  public $availabilityCondition;
  /** @var string[] */
  public $availablePermissions;
  /** @var string */
  public $availableResource;
  protected $collection_key = 'availablePermissions';
  protected $availabilityConditionType = GoogleTypeExpr::class;
  protected $availabilityConditionDataType = '';
  /** @param GoogleTypeExpr */
  public function setAvailabilityCondition(GoogleTypeExpr $availabilityCondition)
  {
    $this->availabilityCondition = $availabilityCondition;
  }
  /** @return GoogleTypeExpr */
  public function getAvailabilityCondition()
  {
    return $this->availabilityCondition;
  }
  /** @param string[] */
  public function setAvailablePermissions($availablePermissions)
  {
    $this->availablePermissions = $availablePermissions;
  }
  /** @return string[] */
  public function getAvailablePermissions()
  {
    return $this->availablePermissions;
  }
  /** @param string */
  public function setAvailableResource($availableResource)
  {
    $this->availableResource = $availableResource;
  }
  /** @return string */
  public function getAvailableResource()
  {
    return $this->availableResource;
  }
}

class GoogleIdentityStsV1betaOptions extends \Google\Collection
{
  /** @var GoogleIdentityStsV1betaAccessBoundary */
  public $accessBoundary;
  /** @var string[] */
  public $audiences;
  /** @var string */
  public $userProject;
  protected $collection_key = 'audiences';
  protected $accessBoundaryType = GoogleIdentityStsV1betaAccessBoundary::class;
  protected $accessBoundaryDataType = '';
  /** @param GoogleIdentityStsV1betaAccessBoundary */
  public function setAccessBoundary(GoogleIdentityStsV1betaAccessBoundary $accessBoundary)
  {
    $this->accessBoundary = $accessBoundary;
  }
  /** @return GoogleIdentityStsV1betaAccessBoundary */
  public function getAccessBoundary()
  {
    return $this->accessBoundary;
  }
  /** @param string[] */
  public function setAudiences($audiences)
  {
    $this->audiences = $audiences;
  }
  /** @return string[] */
  public function getAudiences()
  {
    return $this->audiences;
  }
  /** @param string */
  public function setUserProject($userProject)
  {
    $this->userProject = $userProject;
  }
  /** @return string */
  public function getUserProject()
  {
    return $this->userProject;
  }
}

class GoogleTypeExpr extends \Google\Model
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleIamV1Binding::class, 'Google_Service_CloudSecurityToken_GoogleIamV1Binding');
class_alias(GoogleIdentityStsV1AccessBoundary::class, 'Google_Service_CloudSecurityToken_GoogleIdentityStsV1AccessBoundary');
class_alias(GoogleIdentityStsV1AccessBoundaryRule::class, 'Google_Service_CloudSecurityToken_GoogleIdentityStsV1AccessBoundaryRule');
class_alias(GoogleIdentityStsV1ExchangeTokenRequest::class, 'Google_Service_CloudSecurityToken_GoogleIdentityStsV1ExchangeTokenRequest');
class_alias(GoogleIdentityStsV1ExchangeTokenResponse::class, 'Google_Service_CloudSecurityToken_GoogleIdentityStsV1ExchangeTokenResponse');
class_alias(GoogleIdentityStsV1IntrospectTokenRequest::class, 'Google_Service_CloudSecurityToken_GoogleIdentityStsV1IntrospectTokenRequest');
class_alias(GoogleIdentityStsV1IntrospectTokenResponse::class, 'Google_Service_CloudSecurityToken_GoogleIdentityStsV1IntrospectTokenResponse');
class_alias(GoogleIdentityStsV1Options::class, 'Google_Service_CloudSecurityToken_GoogleIdentityStsV1Options');
class_alias(GoogleIdentityStsV1betaAccessBoundary::class, 'Google_Service_CloudSecurityToken_GoogleIdentityStsV1betaAccessBoundary');
class_alias(GoogleIdentityStsV1betaAccessBoundaryRule::class, 'Google_Service_CloudSecurityToken_GoogleIdentityStsV1betaAccessBoundaryRule');
class_alias(GoogleIdentityStsV1betaOptions::class, 'Google_Service_CloudSecurityToken_GoogleIdentityStsV1betaOptions');
class_alias(GoogleTypeExpr::class, 'Google_Service_CloudSecurityToken_GoogleTypeExpr');
