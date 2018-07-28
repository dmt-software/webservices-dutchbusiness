<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class DossierV3
 *
 * @JMS\AccessType("public_method")
 */
class DossierV3
{
                        
    /**
     * @JMS\SerializedName("update_info")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\UpdateReference")
     * @JMS\XmlElement(cdata=false)
     *
     * @var UpdateReference
     */
    protected $updateInfo;
                                    
    /**
     * @JMS\SerializedName("dossier_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $dossierNumber;
                                    
    /**
     * @JMS\SerializedName("establishment_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $establishmentNumber;
                                    
    /**
     * @JMS\SerializedName("main_establishment_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $mainEstablishmentNumber;
                                    
    /**
     * @JMS\SerializedName("indication_main_establishment")
     * @JMS\Type("boolean")
     * @JMS\XmlElement(cdata=false)
     *
     * @var bool
     */
    protected $indicationMainEstablishment;
                                    
    /**
     * @JMS\SerializedName("rsin_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $rsinNumber;
                                    
    /**
     * @JMS\SerializedName("chamber_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $chamberNumber;
                                    
    /**
     * @JMS\SerializedName("legal_form_code")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $legalFormCode;
                                    
    /**
     * @JMS\SerializedName("legal_form_text")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $legalFormText;
                                    
    /**
     * @JMS\SerializedName("indication_organisation_code")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $indicationOrganisationCode;
                                    
    /**
     * @JMS\SerializedName("legal_name")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $legalName;
                                    
    /**
     * @JMS\SerializedName("trade_name_45")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $tradeName45;
                                    
    /**
     * @JMS\SerializedName("trade_name_full")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $tradeNameFull;
                                    
    /**
     * @JMS\SerializedName("trade_names")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $tradeNames;
                                    
    /**
     * @JMS\SerializedName("establishment_address")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\FormattedAddress")
     * @JMS\XmlElement(cdata=false)
     *
     * @var FormattedAddress
     */
    protected $establishmentAddress;
                                    
    /**
     * @JMS\SerializedName("correspondence_address")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\FormattedAddress")
     * @JMS\XmlElement(cdata=false)
     *
     * @var FormattedAddress
     */
    protected $correspondenceAddress;
                                    
    /**
     * @JMS\SerializedName("telephone_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $telephoneNumber;
                                    
    /**
     * @JMS\SerializedName("mobile_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $mobileNumber;
                                    
    /**
     * @JMS\SerializedName("domain_name")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $domainName;
                                    
    /**
     * @JMS\SerializedName("contact_title1")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $contactTitle1;
                                    
    /**
     * @JMS\SerializedName("contact_title2")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $contactTitle2;
                                    
    /**
     * @JMS\SerializedName("contact_initials")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $contactInitials;
                                    
    /**
     * @JMS\SerializedName("contact_prefix")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $contactPrefix;
                                    
    /**
     * @JMS\SerializedName("contact_surname")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $contactSurname;
                                    
    /**
     * @JMS\SerializedName("contact_gender")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $contactGender;
                                    
    /**
     * @JMS\SerializedName("primary_sbi_code")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $primarySbiCode;
                                    
    /**
     * @JMS\SerializedName("secondary_sbi_code1")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $secondarySbiCode1;
                                    
    /**
     * @JMS\SerializedName("secondary_sbi_code2")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $secondarySbiCode2;
                                    
    /**
     * @JMS\SerializedName("primary_sbi_code_text")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $primarySbiCodeText;
                                    
    /**
     * @JMS\SerializedName("secondary_sbi_code1_text")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $secondarySbiCode1Text;
                                    
    /**
     * @JMS\SerializedName("secondary_sbi_code2_text")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $secondarySbiCode2Text;
                                    
    /**
     * @JMS\SerializedName("personnel")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $personnel;
                                    
    /**
     * @JMS\SerializedName("class_personnel")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $classPersonnel;
                                    
    /**
     * @JMS\SerializedName("personnel_fulltime")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $personnelFulltime;
                                    
    /**
     * @JMS\SerializedName("class_personnel_fulltime")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $classPersonnelFulltime;
                                    
    /**
     * @JMS\SerializedName("personnel_reference_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DateV3
     */
    protected $personnelReferenceDate;
                                    
    /**
     * @JMS\SerializedName("personnel_ci")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $personnelCi;
                                    
    /**
     * @JMS\SerializedName("class_personnel_ci")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $classPersonnelCi;
                                    
    /**
     * @JMS\SerializedName("personnel_ci_reference_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DateV3
     */
    protected $personnelCiReferenceDate;
                                    
    /**
     * @JMS\SerializedName("indication_import")
     * @JMS\Type("boolean")
     * @JMS\XmlElement(cdata=false)
     *
     * @var bool
     */
    protected $indicationImport;
                                    
    /**
     * @JMS\SerializedName("indication_export")
     * @JMS\Type("boolean")
     * @JMS\XmlElement(cdata=false)
     *
     * @var bool
     */
    protected $indicationExport;
                                    
    /**
     * @JMS\SerializedName("indication_economically_active")
     * @JMS\Type("boolean")
     * @JMS\XmlElement(cdata=false)
     *
     * @var bool
     */
    protected $indicationEconomicallyActive;
                                    
    /**
     * @JMS\SerializedName("indication_non_mailing")
     * @JMS\Type("boolean")
     * @JMS\XmlElement(cdata=false)
     *
     * @var bool
     */
    protected $indicationNonMailing;
                                    
    /**
     * @JMS\SerializedName("indication_bankruptcy")
     * @JMS\Type("boolean")
     * @JMS\XmlElement(cdata=false)
     *
     * @var bool
     */
    protected $indicationBankruptcy;
                                    
    /**
     * @JMS\SerializedName("indication_dip")
     * @JMS\Type("boolean")
     * @JMS\XmlElement(cdata=false)
     *
     * @var bool
     */
    protected $indicationDip;
                                    
    /**
     * @JMS\SerializedName("insolvencies")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\Insolvency>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var Insolvency[]
     */
    protected $insolvencies;
                                    
    /**
     * @JMS\SerializedName("authorized_share_capital")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $authorizedShareCapital;
                                    
    /**
     * @JMS\SerializedName("authorized_share_capital_currency")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $authorizedShareCapitalCurrency;
                                    
    /**
     * @JMS\SerializedName("paid_up_share_capital")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $paidUpShareCapital;
                                    
    /**
     * @JMS\SerializedName("paid_up_share_capital_currency")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $paidUpShareCapitalCurrency;
                                    
    /**
     * @JMS\SerializedName("issued_share_capital")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $issuedShareCapital;
                                    
    /**
     * @JMS\SerializedName("issued_share_capital_currency")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $issuedShareCapitalCurrency;
                                    
    /**
     * @JMS\SerializedName("founding_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DateV3
     */
    protected $foundingDate;
                                    
    /**
     * @JMS\SerializedName("discontinuation_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DateV3
     */
    protected $discontinuationDate;
                                    
    /**
     * @JMS\SerializedName("continuation_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DateV3
     */
    protected $continuationDate;
                                    
    /**
     * @JMS\SerializedName("establishment_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DateV3
     */
    protected $establishmentDate;
                                    
    /**
     * @JMS\SerializedName("annual_financial_statement_summary")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\AnnualFinancialStatementSummary")
     * @JMS\XmlElement(cdata=false)
     *
     * @var AnnualFinancialStatementSummary
     */
    protected $annualFinancialStatementSummary;
                                    
    /**
     * @JMS\SerializedName("structure")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Structure")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Structure
     */
    protected $structure;
                                    
    /**
     * @JMS\SerializedName("sbi_collection")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\SBICollection")
     * @JMS\XmlElement(cdata=false)
     *
     * @var SBICollection
     */
    protected $sbiCollection;
                                    
    /**
     * @return UpdateReference
     */
    public function getUpdateInfo(): ?UpdateReference
    {
        return $this->updateInfo;
    }

    /**
     * @param UpdateReference $updateInfo
     */
    public function setUpdateInfo(UpdateReference $updateInfo): void
    {
        $this->updateInfo = $updateInfo;
    }
                                    
    /**
     * @return string
     */
    public function getDossierNumber(): ?string
    {
        return $this->dossierNumber;
    }

    /**
     * @param string $dossierNumber
     */
    public function setDossierNumber(string $dossierNumber): void
    {
        $this->dossierNumber = $dossierNumber;
    }
                                    
    /**
     * @return string
     */
    public function getEstablishmentNumber(): ?string
    {
        return $this->establishmentNumber;
    }

    /**
     * @param string $establishmentNumber
     */
    public function setEstablishmentNumber(string $establishmentNumber): void
    {
        $this->establishmentNumber = $establishmentNumber;
    }
                                    
    /**
     * @return string
     */
    public function getMainEstablishmentNumber(): ?string
    {
        return $this->mainEstablishmentNumber;
    }

    /**
     * @param string $mainEstablishmentNumber
     */
    public function setMainEstablishmentNumber(string $mainEstablishmentNumber): void
    {
        $this->mainEstablishmentNumber = $mainEstablishmentNumber;
    }
                                    
    /**
     * @return bool
     */
    public function isIndicationMainEstablishment(): ?bool
    {
        return $this->indicationMainEstablishment;
    }

    /**
     * @param bool $indicationMainEstablishment
     */
    public function setIndicationMainEstablishment(bool $indicationMainEstablishment): void
    {
        $this->indicationMainEstablishment = $indicationMainEstablishment;
    }
                                    
    /**
     * @return string
     */
    public function getRsinNumber(): ?string
    {
        return $this->rsinNumber;
    }

    /**
     * @param string $rsinNumber
     */
    public function setRsinNumber(string $rsinNumber): void
    {
        $this->rsinNumber = $rsinNumber;
    }
                                    
    /**
     * @return string
     */
    public function getChamberNumber(): ?string
    {
        return $this->chamberNumber;
    }

    /**
     * @param string $chamberNumber
     */
    public function setChamberNumber(string $chamberNumber): void
    {
        $this->chamberNumber = $chamberNumber;
    }
                                    
    /**
     * @return string
     */
    public function getLegalFormCode(): ?string
    {
        return $this->legalFormCode;
    }

    /**
     * @param string $legalFormCode
     */
    public function setLegalFormCode(string $legalFormCode): void
    {
        $this->legalFormCode = $legalFormCode;
    }
                                    
    /**
     * @return string
     */
    public function getLegalFormText(): ?string
    {
        return $this->legalFormText;
    }

    /**
     * @param string $legalFormText
     */
    public function setLegalFormText(string $legalFormText): void
    {
        $this->legalFormText = $legalFormText;
    }
                                    
    /**
     * @return string
     */
    public function getIndicationOrganisationCode(): ?string
    {
        return $this->indicationOrganisationCode;
    }

    /**
     * @param string $indicationOrganisationCode
     */
    public function setIndicationOrganisationCode(string $indicationOrganisationCode): void
    {
        $this->indicationOrganisationCode = $indicationOrganisationCode;
    }
                                    
    /**
     * @return string
     */
    public function getLegalName(): ?string
    {
        return $this->legalName;
    }

    /**
     * @param string $legalName
     */
    public function setLegalName(string $legalName): void
    {
        $this->legalName = $legalName;
    }
                                    
    /**
     * @return string
     */
    public function getTradeName45(): ?string
    {
        return $this->tradeName45;
    }

    /**
     * @param string $tradeName45
     */
    public function setTradeName45(string $tradeName45): void
    {
        $this->tradeName45 = $tradeName45;
    }
                                    
    /**
     * @return string
     */
    public function getTradeNameFull(): ?string
    {
        return $this->tradeNameFull;
    }

    /**
     * @param string $tradeNameFull
     */
    public function setTradeNameFull(string $tradeNameFull): void
    {
        $this->tradeNameFull = $tradeNameFull;
    }
                                    
    /**
     * @return array
     */
    public function getTradeNames(): ?array
    {
        return $this->tradeNames;
    }

    /**
     * @param array $tradeNames
     */
    public function setTradeNames(array $tradeNames): void
    {
        $this->tradeNames = $tradeNames;
    }
                                    
    /**
     * @return FormattedAddress
     */
    public function getEstablishmentAddress(): ?FormattedAddress
    {
        return $this->establishmentAddress;
    }

    /**
     * @param FormattedAddress $establishmentAddress
     */
    public function setEstablishmentAddress(FormattedAddress $establishmentAddress): void
    {
        $this->establishmentAddress = $establishmentAddress;
    }
                                    
    /**
     * @return FormattedAddress
     */
    public function getCorrespondenceAddress(): ?FormattedAddress
    {
        return $this->correspondenceAddress;
    }

    /**
     * @param FormattedAddress $correspondenceAddress
     */
    public function setCorrespondenceAddress(FormattedAddress $correspondenceAddress): void
    {
        $this->correspondenceAddress = $correspondenceAddress;
    }
                                    
    /**
     * @return string
     */
    public function getTelephoneNumber(): ?string
    {
        return $this->telephoneNumber;
    }

    /**
     * @param string $telephoneNumber
     */
    public function setTelephoneNumber(string $telephoneNumber): void
    {
        $this->telephoneNumber = $telephoneNumber;
    }
                                    
    /**
     * @return string
     */
    public function getMobileNumber(): ?string
    {
        return $this->mobileNumber;
    }

    /**
     * @param string $mobileNumber
     */
    public function setMobileNumber(string $mobileNumber): void
    {
        $this->mobileNumber = $mobileNumber;
    }
                                    
    /**
     * @return string
     */
    public function getDomainName(): ?string
    {
        return $this->domainName;
    }

    /**
     * @param string $domainName
     */
    public function setDomainName(string $domainName): void
    {
        $this->domainName = $domainName;
    }
                                    
    /**
     * @return string
     */
    public function getContactTitle1(): ?string
    {
        return $this->contactTitle1;
    }

    /**
     * @param string $contactTitle1
     */
    public function setContactTitle1(string $contactTitle1): void
    {
        $this->contactTitle1 = $contactTitle1;
    }
                                    
    /**
     * @return string
     */
    public function getContactTitle2(): ?string
    {
        return $this->contactTitle2;
    }

    /**
     * @param string $contactTitle2
     */
    public function setContactTitle2(string $contactTitle2): void
    {
        $this->contactTitle2 = $contactTitle2;
    }
                                    
    /**
     * @return string
     */
    public function getContactInitials(): ?string
    {
        return $this->contactInitials;
    }

    /**
     * @param string $contactInitials
     */
    public function setContactInitials(string $contactInitials): void
    {
        $this->contactInitials = $contactInitials;
    }
                                    
    /**
     * @return string
     */
    public function getContactPrefix(): ?string
    {
        return $this->contactPrefix;
    }

    /**
     * @param string $contactPrefix
     */
    public function setContactPrefix(string $contactPrefix): void
    {
        $this->contactPrefix = $contactPrefix;
    }
                                    
    /**
     * @return string
     */
    public function getContactSurname(): ?string
    {
        return $this->contactSurname;
    }

    /**
     * @param string $contactSurname
     */
    public function setContactSurname(string $contactSurname): void
    {
        $this->contactSurname = $contactSurname;
    }
                                    
    /**
     * @return string
     */
    public function getContactGender(): ?string
    {
        return $this->contactGender;
    }

    /**
     * @param string $contactGender
     */
    public function setContactGender(string $contactGender): void
    {
        $this->contactGender = $contactGender;
    }
                                    
    /**
     * @return string
     */
    public function getPrimarySbiCode(): ?string
    {
        return $this->primarySbiCode;
    }

    /**
     * @param string $primarySbiCode
     */
    public function setPrimarySbiCode(string $primarySbiCode): void
    {
        $this->primarySbiCode = $primarySbiCode;
    }
                                    
    /**
     * @return string
     */
    public function getSecondarySbiCode1(): ?string
    {
        return $this->secondarySbiCode1;
    }

    /**
     * @param string $secondarySbiCode1
     */
    public function setSecondarySbiCode1(string $secondarySbiCode1): void
    {
        $this->secondarySbiCode1 = $secondarySbiCode1;
    }
                                    
    /**
     * @return string
     */
    public function getSecondarySbiCode2(): ?string
    {
        return $this->secondarySbiCode2;
    }

    /**
     * @param string $secondarySbiCode2
     */
    public function setSecondarySbiCode2(string $secondarySbiCode2): void
    {
        $this->secondarySbiCode2 = $secondarySbiCode2;
    }
                                    
    /**
     * @return string
     */
    public function getPrimarySbiCodeText(): ?string
    {
        return $this->primarySbiCodeText;
    }

    /**
     * @param string $primarySbiCodeText
     */
    public function setPrimarySbiCodeText(string $primarySbiCodeText): void
    {
        $this->primarySbiCodeText = $primarySbiCodeText;
    }
                                    
    /**
     * @return string
     */
    public function getSecondarySbiCode1Text(): ?string
    {
        return $this->secondarySbiCode1Text;
    }

    /**
     * @param string $secondarySbiCode1Text
     */
    public function setSecondarySbiCode1Text(string $secondarySbiCode1Text): void
    {
        $this->secondarySbiCode1Text = $secondarySbiCode1Text;
    }
                                    
    /**
     * @return string
     */
    public function getSecondarySbiCode2Text(): ?string
    {
        return $this->secondarySbiCode2Text;
    }

    /**
     * @param string $secondarySbiCode2Text
     */
    public function setSecondarySbiCode2Text(string $secondarySbiCode2Text): void
    {
        $this->secondarySbiCode2Text = $secondarySbiCode2Text;
    }
                                    
    /**
     * @return int
     */
    public function getPersonnel(): ?int
    {
        return $this->personnel;
    }

    /**
     * @param int $personnel
     */
    public function setPersonnel(int $personnel): void
    {
        $this->personnel = $personnel;
    }
                                    
    /**
     * @return int
     */
    public function getClassPersonnel(): ?int
    {
        return $this->classPersonnel;
    }

    /**
     * @param int $classPersonnel
     */
    public function setClassPersonnel(int $classPersonnel): void
    {
        $this->classPersonnel = $classPersonnel;
    }
                                    
    /**
     * @return int
     */
    public function getPersonnelFulltime(): ?int
    {
        return $this->personnelFulltime;
    }

    /**
     * @param int $personnelFulltime
     */
    public function setPersonnelFulltime(int $personnelFulltime): void
    {
        $this->personnelFulltime = $personnelFulltime;
    }
                                    
    /**
     * @return int
     */
    public function getClassPersonnelFulltime(): ?int
    {
        return $this->classPersonnelFulltime;
    }

    /**
     * @param int $classPersonnelFulltime
     */
    public function setClassPersonnelFulltime(int $classPersonnelFulltime): void
    {
        $this->classPersonnelFulltime = $classPersonnelFulltime;
    }
                                    
    /**
     * @return DateV3
     */
    public function getPersonnelReferenceDate(): ?DateV3
    {
        return $this->personnelReferenceDate;
    }

    /**
     * @param DateV3 $personnelReferenceDate
     */
    public function setPersonnelReferenceDate(DateV3 $personnelReferenceDate): void
    {
        $this->personnelReferenceDate = $personnelReferenceDate;
    }
                                    
    /**
     * @return int
     */
    public function getPersonnelCi(): ?int
    {
        return $this->personnelCi;
    }

    /**
     * @param int $personnelCi
     */
    public function setPersonnelCi(int $personnelCi): void
    {
        $this->personnelCi = $personnelCi;
    }
                                    
    /**
     * @return int
     */
    public function getClassPersonnelCi(): ?int
    {
        return $this->classPersonnelCi;
    }

    /**
     * @param int $classPersonnelCi
     */
    public function setClassPersonnelCi(int $classPersonnelCi): void
    {
        $this->classPersonnelCi = $classPersonnelCi;
    }
                                    
    /**
     * @return DateV3
     */
    public function getPersonnelCiReferenceDate(): ?DateV3
    {
        return $this->personnelCiReferenceDate;
    }

    /**
     * @param DateV3 $personnelCiReferenceDate
     */
    public function setPersonnelCiReferenceDate(DateV3 $personnelCiReferenceDate): void
    {
        $this->personnelCiReferenceDate = $personnelCiReferenceDate;
    }
                                    
    /**
     * @return bool
     */
    public function isIndicationImport(): ?bool
    {
        return $this->indicationImport;
    }

    /**
     * @param bool $indicationImport
     */
    public function setIndicationImport(bool $indicationImport): void
    {
        $this->indicationImport = $indicationImport;
    }
                                    
    /**
     * @return bool
     */
    public function isIndicationExport(): ?bool
    {
        return $this->indicationExport;
    }

    /**
     * @param bool $indicationExport
     */
    public function setIndicationExport(bool $indicationExport): void
    {
        $this->indicationExport = $indicationExport;
    }
                                    
    /**
     * @return bool
     */
    public function isIndicationEconomicallyActive(): ?bool
    {
        return $this->indicationEconomicallyActive;
    }

    /**
     * @param bool $indicationEconomicallyActive
     */
    public function setIndicationEconomicallyActive(bool $indicationEconomicallyActive): void
    {
        $this->indicationEconomicallyActive = $indicationEconomicallyActive;
    }
                                    
    /**
     * @return bool
     */
    public function isIndicationNonMailing(): ?bool
    {
        return $this->indicationNonMailing;
    }

    /**
     * @param bool $indicationNonMailing
     */
    public function setIndicationNonMailing(bool $indicationNonMailing): void
    {
        $this->indicationNonMailing = $indicationNonMailing;
    }
                                    
    /**
     * @return bool
     */
    public function isIndicationBankruptcy(): ?bool
    {
        return $this->indicationBankruptcy;
    }

    /**
     * @param bool $indicationBankruptcy
     */
    public function setIndicationBankruptcy(bool $indicationBankruptcy): void
    {
        $this->indicationBankruptcy = $indicationBankruptcy;
    }
                                    
    /**
     * @return bool
     */
    public function isIndicationDip(): ?bool
    {
        return $this->indicationDip;
    }

    /**
     * @param bool $indicationDip
     */
    public function setIndicationDip(bool $indicationDip): void
    {
        $this->indicationDip = $indicationDip;
    }
                                    
    /**
     * @return Insolvency[]
     */
    public function getInsolvencies(): ?array
    {
        return $this->insolvencies;
    }

    /**
     * @param Insolvency[] $insolvencies
     */
    public function setInsolvencies(array $insolvencies): void
    {
        $this->insolvencies = $insolvencies;
    }
                                    
    /**
     * @return int
     */
    public function getAuthorizedShareCapital(): ?int
    {
        return $this->authorizedShareCapital;
    }

    /**
     * @param int $authorizedShareCapital
     */
    public function setAuthorizedShareCapital(int $authorizedShareCapital): void
    {
        $this->authorizedShareCapital = $authorizedShareCapital;
    }
                                    
    /**
     * @return string
     */
    public function getAuthorizedShareCapitalCurrency(): ?string
    {
        return $this->authorizedShareCapitalCurrency;
    }

    /**
     * @param string $authorizedShareCapitalCurrency
     */
    public function setAuthorizedShareCapitalCurrency(string $authorizedShareCapitalCurrency): void
    {
        $this->authorizedShareCapitalCurrency = $authorizedShareCapitalCurrency;
    }
                                    
    /**
     * @return int
     */
    public function getPaidUpShareCapital(): ?int
    {
        return $this->paidUpShareCapital;
    }

    /**
     * @param int $paidUpShareCapital
     */
    public function setPaidUpShareCapital(int $paidUpShareCapital): void
    {
        $this->paidUpShareCapital = $paidUpShareCapital;
    }
                                    
    /**
     * @return string
     */
    public function getPaidUpShareCapitalCurrency(): ?string
    {
        return $this->paidUpShareCapitalCurrency;
    }

    /**
     * @param string $paidUpShareCapitalCurrency
     */
    public function setPaidUpShareCapitalCurrency(string $paidUpShareCapitalCurrency): void
    {
        $this->paidUpShareCapitalCurrency = $paidUpShareCapitalCurrency;
    }
                                    
    /**
     * @return int
     */
    public function getIssuedShareCapital(): ?int
    {
        return $this->issuedShareCapital;
    }

    /**
     * @param int $issuedShareCapital
     */
    public function setIssuedShareCapital(int $issuedShareCapital): void
    {
        $this->issuedShareCapital = $issuedShareCapital;
    }
                                    
    /**
     * @return string
     */
    public function getIssuedShareCapitalCurrency(): ?string
    {
        return $this->issuedShareCapitalCurrency;
    }

    /**
     * @param string $issuedShareCapitalCurrency
     */
    public function setIssuedShareCapitalCurrency(string $issuedShareCapitalCurrency): void
    {
        $this->issuedShareCapitalCurrency = $issuedShareCapitalCurrency;
    }
                                    
    /**
     * @return DateV3
     */
    public function getFoundingDate(): ?DateV3
    {
        return $this->foundingDate;
    }

    /**
     * @param DateV3 $foundingDate
     */
    public function setFoundingDate(DateV3 $foundingDate): void
    {
        $this->foundingDate = $foundingDate;
    }
                                    
    /**
     * @return DateV3
     */
    public function getDiscontinuationDate(): ?DateV3
    {
        return $this->discontinuationDate;
    }

    /**
     * @param DateV3 $discontinuationDate
     */
    public function setDiscontinuationDate(DateV3 $discontinuationDate): void
    {
        $this->discontinuationDate = $discontinuationDate;
    }
                                    
    /**
     * @return DateV3
     */
    public function getContinuationDate(): ?DateV3
    {
        return $this->continuationDate;
    }

    /**
     * @param DateV3 $continuationDate
     */
    public function setContinuationDate(DateV3 $continuationDate): void
    {
        $this->continuationDate = $continuationDate;
    }
                                    
    /**
     * @return DateV3
     */
    public function getEstablishmentDate(): ?DateV3
    {
        return $this->establishmentDate;
    }

    /**
     * @param DateV3 $establishmentDate
     */
    public function setEstablishmentDate(DateV3 $establishmentDate): void
    {
        $this->establishmentDate = $establishmentDate;
    }
                                    
    /**
     * @return AnnualFinancialStatementSummary
     */
    public function getAnnualFinancialStatementSummary(): ?AnnualFinancialStatementSummary
    {
        return $this->annualFinancialStatementSummary;
    }

    /**
     * @param AnnualFinancialStatementSummary $annualFinancialStatementSummary
     */
    public function setAnnualFinancialStatementSummary(
        AnnualFinancialStatementSummary $annualFinancialStatementSummary
    ): void {
        $this->annualFinancialStatementSummary = $annualFinancialStatementSummary;
    }
                                    
    /**
     * @return Structure
     */
    public function getStructure(): ?Structure
    {
        return $this->structure;
    }

    /**
     * @param Structure $structure
     */
    public function setStructure(Structure $structure): void
    {
        $this->structure = $structure;
    }
                                    
    /**
     * @return SBICollection
     */
    public function getSbiCollection(): ?SBICollection
    {
        return $this->sbiCollection;
    }

    /**
     * @param SBICollection $sbiCollection
     */
    public function setSbiCollection(SBICollection $sbiCollection): void
    {
        $this->sbiCollection = $sbiCollection;
    }
}
