<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use DMT\WebservicesNl\Client\Model\PagedResult;
use JMS\Serializer\Annotation as JMS;

/**
 * Class UpdateReferencePagedResult
 *
 * @JMS\AccessType("public_method")
 */
class UpdateReferencePagedResult extends PagedResult
{

    /**
     * @JMS\SerializedName("results")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\UpdateReference>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var UpdateReference[]
     */
    protected $results;
}
