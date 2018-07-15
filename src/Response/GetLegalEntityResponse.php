<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetLegalEntityResponse
 *
 * @JMS\AccessType("public_method")
 */
class GetLegalEntityResponse
{

    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\LegalEntityData")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $out;

    /**
     * @return LegalEntityData
     */
    public function getOut(): ?LegalEntityData
    {
        return $this->out;
    }

    /**
     * @param LegalEntityData $out
     */
    public function setOut(LegalEntityData $out): void
    {
        $this->out = $out;
    }
}
