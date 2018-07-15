<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SBICodeInfo
 *
 * @JMS\AccessType("public_method")
 */
class SBICodeInfo
{

    /**
     * @JMS\SerializedName("section")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\SBISection")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $section;

    /**
     * @JMS\SerializedName("sbi_codes")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\SBICode>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var SBICode[]
     */
    protected $sbiCodes;

    /**
     * @return SBISection
     */
    public function getSection(): ?SBISection
    {
        return $this->section;
    }

    /**
     * @param SBISection $section
     */
    public function setSection(SBISection $section): void
    {
        $this->section = $section;
    }

    /**
     * @return SBICode[]
     */
    public function getSbiCodes(): ?array
    {
        return $this->sbiCodes;
    }

    /**
     * @param SBICode[] $sbiCodes
     */
    public function setSbiCodes(array $sbiCodes): void
    {
        $this->sbiCodes = $sbiCodes;
    }
}
