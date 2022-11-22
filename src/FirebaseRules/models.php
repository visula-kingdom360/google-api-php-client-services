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

namespace Google\Service\FirebaseRules;

class Arg extends \Google\Model
{
  /** @var FirebaserulesEmpty */
  public $anyValue;
  /** @var array */
  public $exactValue;
  protected $anyValueType = FirebaserulesEmpty::class;
  protected $anyValueDataType = '';
  /** @param FirebaserulesEmpty */
  public function setAnyValue(FirebaserulesEmpty $anyValue)
  {
    $this->anyValue = $anyValue;
  }
  /** @return FirebaserulesEmpty */
  public function getAnyValue()
  {
    return $this->anyValue;
  }
  /** @param array */
  public function setExactValue($exactValue)
  {
    $this->exactValue = $exactValue;
  }
  /** @return array */
  public function getExactValue()
  {
    return $this->exactValue;
  }
}

class ExpressionReport extends \Google\Collection
{
  /** @var ExpressionReport[] */
  public $children;
  /** @var SourcePosition */
  public $sourcePosition;
  /** @var ValueCount[] */
  public $values;
  protected $collection_key = 'values';
  protected $childrenType = ExpressionReport::class;
  protected $childrenDataType = 'array';
  protected $sourcePositionType = SourcePosition::class;
  protected $sourcePositionDataType = '';
  protected $valuesType = ValueCount::class;
  protected $valuesDataType = 'array';
  /** @param ExpressionReport[] */
  public function setChildren($children)
  {
    $this->children = $children;
  }
  /** @return ExpressionReport[] */
  public function getChildren()
  {
    return $this->children;
  }
  /** @param SourcePosition */
  public function setSourcePosition(SourcePosition $sourcePosition)
  {
    $this->sourcePosition = $sourcePosition;
  }
  /** @return SourcePosition */
  public function getSourcePosition()
  {
    return $this->sourcePosition;
  }
  /** @param ValueCount[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return ValueCount[] */
  public function getValues()
  {
    return $this->values;
  }
}

class FirebaserulesEmpty extends \Google\Model
{
}

class FirebaserulesFile extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var string */
  public $fingerprint;
  /** @var string */
  public $name;

  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
  }
  /** @param string */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /** @return string */
  public function getFingerprint()
  {
    return $this->fingerprint;
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

class FunctionCall extends \Google\Collection
{
  /** @var array[] */
  public $args;
  /** @var string */
  public $function;
  protected $collection_key = 'args';
  /** @param array[] */
  public function setArgs($args)
  {
    $this->args = $args;
  }
  /** @return array[] */
  public function getArgs()
  {
    return $this->args;
  }
  /** @param string */
  public function setFunction($function)
  {
    $this->function = $function;
  }
  /** @return string */
  public function getFunction()
  {
    return $this->function;
  }
}

class FunctionMock extends \Google\Collection
{
  /** @var Arg[] */
  public $args;
  /** @var string */
  public $function;
  /** @var Result */
  public $result;
  protected $collection_key = 'args';
  protected $argsType = Arg::class;
  protected $argsDataType = 'array';
  protected $resultType = Result::class;
  protected $resultDataType = '';
  /** @param Arg[] */
  public function setArgs($args)
  {
    $this->args = $args;
  }
  /** @return Arg[] */
  public function getArgs()
  {
    return $this->args;
  }
  /** @param string */
  public function setFunction($function)
  {
    $this->function = $function;
  }
  /** @return string */
  public function getFunction()
  {
    return $this->function;
  }
  /** @param Result */
  public function setResult(Result $result)
  {
    $this->result = $result;
  }
  /** @return Result */
  public function getResult()
  {
    return $this->result;
  }
}

class GetReleaseExecutableResponse extends \Google\Model
{
  /** @var string */
  public $executable;
  /** @var string */
  public $executableVersion;
  /** @var string */
  public $language;
  /** @var string */
  public $rulesetName;
  /** @var string */
  public $syncTime;
  /** @var string */
  public $updateTime;

  /** @param string */
  public function setExecutable($executable)
  {
    $this->executable = $executable;
  }
  /** @return string */
  public function getExecutable()
  {
    return $this->executable;
  }
  /** @param string */
  public function setExecutableVersion($executableVersion)
  {
    $this->executableVersion = $executableVersion;
  }
  /** @return string */
  public function getExecutableVersion()
  {
    return $this->executableVersion;
  }
  /** @param string */
  public function setLanguage($language)
  {
    $this->language = $language;
  }
  /** @return string */
  public function getLanguage()
  {
    return $this->language;
  }
  /** @param string */
  public function setRulesetName($rulesetName)
  {
    $this->rulesetName = $rulesetName;
  }
  /** @return string */
  public function getRulesetName()
  {
    return $this->rulesetName;
  }
  /** @param string */
  public function setSyncTime($syncTime)
  {
    $this->syncTime = $syncTime;
  }
  /** @return string */
  public function getSyncTime()
  {
    return $this->syncTime;
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

class Issue extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $severity;
  /** @var SourcePosition */
  public $sourcePosition;
  protected $sourcePositionType = SourcePosition::class;
  protected $sourcePositionDataType = '';
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
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /** @return string */
  public function getSeverity()
  {
    return $this->severity;
  }
  /** @param SourcePosition */
  public function setSourcePosition(SourcePosition $sourcePosition)
  {
    $this->sourcePosition = $sourcePosition;
  }
  /** @return SourcePosition */
  public function getSourcePosition()
  {
    return $this->sourcePosition;
  }
}

class ListReleasesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Release[] */
  public $releases;
  protected $collection_key = 'releases';
  protected $releasesType = Release::class;
  protected $releasesDataType = 'array';
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
  /** @param Release[] */
  public function setReleases($releases)
  {
    $this->releases = $releases;
  }
  /** @return Release[] */
  public function getReleases()
  {
    return $this->releases;
  }
}

class ListRulesetsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Ruleset[] */
  public $rulesets;
  protected $collection_key = 'rulesets';
  protected $rulesetsType = Ruleset::class;
  protected $rulesetsDataType = 'array';
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
  /** @param Ruleset[] */
  public function setRulesets($rulesets)
  {
    $this->rulesets = $rulesets;
  }
  /** @return Ruleset[] */
  public function getRulesets()
  {
    return $this->rulesets;
  }
}

class Metadata extends \Google\Collection
{
  /** @var string[] */
  public $services;
  protected $collection_key = 'services';
  /** @param string[] */
  public function setServices($services)
  {
    $this->services = $services;
  }
  /** @return string[] */
  public function getServices()
  {
    return $this->services;
  }
}

class Release extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $name;
  /** @var string */
  public $rulesetName;
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
  public function setRulesetName($rulesetName)
  {
    $this->rulesetName = $rulesetName;
  }
  /** @return string */
  public function getRulesetName()
  {
    return $this->rulesetName;
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

class Result extends \Google\Model
{
  /** @var FirebaserulesEmpty */
  public $undefined;
  /** @var array */
  public $value;
  protected $undefinedType = FirebaserulesEmpty::class;
  protected $undefinedDataType = '';
  /** @param FirebaserulesEmpty */
  public function setUndefined(FirebaserulesEmpty $undefined)
  {
    $this->undefined = $undefined;
  }
  /** @return FirebaserulesEmpty */
  public function getUndefined()
  {
    return $this->undefined;
  }
  /** @param array */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return array */
  public function getValue()
  {
    return $this->value;
  }
}

class Ruleset extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var Metadata */
  public $metadata;
  /** @var string */
  public $name;
  /** @var Source */
  public $source;
  protected $metadataType = Metadata::class;
  protected $metadataDataType = '';
  protected $sourceType = Source::class;
  protected $sourceDataType = '';
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
  /** @param Metadata */
  public function setMetadata(Metadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return Metadata */
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
  /** @param Source */
  public function setSource(Source $source)
  {
    $this->source = $source;
  }
  /** @return Source */
  public function getSource()
  {
    return $this->source;
  }
}

class Source extends \Google\Collection
{
  /** @var FirebaserulesFile[] */
  public $files;
  protected $collection_key = 'files';
  protected $filesType = FirebaserulesFile::class;
  protected $filesDataType = 'array';
  /** @param FirebaserulesFile[] */
  public function setFiles($files)
  {
    $this->files = $files;
  }
  /** @return FirebaserulesFile[] */
  public function getFiles()
  {
    return $this->files;
  }
}

class SourcePosition extends \Google\Model
{
  /** @var int */
  public $column;
  /** @var int */
  public $currentOffset;
  /** @var int */
  public $endOffset;
  /** @var string */
  public $fileName;
  /** @var int */
  public $line;

  /** @param int */
  public function setColumn($column)
  {
    $this->column = $column;
  }
  /** @return int */
  public function getColumn()
  {
    return $this->column;
  }
  /** @param int */
  public function setCurrentOffset($currentOffset)
  {
    $this->currentOffset = $currentOffset;
  }
  /** @return int */
  public function getCurrentOffset()
  {
    return $this->currentOffset;
  }
  /** @param int */
  public function setEndOffset($endOffset)
  {
    $this->endOffset = $endOffset;
  }
  /** @return int */
  public function getEndOffset()
  {
    return $this->endOffset;
  }
  /** @param string */
  public function setFileName($fileName)
  {
    $this->fileName = $fileName;
  }
  /** @return string */
  public function getFileName()
  {
    return $this->fileName;
  }
  /** @param int */
  public function setLine($line)
  {
    $this->line = $line;
  }
  /** @return int */
  public function getLine()
  {
    return $this->line;
  }
}

class TestCase extends \Google\Collection
{
  /** @var string */
  public $expectation;
  /** @var string */
  public $expressionReportLevel;
  /** @var FunctionMock[] */
  public $functionMocks;
  /** @var string */
  public $pathEncoding;
  /** @var array */
  public $request;
  /** @var array */
  public $resource;
  protected $collection_key = 'functionMocks';
  protected $functionMocksType = FunctionMock::class;
  protected $functionMocksDataType = 'array';
  /** @param string */
  public function setExpectation($expectation)
  {
    $this->expectation = $expectation;
  }
  /** @return string */
  public function getExpectation()
  {
    return $this->expectation;
  }
  /** @param string */
  public function setExpressionReportLevel($expressionReportLevel)
  {
    $this->expressionReportLevel = $expressionReportLevel;
  }
  /** @return string */
  public function getExpressionReportLevel()
  {
    return $this->expressionReportLevel;
  }
  /** @param FunctionMock[] */
  public function setFunctionMocks($functionMocks)
  {
    $this->functionMocks = $functionMocks;
  }
  /** @return FunctionMock[] */
  public function getFunctionMocks()
  {
    return $this->functionMocks;
  }
  /** @param string */
  public function setPathEncoding($pathEncoding)
  {
    $this->pathEncoding = $pathEncoding;
  }
  /** @return string */
  public function getPathEncoding()
  {
    return $this->pathEncoding;
  }
  /** @param array */
  public function setRequest($request)
  {
    $this->request = $request;
  }
  /** @return array */
  public function getRequest()
  {
    return $this->request;
  }
  /** @param array */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return array */
  public function getResource()
  {
    return $this->resource;
  }
}

class TestResult extends \Google\Collection
{
  /** @var string[] */
  public $debugMessages;
  /** @var SourcePosition */
  public $errorPosition;
  /** @var ExpressionReport[] */
  public $expressionReports;
  /** @var FunctionCall[] */
  public $functionCalls;
  /** @var string */
  public $state;
  /** @var VisitedExpression[] */
  public $visitedExpressions;
  protected $collection_key = 'visitedExpressions';
  protected $errorPositionType = SourcePosition::class;
  protected $errorPositionDataType = '';
  protected $expressionReportsType = ExpressionReport::class;
  protected $expressionReportsDataType = 'array';
  protected $functionCallsType = FunctionCall::class;
  protected $functionCallsDataType = 'array';
  protected $visitedExpressionsType = VisitedExpression::class;
  protected $visitedExpressionsDataType = 'array';
  /** @param string[] */
  public function setDebugMessages($debugMessages)
  {
    $this->debugMessages = $debugMessages;
  }
  /** @return string[] */
  public function getDebugMessages()
  {
    return $this->debugMessages;
  }
  /** @param SourcePosition */
  public function setErrorPosition(SourcePosition $errorPosition)
  {
    $this->errorPosition = $errorPosition;
  }
  /** @return SourcePosition */
  public function getErrorPosition()
  {
    return $this->errorPosition;
  }
  /** @param ExpressionReport[] */
  public function setExpressionReports($expressionReports)
  {
    $this->expressionReports = $expressionReports;
  }
  /** @return ExpressionReport[] */
  public function getExpressionReports()
  {
    return $this->expressionReports;
  }
  /** @param FunctionCall[] */
  public function setFunctionCalls($functionCalls)
  {
    $this->functionCalls = $functionCalls;
  }
  /** @return FunctionCall[] */
  public function getFunctionCalls()
  {
    return $this->functionCalls;
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
  /** @param VisitedExpression[] */
  public function setVisitedExpressions($visitedExpressions)
  {
    $this->visitedExpressions = $visitedExpressions;
  }
  /** @return VisitedExpression[] */
  public function getVisitedExpressions()
  {
    return $this->visitedExpressions;
  }
}

class TestRulesetRequest extends \Google\Model
{
  /** @var Source */
  public $source;
  /** @var TestSuite */
  public $testSuite;
  protected $sourceType = Source::class;
  protected $sourceDataType = '';
  protected $testSuiteType = TestSuite::class;
  protected $testSuiteDataType = '';
  /** @param Source */
  public function setSource(Source $source)
  {
    $this->source = $source;
  }
  /** @return Source */
  public function getSource()
  {
    return $this->source;
  }
  /** @param TestSuite */
  public function setTestSuite(TestSuite $testSuite)
  {
    $this->testSuite = $testSuite;
  }
  /** @return TestSuite */
  public function getTestSuite()
  {
    return $this->testSuite;
  }
}

class TestRulesetResponse extends \Google\Collection
{
  /** @var Issue[] */
  public $issues;
  /** @var TestResult[] */
  public $testResults;
  protected $collection_key = 'testResults';
  protected $issuesType = Issue::class;
  protected $issuesDataType = 'array';
  protected $testResultsType = TestResult::class;
  protected $testResultsDataType = 'array';
  /** @param Issue[] */
  public function setIssues($issues)
  {
    $this->issues = $issues;
  }
  /** @return Issue[] */
  public function getIssues()
  {
    return $this->issues;
  }
  /** @param TestResult[] */
  public function setTestResults($testResults)
  {
    $this->testResults = $testResults;
  }
  /** @return TestResult[] */
  public function getTestResults()
  {
    return $this->testResults;
  }
}

class TestSuite extends \Google\Collection
{
  /** @var TestCase[] */
  public $testCases;
  protected $collection_key = 'testCases';
  protected $testCasesType = TestCase::class;
  protected $testCasesDataType = 'array';
  /** @param TestCase[] */
  public function setTestCases($testCases)
  {
    $this->testCases = $testCases;
  }
  /** @return TestCase[] */
  public function getTestCases()
  {
    return $this->testCases;
  }
}

class UpdateReleaseRequest extends \Google\Model
{
  /** @var Release */
  public $release;
  /** @var string */
  public $updateMask;
  protected $releaseType = Release::class;
  protected $releaseDataType = '';
  /** @param Release */
  public function setRelease(Release $release)
  {
    $this->release = $release;
  }
  /** @return Release */
  public function getRelease()
  {
    return $this->release;
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

class ValueCount extends \Google\Model
{
  /** @var int */
  public $count;
  /** @var array */
  public $value;

  /** @param int */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /** @return int */
  public function getCount()
  {
    return $this->count;
  }
  /** @param array */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return array */
  public function getValue()
  {
    return $this->value;
  }
}

class VisitedExpression extends \Google\Model
{
  /** @var SourcePosition */
  public $sourcePosition;
  /** @var array */
  public $value;
  protected $sourcePositionType = SourcePosition::class;
  protected $sourcePositionDataType = '';
  /** @param SourcePosition */
  public function setSourcePosition(SourcePosition $sourcePosition)
  {
    $this->sourcePosition = $sourcePosition;
  }
  /** @return SourcePosition */
  public function getSourcePosition()
  {
    return $this->sourcePosition;
  }
  /** @param array */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return array */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Arg::class, 'Google_Service_FirebaseRules_Arg');
class_alias(ExpressionReport::class, 'Google_Service_FirebaseRules_ExpressionReport');
class_alias(FirebaserulesEmpty::class, 'Google_Service_FirebaseRules_FirebaserulesEmpty');
class_alias(FirebaserulesFile::class, 'Google_Service_FirebaseRules_FirebaserulesFile');
class_alias(FunctionCall::class, 'Google_Service_FirebaseRules_FunctionCall');
class_alias(FunctionMock::class, 'Google_Service_FirebaseRules_FunctionMock');
class_alias(GetReleaseExecutableResponse::class, 'Google_Service_FirebaseRules_GetReleaseExecutableResponse');
class_alias(Issue::class, 'Google_Service_FirebaseRules_Issue');
class_alias(ListReleasesResponse::class, 'Google_Service_FirebaseRules_ListReleasesResponse');
class_alias(ListRulesetsResponse::class, 'Google_Service_FirebaseRules_ListRulesetsResponse');
class_alias(Metadata::class, 'Google_Service_FirebaseRules_Metadata');
class_alias(Release::class, 'Google_Service_FirebaseRules_Release');
class_alias(Result::class, 'Google_Service_FirebaseRules_Result');
class_alias(Ruleset::class, 'Google_Service_FirebaseRules_Ruleset');
class_alias(Source::class, 'Google_Service_FirebaseRules_Source');
class_alias(SourcePosition::class, 'Google_Service_FirebaseRules_SourcePosition');
class_alias(TestCase::class, 'Google_Service_FirebaseRules_TestCase');
class_alias(TestResult::class, 'Google_Service_FirebaseRules_TestResult');
class_alias(TestRulesetRequest::class, 'Google_Service_FirebaseRules_TestRulesetRequest');
class_alias(TestRulesetResponse::class, 'Google_Service_FirebaseRules_TestRulesetResponse');
class_alias(TestSuite::class, 'Google_Service_FirebaseRules_TestSuite');
class_alias(UpdateReleaseRequest::class, 'Google_Service_FirebaseRules_UpdateReleaseRequest');
class_alias(ValueCount::class, 'Google_Service_FirebaseRules_ValueCount');
class_alias(VisitedExpression::class, 'Google_Service_FirebaseRules_VisitedExpression');
