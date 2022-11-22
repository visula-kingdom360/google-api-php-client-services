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

namespace Google\Service\OrgPolicyAPI;

class GoogleCloudOrgpolicyV2AlternatePolicySpec extends \Google\Model
{
  /** @var string */
  public $launch;
  /** @var GoogleCloudOrgpolicyV2PolicySpec */
  public $spec;
  protected $specType = GoogleCloudOrgpolicyV2PolicySpec::class;
  protected $specDataType = '';
  /** @param string */
  public function setLaunch($launch)
  {
    $this->launch = $launch;
  }
  /** @return string */
  public function getLaunch()
  {
    return $this->launch;
  }
  /** @param GoogleCloudOrgpolicyV2PolicySpec */
  public function setSpec(GoogleCloudOrgpolicyV2PolicySpec $spec)
  {
    $this->spec = $spec;
  }
  /** @return GoogleCloudOrgpolicyV2PolicySpec */
  public function getSpec()
  {
    return $this->spec;
  }
}

class GoogleCloudOrgpolicyV2Constraint extends \Google\Model
{
  /** @var GoogleCloudOrgpolicyV2ConstraintBooleanConstraint */
  public $booleanConstraint;
  /** @var string */
  public $constraintDefault;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudOrgpolicyV2ConstraintListConstraint */
  public $listConstraint;
  /** @var string */
  public $name;
  protected $booleanConstraintType = GoogleCloudOrgpolicyV2ConstraintBooleanConstraint::class;
  protected $booleanConstraintDataType = '';
  protected $listConstraintType = GoogleCloudOrgpolicyV2ConstraintListConstraint::class;
  protected $listConstraintDataType = '';
  /** @param GoogleCloudOrgpolicyV2ConstraintBooleanConstraint */
  public function setBooleanConstraint(GoogleCloudOrgpolicyV2ConstraintBooleanConstraint $booleanConstraint)
  {
    $this->booleanConstraint = $booleanConstraint;
  }
  /** @return GoogleCloudOrgpolicyV2ConstraintBooleanConstraint */
  public function getBooleanConstraint()
  {
    return $this->booleanConstraint;
  }
  /** @param string */
  public function setConstraintDefault($constraintDefault)
  {
    $this->constraintDefault = $constraintDefault;
  }
  /** @return string */
  public function getConstraintDefault()
  {
    return $this->constraintDefault;
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
  /** @param GoogleCloudOrgpolicyV2ConstraintListConstraint */
  public function setListConstraint(GoogleCloudOrgpolicyV2ConstraintListConstraint $listConstraint)
  {
    $this->listConstraint = $listConstraint;
  }
  /** @return GoogleCloudOrgpolicyV2ConstraintListConstraint */
  public function getListConstraint()
  {
    return $this->listConstraint;
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

class GoogleCloudOrgpolicyV2ConstraintBooleanConstraint extends \Google\Model
{
}

class GoogleCloudOrgpolicyV2ConstraintListConstraint extends \Google\Model
{
  /** @var bool */
  public $supportsIn;
  /** @var bool */
  public $supportsUnder;

  /** @param bool */
  public function setSupportsIn($supportsIn)
  {
    $this->supportsIn = $supportsIn;
  }
  /** @return bool */
  public function getSupportsIn()
  {
    return $this->supportsIn;
  }
  /** @param bool */
  public function setSupportsUnder($supportsUnder)
  {
    $this->supportsUnder = $supportsUnder;
  }
  /** @return bool */
  public function getSupportsUnder()
  {
    return $this->supportsUnder;
  }
}

class GoogleCloudOrgpolicyV2CustomConstraint extends \Google\Collection
{
  /** @var string */
  public $actionType;
  /** @var string */
  public $condition;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $methodTypes;
  /** @var string */
  public $name;
  /** @var string[] */
  public $resourceTypes;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'resourceTypes';
  /** @param string */
  public function setActionType($actionType)
  {
    $this->actionType = $actionType;
  }
  /** @return string */
  public function getActionType()
  {
    return $this->actionType;
  }
  /** @param string */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /** @return string */
  public function getCondition()
  {
    return $this->condition;
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
  /** @param string[] */
  public function setMethodTypes($methodTypes)
  {
    $this->methodTypes = $methodTypes;
  }
  /** @return string[] */
  public function getMethodTypes()
  {
    return $this->methodTypes;
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
  public function setResourceTypes($resourceTypes)
  {
    $this->resourceTypes = $resourceTypes;
  }
  /** @return string[] */
  public function getResourceTypes()
  {
    return $this->resourceTypes;
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

class GoogleCloudOrgpolicyV2ListConstraintsResponse extends \Google\Collection
{
  /** @var GoogleCloudOrgpolicyV2Constraint[] */
  public $constraints;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'constraints';
  protected $constraintsType = GoogleCloudOrgpolicyV2Constraint::class;
  protected $constraintsDataType = 'array';
  /** @param GoogleCloudOrgpolicyV2Constraint[] */
  public function setConstraints($constraints)
  {
    $this->constraints = $constraints;
  }
  /** @return GoogleCloudOrgpolicyV2Constraint[] */
  public function getConstraints()
  {
    return $this->constraints;
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

class GoogleCloudOrgpolicyV2ListCustomConstraintsResponse extends \Google\Collection
{
  /** @var GoogleCloudOrgpolicyV2CustomConstraint[] */
  public $customConstraints;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'customConstraints';
  protected $customConstraintsType = GoogleCloudOrgpolicyV2CustomConstraint::class;
  protected $customConstraintsDataType = 'array';
  /** @param GoogleCloudOrgpolicyV2CustomConstraint[] */
  public function setCustomConstraints($customConstraints)
  {
    $this->customConstraints = $customConstraints;
  }
  /** @return GoogleCloudOrgpolicyV2CustomConstraint[] */
  public function getCustomConstraints()
  {
    return $this->customConstraints;
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

class GoogleCloudOrgpolicyV2ListPoliciesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudOrgpolicyV2Policy[] */
  public $policies;
  protected $collection_key = 'policies';
  protected $policiesType = GoogleCloudOrgpolicyV2Policy::class;
  protected $policiesDataType = 'array';
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
  /** @param GoogleCloudOrgpolicyV2Policy[] */
  public function setPolicies($policies)
  {
    $this->policies = $policies;
  }
  /** @return GoogleCloudOrgpolicyV2Policy[] */
  public function getPolicies()
  {
    return $this->policies;
  }
}

class GoogleCloudOrgpolicyV2Policy extends \Google\Model
{
  /** @var GoogleCloudOrgpolicyV2AlternatePolicySpec */
  public $alternate;
  /** @var string */
  public $name;
  /** @var GoogleCloudOrgpolicyV2PolicySpec */
  public $spec;
  protected $alternateType = GoogleCloudOrgpolicyV2AlternatePolicySpec::class;
  protected $alternateDataType = '';
  protected $specType = GoogleCloudOrgpolicyV2PolicySpec::class;
  protected $specDataType = '';
  /** @param GoogleCloudOrgpolicyV2AlternatePolicySpec */
  public function setAlternate(GoogleCloudOrgpolicyV2AlternatePolicySpec $alternate)
  {
    $this->alternate = $alternate;
  }
  /** @return GoogleCloudOrgpolicyV2AlternatePolicySpec */
  public function getAlternate()
  {
    return $this->alternate;
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
  /** @param GoogleCloudOrgpolicyV2PolicySpec */
  public function setSpec(GoogleCloudOrgpolicyV2PolicySpec $spec)
  {
    $this->spec = $spec;
  }
  /** @return GoogleCloudOrgpolicyV2PolicySpec */
  public function getSpec()
  {
    return $this->spec;
  }
}

class GoogleCloudOrgpolicyV2PolicySpec extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var bool */
  public $inheritFromParent;
  /** @var bool */
  public $reset;
  /** @var GoogleCloudOrgpolicyV2PolicySpecPolicyRule[] */
  public $rules;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'rules';
  protected $rulesType = GoogleCloudOrgpolicyV2PolicySpecPolicyRule::class;
  protected $rulesDataType = 'array';
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
  /** @param bool */
  public function setInheritFromParent($inheritFromParent)
  {
    $this->inheritFromParent = $inheritFromParent;
  }
  /** @return bool */
  public function getInheritFromParent()
  {
    return $this->inheritFromParent;
  }
  /** @param bool */
  public function setReset($reset)
  {
    $this->reset = $reset;
  }
  /** @return bool */
  public function getReset()
  {
    return $this->reset;
  }
  /** @param GoogleCloudOrgpolicyV2PolicySpecPolicyRule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return GoogleCloudOrgpolicyV2PolicySpecPolicyRule[] */
  public function getRules()
  {
    return $this->rules;
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

class GoogleCloudOrgpolicyV2PolicySpecPolicyRule extends \Google\Model
{
  /** @var bool */
  public $allowAll;
  /** @var GoogleTypeExpr */
  public $condition;
  /** @var bool */
  public $denyAll;
  /** @var bool */
  public $enforce;
  /** @var GoogleCloudOrgpolicyV2PolicySpecPolicyRuleStringValues */
  public $values;
  protected $conditionType = GoogleTypeExpr::class;
  protected $conditionDataType = '';
  protected $valuesType = GoogleCloudOrgpolicyV2PolicySpecPolicyRuleStringValues::class;
  protected $valuesDataType = '';
  /** @param bool */
  public function setAllowAll($allowAll)
  {
    $this->allowAll = $allowAll;
  }
  /** @return bool */
  public function getAllowAll()
  {
    return $this->allowAll;
  }
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
  /** @param bool */
  public function setDenyAll($denyAll)
  {
    $this->denyAll = $denyAll;
  }
  /** @return bool */
  public function getDenyAll()
  {
    return $this->denyAll;
  }
  /** @param bool */
  public function setEnforce($enforce)
  {
    $this->enforce = $enforce;
  }
  /** @return bool */
  public function getEnforce()
  {
    return $this->enforce;
  }
  /** @param GoogleCloudOrgpolicyV2PolicySpecPolicyRuleStringValues */
  public function setValues(GoogleCloudOrgpolicyV2PolicySpecPolicyRuleStringValues $values)
  {
    $this->values = $values;
  }
  /** @return GoogleCloudOrgpolicyV2PolicySpecPolicyRuleStringValues */
  public function getValues()
  {
    return $this->values;
  }
}

class GoogleCloudOrgpolicyV2PolicySpecPolicyRuleStringValues extends \Google\Collection
{
  /** @var string[] */
  public $allowedValues;
  /** @var string[] */
  public $deniedValues;
  protected $collection_key = 'deniedValues';
  /** @param string[] */
  public function setAllowedValues($allowedValues)
  {
    $this->allowedValues = $allowedValues;
  }
  /** @return string[] */
  public function getAllowedValues()
  {
    return $this->allowedValues;
  }
  /** @param string[] */
  public function setDeniedValues($deniedValues)
  {
    $this->deniedValues = $deniedValues;
  }
  /** @return string[] */
  public function getDeniedValues()
  {
    return $this->deniedValues;
  }
}

class GoogleProtobufEmpty extends \Google\Model
{
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
class_alias(GoogleCloudOrgpolicyV2AlternatePolicySpec::class, 'Google_Service_OrgPolicyAPI_GoogleCloudOrgpolicyV2AlternatePolicySpec');
class_alias(GoogleCloudOrgpolicyV2Constraint::class, 'Google_Service_OrgPolicyAPI_GoogleCloudOrgpolicyV2Constraint');
class_alias(GoogleCloudOrgpolicyV2ConstraintBooleanConstraint::class, 'Google_Service_OrgPolicyAPI_GoogleCloudOrgpolicyV2ConstraintBooleanConstraint');
class_alias(GoogleCloudOrgpolicyV2ConstraintListConstraint::class, 'Google_Service_OrgPolicyAPI_GoogleCloudOrgpolicyV2ConstraintListConstraint');
class_alias(GoogleCloudOrgpolicyV2CustomConstraint::class, 'Google_Service_OrgPolicyAPI_GoogleCloudOrgpolicyV2CustomConstraint');
class_alias(GoogleCloudOrgpolicyV2ListConstraintsResponse::class, 'Google_Service_OrgPolicyAPI_GoogleCloudOrgpolicyV2ListConstraintsResponse');
class_alias(GoogleCloudOrgpolicyV2ListCustomConstraintsResponse::class, 'Google_Service_OrgPolicyAPI_GoogleCloudOrgpolicyV2ListCustomConstraintsResponse');
class_alias(GoogleCloudOrgpolicyV2ListPoliciesResponse::class, 'Google_Service_OrgPolicyAPI_GoogleCloudOrgpolicyV2ListPoliciesResponse');
class_alias(GoogleCloudOrgpolicyV2Policy::class, 'Google_Service_OrgPolicyAPI_GoogleCloudOrgpolicyV2Policy');
class_alias(GoogleCloudOrgpolicyV2PolicySpec::class, 'Google_Service_OrgPolicyAPI_GoogleCloudOrgpolicyV2PolicySpec');
class_alias(GoogleCloudOrgpolicyV2PolicySpecPolicyRule::class, 'Google_Service_OrgPolicyAPI_GoogleCloudOrgpolicyV2PolicySpecPolicyRule');
class_alias(GoogleCloudOrgpolicyV2PolicySpecPolicyRuleStringValues::class, 'Google_Service_OrgPolicyAPI_GoogleCloudOrgpolicyV2PolicySpecPolicyRuleStringValues');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_OrgPolicyAPI_GoogleProtobufEmpty');
class_alias(GoogleTypeExpr::class, 'Google_Service_OrgPolicyAPI_GoogleTypeExpr');
