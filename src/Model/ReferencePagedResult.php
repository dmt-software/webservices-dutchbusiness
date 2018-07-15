<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use DMT\WebservicesNl\Client\Model\PagedResult;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ReferencePagedResult
 *
 * @JMS\AccessType("public_method")
 */
class ReferencePagedResult extends PagedResult
{

    /**
     * @JMS\SerializedName("results")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\Reference>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var Reference[]
     */
    protected $results;
}
