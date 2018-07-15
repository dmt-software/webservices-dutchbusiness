<?php

namespace DMT\WebservicesNl\DutchBusiness\Request;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetSBIDescriptionRequest
 *
 * Look up a SBI (&#039;Standaard Bedrijfs Indeling 2008&#039;) code.
 *
 * @JMS\AccessType("public_method")
 */
class GetSBIDescriptionRequest
{

    /**
     * @JMS\SerializedName("sbi_code")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $sbiCode;

    /**
     * @JMS\SerializedName("language")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $language;

    /**
     * @return string
     */
    public function getSbiCode(): ?string
    {
        return $this->sbiCode;
    }

    /**
     * @param string $sbiCode
     */
    public function setSbiCode(string $sbiCode): void
    {
        $this->sbiCode = $sbiCode;
    }

    /**
     * @return string
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }
}
