<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use DMT\WebservicesNl\Client\Model\PagedResult;
use JMS\Serializer\Annotation as JMS;

/**
 * Class EstablishmentReferencePagedResult
 *
 * @JMS\AccessType("public_method")
 */
class EstablishmentReferencePagedResult extends PagedResult
{

    /**
     * @JMS\SerializedName("results")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\EstablishmentReference>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var EstablishmentReference[]
     */
    protected $results;
}
