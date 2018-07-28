<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ExtractHistory
 *
 * @JMS\AccessType("public_method")
 */
class ExtractHistory
{
                        
    /**
     * @JMS\SerializedName("forecast")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\ExtractChangeForecast")
     * @JMS\XmlElement(cdata=false)
     *
     * @var ExtractChangeForecast
     */
    protected $forecast;
                                    
    /**
     * @JMS\SerializedName("references")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\ExtractReference>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var ExtractReference[]
     */
    protected $references;
                                    
    /**
     * @return ExtractChangeForecast
     */
    public function getForecast(): ?ExtractChangeForecast
    {
        return $this->forecast;
    }

    /**
     * @param ExtractChangeForecast $forecast
     */
    public function setForecast(ExtractChangeForecast $forecast): void
    {
        $this->forecast = $forecast;
    }
                                    
    /**
     * @return ExtractReference[]
     */
    public function getReferences(): ?array
    {
        return $this->references;
    }

    /**
     * @param ExtractReference[] $references
     */
    public function setReferences(array $references): void
    {
        $this->references = $references;
    }
}
