<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SearchDossierNumberResponse
 *
 * @JMS\AccessType("public_method")
 */
class SearchDossierNumberResponse
{

    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\ReferencePagedResult")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $out;

    /**
     * @return ReferencePagedResult
     */
    public function getOut(): ?ReferencePagedResult
    {
        return $this->out;
    }

    /**
     * @param ReferencePagedResult $out
     */
    public function setOut(ReferencePagedResult $out): void
    {
        $this->out = $out;
    }
}
