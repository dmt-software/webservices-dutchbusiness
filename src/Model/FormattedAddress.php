<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class FormattedAddress
 *
 * @JMS\AccessType("public_method")
 */
class FormattedAddress
{
                        
    /**
     * @JMS\SerializedName("original")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\AddressV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var AddressV3
     */
    protected $original;
                                    
    /**
     * @JMS\SerializedName("official")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\AddressV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var AddressV3
     */
    protected $official;
                                    
    /**
     * @JMS\SerializedName("formatted")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\AddressV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var AddressV3
     */
    protected $formatted;
                                    
    /**
     * @return AddressV3
     */
    public function getOriginal(): ?AddressV3
    {
        return $this->original;
    }

    /**
     * @param AddressV3 $original
     */
    public function setOriginal(AddressV3 $original): void
    {
        $this->original = $original;
    }
                                    
    /**
     * @return AddressV3
     */
    public function getOfficial(): ?AddressV3
    {
        return $this->official;
    }

    /**
     * @param AddressV3 $official
     */
    public function setOfficial(AddressV3 $official): void
    {
        $this->official = $official;
    }
                                    
    /**
     * @return AddressV3
     */
    public function getFormatted(): ?AddressV3
    {
        return $this->formatted;
    }

    /**
     * @param AddressV3 $formatted
     */
    public function setFormatted(AddressV3 $formatted): void
    {
        $this->formatted = $formatted;
    }
}
