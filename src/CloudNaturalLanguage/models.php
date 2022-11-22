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

namespace Google\Service\CloudNaturalLanguage;

class AnalyzeEntitiesRequest extends \Google\Model
{
  /** @var Document */
  public $document;
  /** @var string */
  public $encodingType;
  protected $documentType = Document::class;
  protected $documentDataType = '';
  /** @param Document */
  public function setDocument(Document $document)
  {
    $this->document = $document;
  }
  /** @return Document */
  public function getDocument()
  {
    return $this->document;
  }
  /** @param string */
  public function setEncodingType($encodingType)
  {
    $this->encodingType = $encodingType;
  }
  /** @return string */
  public function getEncodingType()
  {
    return $this->encodingType;
  }
}

class AnalyzeEntitiesResponse extends \Google\Collection
{
  /** @var Entity[] */
  public $entities;
  /** @var string */
  public $language;
  protected $collection_key = 'entities';
  protected $entitiesType = Entity::class;
  protected $entitiesDataType = 'array';
  /** @param Entity[] */
  public function setEntities($entities)
  {
    $this->entities = $entities;
  }
  /** @return Entity[] */
  public function getEntities()
  {
    return $this->entities;
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
}

class AnalyzeEntitySentimentRequest extends \Google\Model
{
  /** @var Document */
  public $document;
  /** @var string */
  public $encodingType;
  protected $documentType = Document::class;
  protected $documentDataType = '';
  /** @param Document */
  public function setDocument(Document $document)
  {
    $this->document = $document;
  }
  /** @return Document */
  public function getDocument()
  {
    return $this->document;
  }
  /** @param string */
  public function setEncodingType($encodingType)
  {
    $this->encodingType = $encodingType;
  }
  /** @return string */
  public function getEncodingType()
  {
    return $this->encodingType;
  }
}

class AnalyzeEntitySentimentResponse extends \Google\Collection
{
  /** @var Entity[] */
  public $entities;
  /** @var string */
  public $language;
  protected $collection_key = 'entities';
  protected $entitiesType = Entity::class;
  protected $entitiesDataType = 'array';
  /** @param Entity[] */
  public function setEntities($entities)
  {
    $this->entities = $entities;
  }
  /** @return Entity[] */
  public function getEntities()
  {
    return $this->entities;
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
}

class AnalyzeSentimentRequest extends \Google\Model
{
  /** @var Document */
  public $document;
  /** @var string */
  public $encodingType;
  protected $documentType = Document::class;
  protected $documentDataType = '';
  /** @param Document */
  public function setDocument(Document $document)
  {
    $this->document = $document;
  }
  /** @return Document */
  public function getDocument()
  {
    return $this->document;
  }
  /** @param string */
  public function setEncodingType($encodingType)
  {
    $this->encodingType = $encodingType;
  }
  /** @return string */
  public function getEncodingType()
  {
    return $this->encodingType;
  }
}

class AnalyzeSentimentResponse extends \Google\Collection
{
  /** @var Sentiment */
  public $documentSentiment;
  /** @var string */
  public $language;
  /** @var Sentence[] */
  public $sentences;
  protected $collection_key = 'sentences';
  protected $documentSentimentType = Sentiment::class;
  protected $documentSentimentDataType = '';
  protected $sentencesType = Sentence::class;
  protected $sentencesDataType = 'array';
  /** @param Sentiment */
  public function setDocumentSentiment(Sentiment $documentSentiment)
  {
    $this->documentSentiment = $documentSentiment;
  }
  /** @return Sentiment */
  public function getDocumentSentiment()
  {
    return $this->documentSentiment;
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
  /** @param Sentence[] */
  public function setSentences($sentences)
  {
    $this->sentences = $sentences;
  }
  /** @return Sentence[] */
  public function getSentences()
  {
    return $this->sentences;
  }
}

class AnalyzeSyntaxRequest extends \Google\Model
{
  /** @var Document */
  public $document;
  /** @var string */
  public $encodingType;
  protected $documentType = Document::class;
  protected $documentDataType = '';
  /** @param Document */
  public function setDocument(Document $document)
  {
    $this->document = $document;
  }
  /** @return Document */
  public function getDocument()
  {
    return $this->document;
  }
  /** @param string */
  public function setEncodingType($encodingType)
  {
    $this->encodingType = $encodingType;
  }
  /** @return string */
  public function getEncodingType()
  {
    return $this->encodingType;
  }
}

class AnalyzeSyntaxResponse extends \Google\Collection
{
  /** @var string */
  public $language;
  /** @var Sentence[] */
  public $sentences;
  /** @var Token[] */
  public $tokens;
  protected $collection_key = 'tokens';
  protected $sentencesType = Sentence::class;
  protected $sentencesDataType = 'array';
  protected $tokensType = Token::class;
  protected $tokensDataType = 'array';
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
  /** @param Sentence[] */
  public function setSentences($sentences)
  {
    $this->sentences = $sentences;
  }
  /** @return Sentence[] */
  public function getSentences()
  {
    return $this->sentences;
  }
  /** @param Token[] */
  public function setTokens($tokens)
  {
    $this->tokens = $tokens;
  }
  /** @return Token[] */
  public function getTokens()
  {
    return $this->tokens;
  }
}

class AnnotateTextRequest extends \Google\Model
{
  /** @var Document */
  public $document;
  /** @var string */
  public $encodingType;
  /** @var Features */
  public $features;
  protected $documentType = Document::class;
  protected $documentDataType = '';
  protected $featuresType = Features::class;
  protected $featuresDataType = '';
  /** @param Document */
  public function setDocument(Document $document)
  {
    $this->document = $document;
  }
  /** @return Document */
  public function getDocument()
  {
    return $this->document;
  }
  /** @param string */
  public function setEncodingType($encodingType)
  {
    $this->encodingType = $encodingType;
  }
  /** @return string */
  public function getEncodingType()
  {
    return $this->encodingType;
  }
  /** @param Features */
  public function setFeatures(Features $features)
  {
    $this->features = $features;
  }
  /** @return Features */
  public function getFeatures()
  {
    return $this->features;
  }
}

class AnnotateTextResponse extends \Google\Collection
{
  /** @var ClassificationCategory[] */
  public $categories;
  /** @var Sentiment */
  public $documentSentiment;
  /** @var Entity[] */
  public $entities;
  /** @var string */
  public $language;
  /** @var Sentence[] */
  public $sentences;
  /** @var Token[] */
  public $tokens;
  protected $collection_key = 'tokens';
  protected $categoriesType = ClassificationCategory::class;
  protected $categoriesDataType = 'array';
  protected $documentSentimentType = Sentiment::class;
  protected $documentSentimentDataType = '';
  protected $entitiesType = Entity::class;
  protected $entitiesDataType = 'array';
  protected $sentencesType = Sentence::class;
  protected $sentencesDataType = 'array';
  protected $tokensType = Token::class;
  protected $tokensDataType = 'array';
  /** @param ClassificationCategory[] */
  public function setCategories($categories)
  {
    $this->categories = $categories;
  }
  /** @return ClassificationCategory[] */
  public function getCategories()
  {
    return $this->categories;
  }
  /** @param Sentiment */
  public function setDocumentSentiment(Sentiment $documentSentiment)
  {
    $this->documentSentiment = $documentSentiment;
  }
  /** @return Sentiment */
  public function getDocumentSentiment()
  {
    return $this->documentSentiment;
  }
  /** @param Entity[] */
  public function setEntities($entities)
  {
    $this->entities = $entities;
  }
  /** @return Entity[] */
  public function getEntities()
  {
    return $this->entities;
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
  /** @param Sentence[] */
  public function setSentences($sentences)
  {
    $this->sentences = $sentences;
  }
  /** @return Sentence[] */
  public function getSentences()
  {
    return $this->sentences;
  }
  /** @param Token[] */
  public function setTokens($tokens)
  {
    $this->tokens = $tokens;
  }
  /** @return Token[] */
  public function getTokens()
  {
    return $this->tokens;
  }
}

class ClassificationCategory extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $name;

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

class ClassificationModelOptions extends \Google\Model
{
  /** @var V1Model */
  public $v1Model;
  /** @var V2Model */
  public $v2Model;
  protected $v1ModelType = V1Model::class;
  protected $v1ModelDataType = '';
  protected $v2ModelType = V2Model::class;
  protected $v2ModelDataType = '';
  /** @param V1Model */
  public function setV1Model(V1Model $v1Model)
  {
    $this->v1Model = $v1Model;
  }
  /** @return V1Model */
  public function getV1Model()
  {
    return $this->v1Model;
  }
  /** @param V2Model */
  public function setV2Model(V2Model $v2Model)
  {
    $this->v2Model = $v2Model;
  }
  /** @return V2Model */
  public function getV2Model()
  {
    return $this->v2Model;
  }
}

class ClassifyTextRequest extends \Google\Model
{
  /** @var ClassificationModelOptions */
  public $classificationModelOptions;
  /** @var Document */
  public $document;
  protected $classificationModelOptionsType = ClassificationModelOptions::class;
  protected $classificationModelOptionsDataType = '';
  protected $documentType = Document::class;
  protected $documentDataType = '';
  /** @param ClassificationModelOptions */
  public function setClassificationModelOptions(ClassificationModelOptions $classificationModelOptions)
  {
    $this->classificationModelOptions = $classificationModelOptions;
  }
  /** @return ClassificationModelOptions */
  public function getClassificationModelOptions()
  {
    return $this->classificationModelOptions;
  }
  /** @param Document */
  public function setDocument(Document $document)
  {
    $this->document = $document;
  }
  /** @return Document */
  public function getDocument()
  {
    return $this->document;
  }
}

class ClassifyTextResponse extends \Google\Collection
{
  /** @var ClassificationCategory[] */
  public $categories;
  protected $collection_key = 'categories';
  protected $categoriesType = ClassificationCategory::class;
  protected $categoriesDataType = 'array';
  /** @param ClassificationCategory[] */
  public function setCategories($categories)
  {
    $this->categories = $categories;
  }
  /** @return ClassificationCategory[] */
  public function getCategories()
  {
    return $this->categories;
  }
}

class DependencyEdge extends \Google\Model
{
  /** @var int */
  public $headTokenIndex;
  /** @var string */
  public $label;

  /** @param int */
  public function setHeadTokenIndex($headTokenIndex)
  {
    $this->headTokenIndex = $headTokenIndex;
  }
  /** @return int */
  public function getHeadTokenIndex()
  {
    return $this->headTokenIndex;
  }
  /** @param string */
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /** @return string */
  public function getLabel()
  {
    return $this->label;
  }
}

class Document extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var string */
  public $gcsContentUri;
  /** @var string */
  public $language;
  /** @var string */
  public $type;

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
  public function setGcsContentUri($gcsContentUri)
  {
    $this->gcsContentUri = $gcsContentUri;
  }
  /** @return string */
  public function getGcsContentUri()
  {
    return $this->gcsContentUri;
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

class Entity extends \Google\Collection
{
  /** @var EntityMention[] */
  public $mentions;
  /** @var string[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var float */
  public $salience;
  /** @var Sentiment */
  public $sentiment;
  /** @var string */
  public $type;
  protected $collection_key = 'mentions';
  protected $mentionsType = EntityMention::class;
  protected $mentionsDataType = 'array';
  protected $sentimentType = Sentiment::class;
  protected $sentimentDataType = '';
  /** @param EntityMention[] */
  public function setMentions($mentions)
  {
    $this->mentions = $mentions;
  }
  /** @return EntityMention[] */
  public function getMentions()
  {
    return $this->mentions;
  }
  /** @param string[] */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return string[] */
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
  /** @param float */
  public function setSalience($salience)
  {
    $this->salience = $salience;
  }
  /** @return float */
  public function getSalience()
  {
    return $this->salience;
  }
  /** @param Sentiment */
  public function setSentiment(Sentiment $sentiment)
  {
    $this->sentiment = $sentiment;
  }
  /** @return Sentiment */
  public function getSentiment()
  {
    return $this->sentiment;
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

class EntityMention extends \Google\Model
{
  /** @var Sentiment */
  public $sentiment;
  /** @var TextSpan */
  public $text;
  /** @var string */
  public $type;
  protected $sentimentType = Sentiment::class;
  protected $sentimentDataType = '';
  protected $textType = TextSpan::class;
  protected $textDataType = '';
  /** @param Sentiment */
  public function setSentiment(Sentiment $sentiment)
  {
    $this->sentiment = $sentiment;
  }
  /** @return Sentiment */
  public function getSentiment()
  {
    return $this->sentiment;
  }
  /** @param TextSpan */
  public function setText(TextSpan $text)
  {
    $this->text = $text;
  }
  /** @return TextSpan */
  public function getText()
  {
    return $this->text;
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

class Features extends \Google\Model
{
  /** @var ClassificationModelOptions */
  public $classificationModelOptions;
  /** @var bool */
  public $classifyText;
  /** @var bool */
  public $extractDocumentSentiment;
  /** @var bool */
  public $extractEntities;
  /** @var bool */
  public $extractEntitySentiment;
  /** @var bool */
  public $extractSyntax;
  protected $classificationModelOptionsType = ClassificationModelOptions::class;
  protected $classificationModelOptionsDataType = '';
  /** @param ClassificationModelOptions */
  public function setClassificationModelOptions(ClassificationModelOptions $classificationModelOptions)
  {
    $this->classificationModelOptions = $classificationModelOptions;
  }
  /** @return ClassificationModelOptions */
  public function getClassificationModelOptions()
  {
    return $this->classificationModelOptions;
  }
  /** @param bool */
  public function setClassifyText($classifyText)
  {
    $this->classifyText = $classifyText;
  }
  /** @return bool */
  public function getClassifyText()
  {
    return $this->classifyText;
  }
  /** @param bool */
  public function setExtractDocumentSentiment($extractDocumentSentiment)
  {
    $this->extractDocumentSentiment = $extractDocumentSentiment;
  }
  /** @return bool */
  public function getExtractDocumentSentiment()
  {
    return $this->extractDocumentSentiment;
  }
  /** @param bool */
  public function setExtractEntities($extractEntities)
  {
    $this->extractEntities = $extractEntities;
  }
  /** @return bool */
  public function getExtractEntities()
  {
    return $this->extractEntities;
  }
  /** @param bool */
  public function setExtractEntitySentiment($extractEntitySentiment)
  {
    $this->extractEntitySentiment = $extractEntitySentiment;
  }
  /** @return bool */
  public function getExtractEntitySentiment()
  {
    return $this->extractEntitySentiment;
  }
  /** @param bool */
  public function setExtractSyntax($extractSyntax)
  {
    $this->extractSyntax = $extractSyntax;
  }
  /** @return bool */
  public function getExtractSyntax()
  {
    return $this->extractSyntax;
  }
}

class PartOfSpeech extends \Google\Model
{
  /** @var string */
  public $aspect;
  /** @var string */
  public $case;
  /** @var string */
  public $form;
  /** @var string */
  public $gender;
  /** @var string */
  public $mood;
  /** @var string */
  public $number;
  /** @var string */
  public $person;
  /** @var string */
  public $proper;
  /** @var string */
  public $reciprocity;
  /** @var string */
  public $tag;
  /** @var string */
  public $tense;
  /** @var string */
  public $voice;

  /** @param string */
  public function setAspect($aspect)
  {
    $this->aspect = $aspect;
  }
  /** @return string */
  public function getAspect()
  {
    return $this->aspect;
  }
  /** @param string */
  public function setCase($case)
  {
    $this->case = $case;
  }
  /** @return string */
  public function getCase()
  {
    return $this->case;
  }
  /** @param string */
  public function setForm($form)
  {
    $this->form = $form;
  }
  /** @return string */
  public function getForm()
  {
    return $this->form;
  }
  /** @param string */
  public function setGender($gender)
  {
    $this->gender = $gender;
  }
  /** @return string */
  public function getGender()
  {
    return $this->gender;
  }
  /** @param string */
  public function setMood($mood)
  {
    $this->mood = $mood;
  }
  /** @return string */
  public function getMood()
  {
    return $this->mood;
  }
  /** @param string */
  public function setNumber($number)
  {
    $this->number = $number;
  }
  /** @return string */
  public function getNumber()
  {
    return $this->number;
  }
  /** @param string */
  public function setPerson($person)
  {
    $this->person = $person;
  }
  /** @return string */
  public function getPerson()
  {
    return $this->person;
  }
  /** @param string */
  public function setProper($proper)
  {
    $this->proper = $proper;
  }
  /** @return string */
  public function getProper()
  {
    return $this->proper;
  }
  /** @param string */
  public function setReciprocity($reciprocity)
  {
    $this->reciprocity = $reciprocity;
  }
  /** @return string */
  public function getReciprocity()
  {
    return $this->reciprocity;
  }
  /** @param string */
  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  /** @return string */
  public function getTag()
  {
    return $this->tag;
  }
  /** @param string */
  public function setTense($tense)
  {
    $this->tense = $tense;
  }
  /** @return string */
  public function getTense()
  {
    return $this->tense;
  }
  /** @param string */
  public function setVoice($voice)
  {
    $this->voice = $voice;
  }
  /** @return string */
  public function getVoice()
  {
    return $this->voice;
  }
}

class Sentence extends \Google\Model
{
  /** @var Sentiment */
  public $sentiment;
  /** @var TextSpan */
  public $text;
  protected $sentimentType = Sentiment::class;
  protected $sentimentDataType = '';
  protected $textType = TextSpan::class;
  protected $textDataType = '';
  /** @param Sentiment */
  public function setSentiment(Sentiment $sentiment)
  {
    $this->sentiment = $sentiment;
  }
  /** @return Sentiment */
  public function getSentiment()
  {
    return $this->sentiment;
  }
  /** @param TextSpan */
  public function setText(TextSpan $text)
  {
    $this->text = $text;
  }
  /** @return TextSpan */
  public function getText()
  {
    return $this->text;
  }
}

class Sentiment extends \Google\Model
{
  /** @var float */
  public $magnitude;
  /** @var float */
  public $score;

  /** @param float */
  public function setMagnitude($magnitude)
  {
    $this->magnitude = $magnitude;
  }
  /** @return float */
  public function getMagnitude()
  {
    return $this->magnitude;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
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

class TextSpan extends \Google\Model
{
  /** @var int */
  public $beginOffset;
  /** @var string */
  public $content;

  /** @param int */
  public function setBeginOffset($beginOffset)
  {
    $this->beginOffset = $beginOffset;
  }
  /** @return int */
  public function getBeginOffset()
  {
    return $this->beginOffset;
  }
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
}

class Token extends \Google\Model
{
  /** @var DependencyEdge */
  public $dependencyEdge;
  /** @var string */
  public $lemma;
  /** @var PartOfSpeech */
  public $partOfSpeech;
  /** @var TextSpan */
  public $text;
  protected $dependencyEdgeType = DependencyEdge::class;
  protected $dependencyEdgeDataType = '';
  protected $partOfSpeechType = PartOfSpeech::class;
  protected $partOfSpeechDataType = '';
  protected $textType = TextSpan::class;
  protected $textDataType = '';
  /** @param DependencyEdge */
  public function setDependencyEdge(DependencyEdge $dependencyEdge)
  {
    $this->dependencyEdge = $dependencyEdge;
  }
  /** @return DependencyEdge */
  public function getDependencyEdge()
  {
    return $this->dependencyEdge;
  }
  /** @param string */
  public function setLemma($lemma)
  {
    $this->lemma = $lemma;
  }
  /** @return string */
  public function getLemma()
  {
    return $this->lemma;
  }
  /** @param PartOfSpeech */
  public function setPartOfSpeech(PartOfSpeech $partOfSpeech)
  {
    $this->partOfSpeech = $partOfSpeech;
  }
  /** @return PartOfSpeech */
  public function getPartOfSpeech()
  {
    return $this->partOfSpeech;
  }
  /** @param TextSpan */
  public function setText(TextSpan $text)
  {
    $this->text = $text;
  }
  /** @return TextSpan */
  public function getText()
  {
    return $this->text;
  }
}

class V1Model extends \Google\Model
{
}

class V2Model extends \Google\Model
{
  /** @var string */
  public $contentCategoriesVersion;

  /** @param string */
  public function setContentCategoriesVersion($contentCategoriesVersion)
  {
    $this->contentCategoriesVersion = $contentCategoriesVersion;
  }
  /** @return string */
  public function getContentCategoriesVersion()
  {
    return $this->contentCategoriesVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AnalyzeEntitiesRequest::class, 'Google_Service_CloudNaturalLanguage_AnalyzeEntitiesRequest');
class_alias(AnalyzeEntitiesResponse::class, 'Google_Service_CloudNaturalLanguage_AnalyzeEntitiesResponse');
class_alias(AnalyzeEntitySentimentRequest::class, 'Google_Service_CloudNaturalLanguage_AnalyzeEntitySentimentRequest');
class_alias(AnalyzeEntitySentimentResponse::class, 'Google_Service_CloudNaturalLanguage_AnalyzeEntitySentimentResponse');
class_alias(AnalyzeSentimentRequest::class, 'Google_Service_CloudNaturalLanguage_AnalyzeSentimentRequest');
class_alias(AnalyzeSentimentResponse::class, 'Google_Service_CloudNaturalLanguage_AnalyzeSentimentResponse');
class_alias(AnalyzeSyntaxRequest::class, 'Google_Service_CloudNaturalLanguage_AnalyzeSyntaxRequest');
class_alias(AnalyzeSyntaxResponse::class, 'Google_Service_CloudNaturalLanguage_AnalyzeSyntaxResponse');
class_alias(AnnotateTextRequest::class, 'Google_Service_CloudNaturalLanguage_AnnotateTextRequest');
class_alias(AnnotateTextResponse::class, 'Google_Service_CloudNaturalLanguage_AnnotateTextResponse');
class_alias(ClassificationCategory::class, 'Google_Service_CloudNaturalLanguage_ClassificationCategory');
class_alias(ClassificationModelOptions::class, 'Google_Service_CloudNaturalLanguage_ClassificationModelOptions');
class_alias(ClassifyTextRequest::class, 'Google_Service_CloudNaturalLanguage_ClassifyTextRequest');
class_alias(ClassifyTextResponse::class, 'Google_Service_CloudNaturalLanguage_ClassifyTextResponse');
class_alias(DependencyEdge::class, 'Google_Service_CloudNaturalLanguage_DependencyEdge');
class_alias(Document::class, 'Google_Service_CloudNaturalLanguage_Document');
class_alias(Entity::class, 'Google_Service_CloudNaturalLanguage_Entity');
class_alias(EntityMention::class, 'Google_Service_CloudNaturalLanguage_EntityMention');
class_alias(Features::class, 'Google_Service_CloudNaturalLanguage_Features');
class_alias(PartOfSpeech::class, 'Google_Service_CloudNaturalLanguage_PartOfSpeech');
class_alias(Sentence::class, 'Google_Service_CloudNaturalLanguage_Sentence');
class_alias(Sentiment::class, 'Google_Service_CloudNaturalLanguage_Sentiment');
class_alias(Status::class, 'Google_Service_CloudNaturalLanguage_Status');
class_alias(TextSpan::class, 'Google_Service_CloudNaturalLanguage_TextSpan');
class_alias(Token::class, 'Google_Service_CloudNaturalLanguage_Token');
class_alias(V1Model::class, 'Google_Service_CloudNaturalLanguage_V1Model');
class_alias(V2Model::class, 'Google_Service_CloudNaturalLanguage_V2Model');
