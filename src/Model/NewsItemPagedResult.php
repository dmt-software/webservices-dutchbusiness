<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use DMT\WebservicesNl\Client\Model\PagedResult;
use JMS\Serializer\Annotation as JMS;

/**
 * Class NewsItemPagedResult
 *
 * @JMS\AccessType("public_method")
 */
class NewsItemPagedResult extends PagedResult
{

    /**
     * @JMS\SerializedName("results")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\NewsItem>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var NewsItem[]
     */
    protected $results;
}
