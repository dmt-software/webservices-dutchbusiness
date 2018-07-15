<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class LegalEntityV2
 *
 * @JMS\AccessType("public_method")
 */
class LegalEntityV2
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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $registrationDate;

    /**
     * @JMS\SerializedName("founding_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $foundingDate;

    /**
     * @JMS\SerializedName("discontinuation_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $discontinuationDate;

    /**
     * @JMS\SerializedName("dissolution_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $removalDate;

    /**
     * @JMS\SerializedName("registration_end_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $registrationEndDate;

    /**
     * @JMS\SerializedName("legal_entity_end_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $legalEntityEndDate;

    /**
     * @JMS\SerializedName("liquidation_closure_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $liquidationClosureDate;

    /**
     * @JMS\SerializedName("liquidation_reopening_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $liquidationReopeningDate;

    /**
     * @JMS\SerializedName("deed_incorporation_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $deedIncorporationDate;

    /**
     * @JMS\SerializedName("deed_last_statutes_amendment_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $deedLastStatutesAmendmentDate;

    /**
     * @JMS\SerializedName("last_statutes_amendment_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\MoneyV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $authorizedShareCapital;

    /**
     * @JMS\SerializedName("issued_share_capital")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\MoneyV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $issuedShareCapital;

    /**
     * @JMS\SerializedName("paid_up_share_capital")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\MoneyV2")
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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\AddressV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $establishmentAddress;

    /**
     * @JMS\SerializedName("correspondence_address")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\AddressV2")
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
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\SbiCodeV2>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var SbiCodeV2[]
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
     * @return DateV2
     */
    public function getRegistrationDate(): ?DateV2
    {
        return $this->registrationDate;
    }

    /**
     * @param DateV2 $registrationDate
     */
    public function setRegistrationDate(DateV2 $registrationDate): void
    {
        $this->registrationDate = $registrationDate;
    }

    /**
     * @return DateV2
     */
    public function getFoundingDate(): ?DateV2
    {
        return $this->foundingDate;
    }

    /**
     * @param DateV2 $foundingDate
     */
    public function setFoundingDate(DateV2 $foundingDate): void
    {
        $this->foundingDate = $foundingDate;
    }

    /**
     * @return DateV2
     */
    public function getDiscontinuationDate(): ?DateV2
    {
        return $this->discontinuationDate;
    }

    /**
     * @param DateV2 $discontinuationDate
     */
    public function setDiscontinuationDate(DateV2 $discontinuationDate): void
    {
        $this->discontinuationDate = $discontinuationDate;
    }

    /**
     * @return DateV2
     */
    public function getDissolutionDate(): ?DateV2
    {
        return $this->dissolutionDate;
    }

    /**
     * @param DateV2 $dissolutionDate
     */
    public function setDissolutionDate(DateV2 $dissolutionDate): void
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
     * @return DateV2
     */
    public function getRemovalDate(): ?DateV2
    {
        return $this->removalDate;
    }

    /**
     * @param DateV2 $removalDate
     */
    public function setRemovalDate(DateV2 $removalDate): void
    {
        $this->removalDate = $removalDate;
    }

    /**
     * @return DateV2
     */
    public function getRegistrationEndDate(): ?DateV2
    {
        return $this->registrationEndDate;
    }

    /**
     * @param DateV2 $registrationEndDate
     */
    public function setRegistrationEndDate(DateV2 $registrationEndDate): void
    {
        $this->registrationEndDate = $registrationEndDate;
    }

    /**
     * @return DateV2
     */
    public function getLegalEntityEndDate(): ?DateV2
    {
        return $this->legalEntityEndDate;
    }

    /**
     * @param DateV2 $legalEntityEndDate
     */
    public function setLegalEntityEndDate(DateV2 $legalEntityEndDate): void
    {
        $this->legalEntityEndDate = $legalEntityEndDate;
    }

    /**
     * @return DateV2
     */
    public function getLiquidationClosureDate(): ?DateV2
    {
        return $this->liquidationClosureDate;
    }

    /**
     * @param DateV2 $liquidationClosureDate
     */
    public function setLiquidationClosureDate(DateV2 $liquidationClosureDate): void
    {
        $this->liquidationClosureDate = $liquidationClosureDate;
    }

    /**
     * @return DateV2
     */
    public function getLiquidationReopeningDate(): ?DateV2
    {
        return $this->liquidationReopeningDate;
    }

    /**
     * @param DateV2 $liquidationReopeningDate
     */
    public function setLiquidationReopeningDate(DateV2 $liquidationReopeningDate): void
    {
        $this->liquidationReopeningDate = $liquidationReopeningDate;
    }

    /**
     * @return DateV2
     */
    public function getDeedIncorporationDate(): ?DateV2
    {
        return $this->deedIncorporationDate;
    }

    /**
     * @param DateV2 $deedIncorporationDate
     */
    public function setDeedIncorporationDate(DateV2 $deedIncorporationDate): void
    {
        $this->deedIncorporationDate = $deedIncorporationDate;
    }

    /**
     * @return DateV2
     */
    public function getDeedLastStatutesAmendmentDate(): ?DateV2
    {
        return $this->deedLastStatutesAmendmentDate;
    }

    /**
     * @param DateV2 $deedLastStatutesAmendmentDate
     */
    public function setDeedLastStatutesAmendmentDate(DateV2 $deedLastStatutesAmendmentDate): void
    {
        $this->deedLastStatutesAmendmentDate = $deedLastStatutesAmendmentDate;
    }

    /**
     * @return DateV2
     */
    public function getLastStatutesAmendmentDate(): ?DateV2
    {
        return $this->lastStatutesAmendmentDate;
    }

    /**
     * @param DateV2 $lastStatutesAmendmentDate
     */
    public function setLastStatutesAmendmentDate(DateV2 $lastStatutesAmendmentDate): void
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
     * @return MoneyV2
     */
    public function getAuthorizedShareCapital(): ?MoneyV2
    {
        return $this->authorizedShareCapital;
    }

    /**
     * @param MoneyV2 $authorizedShareCapital
     */
    public function setAuthorizedShareCapital(MoneyV2 $authorizedShareCapital): void
    {
        $this->authorizedShareCapital = $authorizedShareCapital;
    }

    /**
     * @return MoneyV2
     */
    public function getIssuedShareCapital(): ?MoneyV2
    {
        return $this->issuedShareCapital;
    }

    /**
     * @param MoneyV2 $issuedShareCapital
     */
    public function setIssuedShareCapital(MoneyV2 $issuedShareCapital): void
    {
        $this->issuedShareCapital = $issuedShareCapital;
    }

    /**
     * @return MoneyV2
     */
    public function getPaidUpShareCapital(): ?MoneyV2
    {
        return $this->paidUpShareCapital;
    }

    /**
     * @param MoneyV2 $paidUpShareCapital
     */
    public function setPaidUpShareCapital(MoneyV2 $paidUpShareCapital): void
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
     * @return DateV2
     */
    public function getDurationEndDate(): ?DateV2
    {
        return $this->durationEndDate;
    }

    /**
     * @param DateV2 $durationEndDate
     */
    public function setDurationEndDate(DateV2 $durationEndDate): void
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
     * @return AddressV2
     */
    public function getEstablishmentAddress(): ?AddressV2
    {
        return $this->establishmentAddress;
    }

    /**
     * @param AddressV2 $establishmentAddress
     */
    public function setEstablishmentAddress(AddressV2 $establishmentAddress): void
    {
        $this->establishmentAddress = $establishmentAddress;
    }

    /**
     * @return AddressV2
     */
    public function getCorrespondenceAddress(): ?AddressV2
    {
        return $this->correspondenceAddress;
    }

    /**
     * @param AddressV2 $correspondenceAddress
     */
    public function setCorrespondenceAddress(AddressV2 $correspondenceAddress): void
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
     * @return SbiCodeV2[]
     */
    public function getSbiCodes(): ?array
    {
        return $this->sbiCodes;
    }

    /**
     * @param SbiCodeV2[] $sbiCodes
     */
    public function setSbiCodes(array $sbiCodes): void
    {
        $this->sbiCodes = $sbiCodes;
    }
}
