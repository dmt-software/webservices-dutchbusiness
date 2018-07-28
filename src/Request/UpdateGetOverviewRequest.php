<?php

namespace DMT\WebservicesNl\DutchBusiness\Request;

use DMT\WebservicesNl\Client\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class UpdateGetOverviewRequest
 *
 * Get a paged result of all the dossier the logged on user is subscribed to.
 *
 * @JMS\AccessType("public_method")
 */
class UpdateGetOverviewRequest implements RequestInterface
{
                        
    /**
     * @JMS\SerializedName("page")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $page;
                                    
    /**
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }
}
