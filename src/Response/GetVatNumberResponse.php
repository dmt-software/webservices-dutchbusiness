<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetVatNumberResponse
 *
 * @JMS\AccessType("public_method")
 */
class GetVatNumberResponse
{

    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DutchBusinessVatNumber")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $out;

    /**
     * @return DutchBusinessVatNumber
     */
    public function getOut(): ?DutchBusinessVatNumber
    {
        return $this->out;
    }

    /**
     * @param DutchBusinessVatNumber $out
     */
    public function setOut(DutchBusinessVatNumber $out): void
    {
        $this->out = $out;
    }
}
