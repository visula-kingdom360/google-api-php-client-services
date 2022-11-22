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

namespace Google\Service\CertificateAuthorityService;

class AccessUrls extends \Google\Collection
{
  /** @var string */
  public $caCertificateAccessUrl;
  /** @var string[] */
  public $crlAccessUrls;
  protected $collection_key = 'crlAccessUrls';
  /** @param string */
  public function setCaCertificateAccessUrl($caCertificateAccessUrl)
  {
    $this->caCertificateAccessUrl = $caCertificateAccessUrl;
  }
  /** @return string */
  public function getCaCertificateAccessUrl()
  {
    return $this->caCertificateAccessUrl;
  }
  /** @param string[] */
  public function setCrlAccessUrls($crlAccessUrls)
  {
    $this->crlAccessUrls = $crlAccessUrls;
  }
  /** @return string[] */
  public function getCrlAccessUrls()
  {
    return $this->crlAccessUrls;
  }
}

class ActivateCertificateAuthorityRequest extends \Google\Model
{
  /** @var string */
  public $pemCaCertificate;
  /** @var string */
  public $requestId;
  /** @var SubordinateConfig */
  public $subordinateConfig;
  protected $subordinateConfigType = SubordinateConfig::class;
  protected $subordinateConfigDataType = '';
  /** @param string */
  public function setPemCaCertificate($pemCaCertificate)
  {
    $this->pemCaCertificate = $pemCaCertificate;
  }
  /** @return string */
  public function getPemCaCertificate()
  {
    return $this->pemCaCertificate;
  }
  /** @param string */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
  }
  /** @param SubordinateConfig */
  public function setSubordinateConfig(SubordinateConfig $subordinateConfig)
  {
    $this->subordinateConfig = $subordinateConfig;
  }
  /** @return SubordinateConfig */
  public function getSubordinateConfig()
  {
    return $this->subordinateConfig;
  }
}

class AllowedKeyType extends \Google\Model
{
  /** @var EcKeyType */
  public $ellipticCurve;
  /** @var RsaKeyType */
  public $rsa;
  protected $ellipticCurveType = EcKeyType::class;
  protected $ellipticCurveDataType = '';
  protected $rsaType = RsaKeyType::class;
  protected $rsaDataType = '';
  /** @param EcKeyType */
  public function setEllipticCurve(EcKeyType $ellipticCurve)
  {
    $this->ellipticCurve = $ellipticCurve;
  }
  /** @return EcKeyType */
  public function getEllipticCurve()
  {
    return $this->ellipticCurve;
  }
  /** @param RsaKeyType */
  public function setRsa(RsaKeyType $rsa)
  {
    $this->rsa = $rsa;
  }
  /** @return RsaKeyType */
  public function getRsa()
  {
    return $this->rsa;
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

class CaOptions extends \Google\Model
{
  /** @var bool */
  public $isCa;
  /** @var int */
  public $maxIssuerPathLength;

  /** @param bool */
  public function setIsCa($isCa)
  {
    $this->isCa = $isCa;
  }
  /** @return bool */
  public function getIsCa()
  {
    return $this->isCa;
  }
  /** @param int */
  public function setMaxIssuerPathLength($maxIssuerPathLength)
  {
    $this->maxIssuerPathLength = $maxIssuerPathLength;
  }
  /** @return int */
  public function getMaxIssuerPathLength()
  {
    return $this->maxIssuerPathLength;
  }
}

class CaPool extends \Google\Model
{
  /** @var IssuancePolicy */
  public $issuancePolicy;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var PublishingOptions */
  public $publishingOptions;
  /** @var string */
  public $tier;
  protected $issuancePolicyType = IssuancePolicy::class;
  protected $issuancePolicyDataType = '';
  protected $publishingOptionsType = PublishingOptions::class;
  protected $publishingOptionsDataType = '';
  /** @param IssuancePolicy */
  public function setIssuancePolicy(IssuancePolicy $issuancePolicy)
  {
    $this->issuancePolicy = $issuancePolicy;
  }
  /** @return IssuancePolicy */
  public function getIssuancePolicy()
  {
    return $this->issuancePolicy;
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
  /** @param PublishingOptions */
  public function setPublishingOptions(PublishingOptions $publishingOptions)
  {
    $this->publishingOptions = $publishingOptions;
  }
  /** @return PublishingOptions */
  public function getPublishingOptions()
  {
    return $this->publishingOptions;
  }
  /** @param string */
  public function setTier($tier)
  {
    $this->tier = $tier;
  }
  /** @return string */
  public function getTier()
  {
    return $this->tier;
  }
}

class CancelOperationRequest extends \Google\Model
{
}

class CertChain extends \Google\Collection
{
  /** @var string[] */
  public $certificates;
  protected $collection_key = 'certificates';
  /** @param string[] */
  public function setCertificates($certificates)
  {
    $this->certificates = $certificates;
  }
  /** @return string[] */
  public function getCertificates()
  {
    return $this->certificates;
  }
}

class Certificate extends \Google\Collection
{
  /** @var CertificateDescription */
  public $certificateDescription;
  /** @var string */
  public $certificateTemplate;
  /** @var CertificateConfig */
  public $config;
  /** @var string */
  public $createTime;
  /** @var string */
  public $issuerCertificateAuthority;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $lifetime;
  /** @var string */
  public $name;
  /** @var string */
  public $pemCertificate;
  /** @var string[] */
  public $pemCertificateChain;
  /** @var string */
  public $pemCsr;
  /** @var RevocationDetails */
  public $revocationDetails;
  /** @var string */
  public $subjectMode;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'pemCertificateChain';
  protected $certificateDescriptionType = CertificateDescription::class;
  protected $certificateDescriptionDataType = '';
  protected $configType = CertificateConfig::class;
  protected $configDataType = '';
  protected $revocationDetailsType = RevocationDetails::class;
  protected $revocationDetailsDataType = '';
  /** @param CertificateDescription */
  public function setCertificateDescription(CertificateDescription $certificateDescription)
  {
    $this->certificateDescription = $certificateDescription;
  }
  /** @return CertificateDescription */
  public function getCertificateDescription()
  {
    return $this->certificateDescription;
  }
  /** @param string */
  public function setCertificateTemplate($certificateTemplate)
  {
    $this->certificateTemplate = $certificateTemplate;
  }
  /** @return string */
  public function getCertificateTemplate()
  {
    return $this->certificateTemplate;
  }
  /** @param CertificateConfig */
  public function setConfig(CertificateConfig $config)
  {
    $this->config = $config;
  }
  /** @return CertificateConfig */
  public function getConfig()
  {
    return $this->config;
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
  public function setIssuerCertificateAuthority($issuerCertificateAuthority)
  {
    $this->issuerCertificateAuthority = $issuerCertificateAuthority;
  }
  /** @return string */
  public function getIssuerCertificateAuthority()
  {
    return $this->issuerCertificateAuthority;
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
  public function setLifetime($lifetime)
  {
    $this->lifetime = $lifetime;
  }
  /** @return string */
  public function getLifetime()
  {
    return $this->lifetime;
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
  public function setPemCertificate($pemCertificate)
  {
    $this->pemCertificate = $pemCertificate;
  }
  /** @return string */
  public function getPemCertificate()
  {
    return $this->pemCertificate;
  }
  /** @param string[] */
  public function setPemCertificateChain($pemCertificateChain)
  {
    $this->pemCertificateChain = $pemCertificateChain;
  }
  /** @return string[] */
  public function getPemCertificateChain()
  {
    return $this->pemCertificateChain;
  }
  /** @param string */
  public function setPemCsr($pemCsr)
  {
    $this->pemCsr = $pemCsr;
  }
  /** @return string */
  public function getPemCsr()
  {
    return $this->pemCsr;
  }
  /** @param RevocationDetails */
  public function setRevocationDetails(RevocationDetails $revocationDetails)
  {
    $this->revocationDetails = $revocationDetails;
  }
  /** @return RevocationDetails */
  public function getRevocationDetails()
  {
    return $this->revocationDetails;
  }
  /** @param string */
  public function setSubjectMode($subjectMode)
  {
    $this->subjectMode = $subjectMode;
  }
  /** @return string */
  public function getSubjectMode()
  {
    return $this->subjectMode;
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

class CertificateAuthority extends \Google\Collection
{
  /** @var AccessUrls */
  public $accessUrls;
  /** @var CertificateDescription[] */
  public $caCertificateDescriptions;
  /** @var CertificateConfig */
  public $config;
  /** @var string */
  public $createTime;
  /** @var string */
  public $deleteTime;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $gcsBucket;
  /** @var KeyVersionSpec */
  public $keySpec;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $lifetime;
  /** @var string */
  public $name;
  /** @var string[] */
  public $pemCaCertificates;
  /** @var string */
  public $state;
  /** @var SubordinateConfig */
  public $subordinateConfig;
  /** @var string */
  public $tier;
  /** @var string */
  public $type;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'pemCaCertificates';
  protected $accessUrlsType = AccessUrls::class;
  protected $accessUrlsDataType = '';
  protected $caCertificateDescriptionsType = CertificateDescription::class;
  protected $caCertificateDescriptionsDataType = 'array';
  protected $configType = CertificateConfig::class;
  protected $configDataType = '';
  protected $keySpecType = KeyVersionSpec::class;
  protected $keySpecDataType = '';
  protected $subordinateConfigType = SubordinateConfig::class;
  protected $subordinateConfigDataType = '';
  /** @param AccessUrls */
  public function setAccessUrls(AccessUrls $accessUrls)
  {
    $this->accessUrls = $accessUrls;
  }
  /** @return AccessUrls */
  public function getAccessUrls()
  {
    return $this->accessUrls;
  }
  /** @param CertificateDescription[] */
  public function setCaCertificateDescriptions($caCertificateDescriptions)
  {
    $this->caCertificateDescriptions = $caCertificateDescriptions;
  }
  /** @return CertificateDescription[] */
  public function getCaCertificateDescriptions()
  {
    return $this->caCertificateDescriptions;
  }
  /** @param CertificateConfig */
  public function setConfig(CertificateConfig $config)
  {
    $this->config = $config;
  }
  /** @return CertificateConfig */
  public function getConfig()
  {
    return $this->config;
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
  public function setDeleteTime($deleteTime)
  {
    $this->deleteTime = $deleteTime;
  }
  /** @return string */
  public function getDeleteTime()
  {
    return $this->deleteTime;
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
  public function setGcsBucket($gcsBucket)
  {
    $this->gcsBucket = $gcsBucket;
  }
  /** @return string */
  public function getGcsBucket()
  {
    return $this->gcsBucket;
  }
  /** @param KeyVersionSpec */
  public function setKeySpec(KeyVersionSpec $keySpec)
  {
    $this->keySpec = $keySpec;
  }
  /** @return KeyVersionSpec */
  public function getKeySpec()
  {
    return $this->keySpec;
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
  public function setLifetime($lifetime)
  {
    $this->lifetime = $lifetime;
  }
  /** @return string */
  public function getLifetime()
  {
    return $this->lifetime;
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
  public function setPemCaCertificates($pemCaCertificates)
  {
    $this->pemCaCertificates = $pemCaCertificates;
  }
  /** @return string[] */
  public function getPemCaCertificates()
  {
    return $this->pemCaCertificates;
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
  /** @param SubordinateConfig */
  public function setSubordinateConfig(SubordinateConfig $subordinateConfig)
  {
    $this->subordinateConfig = $subordinateConfig;
  }
  /** @return SubordinateConfig */
  public function getSubordinateConfig()
  {
    return $this->subordinateConfig;
  }
  /** @param string */
  public function setTier($tier)
  {
    $this->tier = $tier;
  }
  /** @return string */
  public function getTier()
  {
    return $this->tier;
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

class CertificateConfig extends \Google\Model
{
  /** @var PublicKey */
  public $publicKey;
  /** @var SubjectConfig */
  public $subjectConfig;
  /** @var X509Parameters */
  public $x509Config;
  protected $publicKeyType = PublicKey::class;
  protected $publicKeyDataType = '';
  protected $subjectConfigType = SubjectConfig::class;
  protected $subjectConfigDataType = '';
  protected $x509ConfigType = X509Parameters::class;
  protected $x509ConfigDataType = '';
  /** @param PublicKey */
  public function setPublicKey(PublicKey $publicKey)
  {
    $this->publicKey = $publicKey;
  }
  /** @return PublicKey */
  public function getPublicKey()
  {
    return $this->publicKey;
  }
  /** @param SubjectConfig */
  public function setSubjectConfig(SubjectConfig $subjectConfig)
  {
    $this->subjectConfig = $subjectConfig;
  }
  /** @return SubjectConfig */
  public function getSubjectConfig()
  {
    return $this->subjectConfig;
  }
  /** @param X509Parameters */
  public function setX509Config(X509Parameters $x509Config)
  {
    $this->x509Config = $x509Config;
  }
  /** @return X509Parameters */
  public function getX509Config()
  {
    return $this->x509Config;
  }
}

class CertificateDescription extends \Google\Collection
{
  /** @var string[] */
  public $aiaIssuingCertificateUrls;
  /** @var KeyId */
  public $authorityKeyId;
  /** @var CertificateFingerprint */
  public $certFingerprint;
  /** @var string[] */
  public $crlDistributionPoints;
  /** @var PublicKey */
  public $publicKey;
  /** @var SubjectDescription */
  public $subjectDescription;
  /** @var KeyId */
  public $subjectKeyId;
  /** @var X509Parameters */
  public $x509Description;
  protected $collection_key = 'crlDistributionPoints';
  protected $authorityKeyIdType = KeyId::class;
  protected $authorityKeyIdDataType = '';
  protected $certFingerprintType = CertificateFingerprint::class;
  protected $certFingerprintDataType = '';
  protected $publicKeyType = PublicKey::class;
  protected $publicKeyDataType = '';
  protected $subjectDescriptionType = SubjectDescription::class;
  protected $subjectDescriptionDataType = '';
  protected $subjectKeyIdType = KeyId::class;
  protected $subjectKeyIdDataType = '';
  protected $x509DescriptionType = X509Parameters::class;
  protected $x509DescriptionDataType = '';
  /** @param string[] */
  public function setAiaIssuingCertificateUrls($aiaIssuingCertificateUrls)
  {
    $this->aiaIssuingCertificateUrls = $aiaIssuingCertificateUrls;
  }
  /** @return string[] */
  public function getAiaIssuingCertificateUrls()
  {
    return $this->aiaIssuingCertificateUrls;
  }
  /** @param KeyId */
  public function setAuthorityKeyId(KeyId $authorityKeyId)
  {
    $this->authorityKeyId = $authorityKeyId;
  }
  /** @return KeyId */
  public function getAuthorityKeyId()
  {
    return $this->authorityKeyId;
  }
  /** @param CertificateFingerprint */
  public function setCertFingerprint(CertificateFingerprint $certFingerprint)
  {
    $this->certFingerprint = $certFingerprint;
  }
  /** @return CertificateFingerprint */
  public function getCertFingerprint()
  {
    return $this->certFingerprint;
  }
  /** @param string[] */
  public function setCrlDistributionPoints($crlDistributionPoints)
  {
    $this->crlDistributionPoints = $crlDistributionPoints;
  }
  /** @return string[] */
  public function getCrlDistributionPoints()
  {
    return $this->crlDistributionPoints;
  }
  /** @param PublicKey */
  public function setPublicKey(PublicKey $publicKey)
  {
    $this->publicKey = $publicKey;
  }
  /** @return PublicKey */
  public function getPublicKey()
  {
    return $this->publicKey;
  }
  /** @param SubjectDescription */
  public function setSubjectDescription(SubjectDescription $subjectDescription)
  {
    $this->subjectDescription = $subjectDescription;
  }
  /** @return SubjectDescription */
  public function getSubjectDescription()
  {
    return $this->subjectDescription;
  }
  /** @param KeyId */
  public function setSubjectKeyId(KeyId $subjectKeyId)
  {
    $this->subjectKeyId = $subjectKeyId;
  }
  /** @return KeyId */
  public function getSubjectKeyId()
  {
    return $this->subjectKeyId;
  }
  /** @param X509Parameters */
  public function setX509Description(X509Parameters $x509Description)
  {
    $this->x509Description = $x509Description;
  }
  /** @return X509Parameters */
  public function getX509Description()
  {
    return $this->x509Description;
  }
}

class CertificateExtensionConstraints extends \Google\Collection
{
  /** @var ObjectId[] */
  public $additionalExtensions;
  /** @var string[] */
  public $knownExtensions;
  protected $collection_key = 'knownExtensions';
  protected $additionalExtensionsType = ObjectId::class;
  protected $additionalExtensionsDataType = 'array';
  /** @param ObjectId[] */
  public function setAdditionalExtensions($additionalExtensions)
  {
    $this->additionalExtensions = $additionalExtensions;
  }
  /** @return ObjectId[] */
  public function getAdditionalExtensions()
  {
    return $this->additionalExtensions;
  }
  /** @param string[] */
  public function setKnownExtensions($knownExtensions)
  {
    $this->knownExtensions = $knownExtensions;
  }
  /** @return string[] */
  public function getKnownExtensions()
  {
    return $this->knownExtensions;
  }
}

class CertificateFingerprint extends \Google\Model
{
  /** @var string */
  public $sha256Hash;

  /** @param string */
  public function setSha256Hash($sha256Hash)
  {
    $this->sha256Hash = $sha256Hash;
  }
  /** @return string */
  public function getSha256Hash()
  {
    return $this->sha256Hash;
  }
}

class CertificateIdentityConstraints extends \Google\Model
{
  /** @var bool */
  public $allowSubjectAltNamesPassthrough;
  /** @var bool */
  public $allowSubjectPassthrough;
  /** @var Expr */
  public $celExpression;
  protected $celExpressionType = Expr::class;
  protected $celExpressionDataType = '';
  /** @param bool */
  public function setAllowSubjectAltNamesPassthrough($allowSubjectAltNamesPassthrough)
  {
    $this->allowSubjectAltNamesPassthrough = $allowSubjectAltNamesPassthrough;
  }
  /** @return bool */
  public function getAllowSubjectAltNamesPassthrough()
  {
    return $this->allowSubjectAltNamesPassthrough;
  }
  /** @param bool */
  public function setAllowSubjectPassthrough($allowSubjectPassthrough)
  {
    $this->allowSubjectPassthrough = $allowSubjectPassthrough;
  }
  /** @return bool */
  public function getAllowSubjectPassthrough()
  {
    return $this->allowSubjectPassthrough;
  }
  /** @param Expr */
  public function setCelExpression(Expr $celExpression)
  {
    $this->celExpression = $celExpression;
  }
  /** @return Expr */
  public function getCelExpression()
  {
    return $this->celExpression;
  }
}

class CertificateRevocationList extends \Google\Collection
{
  /** @var string */
  public $accessUrl;
  /** @var string */
  public $createTime;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $pemCrl;
  /** @var string */
  public $revisionId;
  /** @var RevokedCertificate[] */
  public $revokedCertificates;
  /** @var string */
  public $sequenceNumber;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'revokedCertificates';
  protected $revokedCertificatesType = RevokedCertificate::class;
  protected $revokedCertificatesDataType = 'array';
  /** @param string */
  public function setAccessUrl($accessUrl)
  {
    $this->accessUrl = $accessUrl;
  }
  /** @return string */
  public function getAccessUrl()
  {
    return $this->accessUrl;
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
  public function setPemCrl($pemCrl)
  {
    $this->pemCrl = $pemCrl;
  }
  /** @return string */
  public function getPemCrl()
  {
    return $this->pemCrl;
  }
  /** @param string */
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /** @return string */
  public function getRevisionId()
  {
    return $this->revisionId;
  }
  /** @param RevokedCertificate[] */
  public function setRevokedCertificates($revokedCertificates)
  {
    $this->revokedCertificates = $revokedCertificates;
  }
  /** @return RevokedCertificate[] */
  public function getRevokedCertificates()
  {
    return $this->revokedCertificates;
  }
  /** @param string */
  public function setSequenceNumber($sequenceNumber)
  {
    $this->sequenceNumber = $sequenceNumber;
  }
  /** @return string */
  public function getSequenceNumber()
  {
    return $this->sequenceNumber;
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

class CertificateTemplate extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var CertificateIdentityConstraints */
  public $identityConstraints;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var CertificateExtensionConstraints */
  public $passthroughExtensions;
  /** @var X509Parameters */
  public $predefinedValues;
  /** @var string */
  public $updateTime;
  protected $identityConstraintsType = CertificateIdentityConstraints::class;
  protected $identityConstraintsDataType = '';
  protected $passthroughExtensionsType = CertificateExtensionConstraints::class;
  protected $passthroughExtensionsDataType = '';
  protected $predefinedValuesType = X509Parameters::class;
  protected $predefinedValuesDataType = '';
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
  /** @param CertificateIdentityConstraints */
  public function setIdentityConstraints(CertificateIdentityConstraints $identityConstraints)
  {
    $this->identityConstraints = $identityConstraints;
  }
  /** @return CertificateIdentityConstraints */
  public function getIdentityConstraints()
  {
    return $this->identityConstraints;
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
  /** @param CertificateExtensionConstraints */
  public function setPassthroughExtensions(CertificateExtensionConstraints $passthroughExtensions)
  {
    $this->passthroughExtensions = $passthroughExtensions;
  }
  /** @return CertificateExtensionConstraints */
  public function getPassthroughExtensions()
  {
    return $this->passthroughExtensions;
  }
  /** @param X509Parameters */
  public function setPredefinedValues(X509Parameters $predefinedValues)
  {
    $this->predefinedValues = $predefinedValues;
  }
  /** @return X509Parameters */
  public function getPredefinedValues()
  {
    return $this->predefinedValues;
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

class DisableCertificateAuthorityRequest extends \Google\Model
{
  /** @var string */
  public $requestId;

  /** @param string */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
  }
}

class EcKeyType extends \Google\Model
{
  /** @var string */
  public $signatureAlgorithm;

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

class EnableCertificateAuthorityRequest extends \Google\Model
{
  /** @var string */
  public $requestId;

  /** @param string */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
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

class ExtendedKeyUsageOptions extends \Google\Model
{
  /** @var bool */
  public $clientAuth;
  /** @var bool */
  public $codeSigning;
  /** @var bool */
  public $emailProtection;
  /** @var bool */
  public $ocspSigning;
  /** @var bool */
  public $serverAuth;
  /** @var bool */
  public $timeStamping;

  /** @param bool */
  public function setClientAuth($clientAuth)
  {
    $this->clientAuth = $clientAuth;
  }
  /** @return bool */
  public function getClientAuth()
  {
    return $this->clientAuth;
  }
  /** @param bool */
  public function setCodeSigning($codeSigning)
  {
    $this->codeSigning = $codeSigning;
  }
  /** @return bool */
  public function getCodeSigning()
  {
    return $this->codeSigning;
  }
  /** @param bool */
  public function setEmailProtection($emailProtection)
  {
    $this->emailProtection = $emailProtection;
  }
  /** @return bool */
  public function getEmailProtection()
  {
    return $this->emailProtection;
  }
  /** @param bool */
  public function setOcspSigning($ocspSigning)
  {
    $this->ocspSigning = $ocspSigning;
  }
  /** @return bool */
  public function getOcspSigning()
  {
    return $this->ocspSigning;
  }
  /** @param bool */
  public function setServerAuth($serverAuth)
  {
    $this->serverAuth = $serverAuth;
  }
  /** @return bool */
  public function getServerAuth()
  {
    return $this->serverAuth;
  }
  /** @param bool */
  public function setTimeStamping($timeStamping)
  {
    $this->timeStamping = $timeStamping;
  }
  /** @return bool */
  public function getTimeStamping()
  {
    return $this->timeStamping;
  }
}

class FetchCaCertsRequest extends \Google\Model
{
  /** @var string */
  public $requestId;

  /** @param string */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
  }
}

class FetchCaCertsResponse extends \Google\Collection
{
  /** @var CertChain[] */
  public $caCerts;
  protected $collection_key = 'caCerts';
  protected $caCertsType = CertChain::class;
  protected $caCertsDataType = 'array';
  /** @param CertChain[] */
  public function setCaCerts($caCerts)
  {
    $this->caCerts = $caCerts;
  }
  /** @return CertChain[] */
  public function getCaCerts()
  {
    return $this->caCerts;
  }
}

class FetchCertificateAuthorityCsrResponse extends \Google\Model
{
  /** @var string */
  public $pemCsr;

  /** @param string */
  public function setPemCsr($pemCsr)
  {
    $this->pemCsr = $pemCsr;
  }
  /** @return string */
  public function getPemCsr()
  {
    return $this->pemCsr;
  }
}

class IssuanceModes extends \Google\Model
{
  /** @var bool */
  public $allowConfigBasedIssuance;
  /** @var bool */
  public $allowCsrBasedIssuance;

  /** @param bool */
  public function setAllowConfigBasedIssuance($allowConfigBasedIssuance)
  {
    $this->allowConfigBasedIssuance = $allowConfigBasedIssuance;
  }
  /** @return bool */
  public function getAllowConfigBasedIssuance()
  {
    return $this->allowConfigBasedIssuance;
  }
  /** @param bool */
  public function setAllowCsrBasedIssuance($allowCsrBasedIssuance)
  {
    $this->allowCsrBasedIssuance = $allowCsrBasedIssuance;
  }
  /** @return bool */
  public function getAllowCsrBasedIssuance()
  {
    return $this->allowCsrBasedIssuance;
  }
}

class IssuancePolicy extends \Google\Collection
{
  /** @var IssuanceModes */
  public $allowedIssuanceModes;
  /** @var AllowedKeyType[] */
  public $allowedKeyTypes;
  /** @var X509Parameters */
  public $baselineValues;
  /** @var CertificateIdentityConstraints */
  public $identityConstraints;
  /** @var string */
  public $maximumLifetime;
  /** @var CertificateExtensionConstraints */
  public $passthroughExtensions;
  protected $collection_key = 'allowedKeyTypes';
  protected $allowedIssuanceModesType = IssuanceModes::class;
  protected $allowedIssuanceModesDataType = '';
  protected $allowedKeyTypesType = AllowedKeyType::class;
  protected $allowedKeyTypesDataType = 'array';
  protected $baselineValuesType = X509Parameters::class;
  protected $baselineValuesDataType = '';
  protected $identityConstraintsType = CertificateIdentityConstraints::class;
  protected $identityConstraintsDataType = '';
  protected $passthroughExtensionsType = CertificateExtensionConstraints::class;
  protected $passthroughExtensionsDataType = '';
  /** @param IssuanceModes */
  public function setAllowedIssuanceModes(IssuanceModes $allowedIssuanceModes)
  {
    $this->allowedIssuanceModes = $allowedIssuanceModes;
  }
  /** @return IssuanceModes */
  public function getAllowedIssuanceModes()
  {
    return $this->allowedIssuanceModes;
  }
  /** @param AllowedKeyType[] */
  public function setAllowedKeyTypes($allowedKeyTypes)
  {
    $this->allowedKeyTypes = $allowedKeyTypes;
  }
  /** @return AllowedKeyType[] */
  public function getAllowedKeyTypes()
  {
    return $this->allowedKeyTypes;
  }
  /** @param X509Parameters */
  public function setBaselineValues(X509Parameters $baselineValues)
  {
    $this->baselineValues = $baselineValues;
  }
  /** @return X509Parameters */
  public function getBaselineValues()
  {
    return $this->baselineValues;
  }
  /** @param CertificateIdentityConstraints */
  public function setIdentityConstraints(CertificateIdentityConstraints $identityConstraints)
  {
    $this->identityConstraints = $identityConstraints;
  }
  /** @return CertificateIdentityConstraints */
  public function getIdentityConstraints()
  {
    return $this->identityConstraints;
  }
  /** @param string */
  public function setMaximumLifetime($maximumLifetime)
  {
    $this->maximumLifetime = $maximumLifetime;
  }
  /** @return string */
  public function getMaximumLifetime()
  {
    return $this->maximumLifetime;
  }
  /** @param CertificateExtensionConstraints */
  public function setPassthroughExtensions(CertificateExtensionConstraints $passthroughExtensions)
  {
    $this->passthroughExtensions = $passthroughExtensions;
  }
  /** @return CertificateExtensionConstraints */
  public function getPassthroughExtensions()
  {
    return $this->passthroughExtensions;
  }
}

class KeyId extends \Google\Model
{
  /** @var string */
  public $keyId;

  /** @param string */
  public function setKeyId($keyId)
  {
    $this->keyId = $keyId;
  }
  /** @return string */
  public function getKeyId()
  {
    return $this->keyId;
  }
}

class KeyUsage extends \Google\Collection
{
  /** @var KeyUsageOptions */
  public $baseKeyUsage;
  /** @var ExtendedKeyUsageOptions */
  public $extendedKeyUsage;
  /** @var ObjectId[] */
  public $unknownExtendedKeyUsages;
  protected $collection_key = 'unknownExtendedKeyUsages';
  protected $baseKeyUsageType = KeyUsageOptions::class;
  protected $baseKeyUsageDataType = '';
  protected $extendedKeyUsageType = ExtendedKeyUsageOptions::class;
  protected $extendedKeyUsageDataType = '';
  protected $unknownExtendedKeyUsagesType = ObjectId::class;
  protected $unknownExtendedKeyUsagesDataType = 'array';
  /** @param KeyUsageOptions */
  public function setBaseKeyUsage(KeyUsageOptions $baseKeyUsage)
  {
    $this->baseKeyUsage = $baseKeyUsage;
  }
  /** @return KeyUsageOptions */
  public function getBaseKeyUsage()
  {
    return $this->baseKeyUsage;
  }
  /** @param ExtendedKeyUsageOptions */
  public function setExtendedKeyUsage(ExtendedKeyUsageOptions $extendedKeyUsage)
  {
    $this->extendedKeyUsage = $extendedKeyUsage;
  }
  /** @return ExtendedKeyUsageOptions */
  public function getExtendedKeyUsage()
  {
    return $this->extendedKeyUsage;
  }
  /** @param ObjectId[] */
  public function setUnknownExtendedKeyUsages($unknownExtendedKeyUsages)
  {
    $this->unknownExtendedKeyUsages = $unknownExtendedKeyUsages;
  }
  /** @return ObjectId[] */
  public function getUnknownExtendedKeyUsages()
  {
    return $this->unknownExtendedKeyUsages;
  }
}

class KeyUsageOptions extends \Google\Model
{
  /** @var bool */
  public $certSign;
  /** @var bool */
  public $contentCommitment;
  /** @var bool */
  public $crlSign;
  /** @var bool */
  public $dataEncipherment;
  /** @var bool */
  public $decipherOnly;
  /** @var bool */
  public $digitalSignature;
  /** @var bool */
  public $encipherOnly;
  /** @var bool */
  public $keyAgreement;
  /** @var bool */
  public $keyEncipherment;

  /** @param bool */
  public function setCertSign($certSign)
  {
    $this->certSign = $certSign;
  }
  /** @return bool */
  public function getCertSign()
  {
    return $this->certSign;
  }
  /** @param bool */
  public function setContentCommitment($contentCommitment)
  {
    $this->contentCommitment = $contentCommitment;
  }
  /** @return bool */
  public function getContentCommitment()
  {
    return $this->contentCommitment;
  }
  /** @param bool */
  public function setCrlSign($crlSign)
  {
    $this->crlSign = $crlSign;
  }
  /** @return bool */
  public function getCrlSign()
  {
    return $this->crlSign;
  }
  /** @param bool */
  public function setDataEncipherment($dataEncipherment)
  {
    $this->dataEncipherment = $dataEncipherment;
  }
  /** @return bool */
  public function getDataEncipherment()
  {
    return $this->dataEncipherment;
  }
  /** @param bool */
  public function setDecipherOnly($decipherOnly)
  {
    $this->decipherOnly = $decipherOnly;
  }
  /** @return bool */
  public function getDecipherOnly()
  {
    return $this->decipherOnly;
  }
  /** @param bool */
  public function setDigitalSignature($digitalSignature)
  {
    $this->digitalSignature = $digitalSignature;
  }
  /** @return bool */
  public function getDigitalSignature()
  {
    return $this->digitalSignature;
  }
  /** @param bool */
  public function setEncipherOnly($encipherOnly)
  {
    $this->encipherOnly = $encipherOnly;
  }
  /** @return bool */
  public function getEncipherOnly()
  {
    return $this->encipherOnly;
  }
  /** @param bool */
  public function setKeyAgreement($keyAgreement)
  {
    $this->keyAgreement = $keyAgreement;
  }
  /** @return bool */
  public function getKeyAgreement()
  {
    return $this->keyAgreement;
  }
  /** @param bool */
  public function setKeyEncipherment($keyEncipherment)
  {
    $this->keyEncipherment = $keyEncipherment;
  }
  /** @return bool */
  public function getKeyEncipherment()
  {
    return $this->keyEncipherment;
  }
}

class KeyVersionSpec extends \Google\Model
{
  /** @var string */
  public $algorithm;
  /** @var string */
  public $cloudKmsKeyVersion;

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
  public function setCloudKmsKeyVersion($cloudKmsKeyVersion)
  {
    $this->cloudKmsKeyVersion = $cloudKmsKeyVersion;
  }
  /** @return string */
  public function getCloudKmsKeyVersion()
  {
    return $this->cloudKmsKeyVersion;
  }
}

class ListCaPoolsResponse extends \Google\Collection
{
  /** @var CaPool[] */
  public $caPools;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $caPoolsType = CaPool::class;
  protected $caPoolsDataType = 'array';
  /** @param CaPool[] */
  public function setCaPools($caPools)
  {
    $this->caPools = $caPools;
  }
  /** @return CaPool[] */
  public function getCaPools()
  {
    return $this->caPools;
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
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

class ListCertificateAuthoritiesResponse extends \Google\Collection
{
  /** @var CertificateAuthority[] */
  public $certificateAuthorities;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $certificateAuthoritiesType = CertificateAuthority::class;
  protected $certificateAuthoritiesDataType = 'array';
  /** @param CertificateAuthority[] */
  public function setCertificateAuthorities($certificateAuthorities)
  {
    $this->certificateAuthorities = $certificateAuthorities;
  }
  /** @return CertificateAuthority[] */
  public function getCertificateAuthorities()
  {
    return $this->certificateAuthorities;
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
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

class ListCertificateRevocationListsResponse extends \Google\Collection
{
  /** @var CertificateRevocationList[] */
  public $certificateRevocationLists;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $certificateRevocationListsType = CertificateRevocationList::class;
  protected $certificateRevocationListsDataType = 'array';
  /** @param CertificateRevocationList[] */
  public function setCertificateRevocationLists($certificateRevocationLists)
  {
    $this->certificateRevocationLists = $certificateRevocationLists;
  }
  /** @return CertificateRevocationList[] */
  public function getCertificateRevocationLists()
  {
    return $this->certificateRevocationLists;
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
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

class ListCertificateTemplatesResponse extends \Google\Collection
{
  /** @var CertificateTemplate[] */
  public $certificateTemplates;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $certificateTemplatesType = CertificateTemplate::class;
  protected $certificateTemplatesDataType = 'array';
  /** @param CertificateTemplate[] */
  public function setCertificateTemplates($certificateTemplates)
  {
    $this->certificateTemplates = $certificateTemplates;
  }
  /** @return CertificateTemplate[] */
  public function getCertificateTemplates()
  {
    return $this->certificateTemplates;
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
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

class ListCertificatesResponse extends \Google\Collection
{
  /** @var Certificate[] */
  public $certificates;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $certificatesType = Certificate::class;
  protected $certificatesDataType = 'array';
  /** @param Certificate[] */
  public function setCertificates($certificates)
  {
    $this->certificates = $certificates;
  }
  /** @return Certificate[] */
  public function getCertificates()
  {
    return $this->certificates;
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
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
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

class ObjectId extends \Google\Collection
{
  /** @var int[] */
  public $objectIdPath;
  protected $collection_key = 'objectIdPath';
  /** @param int[] */
  public function setObjectIdPath($objectIdPath)
  {
    $this->objectIdPath = $objectIdPath;
  }
  /** @return int[] */
  public function getObjectIdPath()
  {
    return $this->objectIdPath;
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

class OperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var bool */
  public $requestedCancellation;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;

  /** @param string */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /** @return string */
  public function getApiVersion()
  {
    return $this->apiVersion;
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param bool */
  public function setRequestedCancellation($requestedCancellation)
  {
    $this->requestedCancellation = $requestedCancellation;
  }
  /** @return bool */
  public function getRequestedCancellation()
  {
    return $this->requestedCancellation;
  }
  /** @param string */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /** @return string */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  /** @param string */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
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

class PrivatecaEmpty extends \Google\Model
{
}

class PublicKey extends \Google\Model
{
  /** @var string */
  public $format;
  /** @var string */
  public $key;

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
  /** @param string */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /** @return string */
  public function getKey()
  {
    return $this->key;
  }
}

class PublishingOptions extends \Google\Model
{
  /** @var bool */
  public $publishCaCert;
  /** @var bool */
  public $publishCrl;

  /** @param bool */
  public function setPublishCaCert($publishCaCert)
  {
    $this->publishCaCert = $publishCaCert;
  }
  /** @return bool */
  public function getPublishCaCert()
  {
    return $this->publishCaCert;
  }
  /** @param bool */
  public function setPublishCrl($publishCrl)
  {
    $this->publishCrl = $publishCrl;
  }
  /** @return bool */
  public function getPublishCrl()
  {
    return $this->publishCrl;
  }
}

class ReconciliationOperationMetadata extends \Google\Model
{
  /** @var bool */
  public $deleteResource;
  /** @var string */
  public $exclusiveAction;

  /** @param bool */
  public function setDeleteResource($deleteResource)
  {
    $this->deleteResource = $deleteResource;
  }
  /** @return bool */
  public function getDeleteResource()
  {
    return $this->deleteResource;
  }
  /** @param string */
  public function setExclusiveAction($exclusiveAction)
  {
    $this->exclusiveAction = $exclusiveAction;
  }
  /** @return string */
  public function getExclusiveAction()
  {
    return $this->exclusiveAction;
  }
}

class RevocationDetails extends \Google\Model
{
  /** @var string */
  public $revocationState;
  /** @var string */
  public $revocationTime;

  /** @param string */
  public function setRevocationState($revocationState)
  {
    $this->revocationState = $revocationState;
  }
  /** @return string */
  public function getRevocationState()
  {
    return $this->revocationState;
  }
  /** @param string */
  public function setRevocationTime($revocationTime)
  {
    $this->revocationTime = $revocationTime;
  }
  /** @return string */
  public function getRevocationTime()
  {
    return $this->revocationTime;
  }
}

class RevokeCertificateRequest extends \Google\Model
{
  /** @var string */
  public $reason;
  /** @var string */
  public $requestId;

  /** @param string */
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /** @return string */
  public function getReason()
  {
    return $this->reason;
  }
  /** @param string */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
  }
}

class RevokedCertificate extends \Google\Model
{
  /** @var string */
  public $certificate;
  /** @var string */
  public $hexSerialNumber;
  /** @var string */
  public $revocationReason;

  /** @param string */
  public function setCertificate($certificate)
  {
    $this->certificate = $certificate;
  }
  /** @return string */
  public function getCertificate()
  {
    return $this->certificate;
  }
  /** @param string */
  public function setHexSerialNumber($hexSerialNumber)
  {
    $this->hexSerialNumber = $hexSerialNumber;
  }
  /** @return string */
  public function getHexSerialNumber()
  {
    return $this->hexSerialNumber;
  }
  /** @param string */
  public function setRevocationReason($revocationReason)
  {
    $this->revocationReason = $revocationReason;
  }
  /** @return string */
  public function getRevocationReason()
  {
    return $this->revocationReason;
  }
}

class RsaKeyType extends \Google\Model
{
  /** @var string */
  public $maxModulusSize;
  /** @var string */
  public $minModulusSize;

  /** @param string */
  public function setMaxModulusSize($maxModulusSize)
  {
    $this->maxModulusSize = $maxModulusSize;
  }
  /** @return string */
  public function getMaxModulusSize()
  {
    return $this->maxModulusSize;
  }
  /** @param string */
  public function setMinModulusSize($minModulusSize)
  {
    $this->minModulusSize = $minModulusSize;
  }
  /** @return string */
  public function getMinModulusSize()
  {
    return $this->minModulusSize;
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

class Subject extends \Google\Model
{
  /** @var string */
  public $commonName;
  /** @var string */
  public $countryCode;
  /** @var string */
  public $locality;
  /** @var string */
  public $organization;
  /** @var string */
  public $organizationalUnit;
  /** @var string */
  public $postalCode;
  /** @var string */
  public $province;
  /** @var string */
  public $streetAddress;

  /** @param string */
  public function setCommonName($commonName)
  {
    $this->commonName = $commonName;
  }
  /** @return string */
  public function getCommonName()
  {
    return $this->commonName;
  }
  /** @param string */
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  /** @return string */
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  /** @param string */
  public function setLocality($locality)
  {
    $this->locality = $locality;
  }
  /** @return string */
  public function getLocality()
  {
    return $this->locality;
  }
  /** @param string */
  public function setOrganization($organization)
  {
    $this->organization = $organization;
  }
  /** @return string */
  public function getOrganization()
  {
    return $this->organization;
  }
  /** @param string */
  public function setOrganizationalUnit($organizationalUnit)
  {
    $this->organizationalUnit = $organizationalUnit;
  }
  /** @return string */
  public function getOrganizationalUnit()
  {
    return $this->organizationalUnit;
  }
  /** @param string */
  public function setPostalCode($postalCode)
  {
    $this->postalCode = $postalCode;
  }
  /** @return string */
  public function getPostalCode()
  {
    return $this->postalCode;
  }
  /** @param string */
  public function setProvince($province)
  {
    $this->province = $province;
  }
  /** @return string */
  public function getProvince()
  {
    return $this->province;
  }
  /** @param string */
  public function setStreetAddress($streetAddress)
  {
    $this->streetAddress = $streetAddress;
  }
  /** @return string */
  public function getStreetAddress()
  {
    return $this->streetAddress;
  }
}

class SubjectAltNames extends \Google\Collection
{
  /** @var X509Extension[] */
  public $customSans;
  /** @var string[] */
  public $dnsNames;
  /** @var string[] */
  public $emailAddresses;
  /** @var string[] */
  public $ipAddresses;
  /** @var string[] */
  public $uris;
  protected $collection_key = 'uris';
  protected $customSansType = X509Extension::class;
  protected $customSansDataType = 'array';
  /** @param X509Extension[] */
  public function setCustomSans($customSans)
  {
    $this->customSans = $customSans;
  }
  /** @return X509Extension[] */
  public function getCustomSans()
  {
    return $this->customSans;
  }
  /** @param string[] */
  public function setDnsNames($dnsNames)
  {
    $this->dnsNames = $dnsNames;
  }
  /** @return string[] */
  public function getDnsNames()
  {
    return $this->dnsNames;
  }
  /** @param string[] */
  public function setEmailAddresses($emailAddresses)
  {
    $this->emailAddresses = $emailAddresses;
  }
  /** @return string[] */
  public function getEmailAddresses()
  {
    return $this->emailAddresses;
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

class SubjectConfig extends \Google\Model
{
  /** @var Subject */
  public $subject;
  /** @var SubjectAltNames */
  public $subjectAltName;
  protected $subjectType = Subject::class;
  protected $subjectDataType = '';
  protected $subjectAltNameType = SubjectAltNames::class;
  protected $subjectAltNameDataType = '';
  /** @param Subject */
  public function setSubject(Subject $subject)
  {
    $this->subject = $subject;
  }
  /** @return Subject */
  public function getSubject()
  {
    return $this->subject;
  }
  /** @param SubjectAltNames */
  public function setSubjectAltName(SubjectAltNames $subjectAltName)
  {
    $this->subjectAltName = $subjectAltName;
  }
  /** @return SubjectAltNames */
  public function getSubjectAltName()
  {
    return $this->subjectAltName;
  }
}

class SubjectDescription extends \Google\Model
{
  /** @var string */
  public $hexSerialNumber;
  /** @var string */
  public $lifetime;
  /** @var string */
  public $notAfterTime;
  /** @var string */
  public $notBeforeTime;
  /** @var Subject */
  public $subject;
  /** @var SubjectAltNames */
  public $subjectAltName;
  protected $subjectType = Subject::class;
  protected $subjectDataType = '';
  protected $subjectAltNameType = SubjectAltNames::class;
  protected $subjectAltNameDataType = '';
  /** @param string */
  public function setHexSerialNumber($hexSerialNumber)
  {
    $this->hexSerialNumber = $hexSerialNumber;
  }
  /** @return string */
  public function getHexSerialNumber()
  {
    return $this->hexSerialNumber;
  }
  /** @param string */
  public function setLifetime($lifetime)
  {
    $this->lifetime = $lifetime;
  }
  /** @return string */
  public function getLifetime()
  {
    return $this->lifetime;
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
  /** @param Subject */
  public function setSubject(Subject $subject)
  {
    $this->subject = $subject;
  }
  /** @return Subject */
  public function getSubject()
  {
    return $this->subject;
  }
  /** @param SubjectAltNames */
  public function setSubjectAltName(SubjectAltNames $subjectAltName)
  {
    $this->subjectAltName = $subjectAltName;
  }
  /** @return SubjectAltNames */
  public function getSubjectAltName()
  {
    return $this->subjectAltName;
  }
}

class SubordinateConfig extends \Google\Model
{
  /** @var string */
  public $certificateAuthority;
  /** @var SubordinateConfigChain */
  public $pemIssuerChain;
  protected $pemIssuerChainType = SubordinateConfigChain::class;
  protected $pemIssuerChainDataType = '';
  /** @param string */
  public function setCertificateAuthority($certificateAuthority)
  {
    $this->certificateAuthority = $certificateAuthority;
  }
  /** @return string */
  public function getCertificateAuthority()
  {
    return $this->certificateAuthority;
  }
  /** @param SubordinateConfigChain */
  public function setPemIssuerChain(SubordinateConfigChain $pemIssuerChain)
  {
    $this->pemIssuerChain = $pemIssuerChain;
  }
  /** @return SubordinateConfigChain */
  public function getPemIssuerChain()
  {
    return $this->pemIssuerChain;
  }
}

class SubordinateConfigChain extends \Google\Collection
{
  /** @var string[] */
  public $pemCertificates;
  protected $collection_key = 'pemCertificates';
  /** @param string[] */
  public function setPemCertificates($pemCertificates)
  {
    $this->pemCertificates = $pemCertificates;
  }
  /** @return string[] */
  public function getPemCertificates()
  {
    return $this->pemCertificates;
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

class UndeleteCertificateAuthorityRequest extends \Google\Model
{
  /** @var string */
  public $requestId;

  /** @param string */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
  }
}

class X509Extension extends \Google\Model
{
  /** @var bool */
  public $critical;
  /** @var ObjectId */
  public $objectId;
  /** @var string */
  public $value;
  protected $objectIdType = ObjectId::class;
  protected $objectIdDataType = '';
  /** @param bool */
  public function setCritical($critical)
  {
    $this->critical = $critical;
  }
  /** @return bool */
  public function getCritical()
  {
    return $this->critical;
  }
  /** @param ObjectId */
  public function setObjectId(ObjectId $objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return ObjectId */
  public function getObjectId()
  {
    return $this->objectId;
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

class X509Parameters extends \Google\Collection
{
  /** @var X509Extension[] */
  public $additionalExtensions;
  /** @var string[] */
  public $aiaOcspServers;
  /** @var CaOptions */
  public $caOptions;
  /** @var KeyUsage */
  public $keyUsage;
  /** @var ObjectId[] */
  public $policyIds;
  protected $collection_key = 'policyIds';
  protected $additionalExtensionsType = X509Extension::class;
  protected $additionalExtensionsDataType = 'array';
  protected $caOptionsType = CaOptions::class;
  protected $caOptionsDataType = '';
  protected $keyUsageType = KeyUsage::class;
  protected $keyUsageDataType = '';
  protected $policyIdsType = ObjectId::class;
  protected $policyIdsDataType = 'array';
  /** @param X509Extension[] */
  public function setAdditionalExtensions($additionalExtensions)
  {
    $this->additionalExtensions = $additionalExtensions;
  }
  /** @return X509Extension[] */
  public function getAdditionalExtensions()
  {
    return $this->additionalExtensions;
  }
  /** @param string[] */
  public function setAiaOcspServers($aiaOcspServers)
  {
    $this->aiaOcspServers = $aiaOcspServers;
  }
  /** @return string[] */
  public function getAiaOcspServers()
  {
    return $this->aiaOcspServers;
  }
  /** @param CaOptions */
  public function setCaOptions(CaOptions $caOptions)
  {
    $this->caOptions = $caOptions;
  }
  /** @return CaOptions */
  public function getCaOptions()
  {
    return $this->caOptions;
  }
  /** @param KeyUsage */
  public function setKeyUsage(KeyUsage $keyUsage)
  {
    $this->keyUsage = $keyUsage;
  }
  /** @return KeyUsage */
  public function getKeyUsage()
  {
    return $this->keyUsage;
  }
  /** @param ObjectId[] */
  public function setPolicyIds($policyIds)
  {
    $this->policyIds = $policyIds;
  }
  /** @return ObjectId[] */
  public function getPolicyIds()
  {
    return $this->policyIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccessUrls::class, 'Google_Service_CertificateAuthorityService_AccessUrls');
class_alias(ActivateCertificateAuthorityRequest::class, 'Google_Service_CertificateAuthorityService_ActivateCertificateAuthorityRequest');
class_alias(AllowedKeyType::class, 'Google_Service_CertificateAuthorityService_AllowedKeyType');
class_alias(AuditConfig::class, 'Google_Service_CertificateAuthorityService_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_CertificateAuthorityService_AuditLogConfig');
class_alias(Binding::class, 'Google_Service_CertificateAuthorityService_Binding');
class_alias(CaOptions::class, 'Google_Service_CertificateAuthorityService_CaOptions');
class_alias(CaPool::class, 'Google_Service_CertificateAuthorityService_CaPool');
class_alias(CancelOperationRequest::class, 'Google_Service_CertificateAuthorityService_CancelOperationRequest');
class_alias(CertChain::class, 'Google_Service_CertificateAuthorityService_CertChain');
class_alias(Certificate::class, 'Google_Service_CertificateAuthorityService_Certificate');
class_alias(CertificateAuthority::class, 'Google_Service_CertificateAuthorityService_CertificateAuthority');
class_alias(CertificateConfig::class, 'Google_Service_CertificateAuthorityService_CertificateConfig');
class_alias(CertificateDescription::class, 'Google_Service_CertificateAuthorityService_CertificateDescription');
class_alias(CertificateExtensionConstraints::class, 'Google_Service_CertificateAuthorityService_CertificateExtensionConstraints');
class_alias(CertificateFingerprint::class, 'Google_Service_CertificateAuthorityService_CertificateFingerprint');
class_alias(CertificateIdentityConstraints::class, 'Google_Service_CertificateAuthorityService_CertificateIdentityConstraints');
class_alias(CertificateRevocationList::class, 'Google_Service_CertificateAuthorityService_CertificateRevocationList');
class_alias(CertificateTemplate::class, 'Google_Service_CertificateAuthorityService_CertificateTemplate');
class_alias(DisableCertificateAuthorityRequest::class, 'Google_Service_CertificateAuthorityService_DisableCertificateAuthorityRequest');
class_alias(EcKeyType::class, 'Google_Service_CertificateAuthorityService_EcKeyType');
class_alias(EnableCertificateAuthorityRequest::class, 'Google_Service_CertificateAuthorityService_EnableCertificateAuthorityRequest');
class_alias(Expr::class, 'Google_Service_CertificateAuthorityService_Expr');
class_alias(ExtendedKeyUsageOptions::class, 'Google_Service_CertificateAuthorityService_ExtendedKeyUsageOptions');
class_alias(FetchCaCertsRequest::class, 'Google_Service_CertificateAuthorityService_FetchCaCertsRequest');
class_alias(FetchCaCertsResponse::class, 'Google_Service_CertificateAuthorityService_FetchCaCertsResponse');
class_alias(FetchCertificateAuthorityCsrResponse::class, 'Google_Service_CertificateAuthorityService_FetchCertificateAuthorityCsrResponse');
class_alias(IssuanceModes::class, 'Google_Service_CertificateAuthorityService_IssuanceModes');
class_alias(IssuancePolicy::class, 'Google_Service_CertificateAuthorityService_IssuancePolicy');
class_alias(KeyId::class, 'Google_Service_CertificateAuthorityService_KeyId');
class_alias(KeyUsage::class, 'Google_Service_CertificateAuthorityService_KeyUsage');
class_alias(KeyUsageOptions::class, 'Google_Service_CertificateAuthorityService_KeyUsageOptions');
class_alias(KeyVersionSpec::class, 'Google_Service_CertificateAuthorityService_KeyVersionSpec');
class_alias(ListCaPoolsResponse::class, 'Google_Service_CertificateAuthorityService_ListCaPoolsResponse');
class_alias(ListCertificateAuthoritiesResponse::class, 'Google_Service_CertificateAuthorityService_ListCertificateAuthoritiesResponse');
class_alias(ListCertificateRevocationListsResponse::class, 'Google_Service_CertificateAuthorityService_ListCertificateRevocationListsResponse');
class_alias(ListCertificateTemplatesResponse::class, 'Google_Service_CertificateAuthorityService_ListCertificateTemplatesResponse');
class_alias(ListCertificatesResponse::class, 'Google_Service_CertificateAuthorityService_ListCertificatesResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_CertificateAuthorityService_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_CertificateAuthorityService_ListOperationsResponse');
class_alias(Location::class, 'Google_Service_CertificateAuthorityService_Location');
class_alias(ObjectId::class, 'Google_Service_CertificateAuthorityService_ObjectId');
class_alias(Operation::class, 'Google_Service_CertificateAuthorityService_Operation');
class_alias(OperationMetadata::class, 'Google_Service_CertificateAuthorityService_OperationMetadata');
class_alias(Policy::class, 'Google_Service_CertificateAuthorityService_Policy');
class_alias(PrivatecaEmpty::class, 'Google_Service_CertificateAuthorityService_PrivatecaEmpty');
class_alias(PublicKey::class, 'Google_Service_CertificateAuthorityService_PublicKey');
class_alias(PublishingOptions::class, 'Google_Service_CertificateAuthorityService_PublishingOptions');
class_alias(ReconciliationOperationMetadata::class, 'Google_Service_CertificateAuthorityService_ReconciliationOperationMetadata');
class_alias(RevocationDetails::class, 'Google_Service_CertificateAuthorityService_RevocationDetails');
class_alias(RevokeCertificateRequest::class, 'Google_Service_CertificateAuthorityService_RevokeCertificateRequest');
class_alias(RevokedCertificate::class, 'Google_Service_CertificateAuthorityService_RevokedCertificate');
class_alias(RsaKeyType::class, 'Google_Service_CertificateAuthorityService_RsaKeyType');
class_alias(SetIamPolicyRequest::class, 'Google_Service_CertificateAuthorityService_SetIamPolicyRequest');
class_alias(Status::class, 'Google_Service_CertificateAuthorityService_Status');
class_alias(Subject::class, 'Google_Service_CertificateAuthorityService_Subject');
class_alias(SubjectAltNames::class, 'Google_Service_CertificateAuthorityService_SubjectAltNames');
class_alias(SubjectConfig::class, 'Google_Service_CertificateAuthorityService_SubjectConfig');
class_alias(SubjectDescription::class, 'Google_Service_CertificateAuthorityService_SubjectDescription');
class_alias(SubordinateConfig::class, 'Google_Service_CertificateAuthorityService_SubordinateConfig');
class_alias(SubordinateConfigChain::class, 'Google_Service_CertificateAuthorityService_SubordinateConfigChain');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_CertificateAuthorityService_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_CertificateAuthorityService_TestIamPermissionsResponse');
class_alias(UndeleteCertificateAuthorityRequest::class, 'Google_Service_CertificateAuthorityService_UndeleteCertificateAuthorityRequest');
class_alias(X509Extension::class, 'Google_Service_CertificateAuthorityService_X509Extension');
class_alias(X509Parameters::class, 'Google_Service_CertificateAuthorityService_X509Parameters');
