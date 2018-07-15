<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use DMT\WebservicesNl\Client\Model\PagedResult;
use JMS\Serializer\Annotation as JMS;

/**
 * Class UpdateSubscriptionPagedResult
 *
 * @JMS\AccessType("public_method")
 */
class UpdateSubscriptionPagedResult extends PagedResult
{

    /**
     * @JMS\SerializedName("results")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\UpdateSubscription>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var UpdateSubscription[]
     */
    protected $results;
}
