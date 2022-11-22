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

namespace Google\Service\CloudKMS;

class AsymmetricDecryptRequest extends \Google\Model
{
  /** @var string */
  public $ciphertext;
  /** @var string */
  public $ciphertextCrc32c;

  /** @param string */
  public function setCiphertext($ciphertext)
  {
    $this->ciphertext = $ciphertext;
  }
  /** @return string */
  public function getCiphertext()
  {
    return $this->ciphertext;
  }
  /** @param string */
  public function setCiphertextCrc32c($ciphertextCrc32c)
  {
    $this->ciphertextCrc32c = $ciphertextCrc32c;
  }
  /** @return string */
  public function getCiphertextCrc32c()
  {
    return $this->ciphertextCrc32c;
  }
}

class AsymmetricDecryptResponse extends \Google\Model
{
  /** @var string */
  public $plaintext;
  /** @var string */
  public $plaintextCrc32c;
  /** @var string */
  public $protectionLevel;
  /** @var bool */
  public $verifiedCiphertextCrc32c;

  /** @param string */
  public function setPlaintext($plaintext)
  {
    $this->plaintext = $plaintext;
  }
  /** @return string */
  public function getPlaintext()
  {
    return $this->plaintext;
  }
  /** @param string */
  public function setPlaintextCrc32c($plaintextCrc32c)
  {
    $this->plaintextCrc32c = $plaintextCrc32c;
  }
  /** @return string */
  public function getPlaintextCrc32c()
  {
    return $this->plaintextCrc32c;
  }
  /** @param string */
  public function setProtectionLevel($protectionLevel)
  {
    $this->protectionLevel = $protectionLevel;
  }
  /** @return string */
  public function getProtectionLevel()
  {
    return $this->protectionLevel;
  }
  /** @param bool */
  public function setVerifiedCiphertextCrc32c($verifiedCiphertextCrc32c)
  {
    $this->verifiedCiphertextCrc32c = $verifiedCiphertextCrc32c;
  }
  /** @return bool */
  public function getVerifiedCiphertextCrc32c()
  {
    return $this->verifiedCiphertextCrc32c;
  }
}

class AsymmetricSignRequest extends \Google\Model
{
  /** @var string */
  public $data;
  /** @var string */
  public $dataCrc32c;
  /** @var Digest */
  public $digest;
  /** @var string */
  public $digestCrc32c;
  protected $digestType = Digest::class;
  protected $digestDataType = '';
  /** @param string */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string */
  public function getData()
  {
    return $this->data;
  }
  /** @param string */
  public function setDataCrc32c($dataCrc32c)
  {
    $this->dataCrc32c = $dataCrc32c;
  }
  /** @return string */
  public function getDataCrc32c()
  {
    return $this->dataCrc32c;
  }
  /** @param Digest */
  public function setDigest(Digest $digest)
  {
    $this->digest = $digest;
  }
  /** @return Digest */
  public function getDigest()
  {
    return $this->digest;
  }
  /** @param string */
  public function setDigestCrc32c($digestCrc32c)
  {
    $this->digestCrc32c = $digestCrc32c;
  }
  /** @return string */
  public function getDigestCrc32c()
  {
    return $this->digestCrc32c;
  }
}

class AsymmetricSignResponse extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $protectionLevel;
  /** @var string */
  public $signature;
  /** @var string */
  public $signatureCrc32c;
  /** @var bool */
  public $verifiedDataCrc32c;
  /** @var bool */
  public $verifiedDigestCrc32c;

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
  public function setProtectionLevel($protectionLevel)
  {
    $this->protectionLevel = $protectionLevel;
  }
  /** @return string */
  public function getProtectionLevel()
  {
    return $this->protectionLevel;
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
  /** @param string */
  public function setSignatureCrc32c($signatureCrc32c)
  {
    $this->signatureCrc32c = $signatureCrc32c;
  }
  /** @return string */
  public function getSignatureCrc32c()
  {
    return $this->signatureCrc32c;
  }
  /** @param bool */
  public function setVerifiedDataCrc32c($verifiedDataCrc32c)
  {
    $this->verifiedDataCrc32c = $verifiedDataCrc32c;
  }
  /** @return bool */
  public function getVerifiedDataCrc32c()
  {
    return $this->verifiedDataCrc32c;
  }
  /** @param bool */
  public function setVerifiedDigestCrc32c($verifiedDigestCrc32c)
  {
    $this->verifiedDigestCrc32c = $verifiedDigestCrc32c;
  }
  /** @return bool */
  public function getVerifiedDigestCrc32c()
  {
    return $this->verifiedDigestCrc32c;
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

class Certificate extends \Google\Collection
{
  /** @var string */
  public $issuer;
  /** @var string */
  public $notAfterTime;
  /** @var string */
  public $notBeforeTime;
  /** @var bool */
  public $parsed;
  /** @var string */
  public $rawDer;
  /** @var string */
  public $serialNumber;
  /** @var string */
  public $sha256Fingerprint;
  /** @var string */
  public $subject;
  /** @var string[] */
  public $subjectAlternativeDnsNames;
  protected $collection_key = 'subjectAlternativeDnsNames';
  /** @param string */
  public function setIssuer($issuer)
  {
    $this->issuer = $issuer;
  }
  /** @return string */
  public function getIssuer()
  {
    return $this->issuer;
  }
  /** @param string */
  public function setNotAfterTime($notAfterTime)
  {
    $this->notAfterTime = $notAfterTime;
  }
  /** @return string */
  public function getNotAfterTime()
  {
    return $this->notAfterTime;
  }
  /** @param string */
  public function setNotBeforeTime($notBeforeTime)
  {
    $this->notBeforeTime = $notBeforeTime;
  }
  /** @return string */
  public function getNotBeforeTime()
  {
    return $this->notBeforeTime;
  }
  /** @param bool */
  public function setParsed($parsed)
  {
    $this->parsed = $parsed;
  }
  /** @return bool */
  public function getParsed()
  {
    return $this->parsed;
  }
  /** @param string */
  public function setRawDer($rawDer)
  {
    $this->rawDer = $rawDer;
  }
  /** @return string */
  public function getRawDer()
  {
    return $this->rawDer;
  }
  /** @param string */
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  /** @return string */
  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
  /** @param string */
  public function setSha256Fingerprint($sha256Fingerprint)
  {
    $this->sha256Fingerprint = $sha256Fingerprint;
  }
  /** @return string */
  public function getSha256Fingerprint()
  {
    return $this->sha256Fingerprint;
  }
  /** @param string */
  public function setSubject($subject)
  {
    $this->subject = $subject;
  }
  /** @return string */
  public function getSubject()
  {
    return $this->subject;
  }
  /** @param string[] */
  public function setSubjectAlternativeDnsNames($subjectAlternativeDnsNames)
  {
    $this->subjectAlternativeDnsNames = $subjectAlternativeDnsNames;
  }
  /** @return string[] */
  public function getSubjectAlternativeDnsNames()
  {
    return $this->subjectAlternativeDnsNames;
  }
}

class CertificateChains extends \Google\Collection
{
  /** @var string[] */
  public $caviumCerts;
  /** @var string[] */
  public $googleCardCerts;
  /** @var string[] */
  public $googlePartitionCerts;
  protected $collection_key = 'googlePartitionCerts';
  /** @param string[] */
  public function setCaviumCerts($caviumCerts)
  {
    $this->caviumCerts = $caviumCerts;
  }
  /** @return string[] */
  public function getCaviumCerts()
  {
    return $this->caviumCerts;
  }
  /** @param string[] */
  public function setGoogleCardCerts($googleCardCerts)
  {
    $this->googleCardCerts = $googleCardCerts;
  }
  /** @return string[] */
  public function getGoogleCardCerts()
  {
    return $this->googleCardCerts;
  }
  /** @param string[] */
  public function setGooglePartitionCerts($googlePartitionCerts)
  {
    $this->googlePartitionCerts = $googlePartitionCerts;
  }
  /** @return string[] */
  public function getGooglePartitionCerts()
  {
    return $this->googlePartitionCerts;
  }
}

class CryptoKey extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $cryptoKeyBackend;
  /** @var string */
  public $destroyScheduledDuration;
  /** @var bool */
  public $importOnly;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $nextRotationTime;
  /** @var CryptoKeyVersion */
  public $primary;
  /** @var string */
  public $purpose;
  /** @var string */
  public $rotationPeriod;
  /** @var CryptoKeyVersionTemplate */
  public $versionTemplate;
  protected $primaryType = CryptoKeyVersion::class;
  protected $primaryDataType = '';
  protected $versionTemplateType = CryptoKeyVersionTemplate::class;
  protected $versionTemplateDataType = '';
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
  public function setCryptoKeyBackend($cryptoKeyBackend)
  {
    $this->cryptoKeyBackend = $cryptoKeyBackend;
  }
  /** @return string */
  public function getCryptoKeyBackend()
  {
    return $this->cryptoKeyBackend;
  }
  /** @param string */
  public function setDestroyScheduledDuration($destroyScheduledDuration)
  {
    $this->destroyScheduledDuration = $destroyScheduledDuration;
  }
  /** @return string */
  public function getDestroyScheduledDuration()
  {
    return $this->destroyScheduledDuration;
  }
  /** @param bool */
  public function setImportOnly($importOnly)
  {
    $this->importOnly = $importOnly;
  }
  /** @return bool */
  public function getImportOnly()
  {
    return $this->importOnly;
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
  public function setNextRotationTime($nextRotationTime)
  {
    $this->nextRotationTime = $nextRotationTime;
  }
  /** @return string */
  public function getNextRotationTime()
  {
    return $this->nextRotationTime;
  }
  /** @param CryptoKeyVersion */
  public function setPrimary(CryptoKeyVersion $primary)
  {
    $this->primary = $primary;
  }
  /** @return CryptoKeyVersion */
  public function getPrimary()
  {
    return $this->primary;
  }
  /** @param string */
  public function setPurpose($purpose)
  {
    $this->purpose = $purpose;
  }
  /** @return string */
  public function getPurpose()
  {
    return $this->purpose;
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
  /** @param CryptoKeyVersionTemplate */
  public function setVersionTemplate(CryptoKeyVersionTemplate $versionTemplate)
  {
    $this->versionTemplate = $versionTemplate;
  }
  /** @return CryptoKeyVersionTemplate */
  public function getVersionTemplate()
  {
    return $this->versionTemplate;
  }
}

class CryptoKeyVersion extends \Google\Model
{
  /** @var string */
  public $algorithm;
  /** @var KeyOperationAttestation */
  public $attestation;
  /** @var string */
  public $createTime;
  /** @var string */
  public $destroyEventTime;
  /** @var string */
  public $destroyTime;
  /** @var ExternalProtectionLevelOptions */
  public $externalProtectionLevelOptions;
  /** @var string */
  public $generateTime;
  /** @var string */
  public $importFailureReason;
  /** @var string */
  public $importJob;
  /** @var string */
  public $importTime;
  /** @var string */
  public $name;
  /** @var string */
  public $protectionLevel;
  /** @var bool */
  public $reimportEligible;
  /** @var string */
  public $state;
  protected $attestationType = KeyOperationAttestation::class;
  protected $attestationDataType = '';
  protected $externalProtectionLevelOptionsType = ExternalProtectionLevelOptions::class;
  protected $externalProtectionLevelOptionsDataType = '';
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
  /** @param KeyOperationAttestation */
  public function setAttestation(KeyOperationAttestation $attestation)
  {
    $this->attestation = $attestation;
  }
  /** @return KeyOperationAttestation */
  public function getAttestation()
  {
    return $this->attestation;
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
  public function setDestroyEventTime($destroyEventTime)
  {
    $this->destroyEventTime = $destroyEventTime;
  }
  /** @return string */
  public function getDestroyEventTime()
  {
    return $this->destroyEventTime;
  }
  /** @param string */
  public function setDestroyTime($destroyTime)
  {
    $this->destroyTime = $destroyTime;
  }
  /** @return string */
  public function getDestroyTime()
  {
    return $this->destroyTime;
  }
  /** @param ExternalProtectionLevelOptions */
  public function setExternalProtectionLevelOptions(ExternalProtectionLevelOptions $externalProtectionLevelOptions)
  {
    $this->externalProtectionLevelOptions = $externalProtectionLevelOptions;
  }
  /** @return ExternalProtectionLevelOptions */
  public function getExternalProtectionLevelOptions()
  {
    return $this->externalProtectionLevelOptions;
  }
  /** @param string */
  public function setGenerateTime($generateTime)
  {
    $this->generateTime = $generateTime;
  }
  /** @return string */
  public function getGenerateTime()
  {
    return $this->generateTime;
  }
  /** @param string */
  public function setImportFailureReason($importFailureReason)
  {
    $this->importFailureReason = $importFailureReason;
  }
  /** @return string */
  public function getImportFailureReason()
  {
    return $this->importFailureReason;
  }
  /** @param string */
  public function setImportJob($importJob)
  {
    $this->importJob = $importJob;
  }
  /** @return string */
  public function getImportJob()
  {
    return $this->importJob;
  }
  /** @param string */
  public function setImportTime($importTime)
  {
    $this->importTime = $importTime;
  }
  /** @return string */
  public function getImportTime()
  {
    return $this->importTime;
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
  public function setProtectionLevel($protectionLevel)
  {
    $this->protectionLevel = $protectionLevel;
  }
  /** @return string */
  public function getProtectionLevel()
  {
    return $this->protectionLevel;
  }
  /** @param bool */
  public function setReimportEligible($reimportEligible)
  {
    $this->reimportEligible = $reimportEligible;
  }
  /** @return bool */
  public function getReimportEligible()
  {
    return $this->reimportEligible;
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

class CryptoKeyVersionTemplate extends \Google\Model
{
  /** @var string */
  public $algorithm;
  /** @var string */
  public $protectionLevel;

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
  public function setProtectionLevel($protectionLevel)
  {
    $this->protectionLevel = $protectionLevel;
  }
  /** @return string */
  public function getProtectionLevel()
  {
    return $this->protectionLevel;
  }
}

class DecryptRequest extends \Google\Model
{
  /** @var string */
  public $additionalAuthenticatedData;
  /** @var string */
  public $additionalAuthenticatedDataCrc32c;
  /** @var string */
  public $ciphertext;
  /** @var string */
  public $ciphertextCrc32c;

  /** @param string */
  public function setAdditionalAuthenticatedData($additionalAuthenticatedData)
  {
    $this->additionalAuthenticatedData = $additionalAuthenticatedData;
  }
  /** @return string */
  public function getAdditionalAuthenticatedData()
  {
    return $this->additionalAuthenticatedData;
  }
  /** @param string */
  public function setAdditionalAuthenticatedDataCrc32c($additionalAuthenticatedDataCrc32c)
  {
    $this->additionalAuthenticatedDataCrc32c = $additionalAuthenticatedDataCrc32c;
  }
  /** @return string */
  public function getAdditionalAuthenticatedDataCrc32c()
  {
    return $this->additionalAuthenticatedDataCrc32c;
  }
  /** @param string */
  public function setCiphertext($ciphertext)
  {
    $this->ciphertext = $ciphertext;
  }
  /** @return string */
  public function getCiphertext()
  {
    return $this->ciphertext;
  }
  /** @param string */
  public function setCiphertextCrc32c($ciphertextCrc32c)
  {
    $this->ciphertextCrc32c = $ciphertextCrc32c;
  }
  /** @return string */
  public function getCiphertextCrc32c()
  {
    return $this->ciphertextCrc32c;
  }
}

class DecryptResponse extends \Google\Model
{
  /** @var string */
  public $plaintext;
  /** @var string */
  public $plaintextCrc32c;
  /** @var string */
  public $protectionLevel;
  /** @var bool */
  public $usedPrimary;

  /** @param string */
  public function setPlaintext($plaintext)
  {
    $this->plaintext = $plaintext;
  }
  /** @return string */
  public function getPlaintext()
  {
    return $this->plaintext;
  }
  /** @param string */
  public function setPlaintextCrc32c($plaintextCrc32c)
  {
    $this->plaintextCrc32c = $plaintextCrc32c;
  }
  /** @return string */
  public function getPlaintextCrc32c()
  {
    return $this->plaintextCrc32c;
  }
  /** @param string */
  public function setProtectionLevel($protectionLevel)
  {
    $this->protectionLevel = $protectionLevel;
  }
  /** @return string */
  public function getProtectionLevel()
  {
    return $this->protectionLevel;
  }
  /** @param bool */
  public function setUsedPrimary($usedPrimary)
  {
    $this->usedPrimary = $usedPrimary;
  }
  /** @return bool */
  public function getUsedPrimary()
  {
    return $this->usedPrimary;
  }
}

class DestroyCryptoKeyVersionRequest extends \Google\Model
{
}

class Digest extends \Google\Model
{
  /** @var string */
  public $sha256;
  /** @var string */
  public $sha384;
  /** @var string */
  public $sha512;

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
  public function setSha384($sha384)
  {
    $this->sha384 = $sha384;
  }
  /** @return string */
  public function getSha384()
  {
    return $this->sha384;
  }
  /** @param string */
  public function setSha512($sha512)
  {
    $this->sha512 = $sha512;
  }
  /** @return string */
  public function getSha512()
  {
    return $this->sha512;
  }
}

class EkmConnection extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $etag;
  /** @var string */
  public $name;
  /** @var ServiceResolver[] */
  public $serviceResolvers;
  protected $collection_key = 'serviceResolvers';
  protected $serviceResolversType = ServiceResolver::class;
  protected $serviceResolversDataType = 'array';
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
  /** @param ServiceResolver[] */
  public function setServiceResolvers($serviceResolvers)
  {
    $this->serviceResolvers = $serviceResolvers;
  }
  /** @return ServiceResolver[] */
  public function getServiceResolvers()
  {
    return $this->serviceResolvers;
  }
}

class EncryptRequest extends \Google\Model
{
  /** @var string */
  public $additionalAuthenticatedData;
  /** @var string */
  public $additionalAuthenticatedDataCrc32c;
  /** @var string */
  public $plaintext;
  /** @var string */
  public $plaintextCrc32c;

  /** @param string */
  public function setAdditionalAuthenticatedData($additionalAuthenticatedData)
  {
    $this->additionalAuthenticatedData = $additionalAuthenticatedData;
  }
  /** @return string */
  public function getAdditionalAuthenticatedData()
  {
    return $this->additionalAuthenticatedData;
  }
  /** @param string */
  public function setAdditionalAuthenticatedDataCrc32c($additionalAuthenticatedDataCrc32c)
  {
    $this->additionalAuthenticatedDataCrc32c = $additionalAuthenticatedDataCrc32c;
  }
  /** @return string */
  public function getAdditionalAuthenticatedDataCrc32c()
  {
    return $this->additionalAuthenticatedDataCrc32c;
  }
  /** @param string */
  public function setPlaintext($plaintext)
  {
    $this->plaintext = $plaintext;
  }
  /** @return string */
  public function getPlaintext()
  {
    return $this->plaintext;
  }
  /** @param string */
  public function setPlaintextCrc32c($plaintextCrc32c)
  {
    $this->plaintextCrc32c = $plaintextCrc32c;
  }
  /** @return string */
  public function getPlaintextCrc32c()
  {
    return $this->plaintextCrc32c;
  }
}

class EncryptResponse extends \Google\Model
{
  /** @var string */
  public $ciphertext;
  /** @var string */
  public $ciphertextCrc32c;
  /** @var string */
  public $name;
  /** @var string */
  public $protectionLevel;
  /** @var bool */
  public $verifiedAdditionalAuthenticatedDataCrc32c;
  /** @var bool */
  public $verifiedPlaintextCrc32c;

  /** @param string */
  public function setCiphertext($ciphertext)
  {
    $this->ciphertext = $ciphertext;
  }
  /** @return string */
  public function getCiphertext()
  {
    return $this->ciphertext;
  }
  /** @param string */
  public function setCiphertextCrc32c($ciphertextCrc32c)
  {
    $this->ciphertextCrc32c = $ciphertextCrc32c;
  }
  /** @return string */
  public function getCiphertextCrc32c()
  {
    return $this->ciphertextCrc32c;
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
  public function setProtectionLevel($protectionLevel)
  {
    $this->protectionLevel = $protectionLevel;
  }
  /** @return string */
  public function getProtectionLevel()
  {
    return $this->protectionLevel;
  }
  /** @param bool */
  public function setVerifiedAdditionalAuthenticatedDataCrc32c($verifiedAdditionalAuthenticatedDataCrc32c)
  {
    $this->verifiedAdditionalAuthenticatedDataCrc32c = $verifiedAdditionalAuthenticatedDataCrc32c;
  }
  /** @return bool */
  public function getVerifiedAdditionalAuthenticatedDataCrc32c()
  {
    return $this->verifiedAdditionalAuthenticatedDataCrc32c;
  }
  /** @param bool */
  public function setVerifiedPlaintextCrc32c($verifiedPlaintextCrc32c)
  {
    $this->verifiedPlaintextCrc32c = $verifiedPlaintextCrc32c;
  }
  /** @return bool */
  public function getVerifiedPlaintextCrc32c()
  {
    return $this->verifiedPlaintextCrc32c;
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

class ExternalProtectionLevelOptions extends \Google\Model
{
  /** @var string */
  public $ekmConnectionKeyPath;
  /** @var string */
  public $externalKeyUri;

  /** @param string */
  public function setEkmConnectionKeyPath($ekmConnectionKeyPath)
  {
    $this->ekmConnectionKeyPath = $ekmConnectionKeyPath;
  }
  /** @return string */
  public function getEkmConnectionKeyPath()
  {
    return $this->ekmConnectionKeyPath;
  }
  /** @param string */
  public function setExternalKeyUri($externalKeyUri)
  {
    $this->externalKeyUri = $externalKeyUri;
  }
  /** @return string */
  public function getExternalKeyUri()
  {
    return $this->externalKeyUri;
  }
}

class GenerateRandomBytesRequest extends \Google\Model
{
  /** @var int */
  public $lengthBytes;
  /** @var string */
  public $protectionLevel;

  /** @param int */
  public function setLengthBytes($lengthBytes)
  {
    $this->lengthBytes = $lengthBytes;
  }
  /** @return int */
  public function getLengthBytes()
  {
    return $this->lengthBytes;
  }
  /** @param string */
  public function setProtectionLevel($protectionLevel)
  {
    $this->protectionLevel = $protectionLevel;
  }
  /** @return string */
  public function getProtectionLevel()
  {
    return $this->protectionLevel;
  }
}

class GenerateRandomBytesResponse extends \Google\Model
{
  /** @var string */
  public $data;
  /** @var string */
  public $dataCrc32c;

  /** @param string */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string */
  public function getData()
  {
    return $this->data;
  }
  /** @param string */
  public function setDataCrc32c($dataCrc32c)
  {
    $this->dataCrc32c = $dataCrc32c;
  }
  /** @return string */
  public function getDataCrc32c()
  {
    return $this->dataCrc32c;
  }
}

class ImportCryptoKeyVersionRequest extends \Google\Model
{
  /** @var string */
  public $algorithm;
  /** @var string */
  public $cryptoKeyVersion;
  /** @var string */
  public $importJob;
  /** @var string */
  public $rsaAesWrappedKey;
  /** @var string */
  public $wrappedKey;

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
  public function setCryptoKeyVersion($cryptoKeyVersion)
  {
    $this->cryptoKeyVersion = $cryptoKeyVersion;
  }
  /** @return string */
  public function getCryptoKeyVersion()
  {
    return $this->cryptoKeyVersion;
  }
  /** @param string */
  public function setImportJob($importJob)
  {
    $this->importJob = $importJob;
  }
  /** @return string */
  public function getImportJob()
  {
    return $this->importJob;
  }
  /** @param string */
  public function setRsaAesWrappedKey($rsaAesWrappedKey)
  {
    $this->rsaAesWrappedKey = $rsaAesWrappedKey;
  }
  /** @return string */
  public function getRsaAesWrappedKey()
  {
    return $this->rsaAesWrappedKey;
  }
  /** @param string */
  public function setWrappedKey($wrappedKey)
  {
    $this->wrappedKey = $wrappedKey;
  }
  /** @return string */
  public function getWrappedKey()
  {
    return $this->wrappedKey;
  }
}

class ImportJob extends \Google\Model
{
  /** @var KeyOperationAttestation */
  public $attestation;
  /** @var string */
  public $createTime;
  /** @var string */
  public $expireEventTime;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $generateTime;
  /** @var string */
  public $importMethod;
  /** @var string */
  public $name;
  /** @var string */
  public $protectionLevel;
  /** @var WrappingPublicKey */
  public $publicKey;
  /** @var string */
  public $state;
  protected $attestationType = KeyOperationAttestation::class;
  protected $attestationDataType = '';
  protected $publicKeyType = WrappingPublicKey::class;
  protected $publicKeyDataType = '';
  /** @param KeyOperationAttestation */
  public function setAttestation(KeyOperationAttestation $attestation)
  {
    $this->attestation = $attestation;
  }
  /** @return KeyOperationAttestation */
  public function getAttestation()
  {
    return $this->attestation;
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
  public function setExpireEventTime($expireEventTime)
  {
    $this->expireEventTime = $expireEventTime;
  }
  /** @return string */
  public function getExpireEventTime()
  {
    return $this->expireEventTime;
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
  /** @param string */
  public function setGenerateTime($generateTime)
  {
    $this->generateTime = $generateTime;
  }
  /** @return string */
  public function getGenerateTime()
  {
    return $this->generateTime;
  }
  /** @param string */
  public function setImportMethod($importMethod)
  {
    $this->importMethod = $importMethod;
  }
  /** @return string */
  public function getImportMethod()
  {
    return $this->importMethod;
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
  public function setProtectionLevel($protectionLevel)
  {
    $this->protectionLevel = $protectionLevel;
  }
  /** @return string */
  public function getProtectionLevel()
  {
    return $this->protectionLevel;
  }
  /** @param WrappingPublicKey */
  public function setPublicKey(WrappingPublicKey $publicKey)
  {
    $this->publicKey = $publicKey;
  }
  /** @return WrappingPublicKey */
  public function getPublicKey()
  {
    return $this->publicKey;
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

class KeyOperationAttestation extends \Google\Model
{
  /** @var CertificateChains */
  public $certChains;
  /** @var string */
  public $content;
  /** @var string */
  public $format;
  protected $certChainsType = CertificateChains::class;
  protected $certChainsDataType = '';
  /** @param CertificateChains */
  public function setCertChains(CertificateChains $certChains)
  {
    $this->certChains = $certChains;
  }
  /** @return CertificateChains */
  public function getCertChains()
  {
    return $this->certChains;
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
  /** @param string */
  public function setFormat($format)
  {
    $this->format = $format;
  }
  /** @return string */
  public function getFormat()
  {
    return $this->format;
  }
}

class KeyRing extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $name;

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
}

class ListCryptoKeyVersionsResponse extends \Google\Collection
{
  /** @var CryptoKeyVersion[] */
  public $cryptoKeyVersions;
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'cryptoKeyVersions';
  protected $cryptoKeyVersionsType = CryptoKeyVersion::class;
  protected $cryptoKeyVersionsDataType = 'array';
  /** @param CryptoKeyVersion[] */
  public function setCryptoKeyVersions($cryptoKeyVersions)
  {
    $this->cryptoKeyVersions = $cryptoKeyVersions;
  }
  /** @return CryptoKeyVersion[] */
  public function getCryptoKeyVersions()
  {
    return $this->cryptoKeyVersions;
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

class ListCryptoKeysResponse extends \Google\Collection
{
  /** @var CryptoKey[] */
  public $cryptoKeys;
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'cryptoKeys';
  protected $cryptoKeysType = CryptoKey::class;
  protected $cryptoKeysDataType = 'array';
  /** @param CryptoKey[] */
  public function setCryptoKeys($cryptoKeys)
  {
    $this->cryptoKeys = $cryptoKeys;
  }
  /** @return CryptoKey[] */
  public function getCryptoKeys()
  {
    return $this->cryptoKeys;
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

class ListEkmConnectionsResponse extends \Google\Collection
{
  /** @var EkmConnection[] */
  public $ekmConnections;
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'ekmConnections';
  protected $ekmConnectionsType = EkmConnection::class;
  protected $ekmConnectionsDataType = 'array';
  /** @param EkmConnection[] */
  public function setEkmConnections($ekmConnections)
  {
    $this->ekmConnections = $ekmConnections;
  }
  /** @return EkmConnection[] */
  public function getEkmConnections()
  {
    return $this->ekmConnections;
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

class ListImportJobsResponse extends \Google\Collection
{
  /** @var ImportJob[] */
  public $importJobs;
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'importJobs';
  protected $importJobsType = ImportJob::class;
  protected $importJobsDataType = 'array';
  /** @param ImportJob[] */
  public function setImportJobs($importJobs)
  {
    $this->importJobs = $importJobs;
  }
  /** @return ImportJob[] */
  public function getImportJobs()
  {
    return $this->importJobs;
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

class ListKeyRingsResponse extends \Google\Collection
{
  /** @var KeyRing[] */
  public $keyRings;
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'keyRings';
  protected $keyRingsType = KeyRing::class;
  protected $keyRingsDataType = 'array';
  /** @param KeyRing[] */
  public function setKeyRings($keyRings)
  {
    $this->keyRings = $keyRings;
  }
  /** @return KeyRing[] */
  public function getKeyRings()
  {
    return $this->keyRings;
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

class LocationMetadata extends \Google\Model
{
  /** @var bool */
  public $ekmAvailable;
  /** @var bool */
  public $hsmAvailable;

  /** @param bool */
  public function setEkmAvailable($ekmAvailable)
  {
    $this->ekmAvailable = $ekmAvailable;
  }
  /** @return bool */
  public function getEkmAvailable()
  {
    return $this->ekmAvailable;
  }
  /** @param bool */
  public function setHsmAvailable($hsmAvailable)
  {
    $this->hsmAvailable = $hsmAvailable;
  }
  /** @return bool */
  public function getHsmAvailable()
  {
    return $this->hsmAvailable;
  }
}

class MacSignRequest extends \Google\Model
{
  /** @var string */
  public $data;
  /** @var string */
  public $dataCrc32c;

  /** @param string */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string */
  public function getData()
  {
    return $this->data;
  }
  /** @param string */
  public function setDataCrc32c($dataCrc32c)
  {
    $this->dataCrc32c = $dataCrc32c;
  }
  /** @return string */
  public function getDataCrc32c()
  {
    return $this->dataCrc32c;
  }
}

class MacSignResponse extends \Google\Model
{
  /** @var string */
  public $mac;
  /** @var string */
  public $macCrc32c;
  /** @var string */
  public $name;
  /** @var string */
  public $protectionLevel;
  /** @var bool */
  public $verifiedDataCrc32c;

  /** @param string */
  public function setMac($mac)
  {
    $this->mac = $mac;
  }
  /** @return string */
  public function getMac()
  {
    return $this->mac;
  }
  /** @param string */
  public function setMacCrc32c($macCrc32c)
  {
    $this->macCrc32c = $macCrc32c;
  }
  /** @return string */
  public function getMacCrc32c()
  {
    return $this->macCrc32c;
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
  public function setProtectionLevel($protectionLevel)
  {
    $this->protectionLevel = $protectionLevel;
  }
  /** @return string */
  public function getProtectionLevel()
  {
    return $this->protectionLevel;
  }
  /** @param bool */
  public function setVerifiedDataCrc32c($verifiedDataCrc32c)
  {
    $this->verifiedDataCrc32c = $verifiedDataCrc32c;
  }
  /** @return bool */
  public function getVerifiedDataCrc32c()
  {
    return $this->verifiedDataCrc32c;
  }
}

class MacVerifyRequest extends \Google\Model
{
  /** @var string */
  public $data;
  /** @var string */
  public $dataCrc32c;
  /** @var string */
  public $mac;
  /** @var string */
  public $macCrc32c;

  /** @param string */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string */
  public function getData()
  {
    return $this->data;
  }
  /** @param string */
  public function setDataCrc32c($dataCrc32c)
  {
    $this->dataCrc32c = $dataCrc32c;
  }
  /** @return string */
  public function getDataCrc32c()
  {
    return $this->dataCrc32c;
  }
  /** @param string */
  public function setMac($mac)
  {
    $this->mac = $mac;
  }
  /** @return string */
  public function getMac()
  {
    return $this->mac;
  }
  /** @param string */
  public function setMacCrc32c($macCrc32c)
  {
    $this->macCrc32c = $macCrc32c;
  }
  /** @return string */
  public function getMacCrc32c()
  {
    return $this->macCrc32c;
  }
}

class MacVerifyResponse extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $protectionLevel;
  /** @var bool */
  public $success;
  /** @var bool */
  public $verifiedDataCrc32c;
  /** @var bool */
  public $verifiedMacCrc32c;
  /** @var bool */
  public $verifiedSuccessIntegrity;

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
  public function setProtectionLevel($protectionLevel)
  {
    $this->protectionLevel = $protectionLevel;
  }
  /** @return string */
  public function getProtectionLevel()
  {
    return $this->protectionLevel;
  }
  /** @param bool */
  public function setSuccess($success)
  {
    $this->success = $success;
  }
  /** @return bool */
  public function getSuccess()
  {
    return $this->success;
  }
  /** @param bool */
  public function setVerifiedDataCrc32c($verifiedDataCrc32c)
  {
    $this->verifiedDataCrc32c = $verifiedDataCrc32c;
  }
  /** @return bool */
  public function getVerifiedDataCrc32c()
  {
    return $this->verifiedDataCrc32c;
  }
  /** @param bool */
  public function setVerifiedMacCrc32c($verifiedMacCrc32c)
  {
    $this->verifiedMacCrc32c = $verifiedMacCrc32c;
  }
  /** @return bool */
  public function getVerifiedMacCrc32c()
  {
    return $this->verifiedMacCrc32c;
  }
  /** @param bool */
  public function setVerifiedSuccessIntegrity($verifiedSuccessIntegrity)
  {
    $this->verifiedSuccessIntegrity = $verifiedSuccessIntegrity;
  }
  /** @return bool */
  public function getVerifiedSuccessIntegrity()
  {
    return $this->verifiedSuccessIntegrity;
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

class PublicKey extends \Google\Model
{
  /** @var string */
  public $algorithm;
  /** @var string */
  public $name;
  /** @var string */
  public $pem;
  /** @var string */
  public $pemCrc32c;
  /** @var string */
  public $protectionLevel;

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
  public function setPem($pem)
  {
    $this->pem = $pem;
  }
  /** @return string */
  public function getPem()
  {
    return $this->pem;
  }
  /** @param string */
  public function setPemCrc32c($pemCrc32c)
  {
    $this->pemCrc32c = $pemCrc32c;
  }
  /** @return string */
  public function getPemCrc32c()
  {
    return $this->pemCrc32c;
  }
  /** @param string */
  public function setProtectionLevel($protectionLevel)
  {
    $this->protectionLevel = $protectionLevel;
  }
  /** @return string */
  public function getProtectionLevel()
  {
    return $this->protectionLevel;
  }
}

class RestoreCryptoKeyVersionRequest extends \Google\Model
{
}

class ServiceResolver extends \Google\Collection
{
  /** @var string */
  public $endpointFilter;
  /** @var string */
  public $hostname;
  /** @var Certificate[] */
  public $serverCertificates;
  /** @var string */
  public $serviceDirectoryService;
  protected $collection_key = 'serverCertificates';
  protected $serverCertificatesType = Certificate::class;
  protected $serverCertificatesDataType = 'array';
  /** @param string */
  public function setEndpointFilter($endpointFilter)
  {
    $this->endpointFilter = $endpointFilter;
  }
  /** @return string */
  public function getEndpointFilter()
  {
    return $this->endpointFilter;
  }
  /** @param string */
  public function setHostname($hostname)
  {
    $this->hostname = $hostname;
  }
  /** @return string */
  public function getHostname()
  {
    return $this->hostname;
  }
  /** @param Certificate[] */
  public function setServerCertificates($serverCertificates)
  {
    $this->serverCertificates = $serverCertificates;
  }
  /** @return Certificate[] */
  public function getServerCertificates()
  {
    return $this->serverCertificates;
  }
  /** @param string */
  public function setServiceDirectoryService($serviceDirectoryService)
  {
    $this->serviceDirectoryService = $serviceDirectoryService;
  }
  /** @return string */
  public function getServiceDirectoryService()
  {
    return $this->serviceDirectoryService;
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

class UpdateCryptoKeyPrimaryVersionRequest extends \Google\Model
{
  /** @var string */
  public $cryptoKeyVersionId;

  /** @param string */
  public function setCryptoKeyVersionId($cryptoKeyVersionId)
  {
    $this->cryptoKeyVersionId = $cryptoKeyVersionId;
  }
  /** @return string */
  public function getCryptoKeyVersionId()
  {
    return $this->cryptoKeyVersionId;
  }
}

class WrappingPublicKey extends \Google\Model
{
  /** @var string */
  public $pem;

  /** @param string */
  public function setPem($pem)
  {
    $this->pem = $pem;
  }
  /** @return string */
  public function getPem()
  {
    return $this->pem;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AsymmetricDecryptRequest::class, 'Google_Service_CloudKMS_AsymmetricDecryptRequest');
class_alias(AsymmetricDecryptResponse::class, 'Google_Service_CloudKMS_AsymmetricDecryptResponse');
class_alias(AsymmetricSignRequest::class, 'Google_Service_CloudKMS_AsymmetricSignRequest');
class_alias(AsymmetricSignResponse::class, 'Google_Service_CloudKMS_AsymmetricSignResponse');
class_alias(AuditConfig::class, 'Google_Service_CloudKMS_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_CloudKMS_AuditLogConfig');
class_alias(Binding::class, 'Google_Service_CloudKMS_Binding');
class_alias(Certificate::class, 'Google_Service_CloudKMS_Certificate');
class_alias(CertificateChains::class, 'Google_Service_CloudKMS_CertificateChains');
class_alias(CryptoKey::class, 'Google_Service_CloudKMS_CryptoKey');
class_alias(CryptoKeyVersion::class, 'Google_Service_CloudKMS_CryptoKeyVersion');
class_alias(CryptoKeyVersionTemplate::class, 'Google_Service_CloudKMS_CryptoKeyVersionTemplate');
class_alias(DecryptRequest::class, 'Google_Service_CloudKMS_DecryptRequest');
class_alias(DecryptResponse::class, 'Google_Service_CloudKMS_DecryptResponse');
class_alias(DestroyCryptoKeyVersionRequest::class, 'Google_Service_CloudKMS_DestroyCryptoKeyVersionRequest');
class_alias(Digest::class, 'Google_Service_CloudKMS_Digest');
class_alias(EkmConnection::class, 'Google_Service_CloudKMS_EkmConnection');
class_alias(EncryptRequest::class, 'Google_Service_CloudKMS_EncryptRequest');
class_alias(EncryptResponse::class, 'Google_Service_CloudKMS_EncryptResponse');
class_alias(Expr::class, 'Google_Service_CloudKMS_Expr');
class_alias(ExternalProtectionLevelOptions::class, 'Google_Service_CloudKMS_ExternalProtectionLevelOptions');
class_alias(GenerateRandomBytesRequest::class, 'Google_Service_CloudKMS_GenerateRandomBytesRequest');
class_alias(GenerateRandomBytesResponse::class, 'Google_Service_CloudKMS_GenerateRandomBytesResponse');
class_alias(ImportCryptoKeyVersionRequest::class, 'Google_Service_CloudKMS_ImportCryptoKeyVersionRequest');
class_alias(ImportJob::class, 'Google_Service_CloudKMS_ImportJob');
class_alias(KeyOperationAttestation::class, 'Google_Service_CloudKMS_KeyOperationAttestation');
class_alias(KeyRing::class, 'Google_Service_CloudKMS_KeyRing');
class_alias(ListCryptoKeyVersionsResponse::class, 'Google_Service_CloudKMS_ListCryptoKeyVersionsResponse');
class_alias(ListCryptoKeysResponse::class, 'Google_Service_CloudKMS_ListCryptoKeysResponse');
class_alias(ListEkmConnectionsResponse::class, 'Google_Service_CloudKMS_ListEkmConnectionsResponse');
class_alias(ListImportJobsResponse::class, 'Google_Service_CloudKMS_ListImportJobsResponse');
class_alias(ListKeyRingsResponse::class, 'Google_Service_CloudKMS_ListKeyRingsResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_CloudKMS_ListLocationsResponse');
class_alias(Location::class, 'Google_Service_CloudKMS_Location');
class_alias(LocationMetadata::class, 'Google_Service_CloudKMS_LocationMetadata');
class_alias(MacSignRequest::class, 'Google_Service_CloudKMS_MacSignRequest');
class_alias(MacSignResponse::class, 'Google_Service_CloudKMS_MacSignResponse');
class_alias(MacVerifyRequest::class, 'Google_Service_CloudKMS_MacVerifyRequest');
class_alias(MacVerifyResponse::class, 'Google_Service_CloudKMS_MacVerifyResponse');
class_alias(Policy::class, 'Google_Service_CloudKMS_Policy');
class_alias(PublicKey::class, 'Google_Service_CloudKMS_PublicKey');
class_alias(RestoreCryptoKeyVersionRequest::class, 'Google_Service_CloudKMS_RestoreCryptoKeyVersionRequest');
class_alias(ServiceResolver::class, 'Google_Service_CloudKMS_ServiceResolver');
class_alias(SetIamPolicyRequest::class, 'Google_Service_CloudKMS_SetIamPolicyRequest');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_CloudKMS_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_CloudKMS_TestIamPermissionsResponse');
class_alias(UpdateCryptoKeyPrimaryVersionRequest::class, 'Google_Service_CloudKMS_UpdateCryptoKeyPrimaryVersionRequest');
class_alias(WrappingPublicKey::class, 'Google_Service_CloudKMS_WrappingPublicKey');
