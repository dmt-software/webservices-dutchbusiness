<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use DMT\WebservicesNl\Client\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class SearchNewsByDossierResponse
 *
 * @JMS\AccessType("public_method")
 */
class SearchNewsByDossierResponse implements ResponseInterface
{
                        
    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\NewsItemPagedResult")
     * @JMS\XmlElement(cdata=false)
     *
     * @var NewsItemPagedResult
     */
    protected $out;
                                    
    /**
     * @return NewsItemPagedResult
     */
    public function getOut(): ?NewsItemPagedResult
    {
        return $this->out;
    }

    /**
     * @param NewsItemPagedResult $out
     */
    public function setOut(NewsItemPagedResult $out): void
    {
        $this->out = $out;
    }
}
