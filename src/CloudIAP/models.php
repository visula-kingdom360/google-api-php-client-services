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

namespace Google\Service\CloudIAP;

class AccessDeniedPageSettings extends \Google\Model
{
  /** @var string */
  public $accessDeniedPageUri;
  /** @var bool */
  public $generateTroubleshootingUri;
  /** @var bool */
  public $remediationTokenGenerationEnabled;

  /** @param string */
  public function setAccessDeniedPageUri($accessDeniedPageUri)
  {
    $this->accessDeniedPageUri = $accessDeniedPageUri;
  }
  /** @return string */
  public function getAccessDeniedPageUri()
  {
    return $this->accessDeniedPageUri;
  }
  /** @param bool */
  public function setGenerateTroubleshootingUri($generateTroubleshootingUri)
  {
    $this->generateTroubleshootingUri = $generateTroubleshootingUri;
  }
  /** @return bool */
  public function getGenerateTroubleshootingUri()
  {
    return $this->generateTroubleshootingUri;
  }
  /** @param bool */
  public function setRemediationTokenGenerationEnabled($remediationTokenGenerationEnabled)
  {
    $this->remediationTokenGenerationEnabled = $remediationTokenGenerationEnabled;
  }
  /** @return bool */
  public function getRemediationTokenGenerationEnabled()
  {
    return $this->remediationTokenGenerationEnabled;
  }
}

class AccessSettings extends \Google\Model
{
  /** @var AllowedDomainsSettings */
  public $allowedDomainsSettings;
  /** @var CorsSettings */
  public $corsSettings;
  /** @var GcipSettings */
  public $gcipSettings;
  /** @var OAuthSettings */
  public $oauthSettings;
  /** @var PolicyDelegationSettings */
  public $policyDelegationSettings;
  /** @var ReauthSettings */
  public $reauthSettings;
  protected $allowedDomainsSettingsType = AllowedDomainsSettings::class;
  protected $allowedDomainsSettingsDataType = '';
  protected $corsSettingsType = CorsSettings::class;
  protected $corsSettingsDataType = '';
  protected $gcipSettingsType = GcipSettings::class;
  protected $gcipSettingsDataType = '';
  protected $oauthSettingsType = OAuthSettings::class;
  protected $oauthSettingsDataType = '';
  protected $policyDelegationSettingsType = PolicyDelegationSettings::class;
  protected $policyDelegationSettingsDataType = '';
  protected $reauthSettingsType = ReauthSettings::class;
  protected $reauthSettingsDataType = '';
  /** @param AllowedDomainsSettings */
  public function setAllowedDomainsSettings(AllowedDomainsSettings $allowedDomainsSettings)
  {
    $this->allowedDomainsSettings = $allowedDomainsSettings;
  }
  /** @return AllowedDomainsSettings */
  public function getAllowedDomainsSettings()
  {
    return $this->allowedDomainsSettings;
  }
  /** @param CorsSettings */
  public function setCorsSettings(CorsSettings $corsSettings)
  {
    $this->corsSettings = $corsSettings;
  }
  /** @return CorsSettings */
  public function getCorsSettings()
  {
    return $this->corsSettings;
  }
  /** @param GcipSettings */
  public function setGcipSettings(GcipSettings $gcipSettings)
  {
    $this->gcipSettings = $gcipSettings;
  }
  /** @return GcipSettings */
  public function getGcipSettings()
  {
    return $this->gcipSettings;
  }
  /** @param OAuthSettings */
  public function setOauthSettings(OAuthSettings $oauthSettings)
  {
    $this->oauthSettings = $oauthSettings;
  }
  /** @return OAuthSettings */
  public function getOauthSettings()
  {
    return $this->oauthSettings;
  }
  /** @param PolicyDelegationSettings */
  public function setPolicyDelegationSettings(PolicyDelegationSettings $policyDelegationSettings)
  {
    $this->policyDelegationSettings = $policyDelegationSettings;
  }
  /** @return PolicyDelegationSettings */
  public function getPolicyDelegationSettings()
  {
    return $this->policyDelegationSettings;
  }
  /** @param ReauthSettings */
  public function setReauthSettings(ReauthSettings $reauthSettings)
  {
    $this->reauthSettings = $reauthSettings;
  }
  /** @return ReauthSettings */
  public function getReauthSettings()
  {
    return $this->reauthSettings;
  }
}

class AllowedDomainsSettings extends \Google\Collection
{
  /** @var string[] */
  public $domains;
  /** @var bool */
  public $enable;
  protected $collection_key = 'domains';
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
  /** @param bool */
  public function setEnable($enable)
  {
    $this->enable = $enable;
  }
  /** @return bool */
  public function getEnable()
  {
    return $this->enable;
  }
}

class ApplicationSettings extends \Google\Model
{
  /** @var AccessDeniedPageSettings */
  public $accessDeniedPageSettings;
  /** @var AttributePropagationSettings */
  public $attributePropagationSettings;
  /** @var string */
  public $cookieDomain;
  /** @var CsmSettings */
  public $csmSettings;
  protected $accessDeniedPageSettingsType = AccessDeniedPageSettings::class;
  protected $accessDeniedPageSettingsDataType = '';
  protected $attributePropagationSettingsType = AttributePropagationSettings::class;
  protected $attributePropagationSettingsDataType = '';
  protected $csmSettingsType = CsmSettings::class;
  protected $csmSettingsDataType = '';
  /** @param AccessDeniedPageSettings */
  public function setAccessDeniedPageSettings(AccessDeniedPageSettings $accessDeniedPageSettings)
  {
    $this->accessDeniedPageSettings = $accessDeniedPageSettings;
  }
  /** @return AccessDeniedPageSettings */
  public function getAccessDeniedPageSettings()
  {
    return $this->accessDeniedPageSettings;
  }
  /** @param AttributePropagationSettings */
  public function setAttributePropagationSettings(AttributePropagationSettings $attributePropagationSettings)
  {
    $this->attributePropagationSettings = $attributePropagationSettings;
  }
  /** @return AttributePropagationSettings */
  public function getAttributePropagationSettings()
  {
    return $this->attributePropagationSettings;
  }
  /** @param string */
  public function setCookieDomain($cookieDomain)
  {
    $this->cookieDomain = $cookieDomain;
  }
  /** @return string */
  public function getCookieDomain()
  {
    return $this->cookieDomain;
  }
  /** @param CsmSettings */
  public function setCsmSettings(CsmSettings $csmSettings)
  {
    $this->csmSettings = $csmSettings;
  }
  /** @return CsmSettings */
  public function getCsmSettings()
  {
    return $this->csmSettings;
  }
}

class AttributePropagationSettings extends \Google\Collection
{
  /** @var bool */
  public $enable;
  /** @var string */
  public $expression;
  /** @var string[] */
  public $outputCredentials;
  protected $collection_key = 'outputCredentials';
  /** @param bool */
  public function setEnable($enable)
  {
    $this->enable = $enable;
  }
  /** @return bool */
  public function getEnable()
  {
    return $this->enable;
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
  /** @param string[] */
  public function setOutputCredentials($outputCredentials)
  {
    $this->outputCredentials = $outputCredentials;
  }
  /** @return string[] */
  public function getOutputCredentials()
  {
    return $this->outputCredentials;
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

class Brand extends \Google\Model
{
  /** @var string */
  public $applicationTitle;
  /** @var string */
  public $name;
  /** @var bool */
  public $orgInternalOnly;
  /** @var string */
  public $supportEmail;

  /** @param string */
  public function setApplicationTitle($applicationTitle)
  {
    $this->applicationTitle = $applicationTitle;
  }
  /** @return string */
  public function getApplicationTitle()
  {
    return $this->applicationTitle;
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
  /** @param bool */
  public function setOrgInternalOnly($orgInternalOnly)
  {
    $this->orgInternalOnly = $orgInternalOnly;
  }
  /** @return bool */
  public function getOrgInternalOnly()
  {
    return $this->orgInternalOnly;
  }
  /** @param string */
  public function setSupportEmail($supportEmail)
  {
    $this->supportEmail = $supportEmail;
  }
  /** @return string */
  public function getSupportEmail()
  {
    return $this->supportEmail;
  }
}

class CorsSettings extends \Google\Model
{
  /** @var bool */
  public $allowHttpOptions;

  /** @param bool */
  public function setAllowHttpOptions($allowHttpOptions)
  {
    $this->allowHttpOptions = $allowHttpOptions;
  }
  /** @return bool */
  public function getAllowHttpOptions()
  {
    return $this->allowHttpOptions;
  }
}

class CsmSettings extends \Google\Model
{
  /** @var string */
  public $rctokenAud;

  /** @param string */
  public function setRctokenAud($rctokenAud)
  {
    $this->rctokenAud = $rctokenAud;
  }
  /** @return string */
  public function getRctokenAud()
  {
    return $this->rctokenAud;
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

class GcipSettings extends \Google\Collection
{
  /** @var string */
  public $loginPageUri;
  /** @var string[] */
  public $tenantIds;
  protected $collection_key = 'tenantIds';
  /** @param string */
  public function setLoginPageUri($loginPageUri)
  {
    $this->loginPageUri = $loginPageUri;
  }
  /** @return string */
  public function getLoginPageUri()
  {
    return $this->loginPageUri;
  }
  /** @param string[] */
  public function setTenantIds($tenantIds)
  {
    $this->tenantIds = $tenantIds;
  }
  /** @return string[] */
  public function getTenantIds()
  {
    return $this->tenantIds;
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

class IapEmpty extends \Google\Model
{
}

class IapResource extends \Google\Model
{
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $service;
  /** @var string */
  public $type;

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
  public function setService($service)
  {
    $this->service = $service;
  }
  /** @return string */
  public function getService()
  {
    return $this->service;
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

class IapSettings extends \Google\Model
{
  /** @var AccessSettings */
  public $accessSettings;
  /** @var ApplicationSettings */
  public $applicationSettings;
  /** @var string */
  public $name;
  protected $accessSettingsType = AccessSettings::class;
  protected $accessSettingsDataType = '';
  protected $applicationSettingsType = ApplicationSettings::class;
  protected $applicationSettingsDataType = '';
  /** @param AccessSettings */
  public function setAccessSettings(AccessSettings $accessSettings)
  {
    $this->accessSettings = $accessSettings;
  }
  /** @return AccessSettings */
  public function getAccessSettings()
  {
    return $this->accessSettings;
  }
  /** @param ApplicationSettings */
  public function setApplicationSettings(ApplicationSettings $applicationSettings)
  {
    $this->applicationSettings = $applicationSettings;
  }
  /** @return ApplicationSettings */
  public function getApplicationSettings()
  {
    return $this->applicationSettings;
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

class IdentityAwareProxyClient extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $secret;

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
  public function setSecret($secret)
  {
    $this->secret = $secret;
  }
  /** @return string */
  public function getSecret()
  {
    return $this->secret;
  }
}

class ListBrandsResponse extends \Google\Collection
{
  /** @var Brand[] */
  public $brands;
  protected $collection_key = 'brands';
  protected $brandsType = Brand::class;
  protected $brandsDataType = 'array';
  /** @param Brand[] */
  public function setBrands($brands)
  {
    $this->brands = $brands;
  }
  /** @return Brand[] */
  public function getBrands()
  {
    return $this->brands;
  }
}

class ListIdentityAwareProxyClientsResponse extends \Google\Collection
{
  /** @var IdentityAwareProxyClient[] */
  public $identityAwareProxyClients;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'identityAwareProxyClients';
  protected $identityAwareProxyClientsType = IdentityAwareProxyClient::class;
  protected $identityAwareProxyClientsDataType = 'array';
  /** @param IdentityAwareProxyClient[] */
  public function setIdentityAwareProxyClients($identityAwareProxyClients)
  {
    $this->identityAwareProxyClients = $identityAwareProxyClients;
  }
  /** @return IdentityAwareProxyClient[] */
  public function getIdentityAwareProxyClients()
  {
    return $this->identityAwareProxyClients;
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

class ListTunnelDestGroupsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var TunnelDestGroup[] */
  public $tunnelDestGroups;
  protected $collection_key = 'tunnelDestGroups';
  protected $tunnelDestGroupsType = TunnelDestGroup::class;
  protected $tunnelDestGroupsDataType = 'array';
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
  /** @param TunnelDestGroup[] */
  public function setTunnelDestGroups($tunnelDestGroups)
  {
    $this->tunnelDestGroups = $tunnelDestGroups;
  }
  /** @return TunnelDestGroup[] */
  public function getTunnelDestGroups()
  {
    return $this->tunnelDestGroups;
  }
}

class OAuthSettings extends \Google\Model
{
  /** @var string */
  public $loginHint;

  /** @param string */
  public function setLoginHint($loginHint)
  {
    $this->loginHint = $loginHint;
  }
  /** @return string */
  public function getLoginHint()
  {
    return $this->loginHint;
  }
}

class Policy extends \Google\Collection
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

class PolicyDelegationSettings extends \Google\Model
{
  /** @var string */
  public $iamPermission;
  /** @var string */
  public $iamServiceName;
  /** @var PolicyName */
  public $policyName;
  /** @var IapResource */
  public $resource;
  protected $policyNameType = PolicyName::class;
  protected $policyNameDataType = '';
  protected $resourceType = IapResource::class;
  protected $resourceDataType = '';
  /** @param string */
  public function setIamPermission($iamPermission)
  {
    $this->iamPermission = $iamPermission;
  }
  /** @return string */
  public function getIamPermission()
  {
    return $this->iamPermission;
  }
  /** @param string */
  public function setIamServiceName($iamServiceName)
  {
    $this->iamServiceName = $iamServiceName;
  }
  /** @return string */
  public function getIamServiceName()
  {
    return $this->iamServiceName;
  }
  /** @param PolicyName */
  public function setPolicyName(PolicyName $policyName)
  {
    $this->policyName = $policyName;
  }
  /** @return PolicyName */
  public function getPolicyName()
  {
    return $this->policyName;
  }
  /** @param IapResource */
  public function setResource(IapResource $resource)
  {
    $this->resource = $resource;
  }
  /** @return IapResource */
  public function getResource()
  {
    return $this->resource;
  }
}

class PolicyName extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $region;
  /** @var string */
  public $type;

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
  /** @param string */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /** @return string */
  public function getRegion()
  {
    return $this->region;
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

class ReauthSettings extends \Google\Model
{
  /** @var string */
  public $maxAge;
  /** @var string */
  public $method;
  /** @var string */
  public $policyType;

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
  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
  /** @param string */
  public function setPolicyType($policyType)
  {
    $this->policyType = $policyType;
  }
  /** @return string */
  public function getPolicyType()
  {
    return $this->policyType;
  }
}

class ResetIdentityAwareProxyClientSecretRequest extends \Google\Model
{
}

class SetIamPolicyRequest extends \Google\Model
{
  /** @var Policy */
  public $policy;
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

class TunnelDestGroup extends \Google\Collection
{
  /** @var string[] */
  public $cidrs;
  /** @var string[] */
  public $fqdns;
  /** @var string */
  public $name;
  protected $collection_key = 'fqdns';
  /** @param string[] */
  public function setCidrs($cidrs)
  {
    $this->cidrs = $cidrs;
  }
  /** @return string[] */
  public function getCidrs()
  {
    return $this->cidrs;
  }
  /** @param string[] */
  public function setFqdns($fqdns)
  {
    $this->fqdns = $fqdns;
  }
  /** @return string[] */
  public function getFqdns()
  {
    return $this->fqdns;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccessDeniedPageSettings::class, 'Google_Service_CloudIAP_AccessDeniedPageSettings');
class_alias(AccessSettings::class, 'Google_Service_CloudIAP_AccessSettings');
class_alias(AllowedDomainsSettings::class, 'Google_Service_CloudIAP_AllowedDomainsSettings');
class_alias(ApplicationSettings::class, 'Google_Service_CloudIAP_ApplicationSettings');
class_alias(AttributePropagationSettings::class, 'Google_Service_CloudIAP_AttributePropagationSettings');
class_alias(Binding::class, 'Google_Service_CloudIAP_Binding');
class_alias(Brand::class, 'Google_Service_CloudIAP_Brand');
class_alias(CorsSettings::class, 'Google_Service_CloudIAP_CorsSettings');
class_alias(CsmSettings::class, 'Google_Service_CloudIAP_CsmSettings');
class_alias(Expr::class, 'Google_Service_CloudIAP_Expr');
class_alias(GcipSettings::class, 'Google_Service_CloudIAP_GcipSettings');
class_alias(GetIamPolicyRequest::class, 'Google_Service_CloudIAP_GetIamPolicyRequest');
class_alias(GetPolicyOptions::class, 'Google_Service_CloudIAP_GetPolicyOptions');
class_alias(IapEmpty::class, 'Google_Service_CloudIAP_IapEmpty');
class_alias(IapResource::class, 'Google_Service_CloudIAP_IapResource');
class_alias(IapSettings::class, 'Google_Service_CloudIAP_IapSettings');
class_alias(IdentityAwareProxyClient::class, 'Google_Service_CloudIAP_IdentityAwareProxyClient');
class_alias(ListBrandsResponse::class, 'Google_Service_CloudIAP_ListBrandsResponse');
class_alias(ListIdentityAwareProxyClientsResponse::class, 'Google_Service_CloudIAP_ListIdentityAwareProxyClientsResponse');
class_alias(ListTunnelDestGroupsResponse::class, 'Google_Service_CloudIAP_ListTunnelDestGroupsResponse');
class_alias(OAuthSettings::class, 'Google_Service_CloudIAP_OAuthSettings');
class_alias(Policy::class, 'Google_Service_CloudIAP_Policy');
class_alias(PolicyDelegationSettings::class, 'Google_Service_CloudIAP_PolicyDelegationSettings');
class_alias(PolicyName::class, 'Google_Service_CloudIAP_PolicyName');
class_alias(ReauthSettings::class, 'Google_Service_CloudIAP_ReauthSettings');
class_alias(ResetIdentityAwareProxyClientSecretRequest::class, 'Google_Service_CloudIAP_ResetIdentityAwareProxyClientSecretRequest');
class_alias(SetIamPolicyRequest::class, 'Google_Service_CloudIAP_SetIamPolicyRequest');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_CloudIAP_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_CloudIAP_TestIamPermissionsResponse');
class_alias(TunnelDestGroup::class, 'Google_Service_CloudIAP_TunnelDestGroup');
