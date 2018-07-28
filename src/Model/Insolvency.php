<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Insolvency
 *
 * @JMS\AccessType("public_method")
 */
class Insolvency
{
                        
    /**
     * @JMS\SerializedName("insolvency_id")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $insolvencyId;
                                    
    /**
     * @JMS\SerializedName("events")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\InsolvencyPublication>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var InsolvencyPublication[]
     */
    protected $events;
                                    
    /**
     * @return string
     */
    public function getInsolvencyId(): ?string
    {
        return $this->insolvencyId;
    }

    /**
     * @param string $insolvencyId
     */
    public function setInsolvencyId(string $insolvencyId): void
    {
        $this->insolvencyId = $insolvencyId;
    }
                                    
    /**
     * @return InsolvencyPublication[]
     */
    public function getEvents(): ?array
    {
        return $this->events;
    }

    /**
     * @param InsolvencyPublication[] $events
     */
    public function setEvents(array $events): void
    {
        $this->events = $events;
    }
}
