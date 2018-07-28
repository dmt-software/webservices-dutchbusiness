<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SBISection
 *
 * @JMS\AccessType("public_method")
 */
class SBISection
{
                        
    /**
     * @JMS\SerializedName("section_code")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $sectionCode;
                                    
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
    public function getSectionCode(): ?string
    {
        return $this->sectionCode;
    }

    /**
     * @param string $sectionCode
     */
    public function setSectionCode(string $sectionCode): void
    {
        $this->sectionCode = $sectionCode;
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
