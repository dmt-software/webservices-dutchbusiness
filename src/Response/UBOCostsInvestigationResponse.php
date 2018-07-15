<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UBOCostsInvestigationResponse
 *
 * @JMS\AccessType("public_method")
 */
class UBOCostsInvestigationResponse
{

    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\dutchBusinessUBOCostsInvestigationResult")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $out;

    /**
     * @return dutchBusinessUBOCostsInvestigationResult
     */
    public function getOut(): ?dutchBusinessUBOCostsInvestigationResult
    {
        return $this->out;
    }

    /**
     * @param dutchBusinessUBOCostsInvestigationResult $out
     */
    public function setOut(dutchBusinessUBOCostsInvestigationResult $out): void
    {
        $this->out = $out;
    }
}
