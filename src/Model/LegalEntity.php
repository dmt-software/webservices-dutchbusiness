<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class LegalEntity
 *
 * @JMS\AccessType("public_method")
 */
class LegalEntity
{
                        
    /**
     * @JMS\SerializedName("rsin_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $rsinNumber;
                                    
    /**
     * @JMS\SerializedName("name")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $name;
                                    
    /**
     * @JMS\SerializedName("alternative_name")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $alternativeName;
                                    
    /**
     * @JMS\SerializedName("shortened_name")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $shortenedName;
                                    
    /**
     * @JMS\SerializedName("registration")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $registration;
                                    
    /**
     * @JMS\SerializedName("status")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $status;
                                    
    /**
     * @JMS\SerializedName("legal_form_text")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $legalFormText;
                                    
    /**
     * @JMS\SerializedName("legal_form_change")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $legalFormChange;
                                    
    /**
     * @JMS\SerializedName("foreign_legal_form_description")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $foreignLegalFormDescription;
                                    
    /**
     * @JMS\SerializedName("sbi_codes")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $sbiCodes;
                                    
    /**
     * @JMS\SerializedName("sbi_codes_text")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $sbiCodesText;
                                    
    /**
     * @JMS\SerializedName("activity")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $activity;
                                    
    /**
     * @JMS\SerializedName("company_arrangement")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $companyArrangement;
                                    
    /**
     * @JMS\SerializedName("legal_name")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $legalName;
                                    
    /**
     * @JMS\SerializedName("statutory_seat")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $statutorySeat;
                                    
    /**
     * @JMS\SerializedName("registration_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Date
     */
    protected $registrationDate;
                                    
    /**
     * @JMS\SerializedName("founding_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Date
     */
    protected $foundingDate;
                                    
    /**
     * @JMS\SerializedName("discontinuation_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Date
     */
    protected $discontinuationDate;
                                    
    /**
     * @JMS\SerializedName("dissolution_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Date
     */
    protected $dissolutionDate;
                                    
    /**
     * @JMS\SerializedName("dissolution_reason")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $dissolutionReason;
                                    
    /**
     * @JMS\SerializedName("removal_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Date
     */
    protected $removalDate;
                                    
    /**
     * @JMS\SerializedName("registration_end_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Date
     */
    protected $registrationEndDate;
                                    
    /**
     * @JMS\SerializedName("legal_entity_end_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Date
     */
    protected $legalEntityEndDate;
                                    
    /**
     * @JMS\SerializedName("liquidation_closure_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Date
     */
    protected $liquidationClosureDate;
                                    
    /**
     * @JMS\SerializedName("liquidation_reopening_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Date
     */
    protected $liquidationReopeningDate;
                                    
    /**
     * @JMS\SerializedName("deed_incorporation_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Date
     */
    protected $deedIncorporationDate;
                                    
    /**
     * @JMS\SerializedName("deed_last_statutes_amendment_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Date
     */
    protected $deedLastStatutesAmendmentDate;
                                    
    /**
     * @JMS\SerializedName("last_statutes_amendment_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Date
     */
    protected $lastStatutesAmendmentDate;
                                    
    /**
     * @JMS\SerializedName("liability")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $liability;
                                    
    /**
     * @JMS\SerializedName("merger_description")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $mergerDescription;
                                    
    /**
     * @JMS\SerializedName("annual_report_submission")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $annualReportSubmission;
                                    
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
     * @JMS\SerializedName("establishment_postcode")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $establishmentPostcode;
                                    
    /**
     * @JMS\SerializedName("establishment_city")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $establishmentCity;
                                    
    /**
     * @JMS\SerializedName("establishment_street")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $establishmentStreet;
                                    
    /**
     * @JMS\SerializedName("establishment_house_number")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $establishmentHouseNumber;
                                    
    /**
     * @JMS\SerializedName("establishment_house_number_addition")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $establishmentHouseNumberAddition;
                                    
    /**
     * @JMS\SerializedName("establishment_country")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $establishmentCountry;
                                    
    /**
     * @JMS\SerializedName("correspondence_postcode")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $correspondencePostcode;
                                    
    /**
     * @JMS\SerializedName("correspondence_city")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $correspondenceCity;
                                    
    /**
     * @JMS\SerializedName("correspondence_street")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $correspondenceStreet;
                                    
    /**
     * @JMS\SerializedName("correspondence_house_number")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $correspondenceHouseNumber;
                                    
    /**
     * @JMS\SerializedName("correspondence_house_number_addition")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $correspondenceHouseNumberAddition;
                                    
    /**
     * @JMS\SerializedName("correspondence_country")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $correspondenceCountry;
                                    
    /**
     * @JMS\SerializedName("duration")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $duration;
                                    
    /**
     * @JMS\SerializedName("duration_end_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Date
     */
    protected $durationEndDate;
                                    
    /**
     * @JMS\SerializedName("shares")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $shares;
                                    
    /**
     * @JMS\SerializedName("share_holders")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $shareHolders;
                                    
    /**
     * @JMS\SerializedName("telephone_numbers")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $telephoneNumbers;
                                    
    /**
     * @JMS\SerializedName("fax_numbers")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $faxNumbers;
                                    
    /**
     * @JMS\SerializedName("email_addresses")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $emailAddresses;
                                    
    /**
     * @JMS\SerializedName("domain_names")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $domainNames;
                                    
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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
                                    
    /**
     * @return string
     */
    public function getAlternativeName(): ?string
    {
        return $this->alternativeName;
    }

    /**
     * @param string $alternativeName
     */
    public function setAlternativeName(string $alternativeName): void
    {
        $this->alternativeName = $alternativeName;
    }
                                    
    /**
     * @return string
     */
    public function getShortenedName(): ?string
    {
        return $this->shortenedName;
    }

    /**
     * @param string $shortenedName
     */
    public function setShortenedName(string $shortenedName): void
    {
        $this->shortenedName = $shortenedName;
    }
                                    
    /**
     * @return string
     */
    public function getRegistration(): ?string
    {
        return $this->registration;
    }

    /**
     * @param string $registration
     */
    public function setRegistration(string $registration): void
    {
        $this->registration = $registration;
    }
                                    
    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
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
    public function getLegalFormChange(): ?string
    {
        return $this->legalFormChange;
    }

    /**
     * @param string $legalFormChange
     */
    public function setLegalFormChange(string $legalFormChange): void
    {
        $this->legalFormChange = $legalFormChange;
    }
                                    
    /**
     * @return string
     */
    public function getForeignLegalFormDescription(): ?string
    {
        return $this->foreignLegalFormDescription;
    }

    /**
     * @param string $foreignLegalFormDescription
     */
    public function setForeignLegalFormDescription(string $foreignLegalFormDescription): void
    {
        $this->foreignLegalFormDescription = $foreignLegalFormDescription;
    }
                                    
    /**
     * @return array
     */
    public function getSbiCodes(): ?array
    {
        return $this->sbiCodes;
    }

    /**
     * @param array $sbiCodes
     */
    public function setSbiCodes(array $sbiCodes): void
    {
        $this->sbiCodes = $sbiCodes;
    }
                                    
    /**
     * @return array
     */
    public function getSbiCodesText(): ?array
    {
        return $this->sbiCodesText;
    }

    /**
     * @param array $sbiCodesText
     */
    public function setSbiCodesText(array $sbiCodesText): void
    {
        $this->sbiCodesText = $sbiCodesText;
    }
                                    
    /**
     * @return string
     */
    public function getActivity(): ?string
    {
        return $this->activity;
    }

    /**
     * @param string $activity
     */
    public function setActivity(string $activity): void
    {
        $this->activity = $activity;
    }
                                    
    /**
     * @return string
     */
    public function getCompanyArrangement(): ?string
    {
        return $this->companyArrangement;
    }

    /**
     * @param string $companyArrangement
     */
    public function setCompanyArrangement(string $companyArrangement): void
    {
        $this->companyArrangement = $companyArrangement;
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
    public function getStatutorySeat(): ?string
    {
        return $this->statutorySeat;
    }

    /**
     * @param string $statutorySeat
     */
    public function setStatutorySeat(string $statutorySeat): void
    {
        $this->statutorySeat = $statutorySeat;
    }
                                    
    /**
     * @return Date
     */
    public function getRegistrationDate(): ?Date
    {
        return $this->registrationDate;
    }

    /**
     * @param Date $registrationDate
     */
    public function setRegistrationDate(Date $registrationDate): void
    {
        $this->registrationDate = $registrationDate;
    }
                                    
    /**
     * @return Date
     */
    public function getFoundingDate(): ?Date
    {
        return $this->foundingDate;
    }

    /**
     * @param Date $foundingDate
     */
    public function setFoundingDate(Date $foundingDate): void
    {
        $this->foundingDate = $foundingDate;
    }
                                    
    /**
     * @return Date
     */
    public function getDiscontinuationDate(): ?Date
    {
        return $this->discontinuationDate;
    }

    /**
     * @param Date $discontinuationDate
     */
    public function setDiscontinuationDate(Date $discontinuationDate): void
    {
        $this->discontinuationDate = $discontinuationDate;
    }
                                    
    /**
     * @return Date
     */
    public function getDissolutionDate(): ?Date
    {
        return $this->dissolutionDate;
    }

    /**
     * @param Date $dissolutionDate
     */
    public function setDissolutionDate(Date $dissolutionDate): void
    {
        $this->dissolutionDate = $dissolutionDate;
    }
                                    
    /**
     * @return string
     */
    public function getDissolutionReason(): ?string
    {
        return $this->dissolutionReason;
    }

    /**
     * @param string $dissolutionReason
     */
    public function setDissolutionReason(string $dissolutionReason): void
    {
        $this->dissolutionReason = $dissolutionReason;
    }
                                    
    /**
     * @return Date
     */
    public function getRemovalDate(): ?Date
    {
        return $this->removalDate;
    }

    /**
     * @param Date $removalDate
     */
    public function setRemovalDate(Date $removalDate): void
    {
        $this->removalDate = $removalDate;
    }
                                    
    /**
     * @return Date
     */
    public function getRegistrationEndDate(): ?Date
    {
        return $this->registrationEndDate;
    }

    /**
     * @param Date $registrationEndDate
     */
    public function setRegistrationEndDate(Date $registrationEndDate): void
    {
        $this->registrationEndDate = $registrationEndDate;
    }
                                    
    /**
     * @return Date
     */
    public function getLegalEntityEndDate(): ?Date
    {
        return $this->legalEntityEndDate;
    }

    /**
     * @param Date $legalEntityEndDate
     */
    public function setLegalEntityEndDate(Date $legalEntityEndDate): void
    {
        $this->legalEntityEndDate = $legalEntityEndDate;
    }
                                    
    /**
     * @return Date
     */
    public function getLiquidationClosureDate(): ?Date
    {
        return $this->liquidationClosureDate;
    }

    /**
     * @param Date $liquidationClosureDate
     */
    public function setLiquidationClosureDate(Date $liquidationClosureDate): void
    {
        $this->liquidationClosureDate = $liquidationClosureDate;
    }
                                    
    /**
     * @return Date
     */
    public function getLiquidationReopeningDate(): ?Date
    {
        return $this->liquidationReopeningDate;
    }

    /**
     * @param Date $liquidationReopeningDate
     */
    public function setLiquidationReopeningDate(Date $liquidationReopeningDate): void
    {
        $this->liquidationReopeningDate = $liquidationReopeningDate;
    }
                                    
    /**
     * @return Date
     */
    public function getDeedIncorporationDate(): ?Date
    {
        return $this->deedIncorporationDate;
    }

    /**
     * @param Date $deedIncorporationDate
     */
    public function setDeedIncorporationDate(Date $deedIncorporationDate): void
    {
        $this->deedIncorporationDate = $deedIncorporationDate;
    }
                                    
    /**
     * @return Date
     */
    public function getDeedLastStatutesAmendmentDate(): ?Date
    {
        return $this->deedLastStatutesAmendmentDate;
    }

    /**
     * @param Date $deedLastStatutesAmendmentDate
     */
    public function setDeedLastStatutesAmendmentDate(Date $deedLastStatutesAmendmentDate): void
    {
        $this->deedLastStatutesAmendmentDate = $deedLastStatutesAmendmentDate;
    }
                                    
    /**
     * @return Date
     */
    public function getLastStatutesAmendmentDate(): ?Date
    {
        return $this->lastStatutesAmendmentDate;
    }

    /**
     * @param Date $lastStatutesAmendmentDate
     */
    public function setLastStatutesAmendmentDate(Date $lastStatutesAmendmentDate): void
    {
        $this->lastStatutesAmendmentDate = $lastStatutesAmendmentDate;
    }
                                    
    /**
     * @return string
     */
    public function getLiability(): ?string
    {
        return $this->liability;
    }

    /**
     * @param string $liability
     */
    public function setLiability(string $liability): void
    {
        $this->liability = $liability;
    }
                                    
    /**
     * @return string
     */
    public function getMergerDescription(): ?string
    {
        return $this->mergerDescription;
    }

    /**
     * @param string $mergerDescription
     */
    public function setMergerDescription(string $mergerDescription): void
    {
        $this->mergerDescription = $mergerDescription;
    }
                                    
    /**
     * @return string
     */
    public function getAnnualReportSubmission(): ?string
    {
        return $this->annualReportSubmission;
    }

    /**
     * @param string $annualReportSubmission
     */
    public function setAnnualReportSubmission(string $annualReportSubmission): void
    {
        $this->annualReportSubmission = $annualReportSubmission;
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
     * @return string
     */
    public function getEstablishmentPostcode(): ?string
    {
        return $this->establishmentPostcode;
    }

    /**
     * @param string $establishmentPostcode
     */
    public function setEstablishmentPostcode(string $establishmentPostcode): void
    {
        $this->establishmentPostcode = $establishmentPostcode;
    }
                                    
    /**
     * @return string
     */
    public function getEstablishmentCity(): ?string
    {
        return $this->establishmentCity;
    }

    /**
     * @param string $establishmentCity
     */
    public function setEstablishmentCity(string $establishmentCity): void
    {
        $this->establishmentCity = $establishmentCity;
    }
                                    
    /**
     * @return string
     */
    public function getEstablishmentStreet(): ?string
    {
        return $this->establishmentStreet;
    }

    /**
     * @param string $establishmentStreet
     */
    public function setEstablishmentStreet(string $establishmentStreet): void
    {
        $this->establishmentStreet = $establishmentStreet;
    }
                                    
    /**
     * @return int
     */
    public function getEstablishmentHouseNumber(): ?int
    {
        return $this->establishmentHouseNumber;
    }

    /**
     * @param int $establishmentHouseNumber
     */
    public function setEstablishmentHouseNumber(int $establishmentHouseNumber): void
    {
        $this->establishmentHouseNumber = $establishmentHouseNumber;
    }
                                    
    /**
     * @return string
     */
    public function getEstablishmentHouseNumberAddition(): ?string
    {
        return $this->establishmentHouseNumberAddition;
    }

    /**
     * @param string $establishmentHouseNumberAddition
     */
    public function setEstablishmentHouseNumberAddition(string $establishmentHouseNumberAddition): void
    {
        $this->establishmentHouseNumberAddition = $establishmentHouseNumberAddition;
    }
                                    
    /**
     * @return string
     */
    public function getEstablishmentCountry(): ?string
    {
        return $this->establishmentCountry;
    }

    /**
     * @param string $establishmentCountry
     */
    public function setEstablishmentCountry(string $establishmentCountry): void
    {
        $this->establishmentCountry = $establishmentCountry;
    }
                                    
    /**
     * @return string
     */
    public function getCorrespondencePostcode(): ?string
    {
        return $this->correspondencePostcode;
    }

    /**
     * @param string $correspondencePostcode
     */
    public function setCorrespondencePostcode(string $correspondencePostcode): void
    {
        $this->correspondencePostcode = $correspondencePostcode;
    }
                                    
    /**
     * @return string
     */
    public function getCorrespondenceCity(): ?string
    {
        return $this->correspondenceCity;
    }

    /**
     * @param string $correspondenceCity
     */
    public function setCorrespondenceCity(string $correspondenceCity): void
    {
        $this->correspondenceCity = $correspondenceCity;
    }
                                    
    /**
     * @return string
     */
    public function getCorrespondenceStreet(): ?string
    {
        return $this->correspondenceStreet;
    }

    /**
     * @param string $correspondenceStreet
     */
    public function setCorrespondenceStreet(string $correspondenceStreet): void
    {
        $this->correspondenceStreet = $correspondenceStreet;
    }
                                    
    /**
     * @return int
     */
    public function getCorrespondenceHouseNumber(): ?int
    {
        return $this->correspondenceHouseNumber;
    }

    /**
     * @param int $correspondenceHouseNumber
     */
    public function setCorrespondenceHouseNumber(int $correspondenceHouseNumber): void
    {
        $this->correspondenceHouseNumber = $correspondenceHouseNumber;
    }
                                    
    /**
     * @return string
     */
    public function getCorrespondenceHouseNumberAddition(): ?string
    {
        return $this->correspondenceHouseNumberAddition;
    }

    /**
     * @param string $correspondenceHouseNumberAddition
     */
    public function setCorrespondenceHouseNumberAddition(string $correspondenceHouseNumberAddition): void
    {
        $this->correspondenceHouseNumberAddition = $correspondenceHouseNumberAddition;
    }
                                    
    /**
     * @return string
     */
    public function getCorrespondenceCountry(): ?string
    {
        return $this->correspondenceCountry;
    }

    /**
     * @param string $correspondenceCountry
     */
    public function setCorrespondenceCountry(string $correspondenceCountry): void
    {
        $this->correspondenceCountry = $correspondenceCountry;
    }
                                    
    /**
     * @return string
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }

    /**
     * @param string $duration
     */
    public function setDuration(string $duration): void
    {
        $this->duration = $duration;
    }
                                    
    /**
     * @return Date
     */
    public function getDurationEndDate(): ?Date
    {
        return $this->durationEndDate;
    }

    /**
     * @param Date $durationEndDate
     */
    public function setDurationEndDate(Date $durationEndDate): void
    {
        $this->durationEndDate = $durationEndDate;
    }
                                    
    /**
     * @return string
     */
    public function getShares(): ?string
    {
        return $this->shares;
    }

    /**
     * @param string $shares
     */
    public function setShares(string $shares): void
    {
        $this->shares = $shares;
    }
                                    
    /**
     * @return string
     */
    public function getShareHolders(): ?string
    {
        return $this->shareHolders;
    }

    /**
     * @param string $shareHolders
     */
    public function setShareHolders(string $shareHolders): void
    {
        $this->shareHolders = $shareHolders;
    }
                                    
    /**
     * @return array
     */
    public function getTelephoneNumbers(): ?array
    {
        return $this->telephoneNumbers;
    }

    /**
     * @param array $telephoneNumbers
     */
    public function setTelephoneNumbers(array $telephoneNumbers): void
    {
        $this->telephoneNumbers = $telephoneNumbers;
    }
                                    
    /**
     * @return array
     */
    public function getFaxNumbers(): ?array
    {
        return $this->faxNumbers;
    }

    /**
     * @param array $faxNumbers
     */
    public function setFaxNumbers(array $faxNumbers): void
    {
        $this->faxNumbers = $faxNumbers;
    }
                                    
    /**
     * @return array
     */
    public function getEmailAddresses(): ?array
    {
        return $this->emailAddresses;
    }

    /**
     * @param array $emailAddresses
     */
    public function setEmailAddresses(array $emailAddresses): void
    {
        $this->emailAddresses = $emailAddresses;
    }
                                    
    /**
     * @return array
     */
    public function getDomainNames(): ?array
    {
        return $this->domainNames;
    }

    /**
     * @param array $domainNames
     */
    public function setDomainNames(array $domainNames): void
    {
        $this->domainNames = $domainNames;
    }
}
