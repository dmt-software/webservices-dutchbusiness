<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SbiCodeV2
 *
 * @JMS\AccessType("public_method")
 */
class SbiCodeV2
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
     * @JMS\SerializedName("description")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $description;
                                    
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
}
