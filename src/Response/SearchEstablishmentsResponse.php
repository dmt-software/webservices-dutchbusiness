<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SearchEstablishmentsResponse
 *
 * @JMS\AccessType("public_method")
 */
class SearchEstablishmentsResponse
{

    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\EstablishmentReferencePagedResult")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $out;

    /**
     * @return EstablishmentReferencePagedResult
     */
    public function getOut(): ?EstablishmentReferencePagedResult
    {
        return $this->out;
    }

    /**
     * @param EstablishmentReferencePagedResult $out
     */
    public function setOut(EstablishmentReferencePagedResult $out): void
    {
        $this->out = $out;
    }
}
