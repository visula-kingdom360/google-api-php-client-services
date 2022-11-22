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

namespace Google\Service\Translate;

class BatchDocumentInputConfig extends \Google\Model
{
  /** @var GcsSource */
  public $gcsSource;
  protected $gcsSourceType = GcsSource::class;
  protected $gcsSourceDataType = '';
  /** @param GcsSource */
  public function setGcsSource(GcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
}

class BatchDocumentOutputConfig extends \Google\Model
{
  /** @var GcsDestination */
  public $gcsDestination;
  protected $gcsDestinationType = GcsDestination::class;
  protected $gcsDestinationDataType = '';
  /** @param GcsDestination */
  public function setGcsDestination(GcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return GcsDestination */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
}

class BatchTranslateDocumentRequest extends \Google\Collection
{
  /** @var string[] */
  public $formatConversions;
  /** @var TranslateTextGlossaryConfig[] */
  public $glossaries;
  /** @var BatchDocumentInputConfig[] */
  public $inputConfigs;
  /** @var string[] */
  public $models;
  /** @var BatchDocumentOutputConfig */
  public $outputConfig;
  /** @var string */
  public $sourceLanguageCode;
  /** @var string[] */
  public $targetLanguageCodes;
  protected $collection_key = 'targetLanguageCodes';
  protected $glossariesType = TranslateTextGlossaryConfig::class;
  protected $glossariesDataType = 'map';
  protected $inputConfigsType = BatchDocumentInputConfig::class;
  protected $inputConfigsDataType = 'array';
  protected $outputConfigType = BatchDocumentOutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param string[] */
  public function setFormatConversions($formatConversions)
  {
    $this->formatConversions = $formatConversions;
  }
  /** @return string[] */
  public function getFormatConversions()
  {
    return $this->formatConversions;
  }
  /** @param TranslateTextGlossaryConfig[] */
  public function setGlossaries($glossaries)
  {
    $this->glossaries = $glossaries;
  }
  /** @return TranslateTextGlossaryConfig[] */
  public function getGlossaries()
  {
    return $this->glossaries;
  }
  /** @param BatchDocumentInputConfig[] */
  public function setInputConfigs($inputConfigs)
  {
    $this->inputConfigs = $inputConfigs;
  }
  /** @return BatchDocumentInputConfig[] */
  public function getInputConfigs()
  {
    return $this->inputConfigs;
  }
  /** @param string[] */
  public function setModels($models)
  {
    $this->models = $models;
  }
  /** @return string[] */
  public function getModels()
  {
    return $this->models;
  }
  /** @param BatchDocumentOutputConfig */
  public function setOutputConfig(BatchDocumentOutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return BatchDocumentOutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
  /** @param string */
  public function setSourceLanguageCode($sourceLanguageCode)
  {
    $this->sourceLanguageCode = $sourceLanguageCode;
  }
  /** @return string */
  public function getSourceLanguageCode()
  {
    return $this->sourceLanguageCode;
  }
  /** @param string[] */
  public function setTargetLanguageCodes($targetLanguageCodes)
  {
    $this->targetLanguageCodes = $targetLanguageCodes;
  }
  /** @return string[] */
  public function getTargetLanguageCodes()
  {
    return $this->targetLanguageCodes;
  }
}

class BatchTranslateTextRequest extends \Google\Collection
{
  /** @var TranslateTextGlossaryConfig[] */
  public $glossaries;
  /** @var InputConfig[] */
  public $inputConfigs;
  /** @var string[] */
  public $labels;
  /** @var string[] */
  public $models;
  /** @var OutputConfig */
  public $outputConfig;
  /** @var string */
  public $sourceLanguageCode;
  /** @var string[] */
  public $targetLanguageCodes;
  protected $collection_key = 'targetLanguageCodes';
  protected $glossariesType = TranslateTextGlossaryConfig::class;
  protected $glossariesDataType = 'map';
  protected $inputConfigsType = InputConfig::class;
  protected $inputConfigsDataType = 'array';
  protected $outputConfigType = OutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param TranslateTextGlossaryConfig[] */
  public function setGlossaries($glossaries)
  {
    $this->glossaries = $glossaries;
  }
  /** @return TranslateTextGlossaryConfig[] */
  public function getGlossaries()
  {
    return $this->glossaries;
  }
  /** @param InputConfig[] */
  public function setInputConfigs($inputConfigs)
  {
    $this->inputConfigs = $inputConfigs;
  }
  /** @return InputConfig[] */
  public function getInputConfigs()
  {
    return $this->inputConfigs;
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
  /** @param string[] */
  public function setModels($models)
  {
    $this->models = $models;
  }
  /** @return string[] */
  public function getModels()
  {
    return $this->models;
  }
  /** @param OutputConfig */
  public function setOutputConfig(OutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return OutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
  /** @param string */
  public function setSourceLanguageCode($sourceLanguageCode)
  {
    $this->sourceLanguageCode = $sourceLanguageCode;
  }
  /** @return string */
  public function getSourceLanguageCode()
  {
    return $this->sourceLanguageCode;
  }
  /** @param string[] */
  public function setTargetLanguageCodes($targetLanguageCodes)
  {
    $this->targetLanguageCodes = $targetLanguageCodes;
  }
  /** @return string[] */
  public function getTargetLanguageCodes()
  {
    return $this->targetLanguageCodes;
  }
}

class CancelOperationRequest extends \Google\Model
{
}

class DetectLanguageRequest extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $model;

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
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
  /** @param string */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
  }
}

class DetectLanguageResponse extends \Google\Collection
{
  /** @var DetectedLanguage[] */
  public $languages;
  protected $collection_key = 'languages';
  protected $languagesType = DetectedLanguage::class;
  protected $languagesDataType = 'array';
  /** @param DetectedLanguage[] */
  public function setLanguages($languages)
  {
    $this->languages = $languages;
  }
  /** @return DetectedLanguage[] */
  public function getLanguages()
  {
    return $this->languages;
  }
}

class DetectedLanguage extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $languageCode;

  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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
}

class DocumentInputConfig extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var GcsSource */
  public $gcsSource;
  /** @var string */
  public $mimeType;
  protected $gcsSourceType = GcsSource::class;
  protected $gcsSourceDataType = '';
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
  /** @param GcsSource */
  public function setGcsSource(GcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
}

class DocumentOutputConfig extends \Google\Model
{
  /** @var GcsDestination */
  public $gcsDestination;
  /** @var string */
  public $mimeType;
  protected $gcsDestinationType = GcsDestination::class;
  protected $gcsDestinationDataType = '';
  /** @param GcsDestination */
  public function setGcsDestination(GcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return GcsDestination */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
}

class DocumentTranslation extends \Google\Collection
{
  /** @var string[] */
  public $byteStreamOutputs;
  /** @var string */
  public $detectedLanguageCode;
  /** @var string */
  public $mimeType;
  protected $collection_key = 'byteStreamOutputs';
  /** @param string[] */
  public function setByteStreamOutputs($byteStreamOutputs)
  {
    $this->byteStreamOutputs = $byteStreamOutputs;
  }
  /** @return string[] */
  public function getByteStreamOutputs()
  {
    return $this->byteStreamOutputs;
  }
  /** @param string */
  public function setDetectedLanguageCode($detectedLanguageCode)
  {
    $this->detectedLanguageCode = $detectedLanguageCode;
  }
  /** @return string */
  public function getDetectedLanguageCode()
  {
    return $this->detectedLanguageCode;
  }
  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
}

class GcsDestination extends \Google\Model
{
  /** @var string */
  public $outputUriPrefix;

  /** @param string */
  public function setOutputUriPrefix($outputUriPrefix)
  {
    $this->outputUriPrefix = $outputUriPrefix;
  }
  /** @return string */
  public function getOutputUriPrefix()
  {
    return $this->outputUriPrefix;
  }
}

class GcsSource extends \Google\Model
{
  /** @var string */
  public $inputUri;

  /** @param string */
  public function setInputUri($inputUri)
  {
    $this->inputUri = $inputUri;
  }
  /** @return string */
  public function getInputUri()
  {
    return $this->inputUri;
  }
}

class Glossary extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $endTime;
  /** @var int */
  public $entryCount;
  /** @var GlossaryInputConfig */
  public $inputConfig;
  /** @var LanguageCodesSet */
  public $languageCodesSet;
  /** @var LanguageCodePair */
  public $languagePair;
  /** @var string */
  public $name;
  /** @var string */
  public $submitTime;
  protected $inputConfigType = GlossaryInputConfig::class;
  protected $inputConfigDataType = '';
  protected $languageCodesSetType = LanguageCodesSet::class;
  protected $languageCodesSetDataType = '';
  protected $languagePairType = LanguageCodePair::class;
  protected $languagePairDataType = '';
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param int */
  public function setEntryCount($entryCount)
  {
    $this->entryCount = $entryCount;
  }
  /** @return int */
  public function getEntryCount()
  {
    return $this->entryCount;
  }
  /** @param GlossaryInputConfig */
  public function setInputConfig(GlossaryInputConfig $inputConfig)
  {
    $this->inputConfig = $inputConfig;
  }
  /** @return GlossaryInputConfig */
  public function getInputConfig()
  {
    return $this->inputConfig;
  }
  /** @param LanguageCodesSet */
  public function setLanguageCodesSet(LanguageCodesSet $languageCodesSet)
  {
    $this->languageCodesSet = $languageCodesSet;
  }
  /** @return LanguageCodesSet */
  public function getLanguageCodesSet()
  {
    return $this->languageCodesSet;
  }
  /** @param LanguageCodePair */
  public function setLanguagePair(LanguageCodePair $languagePair)
  {
    $this->languagePair = $languagePair;
  }
  /** @return LanguageCodePair */
  public function getLanguagePair()
  {
    return $this->languagePair;
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
  public function setSubmitTime($submitTime)
  {
    $this->submitTime = $submitTime;
  }
  /** @return string */
  public function getSubmitTime()
  {
    return $this->submitTime;
  }
}

class GlossaryEntry extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $name;
  /** @var GlossaryTermsPair */
  public $termsPair;
  /** @var GlossaryTermsSet */
  public $termsSet;
  protected $termsPairType = GlossaryTermsPair::class;
  protected $termsPairDataType = '';
  protected $termsSetType = GlossaryTermsSet::class;
  protected $termsSetDataType = '';
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
  /** @param GlossaryTermsPair */
  public function setTermsPair(GlossaryTermsPair $termsPair)
  {
    $this->termsPair = $termsPair;
  }
  /** @return GlossaryTermsPair */
  public function getTermsPair()
  {
    return $this->termsPair;
  }
  /** @param GlossaryTermsSet */
  public function setTermsSet(GlossaryTermsSet $termsSet)
  {
    $this->termsSet = $termsSet;
  }
  /** @return GlossaryTermsSet */
  public function getTermsSet()
  {
    return $this->termsSet;
  }
}

class GlossaryInputConfig extends \Google\Model
{
  /** @var GcsSource */
  public $gcsSource;
  protected $gcsSourceType = GcsSource::class;
  protected $gcsSourceDataType = '';
  /** @param GcsSource */
  public function setGcsSource(GcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
}

class GlossaryTerm extends \Google\Model
{
  /** @var string */
  public $languageCode;
  /** @var string */
  public $text;

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
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return string */
  public function getText()
  {
    return $this->text;
  }
}

class GlossaryTermsPair extends \Google\Model
{
  /** @var GlossaryTerm */
  public $sourceTerm;
  /** @var GlossaryTerm */
  public $targetTerm;
  protected $sourceTermType = GlossaryTerm::class;
  protected $sourceTermDataType = '';
  protected $targetTermType = GlossaryTerm::class;
  protected $targetTermDataType = '';
  /** @param GlossaryTerm */
  public function setSourceTerm(GlossaryTerm $sourceTerm)
  {
    $this->sourceTerm = $sourceTerm;
  }
  /** @return GlossaryTerm */
  public function getSourceTerm()
  {
    return $this->sourceTerm;
  }
  /** @param GlossaryTerm */
  public function setTargetTerm(GlossaryTerm $targetTerm)
  {
    $this->targetTerm = $targetTerm;
  }
  /** @return GlossaryTerm */
  public function getTargetTerm()
  {
    return $this->targetTerm;
  }
}

class GlossaryTermsSet extends \Google\Collection
{
  /** @var GlossaryTerm[] */
  public $terms;
  protected $collection_key = 'terms';
  protected $termsType = GlossaryTerm::class;
  protected $termsDataType = 'array';
  /** @param GlossaryTerm[] */
  public function setTerms($terms)
  {
    $this->terms = $terms;
  }
  /** @return GlossaryTerm[] */
  public function getTerms()
  {
    return $this->terms;
  }
}

class InputConfig extends \Google\Model
{
  /** @var GcsSource */
  public $gcsSource;
  /** @var string */
  public $mimeType;
  protected $gcsSourceType = GcsSource::class;
  protected $gcsSourceDataType = '';
  /** @param GcsSource */
  public function setGcsSource(GcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
}

class LanguageCodePair extends \Google\Model
{
  /** @var string */
  public $sourceLanguageCode;
  /** @var string */
  public $targetLanguageCode;

  /** @param string */
  public function setSourceLanguageCode($sourceLanguageCode)
  {
    $this->sourceLanguageCode = $sourceLanguageCode;
  }
  /** @return string */
  public function getSourceLanguageCode()
  {
    return $this->sourceLanguageCode;
  }
  /** @param string */
  public function setTargetLanguageCode($targetLanguageCode)
  {
    $this->targetLanguageCode = $targetLanguageCode;
  }
  /** @return string */
  public function getTargetLanguageCode()
  {
    return $this->targetLanguageCode;
  }
}

class LanguageCodesSet extends \Google\Collection
{
  /** @var string[] */
  public $languageCodes;
  protected $collection_key = 'languageCodes';
  /** @param string[] */
  public function setLanguageCodes($languageCodes)
  {
    $this->languageCodes = $languageCodes;
  }
  /** @return string[] */
  public function getLanguageCodes()
  {
    return $this->languageCodes;
  }
}

class ListGlossariesResponse extends \Google\Collection
{
  /** @var Glossary[] */
  public $glossaries;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'glossaries';
  protected $glossariesType = Glossary::class;
  protected $glossariesDataType = 'array';
  /** @param Glossary[] */
  public function setGlossaries($glossaries)
  {
    $this->glossaries = $glossaries;
  }
  /** @return Glossary[] */
  public function getGlossaries()
  {
    return $this->glossaries;
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

class ListGlossaryEntriesResponse extends \Google\Collection
{
  /** @var GlossaryEntry[] */
  public $glossaryEntries;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'glossaryEntries';
  protected $glossaryEntriesType = GlossaryEntry::class;
  protected $glossaryEntriesDataType = 'array';
  /** @param GlossaryEntry[] */
  public function setGlossaryEntries($glossaryEntries)
  {
    $this->glossaryEntries = $glossaryEntries;
  }
  /** @return GlossaryEntry[] */
  public function getGlossaryEntries()
  {
    return $this->glossaryEntries;
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

class OutputConfig extends \Google\Model
{
  /** @var GcsDestination */
  public $gcsDestination;
  protected $gcsDestinationType = GcsDestination::class;
  protected $gcsDestinationDataType = '';
  /** @param GcsDestination */
  public function setGcsDestination(GcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return GcsDestination */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
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

class SupportedLanguage extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $languageCode;
  /** @var bool */
  public $supportSource;
  /** @var bool */
  public $supportTarget;

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
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /** @param bool */
  public function setSupportSource($supportSource)
  {
    $this->supportSource = $supportSource;
  }
  /** @return bool */
  public function getSupportSource()
  {
    return $this->supportSource;
  }
  /** @param bool */
  public function setSupportTarget($supportTarget)
  {
    $this->supportTarget = $supportTarget;
  }
  /** @return bool */
  public function getSupportTarget()
  {
    return $this->supportTarget;
  }
}

class SupportedLanguages extends \Google\Collection
{
  /** @var SupportedLanguage[] */
  public $languages;
  protected $collection_key = 'languages';
  protected $languagesType = SupportedLanguage::class;
  protected $languagesDataType = 'array';
  /** @param SupportedLanguage[] */
  public function setLanguages($languages)
  {
    $this->languages = $languages;
  }
  /** @return SupportedLanguage[] */
  public function getLanguages()
  {
    return $this->languages;
  }
}

class TranslateDocumentRequest extends \Google\Model
{
  /** @var string */
  public $customizedAttribution;
  /** @var DocumentInputConfig */
  public $documentInputConfig;
  /** @var DocumentOutputConfig */
  public $documentOutputConfig;
  /** @var TranslateTextGlossaryConfig */
  public $glossaryConfig;
  /** @var bool */
  public $isTranslateNativePdfOnly;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $model;
  /** @var string */
  public $sourceLanguageCode;
  /** @var string */
  public $targetLanguageCode;
  protected $documentInputConfigType = DocumentInputConfig::class;
  protected $documentInputConfigDataType = '';
  protected $documentOutputConfigType = DocumentOutputConfig::class;
  protected $documentOutputConfigDataType = '';
  protected $glossaryConfigType = TranslateTextGlossaryConfig::class;
  protected $glossaryConfigDataType = '';
  /** @param string */
  public function setCustomizedAttribution($customizedAttribution)
  {
    $this->customizedAttribution = $customizedAttribution;
  }
  /** @return string */
  public function getCustomizedAttribution()
  {
    return $this->customizedAttribution;
  }
  /** @param DocumentInputConfig */
  public function setDocumentInputConfig(DocumentInputConfig $documentInputConfig)
  {
    $this->documentInputConfig = $documentInputConfig;
  }
  /** @return DocumentInputConfig */
  public function getDocumentInputConfig()
  {
    return $this->documentInputConfig;
  }
  /** @param DocumentOutputConfig */
  public function setDocumentOutputConfig(DocumentOutputConfig $documentOutputConfig)
  {
    $this->documentOutputConfig = $documentOutputConfig;
  }
  /** @return DocumentOutputConfig */
  public function getDocumentOutputConfig()
  {
    return $this->documentOutputConfig;
  }
  /** @param TranslateTextGlossaryConfig */
  public function setGlossaryConfig(TranslateTextGlossaryConfig $glossaryConfig)
  {
    $this->glossaryConfig = $glossaryConfig;
  }
  /** @return TranslateTextGlossaryConfig */
  public function getGlossaryConfig()
  {
    return $this->glossaryConfig;
  }
  /** @param bool */
  public function setIsTranslateNativePdfOnly($isTranslateNativePdfOnly)
  {
    $this->isTranslateNativePdfOnly = $isTranslateNativePdfOnly;
  }
  /** @return bool */
  public function getIsTranslateNativePdfOnly()
  {
    return $this->isTranslateNativePdfOnly;
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
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
  }
  /** @param string */
  public function setSourceLanguageCode($sourceLanguageCode)
  {
    $this->sourceLanguageCode = $sourceLanguageCode;
  }
  /** @return string */
  public function getSourceLanguageCode()
  {
    return $this->sourceLanguageCode;
  }
  /** @param string */
  public function setTargetLanguageCode($targetLanguageCode)
  {
    $this->targetLanguageCode = $targetLanguageCode;
  }
  /** @return string */
  public function getTargetLanguageCode()
  {
    return $this->targetLanguageCode;
  }
}

class TranslateDocumentResponse extends \Google\Model
{
  /** @var DocumentTranslation */
  public $documentTranslation;
  /** @var TranslateTextGlossaryConfig */
  public $glossaryConfig;
  /** @var DocumentTranslation */
  public $glossaryDocumentTranslation;
  /** @var string */
  public $model;
  protected $documentTranslationType = DocumentTranslation::class;
  protected $documentTranslationDataType = '';
  protected $glossaryConfigType = TranslateTextGlossaryConfig::class;
  protected $glossaryConfigDataType = '';
  protected $glossaryDocumentTranslationType = DocumentTranslation::class;
  protected $glossaryDocumentTranslationDataType = '';
  /** @param DocumentTranslation */
  public function setDocumentTranslation(DocumentTranslation $documentTranslation)
  {
    $this->documentTranslation = $documentTranslation;
  }
  /** @return DocumentTranslation */
  public function getDocumentTranslation()
  {
    return $this->documentTranslation;
  }
  /** @param TranslateTextGlossaryConfig */
  public function setGlossaryConfig(TranslateTextGlossaryConfig $glossaryConfig)
  {
    $this->glossaryConfig = $glossaryConfig;
  }
  /** @return TranslateTextGlossaryConfig */
  public function getGlossaryConfig()
  {
    return $this->glossaryConfig;
  }
  /** @param DocumentTranslation */
  public function setGlossaryDocumentTranslation(DocumentTranslation $glossaryDocumentTranslation)
  {
    $this->glossaryDocumentTranslation = $glossaryDocumentTranslation;
  }
  /** @return DocumentTranslation */
  public function getGlossaryDocumentTranslation()
  {
    return $this->glossaryDocumentTranslation;
  }
  /** @param string */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
  }
}

class TranslateEmpty extends \Google\Model
{
}

class TranslateTextGlossaryConfig extends \Google\Model
{
  /** @var string */
  public $glossary;
  /** @var bool */
  public $ignoreCase;

  /** @param string */
  public function setGlossary($glossary)
  {
    $this->glossary = $glossary;
  }
  /** @return string */
  public function getGlossary()
  {
    return $this->glossary;
  }
  /** @param bool */
  public function setIgnoreCase($ignoreCase)
  {
    $this->ignoreCase = $ignoreCase;
  }
  /** @return bool */
  public function getIgnoreCase()
  {
    return $this->ignoreCase;
  }
}

class TranslateTextRequest extends \Google\Collection
{
  /** @var string[] */
  public $contents;
  /** @var TranslateTextGlossaryConfig */
  public $glossaryConfig;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $model;
  /** @var string */
  public $sourceLanguageCode;
  /** @var string */
  public $targetLanguageCode;
  protected $collection_key = 'contents';
  protected $glossaryConfigType = TranslateTextGlossaryConfig::class;
  protected $glossaryConfigDataType = '';
  /** @param string[] */
  public function setContents($contents)
  {
    $this->contents = $contents;
  }
  /** @return string[] */
  public function getContents()
  {
    return $this->contents;
  }
  /** @param TranslateTextGlossaryConfig */
  public function setGlossaryConfig(TranslateTextGlossaryConfig $glossaryConfig)
  {
    $this->glossaryConfig = $glossaryConfig;
  }
  /** @return TranslateTextGlossaryConfig */
  public function getGlossaryConfig()
  {
    return $this->glossaryConfig;
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
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
  /** @param string */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
  }
  /** @param string */
  public function setSourceLanguageCode($sourceLanguageCode)
  {
    $this->sourceLanguageCode = $sourceLanguageCode;
  }
  /** @return string */
  public function getSourceLanguageCode()
  {
    return $this->sourceLanguageCode;
  }
  /** @param string */
  public function setTargetLanguageCode($targetLanguageCode)
  {
    $this->targetLanguageCode = $targetLanguageCode;
  }
  /** @return string */
  public function getTargetLanguageCode()
  {
    return $this->targetLanguageCode;
  }
}

class TranslateTextResponse extends \Google\Collection
{
  /** @var Translation[] */
  public $glossaryTranslations;
  /** @var Translation[] */
  public $translations;
  protected $collection_key = 'translations';
  protected $glossaryTranslationsType = Translation::class;
  protected $glossaryTranslationsDataType = 'array';
  protected $translationsType = Translation::class;
  protected $translationsDataType = 'array';
  /** @param Translation[] */
  public function setGlossaryTranslations($glossaryTranslations)
  {
    $this->glossaryTranslations = $glossaryTranslations;
  }
  /** @return Translation[] */
  public function getGlossaryTranslations()
  {
    return $this->glossaryTranslations;
  }
  /** @param Translation[] */
  public function setTranslations($translations)
  {
    $this->translations = $translations;
  }
  /** @return Translation[] */
  public function getTranslations()
  {
    return $this->translations;
  }
}

class Translation extends \Google\Model
{
  /** @var string */
  public $detectedLanguageCode;
  /** @var TranslateTextGlossaryConfig */
  public $glossaryConfig;
  /** @var string */
  public $model;
  /** @var string */
  public $translatedText;
  protected $glossaryConfigType = TranslateTextGlossaryConfig::class;
  protected $glossaryConfigDataType = '';
  /** @param string */
  public function setDetectedLanguageCode($detectedLanguageCode)
  {
    $this->detectedLanguageCode = $detectedLanguageCode;
  }
  /** @return string */
  public function getDetectedLanguageCode()
  {
    return $this->detectedLanguageCode;
  }
  /** @param TranslateTextGlossaryConfig */
  public function setGlossaryConfig(TranslateTextGlossaryConfig $glossaryConfig)
  {
    $this->glossaryConfig = $glossaryConfig;
  }
  /** @return TranslateTextGlossaryConfig */
  public function getGlossaryConfig()
  {
    return $this->glossaryConfig;
  }
  /** @param string */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
  }
  /** @param string */
  public function setTranslatedText($translatedText)
  {
    $this->translatedText = $translatedText;
  }
  /** @return string */
  public function getTranslatedText()
  {
    return $this->translatedText;
  }
}

class WaitOperationRequest extends \Google\Model
{
  /** @var string */
  public $timeout;

  /** @param string */
  public function setTimeout($timeout)
  {
    $this->timeout = $timeout;
  }
  /** @return string */
  public function getTimeout()
  {
    return $this->timeout;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BatchDocumentInputConfig::class, 'Google_Service_Translate_BatchDocumentInputConfig');
class_alias(BatchDocumentOutputConfig::class, 'Google_Service_Translate_BatchDocumentOutputConfig');
class_alias(BatchTranslateDocumentRequest::class, 'Google_Service_Translate_BatchTranslateDocumentRequest');
class_alias(BatchTranslateTextRequest::class, 'Google_Service_Translate_BatchTranslateTextRequest');
class_alias(CancelOperationRequest::class, 'Google_Service_Translate_CancelOperationRequest');
class_alias(DetectLanguageRequest::class, 'Google_Service_Translate_DetectLanguageRequest');
class_alias(DetectLanguageResponse::class, 'Google_Service_Translate_DetectLanguageResponse');
class_alias(DetectedLanguage::class, 'Google_Service_Translate_DetectedLanguage');
class_alias(DocumentInputConfig::class, 'Google_Service_Translate_DocumentInputConfig');
class_alias(DocumentOutputConfig::class, 'Google_Service_Translate_DocumentOutputConfig');
class_alias(DocumentTranslation::class, 'Google_Service_Translate_DocumentTranslation');
class_alias(GcsDestination::class, 'Google_Service_Translate_GcsDestination');
class_alias(GcsSource::class, 'Google_Service_Translate_GcsSource');
class_alias(Glossary::class, 'Google_Service_Translate_Glossary');
class_alias(GlossaryEntry::class, 'Google_Service_Translate_GlossaryEntry');
class_alias(GlossaryInputConfig::class, 'Google_Service_Translate_GlossaryInputConfig');
class_alias(GlossaryTerm::class, 'Google_Service_Translate_GlossaryTerm');
class_alias(GlossaryTermsPair::class, 'Google_Service_Translate_GlossaryTermsPair');
class_alias(GlossaryTermsSet::class, 'Google_Service_Translate_GlossaryTermsSet');
class_alias(InputConfig::class, 'Google_Service_Translate_InputConfig');
class_alias(LanguageCodePair::class, 'Google_Service_Translate_LanguageCodePair');
class_alias(LanguageCodesSet::class, 'Google_Service_Translate_LanguageCodesSet');
class_alias(ListGlossariesResponse::class, 'Google_Service_Translate_ListGlossariesResponse');
class_alias(ListGlossaryEntriesResponse::class, 'Google_Service_Translate_ListGlossaryEntriesResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_Translate_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_Translate_ListOperationsResponse');
class_alias(Location::class, 'Google_Service_Translate_Location');
class_alias(Operation::class, 'Google_Service_Translate_Operation');
class_alias(OutputConfig::class, 'Google_Service_Translate_OutputConfig');
class_alias(Status::class, 'Google_Service_Translate_Status');
class_alias(SupportedLanguage::class, 'Google_Service_Translate_SupportedLanguage');
class_alias(SupportedLanguages::class, 'Google_Service_Translate_SupportedLanguages');
class_alias(TranslateDocumentRequest::class, 'Google_Service_Translate_TranslateDocumentRequest');
class_alias(TranslateDocumentResponse::class, 'Google_Service_Translate_TranslateDocumentResponse');
class_alias(TranslateEmpty::class, 'Google_Service_Translate_TranslateEmpty');
class_alias(TranslateTextGlossaryConfig::class, 'Google_Service_Translate_TranslateTextGlossaryConfig');
class_alias(TranslateTextRequest::class, 'Google_Service_Translate_TranslateTextRequest');
class_alias(TranslateTextResponse::class, 'Google_Service_Translate_TranslateTextResponse');
class_alias(Translation::class, 'Google_Service_Translate_Translation');
class_alias(WaitOperationRequest::class, 'Google_Service_Translate_WaitOperationRequest');
