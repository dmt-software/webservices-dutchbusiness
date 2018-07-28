<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use DMT\WebservicesNl\Client\Model\PagedResult;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ReferenceV2PagedResult
 *
 * @JMS\AccessType("public_method")
 */
class ReferenceV2PagedResult extends PagedResult
{
                                                
    /**
     * @JMS\SerializedName("results")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\ReferenceV2>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var ReferenceV2[]
     */
    protected $results;
}
