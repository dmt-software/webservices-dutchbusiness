<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ExtractChangeForecast
 *
 * @JMS\AccessType("public_method")
 */
class ExtractChangeForecast
{
                        
    /**
     * @JMS\SerializedName("change_set")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\ExtractChangeSet")
     * @JMS\XmlElement(cdata=false)
     *
     * @var ExtractChangeSet
     */
    protected $changeSet;
                                    
    /**
     * @return ExtractChangeSet
     */
    public function getChangeSet(): ?ExtractChangeSet
    {
        return $this->changeSet;
    }

    /**
     * @param ExtractChangeSet $changeSet
     */
    public function setChangeSet(ExtractChangeSet $changeSet): void
    {
        $this->changeSet = $changeSet;
    }
}
