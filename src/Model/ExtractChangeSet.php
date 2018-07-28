<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ExtractChangeSet
 *
 * @JMS\AccessType("public_method")
 */
class ExtractChangeSet
{
                        
    /**
     * @JMS\SerializedName("period")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Period")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Period
     */
    protected $period;
                                    
    /**
     * @JMS\SerializedName("changes")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $changes;
                                    
    /**
     * @return Period
     */
    public function getPeriod(): ?Period
    {
        return $this->period;
    }

    /**
     * @param Period $period
     */
    public function setPeriod(Period $period): void
    {
        $this->period = $period;
    }
                                    
    /**
     * @return array
     */
    public function getChanges(): ?array
    {
        return $this->changes;
    }

    /**
     * @param array $changes
     */
    public function setChanges(array $changes): void
    {
        $this->changes = $changes;
    }
}
