<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class EnterpriseV2
 *
 * @JMS\AccessType("public_method")
 */
class EnterpriseV2
{

    /**
     * @JMS\SerializedName("name")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $name;

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
     * @JMS\SerializedName("activity")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $activity;

    /**
     * @JMS\SerializedName("description")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $description;

    /**
     * @JMS\SerializedName("incorporation_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $incorporationDate;

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
     * @JMS\SerializedName("date_since")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $dateSince;

    /**
     * @JMS\SerializedName("personnel")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\PersonnelInfoV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $personnel;

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
     * @JMS\SerializedName("sbi_codes")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\SbiCodeV2>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var SbiCodeV2[]
     */
    protected $sbiCodes;

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
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return DateV2
     */
    public function getIncorporationDate(): ?DateV2
    {
        return $this->incorporationDate;
    }

    /**
     * @param DateV2 $incorporationDate
     */
    public function setIncorporationDate(DateV2 $incorporationDate): void
    {
        $this->incorporationDate = $incorporationDate;
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
    public function getDateSince(): ?DateV2
    {
        return $this->dateSince;
    }

    /**
     * @param DateV2 $dateSince
     */
    public function setDateSince(DateV2 $dateSince): void
    {
        $this->dateSince = $dateSince;
    }

    /**
     * @return PersonnelInfoV2
     */
    public function getPersonnel(): ?PersonnelInfoV2
    {
        return $this->personnel;
    }

    /**
     * @param PersonnelInfoV2 $personnel
     */
    public function setPersonnel(PersonnelInfoV2 $personnel): void
    {
        $this->personnel = $personnel;
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
}
