<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UBOStartInvestigationResponse
 *
 * @JMS\AccessType("public_method")
 */
class UBOStartInvestigationResponse
{

    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\UBOInvestigationToken")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $out;

    /**
     * @return UBOInvestigationToken
     */
    public function getOut(): ?UBOInvestigationToken
    {
        return $this->out;
    }

    /**
     * @param UBOInvestigationToken $out
     */
    public function setOut(UBOInvestigationToken $out): void
    {
        $this->out = $out;
    }
}
