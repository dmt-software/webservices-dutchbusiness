<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SBICollection
 *
 * @JMS\AccessType("public_method")
 */
class SBICollection
{
                        
    /**
     * @JMS\SerializedName("original")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\SBICode>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var SBICode[]
     */
    protected $original;
                                    
    /**
     * @JMS\SerializedName("company_info")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\SBICode>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var SBICode[]
     */
    protected $companyInfo;
                                    
    /**
     * @return SBICode[]
     */
    public function getOriginal(): ?array
    {
        return $this->original;
    }

    /**
     * @param SBICode[] $original
     */
    public function setOriginal(array $original): void
    {
        $this->original = $original;
    }
                                    
    /**
     * @return SBICode[]
     */
    public function getCompanyInfo(): ?array
    {
        return $this->companyInfo;
    }

    /**
     * @param SBICode[] $companyInfo
     */
    public function setCompanyInfo(array $companyInfo): void
    {
        $this->companyInfo = $companyInfo;
    }
}
