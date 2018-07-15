<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UBOCheckInvestigationResponse
 *
 * @JMS\AccessType("public_method")
 */
class UBOCheckInvestigationResponse
{

    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\UBOInvestigationStatus")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $out;

    /**
     * @return UBOInvestigationStatus
     */
    public function getOut(): ?UBOInvestigationStatus
    {
        return $this->out;
    }

    /**
     * @param UBOInvestigationStatus $out
     */
    public function setOut(UBOInvestigationStatus $out): void
    {
        $this->out = $out;
    }
}
