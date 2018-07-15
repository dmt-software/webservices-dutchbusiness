<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class LegalEntityV3
 *
 * @JMS\AccessType("public_method")
 */
class LegalEntityV3
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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $registrationDate;

    /**
     * @JMS\SerializedName("founding_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $foundingDate;

    /**
     * @JMS\SerializedName("discontinuation_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $discontinuationDate;

    /**
     * @JMS\SerializedName("dissolution_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $removalDate;

    /**
     * @JMS\SerializedName("registration_end_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $registrationEndDate;

    /**
     * @JMS\SerializedName("legal_entity_end_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $legalEntityEndDate;

    /**
     * @JMS\SerializedName("liquidation_closure_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $liquidationClosureDate;

    /**
     * @JMS\SerializedName("liquidation_reopening_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $liquidationReopeningDate;

    /**
     * @JMS\SerializedName("deed_incorporation_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $deedIncorporationDate;

    /**
     * @JMS\SerializedName("deed_last_statutes_amendment_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $deedLastStatutesAmendmentDate;

    /**
     * @JMS\SerializedName("last_statutes_amendment_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\MoneyV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $authorizedShareCapital;

    /**
     * @JMS\SerializedName("issued_share_capital")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\MoneyV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $issuedShareCapital;

    /**
     * @JMS\SerializedName("paid_up_share_capital")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\MoneyV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $paidUpShareCapital;

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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
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
     * @JMS\SerializedName("remarks")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $remarks;

    /**
     * @JMS\SerializedName("establishment_address")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\AddressV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $establishmentAddress;

    /**
     * @JMS\SerializedName("correspondence_address")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\AddressV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $correspondenceAddress;

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
     * @JMS\SerializedName("sbi_codes")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\SbiCodeV3>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var SbiCodeV3[]
     */
    protected $sbiCodes;

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
     * @return DateV3
     */
    public function getRegistrationDate(): ?DateV3
    {
        return $this->registrationDate;
    }

    /**
     * @param DateV3 $registrationDate
     */
    public function setRegistrationDate(DateV3 $registrationDate): void
    {
        $this->registrationDate = $registrationDate;
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
    public function getDissolutionDate(): ?DateV3
    {
        return $this->dissolutionDate;
    }

    /**
     * @param DateV3 $dissolutionDate
     */
    public function setDissolutionDate(DateV3 $dissolutionDate): void
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
     * @return DateV3
     */
    public function getRemovalDate(): ?DateV3
    {
        return $this->removalDate;
    }

    /**
     * @param DateV3 $removalDate
     */
    public function setRemovalDate(DateV3 $removalDate): void
    {
        $this->removalDate = $removalDate;
    }

    /**
     * @return DateV3
     */
    public function getRegistrationEndDate(): ?DateV3
    {
        return $this->registrationEndDate;
    }

    /**
     * @param DateV3 $registrationEndDate
     */
    public function setRegistrationEndDate(DateV3 $registrationEndDate): void
    {
        $this->registrationEndDate = $registrationEndDate;
    }

    /**
     * @return DateV3
     */
    public function getLegalEntityEndDate(): ?DateV3
    {
        return $this->legalEntityEndDate;
    }

    /**
     * @param DateV3 $legalEntityEndDate
     */
    public function setLegalEntityEndDate(DateV3 $legalEntityEndDate): void
    {
        $this->legalEntityEndDate = $legalEntityEndDate;
    }

    /**
     * @return DateV3
     */
    public function getLiquidationClosureDate(): ?DateV3
    {
        return $this->liquidationClosureDate;
    }

    /**
     * @param DateV3 $liquidationClosureDate
     */
    public function setLiquidationClosureDate(DateV3 $liquidationClosureDate): void
    {
        $this->liquidationClosureDate = $liquidationClosureDate;
    }

    /**
     * @return DateV3
     */
    public function getLiquidationReopeningDate(): ?DateV3
    {
        return $this->liquidationReopeningDate;
    }

    /**
     * @param DateV3 $liquidationReopeningDate
     */
    public function setLiquidationReopeningDate(DateV3 $liquidationReopeningDate): void
    {
        $this->liquidationReopeningDate = $liquidationReopeningDate;
    }

    /**
     * @return DateV3
     */
    public function getDeedIncorporationDate(): ?DateV3
    {
        return $this->deedIncorporationDate;
    }

    /**
     * @param DateV3 $deedIncorporationDate
     */
    public function setDeedIncorporationDate(DateV3 $deedIncorporationDate): void
    {
        $this->deedIncorporationDate = $deedIncorporationDate;
    }

    /**
     * @return DateV3
     */
    public function getDeedLastStatutesAmendmentDate(): ?DateV3
    {
        return $this->deedLastStatutesAmendmentDate;
    }

    /**
     * @param DateV3 $deedLastStatutesAmendmentDate
     */
    public function setDeedLastStatutesAmendmentDate(DateV3 $deedLastStatutesAmendmentDate): void
    {
        $this->deedLastStatutesAmendmentDate = $deedLastStatutesAmendmentDate;
    }

    /**
     * @return DateV3
     */
    public function getLastStatutesAmendmentDate(): ?DateV3
    {
        return $this->lastStatutesAmendmentDate;
    }

    /**
     * @param DateV3 $lastStatutesAmendmentDate
     */
    public function setLastStatutesAmendmentDate(DateV3 $lastStatutesAmendmentDate): void
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
     * @return MoneyV3
     */
    public function getAuthorizedShareCapital(): ?MoneyV3
    {
        return $this->authorizedShareCapital;
    }

    /**
     * @param MoneyV3 $authorizedShareCapital
     */
    public function setAuthorizedShareCapital(MoneyV3 $authorizedShareCapital): void
    {
        $this->authorizedShareCapital = $authorizedShareCapital;
    }

    /**
     * @return MoneyV3
     */
    public function getIssuedShareCapital(): ?MoneyV3
    {
        return $this->issuedShareCapital;
    }

    /**
     * @param MoneyV3 $issuedShareCapital
     */
    public function setIssuedShareCapital(MoneyV3 $issuedShareCapital): void
    {
        $this->issuedShareCapital = $issuedShareCapital;
    }

    /**
     * @return MoneyV3
     */
    public function getPaidUpShareCapital(): ?MoneyV3
    {
        return $this->paidUpShareCapital;
    }

    /**
     * @param MoneyV3 $paidUpShareCapital
     */
    public function setPaidUpShareCapital(MoneyV3 $paidUpShareCapital): void
    {
        $this->paidUpShareCapital = $paidUpShareCapital;
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
     * @return DateV3
     */
    public function getDurationEndDate(): ?DateV3
    {
        return $this->durationEndDate;
    }

    /**
     * @param DateV3 $durationEndDate
     */
    public function setDurationEndDate(DateV3 $durationEndDate): void
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
    public function getRemarks(): ?array
    {
        return $this->remarks;
    }

    /**
     * @param array $remarks
     */
    public function setRemarks(array $remarks): void
    {
        $this->remarks = $remarks;
    }

    /**
     * @return AddressV3
     */
    public function getEstablishmentAddress(): ?AddressV3
    {
        return $this->establishmentAddress;
    }

    /**
     * @param AddressV3 $establishmentAddress
     */
    public function setEstablishmentAddress(AddressV3 $establishmentAddress): void
    {
        $this->establishmentAddress = $establishmentAddress;
    }

    /**
     * @return AddressV3
     */
    public function getCorrespondenceAddress(): ?AddressV3
    {
        return $this->correspondenceAddress;
    }

    /**
     * @param AddressV3 $correspondenceAddress
     */
    public function setCorrespondenceAddress(AddressV3 $correspondenceAddress): void
    {
        $this->correspondenceAddress = $correspondenceAddress;
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

    /**
     * @return SbiCodeV3[]
     */
    public function getSbiCodes(): ?array
    {
        return $this->sbiCodes;
    }

    /**
     * @param SbiCodeV3[] $sbiCodes
     */
    public function setSbiCodes(array $sbiCodes): void
    {
        $this->sbiCodes = $sbiCodes;
    }
}
